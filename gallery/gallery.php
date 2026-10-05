<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time to Ceylon</title>
    <link rel="icon" type="image/png" href="../resources/img/logo.webp">

    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="../footer/footer.css">
</head>

<body>

    <!-- ------------header----------- -->
    <?php include('../header/header.php'); ?>
    <!-- ------------header----------- -->

    <div class="bg-blob" aria-hidden="true"></div>

    <!-- ══════════════════════════════════════
     SECTION 1 - HERO (video background)
══════════════════════════════════════ -->
    <section class="hero">
        <!-- Video background -->
        <div class="hero-video-wrap">
            <div class="hero-video">
                <img src="../resources/img/pageBanners/pexels-vasanth-a-690424930-18994319.webp" alt="Hero Video" class="hero-video-content">
            </div>
            <div class="hero-overlay"></div>
        </div>

        <!-- Content -->
        <div class="hero-content">
            <span class="hero-bar"></span>
            <h1 class="hero-title"
            data-en="Our Gallery"
            data-si="අපගේ ගැලරිය" 
            data-ta="Onze fotogalerij">Our Gallery</h1>
        </div>
    </section>

    <section class="gallery-section">
        <div class="gallery-header">
            <p class="gallery-label"
            data-en="GALLERY"
            data-si="ගැලරිය"
            data-ta="FOTOGALERIJ">GALLERY</p>
            <h2 class="gallery-title"
            data-en="Capture The <em>Moments</em>"
            data-si="මතකයේ රැඳෙන මොහොතවල් ග්‍රහණය <em>කරගන්න</em>"
            data-ta="Een indruk van onvergetelijke <em>momenten</em>">Capture The <em>Moments</em></h2>
            <p class="gallery-desc"
            data-en="Explore our collection of stunning photographs showcasing the beauty of Sri Lanka. From ancient temples and pristine beaches to lush tea plantations and wildlife encounters, our gallery captures the essence of every unforgettable journey."
            data-si="ශ්‍රී ලංකාවේ සුන්දරත්වය පෙන්වන අපගේ ඡායාරූප එකතුව හරහා ඔබේ සංචාරක මතකයන් නැවත අත්විඳින්න. පෞරාණික විහාරස්ථාන, සුන්දර වෙරළ තීරයන්, සශ්‍රීක තේ වතු සහ වනජීවී අත්දැකීම්වල සිට, ශ්‍රී ලංකාවේ සෑම සංචාරයකම සුන්දර මොහොතන් අපගේ ගැලරිය තුළින් දැකගත හැකිය."
            data-ta="Ontdek onze collectie adembenemende foto's die de schoonheid van Sri Lanka laten zien. Van eeuwenoude tempels en ongerepte stranden tot weelderige theeplantages en ontmoetingen met wilde dieren: onze galerij legt de essentie vast van elke onvergetelijke reis.">Explore our collection of stunning photographs showcasing the beauty of Sri Lanka. From ancient temples and pristine beaches to lush tea plantations and wildlife encounters, our gallery captures the essence of every unforgettable journey.</p>
        </div>

        <div class="gallery-grid">
            <!-- Row 1: 5 images (small, small, wide, small, small) -->
            <div class="gallery-item">
                <img src="../resources/img/gallery/649612567_1562747378704918_7439972586645998230_n.jpg" alt="Hiking 1">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/655057408_1571471024499220_6018560577462435460_n.jpg" alt="Mountain 1">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/813923228_1738927197753601_1939648732804585779_n.jpg" alt="Camping Wide">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/660169958_1582284420084547_2185073191676169433_n.jpg" alt="Adventure 1">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/669293073_1589278306051825_2857958651346728527_n.jpg" alt="Travel 1">
            </div>

            <!-- Row 2: 7 images (small, small, wide, small, small, small, small) -->
            <div class="gallery-item">
                <img src="../resources/img/gallery/677842999_1602283738084615_5536669658303404494_n.jpg" alt="Hiking 2">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/686967119_1613998203579835_474278135473285799_n.jpg" alt="Mountain 2">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/687284148_1612084957104493_6987996194690864002_n.jpg" alt="Camping Wide 2">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/656043060_1576011464045176_9206511216075218898_n.jpg" alt="Adventure 2">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/746411814_2209361613154762_8984634470989306844_n.jfif" alt="Travel 2">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/793595778_1357605996357269_6494521911205522886_n.jfif" alt="Nature 1">
            </div>
            <div class="gallery-item">
                <img src="../resources/img/gallery/515516236_1347065763606415_4980620812548161228_n.jpg" alt="Landscape 1">
            </div>
        </div>
    </section>


    <!-- ------------footer----------- -->
    <?php include('../footer/footer.php'); ?>
    <!-- ------------footer----------- -->

    <!-- Image lightbox -->
    <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Image viewer" aria-hidden="true">
        <button class="lightbox-close" id="lightboxClose" aria-label="Close">&times;</button>
        <button class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Previous image">&#10094;</button>
        <img class="lightbox-img" id="lightboxImg" src="" alt="">
        <button class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Next image">&#10095;</button>
    </div>

    <script src="../header/header.js"></script>
    <script src="../resources/components/main.js"></script>
    <script>
        (function () {
            var items = Array.prototype.slice.call(document.querySelectorAll('.gallery-item img'));
            var box = document.getElementById('lightbox');
            var big = document.getElementById('lightboxImg');
            var current = 0;
            var touchX = null;

            // Thumbnails are small (w=400), so ask for a larger version when zoomed
            function fullSrc(src) {
                return src.replace(/([?&])w=\d+/, '$1w=1600');
            }

            function show(i) {
                current = (i + items.length) % items.length;
                big.src = fullSrc(items[current].src);
                big.alt = items[current].alt;
            }

            function open(i) {
                show(i);
                box.classList.add('open');
                box.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            }

            function close() {
                box.classList.remove('open');
                box.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            }

            items.forEach(function (img, i) {
                img.parentElement.addEventListener('click', function () { open(i); });
            });

            document.getElementById('lightboxClose').addEventListener('click', close);
            document.getElementById('lightboxPrev').addEventListener('click', function () { show(current - 1); });
            document.getElementById('lightboxNext').addEventListener('click', function () { show(current + 1); });

            // Click on the dark backdrop closes it
            box.addEventListener('click', function (e) { if (e.target === box) close(); });

            document.addEventListener('keydown', function (e) {
                if (!box.classList.contains('open')) return;
                if (e.key === 'Escape') close();
                else if (e.key === 'ArrowLeft') show(current - 1);
                else if (e.key === 'ArrowRight') show(current + 1);
            });

            // Swipe left/right on touch screens
            box.addEventListener('touchstart', function (e) { touchX = e.touches[0].clientX; }, { passive: true });
            box.addEventListener('touchend', function (e) {
                if (touchX === null) return;
                var dx = e.changedTouches[0].clientX - touchX;
                touchX = null;
                if (Math.abs(dx) > 50) show(current + (dx < 0 ? 1 : -1));
            }, { passive: true });
        })();
    </script>

</body>

</html>