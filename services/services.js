// Subtle tilt effect on card hover (mouse tracking)
document.querySelectorAll('.card').forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;
    const rotateX = ((y - centerY) / centerY) * -4;
    const rotateY = ((x - centerX) / centerX) * 4;
    card.style.transform = `translateY(-6px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  });

  card.addEventListener('mouseleave', () => {
    card.style.transform = '';
  });
});

function updateBlob() {
    const hero = document.querySelector('.hero');
    const blob = document.querySelector('.bg-blob');
    if (!hero || !blob) return;

    const heroBottom = hero.getBoundingClientRect().bottom;
    
    if (heroBottom > 0) {
        blob.style.transform = `translateY(${heroBottom}px)`;
    } else {
        blob.style.transform = 'translateY(0)';
    }
}

window.addEventListener('scroll', updateBlob);
window.addEventListener('resize', updateBlob);
updateBlob();