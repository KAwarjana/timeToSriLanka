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