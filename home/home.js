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