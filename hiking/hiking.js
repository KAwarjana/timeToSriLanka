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