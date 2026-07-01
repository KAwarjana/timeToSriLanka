document.addEventListener('DOMContentLoaded', () => {
  const track = document.getElementById('cardsTrack');
  const btn = document.getElementById('slideBtn');
  const viewport = track.parentElement;

  let currentIndex = 0;

  function getVisibleCount() {
    const vw = viewport.offsetWidth;
    const cardStyle = getComputedStyle(track.children[0]);
    const gap = 14;
    // Match CSS: 3 on large, 2 on medium/mobile
    if (window.innerWidth >= 1024) return 3;
    if (window.innerWidth >= 400) return 2;
    return 1;
  }

  const totalCards = track.children.length; // 5

  function getCardWidth() {
    const card = track.children[0];
    return card.offsetWidth + 14; // width + gap
  }

  function updateSlider() {
    const visibleCount = getVisibleCount();
    const maxIndex = totalCards - visibleCount;

    // Clamp
    if (currentIndex > maxIndex) currentIndex = maxIndex;
    if (currentIndex < 0) currentIndex = 0;

    const offset = currentIndex * getCardWidth();
    track.style.transform = `translateX(-${offset}px)`;

    // Toggle arrow direction
    if (currentIndex >= maxIndex) {
      btn.classList.add('at-start');
      btn.setAttribute('aria-label', 'Previous slide');
    } else {
      btn.classList.remove('at-start');
      btn.setAttribute('aria-label', 'Next slide');
    }
  }

  btn.addEventListener('click', () => {
    const visibleCount = getVisibleCount();
    const maxIndex = totalCards - visibleCount;

    if (currentIndex >= maxIndex) {
      currentIndex = 0;
    } else {
      currentIndex += 1;
    }

    updateSlider();
  });

  // Recalculate on resize
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      updateSlider();
    }, 100);
  });

  // Init
  updateSlider();
});




// Background configurations - Add your images/videos here
const cardBackgrounds = [
  {
    type: 'image',
    src: '../resources/img/home/2.jpeg',
    fallback: 'linear-gradient(135deg,#3b0764,#7c3aed)'
  },
  {
    type: 'image',
    src: '../resources/img/home/1.jpeg',
    fallback: 'linear-gradient(135deg,#1e3a5f,#2563eb)'
  },
  {
    type: 'image',
    src: '../resources/img/home/3.jpeg',
    fallback: 'linear-gradient(135deg,#064e3b,#059669)'
  },
];

let activeIndex = 1;
let bgEls = [];
let videoEls = {};

// Build background slides dynamically
function buildBgSlides() {
  const wrap = document.querySelector('.pkg-bg-wrap');
  wrap.innerHTML = '';
  bgEls = [];
  videoEls = {};

  cardBackgrounds.forEach((bg, i) => {
    const slide = document.createElement('div');
    slide.className = 'pkg-bg-slide' + (i === activeIndex ? ' active' : '');
    slide.id = 'bg' + i;

    if (bg.type === 'video') {
      const vid = document.createElement('video');
      vid.src = bg.src;
      vid.autoplay = true;
      vid.muted = true;
      vid.loop = true;
      vid.playsInline = true;
      vid.style.cssText = 'width:100%;height:100%;object-fit:cover;display:block;';
      vid.onerror = () => {
        slide.style.background = bg.fallback || 'linear-gradient(135deg,#3b0764,#7c3aed)';
      };
      slide.appendChild(vid);
      videoEls[i] = vid;
    } else {
      slide.style.background = bg.fallback || 'linear-gradient(135deg,#3b0764,#7c3aed)';
      slide.style.backgroundRepeat = 'no-repeat';
      slide.style.backgroundSize = 'cover';
      slide.style.backgroundPosition = 'center';
      const img = new Image();
      img.onload = () => {
        slide.style.backgroundImage = `url('${bg.src}')`;
      };
      img.onerror = () => {
        console.warn(`Failed to load image: ${bg.src}`);
      };
      img.src = bg.src;
    }

    wrap.appendChild(slide);
    bgEls.push(slide);
  });
}

// Switch background when card changes
function switchBackground(index) {
  bgEls.forEach((el, i) => {
    el.classList.toggle('active', i === index);
    if (videoEls[i]) {
      if (i === index) {
        videoEls[i].play().catch(e => console.log('Video play failed:', e));
      } else {
        videoEls[i].pause();
      }
    }
  });
}

// Update card positions based on active index
function updateCardPositions() {
  const cards = document.querySelectorAll('.pkg-card');
  const dots = document.querySelectorAll('.dot');
  const totalCards = cards.length;

  cards.forEach((card, i) => {
    // Remove all position classes
    card.classList.remove('active', 'prev', 'next', 'hidden');

    if (i === activeIndex) {
      card.classList.add('active');
    } else if (i === activeIndex - 1 || (activeIndex === 0 && i === totalCards - 1)) {
      card.classList.add('prev');
    } else if (i === activeIndex + 1 || (activeIndex === totalCards - 1 && i === 0)) {
      card.classList.add('next');
    } else {
      card.classList.add('hidden');
    }
  });

  // Update dots
  dots.forEach((dot, i) => {
    dot.classList.toggle('active', i === activeIndex);
  });

  // Update button icons based on active state
  cards.forEach((card, i) => {
    const icon = card.querySelector('.arrow--img');
    if (!icon) return;
    if (i === activeIndex) {
      icon.src = '../resources/img/home/arrow.png'; // active icon (light)
    } else {
      icon.src = '../resources/img/home/arrow_dark.png'; // inactive icon (dark)
    }
  });

  // Switch background
  switchBackground(activeIndex);
}

// Select card
function selectCard(index) {
  const cards = document.querySelectorAll('.pkg-card');

  if (index < 0 || index >= cards.length) return;

  activeIndex = index;
  updateCardPositions();
}

// Previous card
function prevCard() {
  const cards = document.querySelectorAll('.pkg-card');
  let newIndex = activeIndex - 1;
  if (newIndex < 0) newIndex = cards.length - 1;
  selectCard(newIndex);
}

// Next card
function nextCard() {
  const cards = document.querySelectorAll('.pkg-card');
  let newIndex = activeIndex + 1;
  if (newIndex >= cards.length) newIndex = 0;
  selectCard(newIndex);
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
  buildBgSlides();
  updateCardPositions();
});

// Keyboard navigation
document.addEventListener('keydown', (e) => {
  if (e.key === 'ArrowLeft') {
    prevCard();
  } else if (e.key === 'ArrowRight') {
    nextCard();
  }
});

// Touch/Swipe support for mobile
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('touchstart', (e) => {
  touchStartX = e.changedTouches[0].screenX;
}, { passive: true });

document.addEventListener('touchend', (e) => {
  touchEndX = e.changedTouches[0].screenX;
  handleSwipe();
}, { passive: true });

function handleSwipe() {
  const swipeThreshold = 50;
  const diff = touchStartX - touchEndX;

  if (Math.abs(diff) > swipeThreshold) {
    if (diff > 0) {
      nextCard();
    } else {
      prevCard();
    }
  }
}





document.querySelectorAll('.card').forEach(card => {
  card.addEventListener('click', () => {
    const isActive = card.classList.contains('active');
    document.querySelectorAll('.card').forEach(c => c.classList.remove('active'));
    if (!isActive) card.classList.add('active');
  });
});



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