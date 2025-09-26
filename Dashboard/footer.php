<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  window.CHATBOT_CONFIG = {
    apiBaseUrl: 'http://127.0.0.1:5000',
    sessionId: localStorage.getItem('chat_session_id') || (function(){
      const id = 'sess_' + Math.random().toString(36).slice(2);
      localStorage.setItem('chat_session_id', id);
      return id;
    })()
  };
</script>
<script src="../JS/chatbot-widget.js"></script>

