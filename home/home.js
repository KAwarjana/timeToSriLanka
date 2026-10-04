function initExperienceSlider() {
  const track = document.getElementById('cardsTrack');
  if (!track) return;
  const btn = document.getElementById('slideBtn');
  const viewport = track.parentElement;

  // Set inline so dragging still works even if a cached/old home.css is served
  viewport.style.touchAction = 'pan-y';   // let JS handle horizontal swipes, page keeps vertical scroll
  viewport.style.cursor = 'grab';
  viewport.style.userSelect = 'none';
  viewport.style.webkitUserSelect = 'none';
  Array.prototype.forEach.call(track.querySelectorAll('img'), (img) => {
    img.draggable = false;
    img.style.webkitUserDrag = 'none';
  });

  const GAP = 14;
  const totalCards = track.children.length;

  let currentIndex = 0;

  function getCardWidth() {
    const card = track.children[0];
    return card.offsetWidth + GAP; // width + gap
  }

  // Furthest the track can move left (0 when every card already fits)
  function getMaxOffset() {
    const contentWidth = totalCards * getCardWidth() - GAP;
    return Math.max(0, contentWidth - viewport.offsetWidth);
  }

  function getMaxIndex() {
    return Math.ceil(getMaxOffset() / getCardWidth());
  }

  function getOffsetForIndex(index) {
    return Math.min(index * getCardWidth(), getMaxOffset());
  }

  function updateSlider() {
    const maxIndex = getMaxIndex();

    // Clamp
    if (currentIndex > maxIndex) currentIndex = maxIndex;
    if (currentIndex < 0) currentIndex = 0;

    track.style.transform = `translateX(-${getOffsetForIndex(currentIndex)}px)`;

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
    if (currentIndex >= getMaxIndex()) {
      currentIndex = 0;
    } else {
      currentIndex += 1;
    }

    updateSlider();
  });

  // ── Drag / swipe support (mouse, touch, pen) ──
  const DRAG_THRESHOLD = 6;   // px before a press counts as a drag
  const RUBBER_BAND = 0.35;   // resistance when pulling past either end
  const FLICK_SPEED = 0.4;    // px/ms – fast swipes travel further

  let pointerId = null;
  let isDragging = false;
  let startX = 0;
  let startOffset = 0;
  let lastX = 0;
  let lastTime = 0;
  let velocity = 0;
  let justDragged = false;

  function clampWithResistance(value) {
    const max = getMaxOffset();
    if (value < 0) return value * RUBBER_BAND;
    if (value > max) return max + (value - max) * RUBBER_BAND;
    return value;
  }

  viewport.addEventListener('pointerdown', (e) => {
    if (pointerId !== null) return;
    if (e.pointerType === 'mouse' && e.button !== 0) return;

    pointerId = e.pointerId;
    isDragging = false;
    startX = lastX = e.clientX;
    lastTime = performance.now();
    velocity = 0;
    startOffset = getOffsetForIndex(currentIndex);
  });

  viewport.addEventListener('pointermove', (e) => {
    if (e.pointerId !== pointerId) return;

    const dx = e.clientX - startX;

    if (!isDragging) {
      if (Math.abs(dx) < DRAG_THRESHOLD) return;
      isDragging = true;
      track.style.transition = 'none';
      viewport.classList.add('is-dragging');
      viewport.style.cursor = 'grabbing';
      try { viewport.setPointerCapture(pointerId); } catch (err) { /* ignore */ }
    }

    const now = performance.now();
    const dt = now - lastTime;
    if (dt > 0) velocity = (e.clientX - lastX) / dt;
    lastX = e.clientX;
    lastTime = now;

    track.style.transform = `translateX(-${clampWithResistance(startOffset - dx)}px)`;
  });

  function endDrag(e) {
    if (e.pointerId !== pointerId) return;

    const wasDragging = isDragging;
    const dx = e.clientX - startX;

    if (wasDragging) {
      try { viewport.releasePointerCapture(pointerId); } catch (err) { /* ignore */ }
    }

    pointerId = null;
    isDragging = false;
    viewport.classList.remove('is-dragging');
    viewport.style.cursor = 'grab';

    if (!wasDragging) return;

    track.style.transition = ''; // back to the CSS ease for the snap

    let target = startOffset - dx;
    if (e.type !== 'pointercancel' && Math.abs(velocity) > FLICK_SPEED) {
      target -= velocity * 150; // carry a quick flick a bit further
    }

    currentIndex = Math.round(target / getCardWidth());
    updateSlider();

    // Swallow the click that follows a drag
    justDragged = true;
    setTimeout(() => { justDragged = false; }, 0);
  }

  viewport.addEventListener('pointerup', endDrag);
  viewport.addEventListener('pointercancel', endDrag);

  viewport.addEventListener('click', (e) => {
    if (justDragged) {
      e.preventDefault();
      e.stopPropagation();
    }
  }, true);

  // Stop the browser's native image drag ghost
  viewport.addEventListener('dragstart', (e) => e.preventDefault());

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
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initExperienceSlider);
} else {
  initExperienceSlider();
}




