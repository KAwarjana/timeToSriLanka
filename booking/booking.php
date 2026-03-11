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
  <link rel="stylesheet" href="booking.css">
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

  <section class="booking-section">

    <!-- Left -->
    <div class="booking-left">
      <div class="booking-label">BOOKING</div>
      <h2 class="booking-title">Topic Or <span>Something</span></h2>
      <p class="booking-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>

    <!-- Right -->
    <div class="booking-right">
      <div class="form-heading">BOOK A TOUR</div>
      <div class="fields-wrap">

        <!-- Row 1: Name + Mobile -->
        <div class="field-row two-col">
          <div class="field-box">
            <label class="field-label">Your Name</label>
            <input class="field-input" type="text" placeholder="Please Enter Your Name" />
          </div>
          <div class="field-box">
            <label class="field-label">Your Mobile Number</label>
            <input class="field-input" type="tel" placeholder="Please Enter Your Mobile Number" />
          </div>
        </div>

        <!-- Row 2: Email -->
        <div class="field-row one-col">
          <div class="field-box">
            <label class="field-label">Your Email</label>
            <input class="field-input" type="email" placeholder="Please Enter Your Email" />
          </div>
        </div>

        <!-- Row 3: Date From + Date To -->
        <div class="field-row two-col">
          <div class="field-box" id="box-date-from">
            <label class="field-label">Date From</label>
            <div class="custom-date" id="cd-from" onclick="openDatePicker('from')">
              <span class="date-display" id="cd-from-display">dd / mm / yyyy</span>
              <svg class="date-icon" viewBox="0 0 20 20" fill="none">
                <rect x="2" y="4" width="16" height="14" rx="2" stroke="#aaa" stroke-width="1.5" />
                <path d="M2 8h16" stroke="#aaa" stroke-width="1.5" />
                <path d="M6 2v4M14 2v4" stroke="#aaa" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </div>
            <!-- Calendar popup -->
            <div class="cal-popup" id="cal-from"></div>
          </div>
          <div class="field-box" id="box-date-to">
            <label class="field-label">Date To</label>
            <div class="custom-date" id="cd-to" onclick="openDatePicker('to')">
              <span class="date-display" id="cd-to-display">dd / mm / yyyy</span>
              <svg class="date-icon" viewBox="0 0 20 20" fill="none">
                <rect x="2" y="4" width="16" height="14" rx="2" stroke="#aaa" stroke-width="1.5" />
                <path d="M2 8h16" stroke="#aaa" stroke-width="1.5" />
                <path d="M6 2v4M14 2v4" stroke="#aaa" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </div>
            <div class="cal-popup" id="cal-to"></div>
          </div>
        </div>

        <!-- Row 4: Destination + Persons -->
        <div class="field-row two-col">
          <div class="field-box">
            <label class="field-label">Destination</label>
            <input class="field-input" type="text" placeholder="Please Enter Your Destination" />
          </div>
          <div class="field-box">
            <label class="field-label">Persons</label>
            <div class="custom-select" id="sel-persons">
              <div class="cs-display" onclick="toggleDropdown('sel-persons')">
                <span class="cs-value">1 Person</span>
                <svg class="cs-arrow" viewBox="0 0 10 6">
                  <path d="M0 0l5 6 5-6z" fill="#aaa" />
                </svg>
              </div>
              <div class="cs-dropdown">
                <div class="cs-option" onclick="selectOption('sel-persons','1 Person')">1 Person</div>
                <div class="cs-option" onclick="selectOption('sel-persons','2 Persons')">2 Persons</div>
                <div class="cs-option" onclick="selectOption('sel-persons','3 Persons')">3 Persons</div>
                <div class="cs-option" onclick="selectOption('sel-persons','4 Persons')">4 Persons</div>
                <div class="cs-option" onclick="selectOption('sel-persons','5 Persons')">5 Persons</div>
                <div class="cs-option" onclick="selectOption('sel-persons','6+ Persons')">6+ Persons</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 5: Kids + Average Age -->
        <div class="field-row two-col">
          <div class="field-box">
            <label class="field-label">Kids</label>
            <div class="custom-select" id="sel-kids">
              <div class="cs-display" onclick="toggleDropdown('sel-kids')">
                <span class="cs-value">None</span>
                <svg class="cs-arrow" viewBox="0 0 10 6">
                  <path d="M0 0l5 6 5-6z" fill="#aaa" />
                </svg>
              </div>
              <div class="cs-dropdown">
                <div class="cs-option" onclick="selectKids('None')">None</div>
                <div class="cs-option" onclick="selectKids('1')">1</div>
                <div class="cs-option" onclick="selectKids('2')">2</div>
                <div class="cs-option" onclick="selectKids('3')">3</div>
                <div class="cs-option" onclick="selectKids('4+')">4+</div>
              </div>
            </div>
          </div>
          <div class="field-box" id="box-age">
            <label class="field-label">Average Age Of Children</label>
            <div class="custom-select disabled" id="sel-age">
              <div class="cs-display" onclick="toggleDropdown('sel-age')">
                <span class="cs-value placeholder">Please Select The Age</span>
                <svg class="cs-arrow" viewBox="0 0 10 6">
                  <path d="M0 0l5 6 5-6z" fill="#ccc" />
                </svg>
              </div>
              <div class="cs-dropdown">
                <div class="cs-option" onclick="selectOption('sel-age','Under 5 years')">Under 5 years</div>
                <div class="cs-option" onclick="selectOption('sel-age','5 – 8 years')">5 – 8 years</div>
                <div class="cs-option" onclick="selectOption('sel-age','9 – 12 years')">9 – 12 years</div>
                <div class="cs-option" onclick="selectOption('sel-age','13 – 15 years')">13 – 15 years</div>
                <div class="cs-option" onclick="selectOption('sel-age','16+ years')">16+ years</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 6: Special Request -->
        <div class="field-row one-col">
          <div class="field-box">
            <label class="field-label">Special Request</label>
            <textarea class="field-input field-textarea" placeholder="Please Enter Your Special Request"></textarea>
          </div>
        </div>

        <!-- Button -->
        <div class="book-now-btn">BOOK NOW</div>

      </div>
    </div>
  </section>

  <section class="testimonials">

    <div class="testimonials-wrapper">
      <div class="inner-grid">

        <!-- LEFT: Testimonial Card -->
        <div class="left-card" id="testimonialCard">
          <div class="profile-row">
            <div class="profile-img-placeholder" id="profileInitial">A</div>
            <div class="profile-info">
              <h3 id="customerName">Amal Perera</h3>
              <span id="customerCountry">Sri Lanka</span>
            </div>
          </div>
          <p class="testimonial-text" id="testimonialText">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and
            typesetting industry.
          </p>
          <div class="stars" id="starsContainer">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
        </div>

        <!-- RIGHT: Title + Description + Buttons -->
        <div class="right-section">
          <div>
            <p class="section-label">Testimonials</p>
            <h2 class="section-title">What Our <span class="accent">Clients Say</span></h2>
            <div class="progress-dots" id="progressDots"></div>
            <p class="right-text" id="rightText">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and
              typesetting industry.
            </p>
          </div>
          <div class="nav-buttons">
            <button class="nav-btn" id="prevBtn" onclick="changeSlide('prev')"><img
                src="../resources/img/home/arrow.png" class="arrow--img"></button>
            <button class="nav-btn" id="nextBtn" onclick="changeSlide('next')"><img
                src="../resources/img/home/arrow.png" class="arrow--img"></button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ------------footer----------- -->
  <?php include('../footer/footer.php'); ?>
  <!-- ------------footer----------- -->

  <script src="../header/header.js"></script>
  <script src="../resources/components/main.js"></script>
  <script src="booking.js"></script>

</body>

</html>