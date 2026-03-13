<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time to Sri Lanka</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../header/header.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="../footer/footer.css">
</head>

<body>

  <?php include('../header/header.php'); ?>

  <div class="bg-blob" aria-hidden="true"></div>

  <!-- ══ HERO ══ -->
  <section class="hero">
    <div class="hero-video-wrap">
      <div class="hero-video">
        <img src="../resources/img/experiences/1.jpeg" alt="Hero" class="hero-video-content">
      </div>
      <div class="hero-overlay"></div>
    </div>
    <div class="hero-content">
      <span class="hero-bar"></span>
      <h1 class="hero-title">Topic Or Something Casual</h1>
    </div>
  </section>

  <!-- ══ ABOUT ══ -->
  <section class="about-section">

    <!-- top: image left + text right -->
    <div class="about-inner">

      <!-- LEFT: card with overlay -->
      <div class="about-card-wrap">
        <div class="card">
          <img
            class="card__img"
            src="../resources/img/Beautiful.jpeg"
            alt="About us" />
          <div class="card__overlay">
            <div class="card__label">
              <span class="label-text">Lorem Ipsum</span>
            </div>
            <div class="card__clients">
              <div class="card__circles">
                <div class="circle"><img src="../resources/img/clients/client1.jpg" alt="client 1" /></div>
                <div class="circle"><img src="../resources/img/clients/client2.jpg" alt="client 2" /></div>
                <div class="circle"><img src="../resources/img/clients/client3.jpg" alt="client 3" /></div>
              </div>
              <div class="card__clients-text">
                <span class="clients-name">Lorem Ipsum</span>
                <span class="clients-count">+ 500</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- RIGHT: text -->
      <div class="about-content">
        <span class="about-eyebrow">About Us</span>
        <h2 class="about-heading">Topic Or <span>Something</span></h2>
        <div class="about-body">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>

    </div>

    <!-- bottom: full-width paragraph -->
    <div class="about-bottom-text">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>

    <!-- stats row -->
    <div class="about-stats">
      <div class="stat-item">
        <div class="stat-icon">
          <svg viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- filled background circle -->
            <circle cx="27" cy="27" r="26" fill="#BBB1FF" />
            <!-- thin outer stroke ring -->
            <circle cx="27" cy="27" r="25" stroke="#c4baf5" stroke-width="1" fill="none" />
            <!-- main person: head -->
            <circle cx="22" cy="22" r="4.5" stroke="#6f26ec" stroke-width="1.8" fill="none" />
            <!-- main person: shoulders -->
            <path d="M13.5 35.5c0-4.7 3.8-8.5 8.5-8.5s8.5 3.8 8.5 8.5" stroke="#7c3aed" stroke-width="1.8" stroke-linecap="round" fill="none" />
            <!-- secondary person: head (faded) -->
            <circle cx="32" cy="21" r="3.2" stroke="#604ed8" stroke-width="1.4" fill="none" />
            <!-- secondary person: shoulders (faded) -->
            <path d="M26.5 33c0.8-2.8 3.2-4.8 6-4.8 2.8 0 5.2 2 6 4.8" stroke="#604ed8" stroke-width="1.4" stroke-linecap="round" fill="none" />
          </svg>
        </div>
        <div class="stat-text">
          <span class="stat-number">45+</span>
          <span class="stat-label">Lorem Ipsum Is Simply</span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon">
          <svg viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- filled background circle -->
            <circle cx="27" cy="27" r="26" fill="#BBB1FF" />
            <!-- thin outer stroke ring -->
            <circle cx="27" cy="27" r="25" stroke="#c4baf5" stroke-width="1" fill="none" />
            <!-- main person: head -->
            <circle cx="22" cy="22" r="4.5" stroke="#6f26ec" stroke-width="1.8" fill="none" />
            <!-- main person: shoulders -->
            <path d="M13.5 35.5c0-4.7 3.8-8.5 8.5-8.5s8.5 3.8 8.5 8.5" stroke="#7c3aed" stroke-width="1.8" stroke-linecap="round" fill="none" />
            <!-- secondary person: head (faded) -->
            <circle cx="32" cy="21" r="3.2" stroke="#604ed8" stroke-width="1.4" fill="none" />
            <!-- secondary person: shoulders (faded) -->
            <path d="M26.5 33c0.8-2.8 3.2-4.8 6-4.8 2.8 0 5.2 2 6 4.8" stroke="#604ed8" stroke-width="1.4" stroke-linecap="round" fill="none" />
          </svg>
        </div>
        <div class="stat-text">
          <span class="stat-number">4k+</span>
          <span class="stat-label">Lorem Ipsum Is Simply</span>
        </div>
      </div>
      <div class="stat-divider"></div>
      <div class="stat-item">
        <div class="stat-icon">
          <svg viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- filled background circle -->
            <circle cx="27" cy="27" r="26" fill="#BBB1FF" />
            <!-- thin outer stroke ring -->
            <circle cx="27" cy="27" r="25" stroke="#c4baf5" stroke-width="1" fill="none" />
            <!-- main person: head -->
            <circle cx="22" cy="22" r="4.5" stroke="#6f26ec" stroke-width="1.8" fill="none" />
            <!-- main person: shoulders -->
            <path d="M13.5 35.5c0-4.7 3.8-8.5 8.5-8.5s8.5 3.8 8.5 8.5" stroke="#7c3aed" stroke-width="1.8" stroke-linecap="round" fill="none" />
            <!-- secondary person: head (faded) -->
            <circle cx="32" cy="21" r="3.2" stroke="#604ed8" stroke-width="1.4" fill="none" />
            <!-- secondary person: shoulders (faded) -->
            <path d="M26.5 33c0.8-2.8 3.2-4.8 6-4.8 2.8 0 5.2 2 6 4.8" stroke="#604ed8" stroke-width="1.4" stroke-linecap="round" fill="none" />
          </svg>
        </div>
        <div class="stat-text">
          <span class="stat-number">5.8</span>
          <span class="stat-label">Lorem Ipsum Is Simply</span>
        </div>
      </div>
    </div>

  </section>


  <section class="contact-section">
 
    <!-- purple background band -->
    <div class="bg-purple"></div>
 
    <!-- top row: text (left) + arch photo (right) -->
    <div class="contact-layout">
 
      <div class="text-wrap">
        <p class="label">Contact</p>
        <h2 class="title">
          <span class="t-white">Topic Or </span><span class="t-accent">Something</span>
        </h2>
        <p class="body-text">
          Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting
          Industry. Lorem Ipsum Has Been The Industry's Standard Dummy Text
          Ever Since The 1500s Lorem Ipsum Is Simply Dummy Text Of The
          Printing And Typesetting Industry.
        </p>
      </div>
 
      <!-- arch photo -->
      <div class="arch-wrap">
        <div class="arch-outline"></div>
        <div class="arch-photo">
          <img src="../resources/img/home/3.jpeg" alt="Two hikers walking through forest" />
        </div>
      </div>
 
    </div>
 
    <!-- bottom row: contact info (white zone) -->
    <div class="contact-info">
      <h3>Contact Information</h3>
      <p class="info-desc">
        Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has
        Been The Industry's Standard Dummy Text Ever Since The 1500s Lorem Ipsum Is Simply Dummy
        Text Of The Printing And Typesetting Industry.
      </p>
      <div class="contact-cards">
 
        <!-- Phone -->
        <div class="contact-card">
          <div class="contact-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/>
            </svg>
          </div>
          <strong>+ 0000000000</strong>
          <span>Lorem Ipsum Is Simply</span>
        </div>
 
        <!-- Email -->
        <div class="contact-card">
          <div class="contact-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
          </div>
          <strong><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e4858687a48389858d88ca878b89">[email&#160;protected]</a></strong>
          <span>Lorem Ipsum Is Simply</span>
        </div>
 
        <!-- Location -->
        <div class="contact-card">
          <div class="contact-icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
            </svg>
          </div>
          <strong>Colombo, Sri Lanka</strong>
          <span>Lorem Ipsum Is Simply</span>
        </div>
 
      </div>
    </div>
 
  </section>

  <?php include('../footer/footer.php'); ?>

  <script src="../header/header.js"></script>
  <script src="../resources/components/main.js"></script>

</body>

</html>