<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time to Ceylon</title>
    <link rel="icon" type="image/png" href="../resources/img/logo.png">

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
     SECTION 1 — HERO (video background)
══════════════════════════════════════ -->
    <section class="hero">
        <!-- Video background -->
        <div class="hero-video-wrap">
            <div class="hero-video">
                <img src="../resources/img/experiences/1.jpeg" alt="Hero Video" class="hero-video-content">
            </div>
            <div class="hero-overlay"></div>
        </div>

        <!-- Content -->
        <div class="hero-content">
            <span class="hero-bar"></span>
            <h1 class="hero-title">Topic Or Something Casual</h1>
        </div>
    </section>

    <section class="gallery-section">
        <div class="gallery-header">
            <p class="gallery-label">GALLERY</p>
            <h2 class="gallery-title">Topic Or <em>Something</em></h2>
            <p class="gallery-desc">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500s Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.</p>
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