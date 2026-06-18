// ── LANGUAGE ──
  let currentLang = 'en';

  const langData = {
    en: {
      name: 'English',
      flag: `<svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 60 40"><rect width="60" height="40" fill="#012169"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#f5f0ff" stroke-width="8"/><path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4"/><path d="M30,0 V40 M0,20 H60" stroke="#f5f0ff" stroke-width="12"/><path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="7"/></svg>`
    },
    si: {
      name: 'සිංහල',
      flag: `<svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 90 45"><rect width="90" height="45" fill="#8D153A"/><rect width="10" height="45" fill="#FF7900"/><rect x="10" width="10" height="45" fill="#009F4D"/><rect x="20" width="70" height="45" fill="#8D153A"/><rect x="20" width="70" height="45" fill="none" stroke="#FC0" stroke-width="3"/></svg>`
    },
    ta: {
      name: 'Nederlands',
      flag: `<svg xmlns="http://w3.org" viewBox="0 0 900 600" width="100%" height="auto">
  <!-- Red Stripe -->
  <rect fill="#AE1C28" width="900" height="200" />
  <!-- White Stripe -->
  <rect fill="#FFFFFF" y="200" width="900" height="200" />
  <!-- Blue Stripe -->
  <rect fill="#21468B" y="400" width="900" height="200" />
</svg>`
    }
  };

  function toggleLang(e) {
    e.stopPropagation();
    document.getElementById('langSelect').classList.toggle('open');
  }

  function setLang(code, e) {
    e.stopPropagation();
    currentLang = code;
    const d = langData[code];
    document.getElementById('activeLangFlag').innerHTML = d.flag;
    document.getElementById('activeLangName').textContent = d.name;
    document.getElementById('langSelect').classList.remove('open');

    // Update all translatable elements
    document.querySelectorAll('[data-' + code + ']').forEach(el => {
  el.innerHTML = el.getAttribute('data-' + code);
});

    // Mark active
    document.querySelectorAll('.lang-option').forEach(opt => opt.classList.remove('active'));
    e.currentTarget.classList.add('active');
  }

  document.addEventListener('click', () => {
    document.getElementById('langSelect').classList.remove('open');
  });

  // ── DESKTOP DROPDOWN (hover) ──
  // Only for desktop - hover triggers dropdown
  const hasSubItems = document.querySelectorAll('.has-sub');
  
  hasSubItems.forEach(item => {
    // Mouse enter - show dropdown
    item.addEventListener('mouseenter', function() {
      // Only on desktop (screen width > 768px)
      if (window.innerWidth > 768) {
        // Close other dropdowns first
        document.querySelectorAll('.has-sub').forEach(li => li.classList.remove('open'));
        this.classList.add('open');
      }
    });
    
    // Mouse leave - hide dropdown
    item.addEventListener('mouseleave', function() {
      if (window.innerWidth > 768) {
        this.classList.remove('open');
      }
    });
  });

  // Click outside to close dropdowns
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.has-sub')) {
      document.querySelectorAll('.has-sub').forEach(li => li.classList.remove('open'));
    }
  });

  // ── PANEL ──
  function togglePanel() {
    const panel = document.getElementById('sidePanel');
    const overlay = document.getElementById('overlay');
    const btn = document.getElementById('toggleBtn');
    const isOpen = panel.classList.contains('open');
    if (isOpen) closePanel();
    else {
      panel.classList.add('open');
      overlay.classList.add('open');
      btn.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closePanel() {
    document.getElementById('sidePanel').classList.remove('open');
    document.getElementById('overlay').classList.remove('open');
    document.getElementById('toggleBtn').classList.remove('open');
    document.body.style.overflow = '';
  }

  // ── PANEL DROPDOWN (click) ──
  function togglePanelSub(id, e) {
    // Always prevent default for panel dropdowns (mobile behavior)
    e.preventDefault();
    const el = document.getElementById(id);
    el.classList.toggle('open');
  }


  // ── ACTIVE NAV STATE ──
(function () {
  const currentPath = window.location.pathname;

  // Normalise: strip trailing slash, lowercase
  function norm(p) {
    return p.replace(/\/+$/, '').toLowerCase();
  }

  // All nav + panel links
  const allLinks = document.querySelectorAll(
    '.nav-links a, .panel-nav-item > a, .panel-subnav a'
  );

  allLinks.forEach(link => {
    // Remove any hard-coded active class set in HTML
    link.classList.remove('active');

    const linkPath = norm(new URL(link.href, location.origin).pathname);
    const curPath  = norm(currentPath);

    if (linkPath === curPath) {
      link.classList.add('active');

      // If it's inside a panel subnav, open the parent too
      const parentItem = link.closest('.panel-nav-item');
      if (parentItem && link.closest('.panel-subnav')) {
        parentItem.classList.add('open');
      }
    }
  });
})();