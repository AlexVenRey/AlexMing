(function(){
  const cfg = (window.CHATBOT_CONFIG || {});
  const apiBaseUrl = (cfg.apiBaseUrl || 'http://127.0.0.1:5000');
  const sessionId = (cfg.sessionId || 'default');

  function ensureUI(){
    if (document.getElementById('chatbot-button')) return;
    const btn = document.createElement('button');
    btn.id = 'chatbot-button';
    btn.className = 'chatbot-button';
    btn.innerHTML = '<i class="bi bi-chat-dots"></i>';
    document.body.appendChild(btn);

    const panel = document.createElement('div');
    panel.id = 'chatbot-panel';
    panel.className = 'chatbot-panel';
    panel.innerHTML = `
      <div class="chatbot-content">
        <div class="chatbot-header">
          <div class="chatbot-title">Asistente</div>
          <button class="chatbot-close" aria-label="Cerrar">&times;</button>
        </div>
        <div class="chatbot-messages" id="chatbot-messages"></div>
        <div class="chatbot-input">
          <input id="chatbot-input" type="text" placeholder="Escribe un mensaje..." />
          <button id="chatbot-send">Enviar</button>
        </div>
      </div>`;
    document.body.appendChild(panel);

    const toggle = () => {
      panel.style.display = (panel.style.display === 'flex') ? 'none' : 'flex';
    };
    btn.addEventListener('click', toggle);
    panel.querySelector('.chatbot-close').addEventListener('click', toggle);

    const input = document.getElementById('chatbot-input');
    const sendBtn = document.getElementById('chatbot-send');
    const messagesEl = document.getElementById('chatbot-messages');

    function appendMessage(role, text){
      const el = document.createElement('div');
      el.className = 'chat-msg ' + (role === 'user' ? 'user' : 'bot');
      el.textContent = text;
      messagesEl.appendChild(el);
      messagesEl.scrollTop = messagesEl.scrollHeight;
    }

    async function sendMessage(){
      const text = (input.value || '').trim();
      if (!text) return;
      appendMessage('user', text);
      input.value = '';
      try {
        const res = await fetch(apiBaseUrl + '/chat', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ message: text, sessionId: sessionId })
        });
        const data = await res.json();
        appendMessage('assistant', (data.reply || ''));
      } catch (e) {
        appendMessage('assistant', 'No se pudo conectar con el chatbot.');
      }
    }

    sendBtn.addEventListener('click', sendMessage);
    input.addEventListener('keydown', function(ev){
      if (ev.key === 'Enter') sendMessage();
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', ensureUI);
  } else {
    ensureUI();
  }
})();


