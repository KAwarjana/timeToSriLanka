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
                <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=400&q=80" alt="Hiking 1">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?w=400&q=80" alt="Mountain 1">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=800&q=80" alt="Camping Wide">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&q=80" alt="Adventure 1">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1522163182402-834f871fd851?w=400&q=80" alt="Travel 1">
            </div>

            <!-- Row 2: 7 images (small, small, wide, small, small, small, small) -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=400&q=80" alt="Hiking 2">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1501555088652-021faa106b9b?w=400&q=80" alt="Mountain 2">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=800&q=80" alt="Camping Wide 2">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&q=80" alt="Adventure 2">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1522163182402-834f871fd851?w=400&q=80" alt="Travel 2">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=400&q=80" alt="Nature 1">
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=400&q=80" alt="Landscape 1">
            </div>
        </div>
    </section>


    <!-- ------------footer----------- -->
    <?php include('../footer/footer.php'); ?>
    <!-- ------------footer----------- -->

    <script src="../header/header.js"></script>
    <script src="../resources/components/main.js"></script>

</body>

</html>