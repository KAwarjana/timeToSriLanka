// ── Custom Dropdown ──────────────────────────────
function toggleDropdown(id) {
    const sel = document.getElementById(id);
    if (sel.classList.contains('disabled')) return;
    const isOpen = sel.classList.contains('open');
    closeAll();
    if (!isOpen) sel.classList.add('open');
}

function selectOption(id, val) {
    const sel = document.getElementById(id);
    sel.querySelector('.cs-value').textContent = val;
    sel.querySelector('.cs-value').classList.remove('placeholder');
    sel.classList.remove('open');
}

function selectKids(val) {
    selectOption('sel-kids', val);
    const ageSel = document.getElementById('sel-age');
    if (val === 'None') {
        ageSel.classList.add('disabled');
        ageSel.querySelector('.cs-value').textContent = 'Please Select The Age';
        ageSel.querySelector('.cs-value').classList.add('placeholder');
    } else {
        ageSel.classList.remove('disabled');
    }
}

// ── Custom Date Picker ───────────────────────────
const dateState = { from: null, to: null, active: null };
const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
let calView = { from: new Date(), to: new Date() };

function openDatePicker(which) {
    closeAll();
    dateState.active = which;
    renderCal(which);
    document.getElementById('cal-' + which).classList.add('open');
}

function renderCal(which) {
    const d = calView[which];
    const year = d.getFullYear();
    const month = d.getMonth();
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    let html = `<div class="cal-header">
        <button class="cal-nav" onclick="shiftMonth('${which}',-1)">&#8249;</button>
        <span class="cal-month">${monthNames[month]} ${year}</span>
        <button class="cal-nav" onclick="shiftMonth('${which}',1)">&#8250;</button>
      </div>
      <div class="cal-grid">
        <div class="cal-dow">Su</div><div class="cal-dow">Mo</div><div class="cal-dow">Tu</div>
        <div class="cal-dow">We</div><div class="cal-dow">Th</div><div class="cal-dow">Fr</div><div class="cal-dow">Sa</div>`;

    for (let i = 0; i < firstDay; i++) html += '<div></div>';

    for (let day = 1; day <= daysInMonth; day++) {
        const thisDate = new Date(year, month, day);
        const isToday = thisDate.getTime() === today.getTime();
        const sel = dateState[which];
        const isSelected = sel && sel.getFullYear() === year && sel.getMonth() === month && sel.getDate() === day;
        let cls = 'cal-day';
        if (isToday) cls += ' today';
        if (isSelected) cls += ' selected';
        html += `<div class="${cls}" onclick="pickDay('${which}',${year},${month},${day})">${day}</div>`;
    }

    html += '</div>';
    html += `<div class="cal-footer">
        <span class="cal-clear" onclick="clearDate('${which}')">Clear</span>
        <span class="cal-today" onclick="pickToday('${which}')">Today</span>
      </div>`;

    document.getElementById('cal-' + which).innerHTML = html;
}

function shiftMonth(which, dir) {
    calView[which] = new Date(calView[which].getFullYear(), calView[which].getMonth() + dir, 1);
    renderCal(which);
}

function pickDay(which, y, m, d) {
    const picked = new Date(y, m, d);
    dateState[which] = picked;
    const display = String(d).padStart(2, '0') + ' / ' + String(m + 1).padStart(2, '0') + ' / ' + y;
    document.getElementById('cd-' + which + '-display').textContent = display;
    document.getElementById('cd-' + which + '-display').classList.remove('placeholder-text');
    document.getElementById('cal-' + which).classList.remove('open');
}

function pickToday(which) {
    const t = new Date();
    pickDay(which, t.getFullYear(), t.getMonth(), t.getDate());
}

function clearDate(which) {
    dateState[which] = null;
    document.getElementById('cd-' + which + '-display').textContent = 'dd / mm / yyyy';
    document.getElementById('cal-' + which).classList.remove('open');
}

