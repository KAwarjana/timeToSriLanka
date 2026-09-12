// ── Contact Form Handler ─────────────────────────
function cfHandleSend() {
  const firstName = document.getElementById('cfFirstName').value.trim();
  const lastName  = document.getElementById('cfLastName').value.trim();
  const email     = document.getElementById('cfEmail').value.trim();
  const mobile    = document.getElementById('cfMobile').value.trim();
  const subject   = document.getElementById('cfSubject').value.trim();
  const message   = document.getElementById('cfMessage').value.trim();

  const mobilePattern = /^[0-9+\-\s()]{7,20}$/;
  const emailPattern  = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // ── Client-side validation (mirrors the server-side rules in contact-submit.php) ──
  if (firstName.length < 2 || firstName.length > 100) {
    cfShowToast('⚠ First name must be between 2 and 100 characters.', '#e53e3e');
    return;
  }
  if (!emailPattern.test(email) || email.length > 150) {
    cfShowToast('⚠ Please enter a valid email address.', '#e53e3e');
    return;
  }
  if (message.length < 10 || message.length > 2000) {
    cfShowToast('⚠ Message must be between 10 and 2000 characters.', '#e53e3e');
    return;
  }
  if (lastName.length > 100) {
    cfShowToast('⚠ Last name must be under 100 characters.', '#e53e3e');
    return;
  }
  if (mobile && !mobilePattern.test(mobile)) {
    cfShowToast('⚠ Mobile number must be 7 to 20 digits.', '#e53e3e');
    return;
  }
  if (subject.length > 150) {
    cfShowToast('⚠ Subject must be under 150 characters.', '#e53e3e');
    return;
  }

  const sendBtn = document.querySelector('.cf-send-btn');
  const sendBtnOriginalHTML = sendBtn ? sendBtn.innerHTML : '';
  if (sendBtn) {
    sendBtn.disabled = true;
    sendBtn.innerHTML = '<span class="cf-spinner"></span>Sending...';
  }

  const formData = new FormData();
  formData.append('firstName', firstName);
  formData.append('lastName', lastName);
  formData.append('email', email);
  formData.append('mobile', mobile);
  formData.append('subject', subject);
  formData.append('message', message);

  fetch('contact-submit.php', { method: 'POST', body: formData })
    .then(res => res.text().then(text => ({ ok: res.ok, status: res.status, text })))
    .then(({ ok, status, text }) => {
      let data;
      try {
        data = JSON.parse(text);
      } catch (parseErr) {
        // The server didn't return valid JSON — log the raw response so it's easy to
        // see the real cause (e.g. a PHP path issue) in the browser console.
        console.error('contact-submit.php did not return valid JSON. HTTP status:', status, 'Response:', text);
        cfShowToast('⚠ Server returned an unexpected response (see browser console for details).', '#e53e3e');
        return;
      }
      if (data.success) {
        // Clear fields
        ['cfFirstName','cfLastName','cfEmail','cfMobile','cfSubject','cfMessage']
          .forEach(id => { document.getElementById(id).value = ''; });
        cfShowToast('✓ ' + data.message, '#7c3aed');
      } else {
        cfShowToast('⚠ ' + data.message, '#e53e3e');
      }
    })
    .catch(err => {
      console.error('contact-submit.php request failed:', err);
      cfShowToast('⚠ Could not reach the server. Check that contact-submit.php is reachable.', '#e53e3e');
    })
    .finally(() => {
      if (sendBtn) {
        sendBtn.disabled = false;
        sendBtn.innerHTML = sendBtnOriginalHTML;
      }
    });
}

function cfShowToast(msg, color) {
  const toast = document.getElementById('cfToast');
  toast.textContent = msg;
  toast.style.borderLeftColor = color;
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 3500);
}