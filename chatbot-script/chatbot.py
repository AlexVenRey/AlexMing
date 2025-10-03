from flask import Flask, request, jsonify
from flask_cors import CORS
import os
import json
from typing import Dict, List
import requests
import re

app = Flask(__name__)
CORS(app)  # allow requests from any origin

# Ollama configuration (local LLM)
OLLAMA_ENABLED = os.getenv("OLLAMA_ENABLED", "false").lower() in {"1", "true", "yes", "on"}
OLLAMA_MODEL = os.getenv("OLLAMA_MODEL", "deepseek-r1:7b")  # the model must exist in Ollama
OLLAMA_HOST = os.getenv("OLLAMA_HOST", "http://localhost:11434")

def detect_lang(text: str) -> str:
    """Simple heuristic (kept for compatibility). Default to English ('en')."""
    t = (text or "").lower()
    if any(w in t for w in ["hello", "thanks", "please", "good morning", "how are you", "hi"]):
        return "en"
    return "en"

def t(key: str, lang: str) -> str:
    texts = {
        "greet": {
            "en": "Hi! How are you?",
        },
        "teach_hint": {
            "en": "I didn't quite get that. Could you repeat?",
        },
        "model_unavailable": {
            "en": "I can't access the local model right now.",
        },
        "system_prompt": {
            "en": "You are a concise and helpful assistant. Reply in English in 1-3 sentences.",
        },
    }
    return texts.get(key, {}).get("en", "")

# In-memory per-session history (non-persistent)
SESSIONS: Dict[str, List[Dict[str, str]]] = {}

def normalize(text: str) -> str:
    return (text or "").strip().lower()

def ask_ollama(messages: List[Dict[str, str]]) -> str:
    """Query a local Ollama server using the /api/chat API.
    Expects a list of messages [{'role': 'user'|'system'|'assistant', 'content': str}].
    Returns the assistant text content, or raises an exception on unexpected response.
    """
    url = f"{OLLAMA_HOST.rstrip('/')}/api/chat"
    payload = {
        "model": OLLAMA_MODEL,
        "messages": messages,
        "stream": False,
        # optional parameters: temperature, num_ctx, etc.
        "options": {"temperature": 0.3}
    }
    headers = {"Content-Type": "application/json"}
    resp = requests.post(url, headers=headers, json=payload, timeout=60)
    resp.raise_for_status()
    data = resp.json()
    # Typical response when stream=False: { 'message': { 'role': 'assistant', 'content': '...' }, ... }
    if isinstance(data, dict) and isinstance(data.get("message"), dict):
        content = (data["message"].get("content") or "").strip()
        if content:
            return content
    # Fallback in case some variants return a 'choices' list
    choices = data.get("choices") if isinstance(data, dict) else None
    if isinstance(choices, list) and choices:
        msg = choices[0].get("message", {})
        content = (msg.get("content") or "").strip()
        if content:
            return content
    raise RuntimeError("Unknown answer from Ollama")

@app.route("/chat", methods=["POST"])
def chat():
    payload = request.get_json(silent=True) or {}
    user_message = payload.get("message", "")
    session_id = payload.get("sessionId", "default")

    # Initialize session history if it doesn't exist
    if session_id not in SESSIONS:
        SESSIONS[session_id] = []

    # Reply logic
    norm = normalize(user_message)
    user_lang = detect_lang(user_message)
    
    if "hello" in norm or "hi" in norm:
        bot_response = t("greet", user_lang)
    else:
        # Fallback: if enabled, try to answer with a local Ollama model
        if OLLAMA_ENABLED:
            try:
                msgs = [
                    {"role": "system", "content": t("system_prompt", user_lang)},
                    {"role": "user", "content": user_message}
                ]
                bot_response = ask_ollama(msgs)
            except Exception:
                bot_response = t("model_unavailable", user_lang)
        else:
            # Basic default response when not using a model
            bot_response = t("teach_hint", user_lang)

    # Save the session
    SESSIONS[session_id].append({"role": "user", "content": user_message})
    SESSIONS[session_id].append({"role": "assistant", "content": bot_response})

    return jsonify({"reply": bot_response})

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000)