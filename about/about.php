<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time to Sri Lanka</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Outfit:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="about.css">
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

    <!-- --------------about----------------- -->
    <section class="about-section">

    <!-- Top grid: left col + right col -->
    <div class="about-top">

      <!-- LEFT: image block -->
      <div class="about-left">

        <!-- Badge sits above image, overlapping top edge -->
        <div class="about-badge">Lorem Ipsum</div>

        <!-- Image -->
        <div class="about-img-wrap">
          <img src="https://images.unsplash.com/photo-1474511320723-9a56873867b5?w=700&q=80" alt="About" class="about-img" />
        </div>

        <!-- Circles + count — below image -->
        <div class="about-bottom-row">
          <div class="about-circles">
            <div class="circle c1"></div>
            <div class="circle c2"></div>
            <div class="circle c3"></div>
          </div>
          <div class="about-count-text">
            <span class="count-num">+ 500</span>
            <span class="count-label">Lorem Ipsum</span>
          </div>
        </div>

      </div>

      <!-- RIGHT: text content -->
      <div class="about-right">
        <div class="about-label">ABOUT US</div>
        <h2 class="about-title">Topic Or <span>Something</span></h2>
        <p class="about-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <p class="about-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <p class="about-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </div>

    </div>

    <!-- Full-width text below top grid -->
    <div class="about-fulltext">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    </div>

    <!-- Stats row -->
    <div class="about-stats">

      <div class="stat-item">
        <!-- Cog/gear icon -->
        <svg class="stat-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="7" stroke="#7c3aed" stroke-width="2.5"/>
          <path d="M24 4v4M24 40v4M4 24h4M40 24h4M8.69 8.69l2.83 2.83M36.48 36.48l2.83 2.83M8.69 39.31l2.83-2.83M36.48 11.52l2.83-2.83" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round"/>
          <circle cx="24" cy="24" r="12" stroke="#7c3aed" stroke-width="2" stroke-dasharray="3 3"/>
        </svg>
        <div class="stat-info">
          <div class="stat-number">45+</div>
          <div class="stat-label">Lorem Ipsum is Simply</div>
        </div>
      </div>

      <div class="stat-item">
        <svg class="stat-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="7" stroke="#7c3aed" stroke-width="2.5"/>
          <path d="M24 4v4M24 40v4M4 24h4M40 24h4M8.69 8.69l2.83 2.83M36.48 36.48l2.83 2.83M8.69 39.31l2.83-2.83M36.48 11.52l2.83-2.83" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round"/>
          <circle cx="24" cy="24" r="12" stroke="#7c3aed" stroke-width="2" stroke-dasharray="3 3"/>
        </svg>
        <div class="stat-info">
          <div class="stat-number">4k+</div>
          <div class="stat-label">Lorem Ipsum is Simply</div>
        </div>
      </div>

      <div class="stat-item">
        <svg class="stat-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="7" stroke="#7c3aed" stroke-width="2.5"/>
          <path d="M24 4v4M24 40v4M4 24h4M40 24h4M8.69 8.69l2.83 2.83M36.48 36.48l2.83 2.83M8.69 39.31l2.83-2.83M36.48 11.52l2.83-2.83" stroke="#7c3aed" stroke-width="2.5" stroke-linecap="round"/>
          <circle cx="24" cy="24" r="12" stroke="#7c3aed" stroke-width="2" stroke-dasharray="3 3"/>
        </svg>
        <div class="stat-info">
          <div class="stat-number">5.8</div>
          <div class="stat-label">Lorem Ipsum is Simply</div>
        </div>
      </div>

    </div>

  </section>

    <!-- ------------footer----------- -->
    <?php include('../footer/footer.php'); ?>
    <!-- ------------footer----------- -->

    <script src="../header/header.js"></script>
    <script src="../resources/components/main.js"></script>
    <!-- <script src="booking.js"></script> -->

</body>

</html>