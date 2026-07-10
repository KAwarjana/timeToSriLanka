function updateBlob() {
    const activeSection = document.querySelector('.pkg-detail-section[style*="display: block"]');
    const hero = activeSection ? activeSection.querySelector('.pd-hero') : null;
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

/* ═══════════════════════════════════════
   Show only the package section that
   matches ?pkg= in the URL, hide the rest.
   Example: packageDetails.php?pkg=3
═══════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const pkgId = params.get('pkg');

    const sections = document.querySelectorAll('.pkg-detail-section');
    const notFound = document.querySelector('.pd-not-found');
    let matched = false;

    sections.forEach(section => {
        if (pkgId && section.getAttribute('data-pkg') === pkgId) {
            section.style.display = 'block';
            matched = true;
        } else {
            section.style.display = 'none';
        }
    });

    if (!matched && notFound) {
        notFound.style.display = 'block';
    }

    updateBlob();
});

/* ═══════════════════════════════════════
   Lightbox — click any highlight or
   gallery image to view it enlarged.
═══════════════════════════════════════ */
function openLightbox(src) {
    const lightbox = document.getElementById('pdLightbox');
    const lightboxImg = document.getElementById('pdLightboxImg');
    // swap to a larger version of the same image
    lightboxImg.src = src.replace(/w=\d+/, 'w=1600');
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const lightbox = document.getElementById('pdLightbox');
    lightbox.classList.remove('active');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeLightbox();
});