// Background configurations - Add your images/videos here
const cardBackgrounds = [
  {
    type: 'image',
    src: '../resources/img/destinations/colombo/colombo01.webp',
    fallback: 'linear-gradient(135deg,#3b0764,#7c3aed)'
  },
  {
    type: 'image',
    src: '../resources/img/destinations/horton/horton3.webp',
    fallback: 'linear-gradient(135deg,#1e3a5f,#2563eb)'
  },
  {
    type: 'image',
    src: '../resources/img/destinations/wilpattu/wilpattu01.webp',
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
      icon.src = '../resources/img/home/arrow.webp'; // active icon (light)
    } else {
      icon.src = '../resources/img/home/arrow_dark.webp'; // inactive icon (dark)
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
    name: { en: "Sophie", si: "සොෆී", ta: "Sophie" },
    country: { en: "Netherlands", si: "නෙදර්ලන්තය", ta: "Nederland" },
    initial: "S",
    text: {
      en: "Our journey through Sri Lanka was beautifully organised. We loved the combination of culture, wildlife and relaxing days by the coast. Everything felt personal and we never felt rushed.",
      si: "රී ලංකාවේ අපගේ සංචාරය ඉතා සුන්දර ලෙස සංවිධානය කර තිබුණා. සංස්කෘතිය, වනජීවී අත්දැකීම් සහ මුහුදුබඩ විවේකී දින එකට එක්ව තිබීම අපි විශේෂයෙන්ම ප්‍රිය කළා. සෑම දෙයක්ම අප වෙනුවෙන්ම සැලසුම් කළාක් මෙන් දැනුණු අතර, කිසිවිටෙකත් අපට හදිසි වීමක් දැනුණේ නැහැ.",
      ta: "Onze reis door Sri Lanka was prachtig georganiseerd. We genoten enorm van de combinatie van cultuur, wildlife en ontspannen dagen aan de kust. Alles voelde persoonlijk en op maat gemaakt, en we hadden nooit het gevoel dat we ons moesten haasten."
    },
    rightText: {
      en: "Share your travel aspirations with us and let TimetoCeylon create an exclusive, fully tailored journey designed around your desires. From carefully selected destinations to personalized service in every detail, we craft an unforgettable Sri Lanka experience that perfectly matches your expectations.",
      si: "ඔබ සිතේ ඇති සංචාරක සිහින සහ බලාපොරොත්තු අප සමඟ බෙදාගන්න. ඔබේ රුචිකත්වයන් සහ අවශ්‍යතාවලට ගැළපෙන පරිදි සෑම දෙයක්ම සැලසුම් කළ සුවිශේෂී සංචාරයක් TimetoCeylon සමඟින් අත්විඳින්න. සැලකිල්ලෙන් තෝරාගත් ගමනාන්තයන්ගේ සිට, සෑම විස්තරයකටම ගැළපෙන පුද්ගලික සේවාව දක්වා, ඔබේ බලාපොරොත්තු සමඟ මනාව ගැළපෙන අමතක නොවන ශ්‍රී ලංකා සංචාරක අත්දැකීමක් අපි ඔබ වෙනුවෙන් නිර්මාණය කරමු.",
      ta: "Deel uw reiswensen met ons en laat TimetoCeylon een exclusieve, volledig op maat gemaakte reis samenstellen. Van zorgvuldig geselecteerde bestemmingen tot persoonlijke service in elk detail – wij creëren een onvergetelijke Sri Lanka ervaring die perfect aansluit bij uw verwachtingen."
    },
    stars: 5
  },
  {
    name: { en: "Thomas", si: "තෝමස්", ta: "Thomas" },
    country: { en: "Belgium", si: "බෙල්ජියම", ta: "België" },
    initial: "T",
    text: {
      en: "Having a private driver made our trip so much easier. We discovered beautiful places we would never have found ourselves, and the whole journey felt comfortable and relaxed.",
      si: "පෞද්ගලික රියදුරෙකු සිටීම අපගේ සංචාරය වඩාත් පහසු කළා. අපට තනිවම සොයාගැනීමට නොහැකි වූ සුන්දර ස්ථාන රැසක් අපි දැකගත්තා. මුළු සංචාරයම ඉතා සුවපහසු සහ සැහැල්ලුවෙන් ගත කළ හැකි අත්දැකීමක් වුණා.",
      ta: "Een privéchauffeur maakte onze reis zoveel gemakkelijker. We ontdekten prachtige plekken die we zelf nooit zouden hebben gevonden, en de hele reis voelde comfortabel en ontspannen aan."
    },
    rightText: {
      en: "Share your travel aspirations with us and let TimetoCeylon create an exclusive, fully tailored journey designed around your desires. From carefully selected destinations to personalized service in every detail, we craft an unforgettable Sri Lanka experience that perfectly matches your expectations.",
      si: "ඔබ සිතේ ඇති සංචාරක සිහින සහ බලාපොරොත්තු අප සමඟ බෙදාගන්න. ඔබේ රුචිකත්වයන් සහ අවශ්‍යතාවලට ගැළපෙන පරිදි සෑම දෙයක්ම සැලසුම් කළ සුවිශේෂී සංචාරයක් TimetoCeylon සමඟින් අත්විඳින්න. සැලකිල්ලෙන් තෝරාගත් ගමනාන්තයන්ගේ සිට, සෑම විස්තරයකටම ගැළපෙන පුද්ගලික සේවාව දක්වා, ඔබේ බලාපොරොත්තු සමඟ මනාව ගැළපෙන අමතක නොවන ශ්‍රී ලංකා සංචාරක අත්දැකීමක් අපි ඔබ වෙනුවෙන් නිර්මාණය කරමු.",
      ta: "Deel uw reiswensen met ons en laat TimetoCeylon een exclusieve, volledig op maat gemaakte reis samenstellen. Van zorgvuldig geselecteerde bestemmingen tot persoonlijke service in elk detail – wij creëren een onvergetelijke Sri Lanka ervaring die perfect aansluit bij uw verwachtingen."
    },
    stars: 5
  },
  {
    name: { en: "Anna", si: "ඇනා", ta: "Anna" },
    country: { en: "Germany", si: "ජර්මනිය", ta: "Duitsland" },
    initial: "A",
    text: {
      en: "One of the highlights was our safari, but we also loved the tea country and Ella. The itinerary was well planned and there was still enough flexibility to enjoy Sri Lanka at our own pace.",
      si: "අපගේ සංචාරයේ විශේෂතම අත්දැකීමක් වූයේ සෆාරියයි. ඒ වගේම තේ වගා ප්‍රදේශ සහ ඇල්ල අපි ඉතාමත් ප්‍රිය කළා. ගමන් මාර්ගය ඉතා හොඳින් සැලසුම් කර තිබූ අතර, ශ්‍රී ලංකාව අපට අවශ්‍ය වේගයෙන් නිදහසේ අත්විඳීමටත් ප්‍රමාණවත් නම්‍යශීලී බවක් තිබුණා.",
      ta: "Een van de hoogtepunten van onze reis was de safari, maar we genoten ook enorm van het theeland en Ella. De route was goed gepland, terwijl er genoeg flexibiliteit was om Sri Lanka in ons eigen tempo te ontdekken."
    },
    rightText: {
      en: "Share your travel aspirations with us and let TimetoCeylon create an exclusive, fully tailored journey designed around your desires. From carefully selected destinations to personalized service in every detail, we craft an unforgettable Sri Lanka experience that perfectly matches your expectations.",
      si: "ඔබ සිතේ ඇති සංචාරක සිහින සහ බලාපොරොත්තු අප සමඟ බෙදාගන්න. ඔබේ රුචිකත්වයන් සහ අවශ්‍යතාවලට ගැළපෙන පරිදි සෑම දෙයක්ම සැලසුම් කළ සුවිශේෂී සංචාරයක් TimetoCeylon සමඟින් අත්විඳින්න. සැලකිල්ලෙන් තෝරාගත් ගමනාන්තයන්ගේ සිට, සෑම විස්තරයකටම ගැළපෙන පුද්ගලික සේවාව දක්වා, ඔබේ බලාපොරොත්තු සමඟ මනාව ගැළපෙන අමතක නොවන ශ්‍රී ලංකා සංචාරක අත්දැකීමක් අපි ඔබ වෙනුවෙන් නිර්මාණය කරමු.",
      ta: "Deel uw reiswensen met ons en laat TimetoCeylon een exclusieve, volledig op maat gemaakte reis samenstellen. Van zorgvuldig geselecteerde bestemmingen tot persoonlijke service in elk detail – wij creëren een onvergetelijke Sri Lanka ervaring die perfect aansluit bij uw verwachtingen."
    },
    stars: 5
  },
  {
    name: { en: "James", si: "ජේම්ස්", ta: "James" },
    country: { en: "United Kingdom", si: "එක්සත් රාජධානිය", ta: "Verenigd Koninkrijk" },
    initial: "J",
    text: {
      en: "Excellent communication from the beginning and great personal service throughout our trip. Our driver was friendly, reliable and always ready with helpful local recommendations.”",
      si: "ආරම්භයේ සිටම ඉතා හොඳ සන්නිවේදනයක් සහ අපගේ මුළු සංචාරය පුරාවටම විශිෂ්ට පෞද්ගලික සේවාවක් ලැබුණා. අපගේ රියදුරා මිත්‍රශීලී, විශ්වාසවන්ත වූ අතර, ප්‍රදේශය පිළිබඳ ප්‍රයෝජනවත් උපදෙස් ලබාදීමට සෑම විටම සූදානමින් සිටියා.",
      ta: "Vanaf het begin was de communicatie uitstekend en tijdens onze hele reis kregen we een geweldige persoonlijke service. Onze chauffeur was vriendelijk, betrouwbaar en stond altijd klaar met handige lokale tips en aanbevelingen."
    },
    rightText: {
      en: "Share your travel aspirations with us and let TimetoCeylon create an exclusive, fully tailored journey designed around your desires. From carefully selected destinations to personalized service in every detail, we craft an unforgettable Sri Lanka experience that perfectly matches your expectations.",
      si: "ඔබ සිතේ ඇති සංචාරක සිහින සහ බලාපොරොත්තු අප සමඟ බෙදාගන්න. ඔබේ රුචිකත්වයන් සහ අවශ්‍යතාවලට ගැළපෙන පරිදි සෑම දෙයක්ම සැලසුම් කළ සුවිශේෂී සංචාරයක් TimetoCeylon සමඟින් අත්විඳින්න. සැලකිල්ලෙන් තෝරාගත් ගමනාන්තයන්ගේ සිට, සෑම විස්තරයකටම ගැළපෙන පුද්ගලික සේවාව දක්වා, ඔබේ බලාපොරොත්තු සමඟ මනාව ගැළපෙන අමතක නොවන ශ්‍රී ලංකා සංචාරක අත්දැකීමක් අපි ඔබ වෙනුවෙන් නිර්මාණය කරමු.",
      ta: "Deel uw reiswensen met ons en laat TimetoCeylon een exclusieve, volledig op maat gemaakte reis samenstellen. Van zorgvuldig geselecteerde bestemmingen tot persoonlijke service in elk detail – wij creëren een onvergetelijke Sri Lanka ervaring die perfect aansluit bij uw verwachtingen."
    },
    stars: 5
  },
  {
    name: { en: "Claire", si: "ක්ලෙයාර්", ta: "Claire" },
    country: { en: "France", si: "ප්‍රංශය", ta: "Frankrijk" },
    initial: "C",
    text: {
      en: "Sri Lanka exceeded our expectations. From Sigiriya and Kandy to the beautiful south coast, every part of the journey offered something different. A truly memorable experience.”",
      si: "රී ලංකාව අපගේ බලාපොරොත්තු ඉක්මවා ගියා. සීගිරිය සහ මහනුවර සිට සුන්දර දකුණු වෙරළ තීරය දක්වා, අපගේ ගමනේ සෑම අදියරකම අලුත්ම අත්දැකීමක් ලබා දුන්නා. සැබවින්ම අමතක නොවන සංචාරයක්.",
      ta: "Sri Lanka heeft onze verwachtingen overtroffen. Van Sigiriya en Kandy tot de prachtige zuidkust, elk deel van onze reis bood iets bijzonders. Een werkelijk onvergetelijke ervaring."
    },
    rightText: {
      en: "Share your travel aspirations with us and let TimetoCeylon create an exclusive, fully tailored journey designed around your desires. From carefully selected destinations to personalized service in every detail, we craft an unforgettable Sri Lanka experience that perfectly matches your expectations.",
      si: "ඔබ සිතේ ඇති සංචාරක සිහින සහ බලාපොරොත්තු අප සමඟ බෙදාගන්න. ඔබේ රුචිකත්වයන් සහ අවශ්‍යතාවලට ගැළපෙන පරිදි සෑම දෙයක්ම සැලසුම් කළ සුවිශේෂී සංචාරයක් TimetoCeylon සමඟින් අත්විඳින්න. සැලකිල්ලෙන් තෝරාගත් ගමනාන්තයන්ගේ සිට, සෑම විස්තරයකටම ගැළපෙන පුද්ගලික සේවාව දක්වා, ඔබේ බලාපොරොත්තු සමඟ මනාව ගැළපෙන අමතක නොවන ශ්‍රී ලංකා සංචාරක අත්දැකීමක් අපි ඔබ වෙනුවෙන් නිර්මාණය කරමු.",
      ta: "Deel uw reiswensen met ons en laat TimetoCeylon een exclusieve, volledig op maat gemaakte reis samenstellen. Van zorgvuldig geselecteerde bestemmingen tot persoonlijke service in elk detail – wij creëren een onvergetelijke Sri Lanka ervaring die perfect aansluit bij uw verwachtingen."
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