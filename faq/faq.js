/* ── Tab switching ── */
    function switchTab(tab) {
      // Deactivate all
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
 
      // Activate chosen
      document.getElementById('panel-' + tab).classList.add('active');
      const btns = document.querySelectorAll('.tab-btn');
      const map = { privacy: 0, terms: 1, faq: 2 };
      btns[map[tab]].classList.add('active');
    }
 
    /* ── FAQ accordion ── */
    function toggleFaq(questionEl) {
      const item = questionEl.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      item.classList.toggle('open', !isOpen);
    }