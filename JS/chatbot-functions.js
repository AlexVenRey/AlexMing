(function(){
  const cfg = (window.CHATBOT_CONFIG || {});
  const apiBaseUrl = (cfg.apiBaseUrl || 'http://127.0.0.1:5000');
  const sessionId = (cfg.sessionId || 'default');

  function wireUp(){
    const panel = document.getElementById('chatbot-panel');
    const btn = document.getElementById('chatbot-button');
    if (!panel || !btn) return;

    const toggle = () => {
      var current = window.getComputedStyle(panel).display;
      panel.style.display = (current === 'flex') ? 'none' : 'flex';
    };
    btn.addEventListener('click', toggle);
    const closeBtn = panel.querySelector('.chatbot-close');
    if (closeBtn) closeBtn.addEventListener('click', toggle);

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

    if (sendBtn) sendBtn.addEventListener('click', sendMessage);
    if (input) {
      input.addEventListener('keydown', function(ev){
        if (ev.key === 'Enter') sendMessage();
      });
    }
  }

  function ensureUI(){
    if (document.getElementById('chatbot-button')) { wireUp(); return; }

    var candidatePaths = [
      'Includes/chatbot-widget.html',
      '../Includes/chatbot-widget.html',
      '/Includes/chatbot-widget.html'
    ];

    function fetchFirst(paths){
      if (!paths.length) return Promise.reject(new Error('not found'));
      var path = paths[0];
      return fetch(path, { cache: 'no-store' }).then(function(res){
        if (!res.ok) throw new Error('bad status');
        return res.text();
      }).catch(function(){
        return fetchFirst(paths.slice(1));
      });
    }

    fetchFirst(candidatePaths)
      .then(function(html){
        const tpl = document.createElement('template');
        tpl.innerHTML = html.trim();
        document.body.appendChild(tpl.content.cloneNode(true));
        wireUp();
      })
      .catch(function(){
        // Fallback simple botón para no romper la página
        const btn = document.createElement('button');
        btn.id = 'chatbot-button';
        btn.className = 'chatbot-button';
        btn.textContent = 'Chatbot';
        document.body.appendChild(btn);
        btn.addEventListener('click', function(){ alert('Error -> widget'); });
      });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', ensureUI);
  } else {
    ensureUI();
  }
})();


