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


function swapImage(thumb) {
    const card = thumb.closest('.pkg-card');
    const mainImg = card.querySelector('.pkg-main-img');
    const newSrc = thumb.src.replace('w=300', 'w=800');

    mainImg.style.opacity = '0';
    setTimeout(() => {
        mainImg.src = newSrc;
        mainImg.style.opacity = '1';
    }, 160);

    card.querySelectorAll('.pkg-thumb-row img').forEach(t => t.classList.remove('active'));
    thumb.classList.add('active');
}

/* ═══════════════════════════════════════
   Truncate each package description to a
   fixed word limit, appending "..." when
   the original text is longer.
═══════════════════════════════════════ */
function truncateDescriptions(limit = 25) {
    document.querySelectorAll('.pkg-desc').forEach(el => {
        const fullText = el.textContent.replace(/\s+/g, ' ').trim();
        // keep the untouched original text in case it's needed later
        el.setAttribute('data-full-text', fullText);

        const words = fullText.split(' ');
        if (words.length > limit) {
            el.textContent = words.slice(0, limit).join(' ') + '...';
        } else {
            el.textContent = fullText;
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    truncateDescriptions(25);
});