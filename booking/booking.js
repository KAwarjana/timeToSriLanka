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
    name: { en: "Amal Perera", si: "අමල් පෙරේරා", ta: "Amal Perera" },
    country: { en: "Sri Lanka", si: "ශ්‍රී ලංකාව", ta: "Sri Lanka" },
    initial: "A",
    text: {
      en: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
      si: "ලොරිම් ඉප්සම් යනු මුද්‍රණ හා වර්ගලේඛන කර්මාන්තයේ සරලව භාවිතා වන දර්ශක වචන සමූහයකි. ලොරිම් ඉප්සම් 1500 ගණන්වල සිට සම්මත පෙළක් ලෙස භාවිතා වී ඇත.",
      ta: "Lorem Ipsum is gewoon een voorbeeldtekst uit de druk- en zetindustrie. Lorem Ipsum is al sinds de 16e eeuw de standaard voorbeeldtekst in de branche. Lorem Ipsum is gewoon een voorbeeldtekst uit de druk- en zetindustrie."
    },
    rightText: {
      en: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
      si: "ලොරිම් ඉප්සම් යනු මුද්‍රණ හා වර්ගලේඛන කර්මාන්තයේ සරලව භාවිතා වන දර්ශක වචන සමූහයකි. ලොරිම් ඉප්සම් 1500 ගණන්වල සිට සම්මත පෙළක් ලෙස භාවිතා වී ඇත.",
      ta: "Lorem Ipsum is gewoon een voorbeeldtekst uit de druk- en zetindustrie. Lorem Ipsum is al sinds de 16e eeuw de standaard voorbeeldtekst in de branche. Lorem Ipsum is gewoon een voorbeeldtekst uit de druk- en zetindustrie."
    },
    stars: 5
  },
  {
    name: { en: "Sarah Johnson", si: "Sarah Johnson", ta: "Sarah Johnson" },
    country: { en: "United States", si: "United States", ta: "United States" },
    initial: "S",
    text: {
      en: "The service was absolutely outstanding! The team went above and beyond to ensure everything was perfect. I couldn't be happier with the results. Highly recommend to anyone looking for quality.",
      si: "සේවාව අතිශයින්ම විශිෂ්ටයි! සෑම දෙයක්ම පරිපූර්ණ බව සහතික කිරීමට කණ්ඩායම උපරිම උත්සාහයක් ගත්තා. ප්‍රතිඵල ගැන මට සතුටු වෙන්න බෑ. ගුණාත්මකභාවය සොයන ඕනෑම කෙනෙකුට මම ඉහළින්ම නිර්දේශ කරනවා.",
      ta: "De service was werkelijk uitstekend! Het team deed er alles aan om ervoor te zorgen dat alles perfect was. Ik ben ontzettend blij met het resultaat. Een absolute aanrader voor iedereen die op zoek is naar kwaliteit."
    },
    rightText: {
      en: "Sarah has been using our platform for over 2 years and her experience highlights the dedication we bring to every single client interaction and project.",
      si: "සාරා වසර 2 කට වැඩි කාලයක් අපගේ වේදිකාව භාවිතා කර ඇති අතර ඇයගේ අත්දැකීම් මගින් අපි සෑම පාරිභෝගික අන්තර්ක්‍රියාවක් සහ ව්‍යාපෘතියක් සඳහාම ගෙන එන කැපවීම ඉස්මතු කරයි.",
      ta: "Sarah gebruikt ons platform al meer dan 2 jaar en haar ervaring onderstreept de toewijding die we in elke klantinteractie en elk project steken."
    },
    stars: 5
  },
  {
    name: { en: "Kamal Silva", si: "Kamal Silva", ta: "Kamal Silva" },
    country: { en: "Australia", si: "Australia", ta: "Australia" },
    initial: "K",
    text: {
      en: "Incredible experience from start to finish. The attention to detail was remarkable and the final outcome exceeded all my expectations. Will definitely be coming back for more projects.",
      si: "ආරම්භයේ සිට අවසානය දක්වා ඇදහිය නොහැකි අත්දැකීමක්. විස්තර කෙරෙහි අවධානය යොමු කිරීම විශිෂ්ට වූ අතර අවසාන ප්‍රතිඵලය මගේ සියලු අපේක්ෂාවන් ඉක්මවා ගියේය. තවත් ව්‍යාපෘති සඳහා නිසැකවම නැවත පැමිණේ.",
      ta: "Een fantastische ervaring van begin tot eind. De aandacht voor detail was opmerkelijk en het eindresultaat overtrof al mijn verwachtingen. Ik kom zeker terug voor meer projecten."
    },
    rightText: {
      en: "Kamal's journey with us began as a small startup and grew into a thriving business thanks to our collaborative approach and relentless focus on delivering value.",
      si: "කමල් අප සමඟ කළ ගමන කුඩා ආරම්භයක් ලෙස ආරම්භ වූ අතර අපගේ සහයෝගී ප්‍රවේශය සහ වටිනාකම් ලබා දීම කෙරෙහි නොපසුබට අවධානය යොමු කිරීම නිසා සමෘද්ධිමත් ව්‍යාපාරයක් දක්වා වර්ධනය විය.",
      ta: "Kamals reis met ons begon als een kleine startup en groeide uit tot een bloeiend bedrijf dankzij onze samenwerkingsgerichte aanpak en onophoudelijke focus op het leveren van waarde."
    },
    stars: 4
  },
  {
    name: { en: "Mei Tanaka", si: "Mei Tanaka", ta: "Mei Tanaka" },
    country: { en: "Japan", si: "Japan", ta: "Japan" },
    initial: "M",
    text: {
      en: "What sets this team apart is their passion and professionalism. They truly understand what you need and deliver results that speak for themselves. A truly world-class experience.",
      si: "මෙම කණ්ඩායම කැපී පෙනෙන්නේ ඔවුන්ගේ දැඩි ආශාව සහ වෘත්තීයභාවයයි. ඔබට අවශ්‍ය දේ ඔවුන් සැබවින්ම තේරුම් ගෙන තමන් වෙනුවෙන්ම කතා කරන ප්‍රතිඵල ලබා දෙයි. සැබවින්ම ලෝක මට්ටමේ අත්දැකීමක්.",
      ta: "Het wat deze groep onderscheidt is hun passie en professionaliteit. Zij begrijpen echt wat u nodig heeft en leveren resultaten die voor zichzelf spreken. Een ware wereldklasse ervaring."
    },
    rightText: {
      en: "Mei represents our growing international clientele and her feedback motivates us to continue raising our standards and delivering excellence across every market.",
      si: "Mei අපගේ වර්ධනය වන ජාත්‍යන්තර ගනුදෙනුකරුවන් නියෝජනය කරන අතර ඇයගේ ප්‍රතිපෝෂණය අපගේ ප්‍රමිතීන් ඉහළ නැංවීමට සහ සෑම වෙළඳපලකම විශිෂ්ටත්වය ලබා දීමට අපව පොළඹවයි.",
      ta: "Mei vertegenwoordigt onze groeiende internationale klantenkring en haar feedback motiveert ons om onze normen te blijven verhogen en uitmuntende prestaties te leveren in elke markt."
    },
    stars: 5
  }
];

let current = 0;
let direction = 'next';
let autoTimer;

function getCurrentLang() {
  return localStorage.getItem('selectedLang') || 'en';
}

function getLocalizedValue(value) {
  if (typeof value === 'object') {
    const lang = getCurrentLang();
    return value[lang] || value.en;
  }
  return value;
}

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
    document.getElementById('customerName').textContent = getLocalizedValue(t.name);
    document.getElementById('customerCountry').textContent = getLocalizedValue(t.country);
    document.getElementById('profileInitial').textContent = t.initial;
    document.getElementById('testimonialText').textContent = getLocalizedValue(t.text);
    document.getElementById('rightText').textContent = getLocalizedValue(t.rightText);

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
updateCard(direction);
window.addEventListener('langChanged', () => updateCard(direction));
resetTimer();