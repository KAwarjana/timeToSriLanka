// ── Contact Form Handler ─────────────────────────
function cfHandleSend() {
  const firstName = document.getElementById('cfFirstName').value.trim();
  const email     = document.getElementById('cfEmail').value.trim();
  const message   = document.getElementById('cfMessage').value.trim();

  if (!firstName || !email || !message) {
    cfShowToast('⚠ Please fill in the required fields.', '#e53e3e');
    return;
  }

  // Clear fields
  ['cfFirstName','cfLastName','cfEmail','cfMobile','cfSubject','cfMessage']
    .forEach(id => { document.getElementById(id).value = ''; });

  cfShowToast('✓ Message sent successfully!', '#7c3aed');
}

function cfShowToast(msg, color) {
  const toast = document.getElementById('cfToast');
  toast.textContent = msg;
  toast.style.borderLeftColor = color;
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 3500);
}