// ── Close all popups on outside click ───────────
function closeAll() {
    document.querySelectorAll('.cs-dropdown').forEach(d => d.closest('.custom-select').classList.remove('open'));
    document.querySelectorAll('.cal-popup').forEach(p => p.classList.remove('open'));
}

document.addEventListener('click', function (e) {
    if (!e.target.closest('.custom-select') && !e.target.closest('.field-box')) closeAll();
});





// -------------testimonials----------------
const testimonials = [
  {
    name: "Amal Perera",
    country: "Sri Lanka",
    initial: "A",
    text: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
    rightText: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
    stars: 5
  },
  {
    name: "Sarah Johnson",
    country: "United States",
    initial: "S",
    text: "The service was absolutely outstanding! The team went above and beyond to ensure everything was perfect. I couldn't be happier with the results. Highly recommend to anyone looking for quality.",
    rightText: "Sarah has been using our platform for over 2 years and her experience highlights the dedication we bring to every single client interaction and project.",
    stars: 5
  },
  {
    name: "Kamal Silva",
    country: "Australia",
    initial: "K",
    text: "Incredible experience from start to finish. The attention to detail was remarkable and the final outcome exceeded all my expectations. Will definitely be coming back for more projects.",
    rightText: "Kamal's journey with us began as a small startup and grew into a thriving business thanks to our collaborative approach and relentless focus on delivering value.",
    stars: 4
  },
  {
    name: "Mei Tanaka",
    country: "Japan",
    initial: "M",
    text: "What sets this team apart is their passion and professionalism. They truly understand what you need and deliver results that speak for themselves. A truly world-class experience.",
    rightText: "Mei represents our growing international clientele and her feedback motivates us to continue raising our standards and delivering excellence across every market.",
    stars: 5
  }
];

let current = 0;
let direction = 'next';
let autoTimer;

function buildDots() {
  const container = document.getElementById('progressDots');
  container.innerHTML = '';
  testimonials.forEach((_, i) => {
    const dot = document.createElement('div');
    dot.className = 'dot' + (i === current ? ' active' : '');
    dot.onclick = () => goTo(i);
    dot.style.cursor = 'pointer';
    container.appendChild(dot);
  });
}

function updateCard(dir) {
  const card = document.getElementById('testimonialCard');
  const t = testimonials[current];

  // Animate card
  card.style.opacity = '0';
  card.style.transform = dir === 'next' ? 'translateX(30px)' : 'translateX(-30px)';

  setTimeout(() => {
    document.getElementById('customerName').textContent = t.name;
    document.getElementById('customerCountry').textContent = t.country;
    document.getElementById('profileInitial').textContent = t.initial;
    document.getElementById('testimonialText').textContent = t.text;
    document.getElementById('rightText').textContent = t.rightText;

    // Stars
    const stars = document.getElementById('starsContainer');
    stars.innerHTML = '';
    for (let i = 0; i < 5; i++) {
      const s = document.createElement('span');
      s.className = 'star';
      s.textContent = i < t.stars ? '★' : '☆';
      if (i >= t.stars) s.style.color = 'rgba(255,255,255,0.3)';
      stars.appendChild(s);
    }

    card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
    card.style.opacity = '1';
    card.style.transform = 'translateX(0)';

    buildDots();
  }, 150);

  // Button flash
  const btn = dir === 'next' ? document.getElementById('nextBtn') : document.getElementById('prevBtn');
  btn.classList.add('active-btn');
  setTimeout(() => btn.classList.remove('active-btn'), 300);
}

function goTo(index) {
  direction = index > current ? 'next' : 'prev';
  current = index;
  updateCard(direction);
  resetTimer();
}

function changeSlide(dir) {
  direction = dir;
  if (dir === 'next') current = (current + 1) % testimonials.length;
  else current = (current - 1 + testimonials.length) % testimonials.length;
  updateCard(dir);
  resetTimer();
}

function resetTimer() {
  clearInterval(autoTimer);
  autoTimer = setInterval(() => changeSlide('next'), 4000);
}

// Init
buildDots();
autoTimer = setInterval(() => changeSlide('next'), 4000);