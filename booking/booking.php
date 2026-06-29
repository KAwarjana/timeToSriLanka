<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time to Ceylon</title>
  <link rel="icon" type="image/png" href="../resources/img/logo.png">
  
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
    <div class="hero-video-wrap">
      <div class="hero-video">
        <img src="../resources/img/experiences/1.jpeg" alt="Hero Video" class="hero-video-content">
      </div>
      <div class="hero-overlay"></div>
    </div>

    <div class="hero-content">
      <span class="hero-bar"></span>
       <h1 class="hero-title" data-en="Book Your Journey" data-si="ඔබේ ගමන වෙන්කරවා ගන්න" data-ta="Boek Uw Reis">Book Your Journey</h1>
    </div>
  </section>

  <section class="booking-section">
    <div class="booking-left">
      <div class="booking-label" data-en="BOOKING" data-si="බුක් කිරීම" data-ta="BOEKING">BOOKING</div>
      <h2 class="booking-title" data-en="Plan Your <span>Dream Escape</span>" data-si="ඔබගේ <span>සිහිනයෙන් පිරුණු ගමන</span> සැලසුම් කරන්න" data-ta="Plan Uw <span>Droomreis</span>">Plan Your <span>Dream Escape</span></h2>
      <p class="booking-desc" data-en="Let us design a seamless Sri Lanka escape around your pace, interests, and travel dreams." data-si="ඔබේ වේගය, උනන්දුව සහ සංචාර සිහිනය අනුව ශ්‍රී ලංකාවේ සරල හා මනකැලැම්මක් පිරුණු ගමනක් අපි ඔබ වෙනුවෙන් සකස් කර දෙමු." data-ta="Laat ons een naadloze Sri Lanka-reis ontwerpen rond uw tempo, interesses en reisdromen.">Let us design a seamless Sri Lanka escape around your pace, interests, and travel dreams.</p>
    </div>

    <div class="booking-right">
      <div class="form-heading" data-en="BOOK A TOUR" data-si="ගමනක් වෙන්කරන්න" data-ta="BOEK EEN REIS">BOOK A TOUR</div>
      <div class="fields-wrap">

        <div class="field-row two-col">
          <div class="field-box">
            <label class="field-label" data-en="Your Name" data-si="ඔබේ නම" data-ta="Uw Naam">Your Name</label>
            <input class="field-input" type="text" data-placeholder-en="Please Enter Your Name" data-placeholder-si="ඔබේ නම ඇතුලත් කරන්න" data-placeholder-ta="Vul uw naam in" />
          </div>
          <div class="field-box">
            <label class="field-label" data-en="Your Mobile Number" data-si="ඔබේ ජංගම අංකය" data-ta="Uw Mobiele Nummer">Your Mobile Number</label>
            <input class="field-input" type="tel" data-placeholder-en="Please Enter Your Mobile Number" data-placeholder-si="ඔබේ ජංගම අංකය ඇතුලත් කරන්න" data-placeholder-ta="Vul uw mobiele nummer in" />
          </div>
        </div>

        <div class="field-row one-col">
          <div class="field-box">
            <label class="field-label" data-en="Your Email" data-si="ඔබේ විද්‍යුත් තැපෑල" data-ta="Uw Email">Your Email</label>
            <input class="field-input" type="email" data-placeholder-en="Please Enter Your Email" data-placeholder-si="ඔබේ විද්‍යුත් තැපෑල ඇතුලත් කරන්න" data-placeholder-ta="Vul uw e-mail in" />
          </div>
        </div>

        <div class="field-row two-col">
          <div class="field-box" id="box-date-from">
            <label class="field-label" data-en="Date From" data-si="ආරම්භ දිනය" data-ta="Vanaf datum">Date From</label>
            <div class="custom-date" id="cd-from" onclick="openDatePicker('from')">
              <span class="date-display" id="cd-from-display">dd / mm / yyyy</span>
              <svg class="date-icon" viewBox="0 0 20 20" fill="none">
                <rect x="2" y="4" width="16" height="14" rx="2" stroke="#aaa" stroke-width="1.5" />
                <path d="M2 8h16" stroke="#aaa" stroke-width="1.5" />
                <path d="M6 2v4M14 2v4" stroke="#aaa" stroke-width="1.5" stroke-linecap="round" />
              </svg>
            </div>
            <div class="cal-popup" id="cal-from"></div>
          </div>
          <div class="field-box" id="box-date-to">
            <label class="field-label" data-en="Date To" data-si="අවසන් දිනය" data-ta="Tot datum">Date To</label>
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

        <div class="field-row two-col">
          <div class="field-box">
            <label class="field-label" data-en="Destination" data-si="ගමනාන්තය" data-ta="Bestemming">Destination</label>
            <input class="field-input" type="text" data-placeholder-en="Please Enter Your Destination" data-placeholder-si="ඔබගේ ගමනාන්තය ඇතුලත් කරන්න" data-placeholder-ta="Vul uw bestemming in" />
          </div>
          <div class="field-box">
            <label class="field-label" data-en="Persons" data-si="පිරිස" data-ta="Personen">Persons</label>
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

        <div class="field-row two-col">
          <div class="field-box">
            <label class="field-label" data-en="Kids" data-si="ළමයින්" data-ta="Kinderen">Kids</label>
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
            <label class="field-label" data-en="Average Age Of Children" data-si="ළමයින්ගේ සාමාන්‍ය වයස" data-ta="Gemiddelde leeftijd van kinderen">Average Age Of Children</label>
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

        <div class="field-row one-col">
          <div class="field-box">
            <label class="field-label" data-en="Special Request" data-si="විශේෂ ඉල්ලීම" data-ta="Speciale aanvraag">Special Request</label>
            <textarea class="field-input field-textarea" data-placeholder-en="Please Enter Your Special Request" data-placeholder-si="ඔබගේ විශේෂ ඉල්ලීම ඇතුලත් කරන්න" data-placeholder-ta="Vul uw speciale aanvraag in"></textarea>
          </div>
        </div>

        <div class="book-now-btn" data-en="BOOK NOW" data-si="දැන් වෙන්කරන්න" data-ta="BOEK NU">BOOK NOW</div>

      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="testimonials-wrapper">
      <div class="inner-grid">
        <div class="left-card" id="testimonialCard">
          <div class="profile-row">
            <div class="profile-img-placeholder" id="profileInitial">A</div>
            <div class="profile-info">
              <h3 id="customerName">Amal Perera</h3>
              <span id="customerCountry">Sri Lanka</span>
            </div>
          </div>
          <p class="testimonial-text" id="testimonialText">
            The itinerary felt effortless from the moment we landed. Every stop was thoughtfully arranged and the local guidance made the trip feel personal and relaxing.
          </p>
          <div class="stars" id="starsContainer">
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
            <span class="star">★</span>
          </div>
        </div>

        <div class="right-section">
          <div>
            <p class="section-label" data-en="Testimonials" data-si="සந்தේශයන්" data-ta="Getuigenissen">Testimonials</p>
            <h2 class="section-title" data-en="What Our <span class='accent'>Clients Say</span>" data-si="අපගේ <span class='accent'>අමුත්තන්</span> කියන්නේ කුමක්ද" data-ta="Wat Onze <span class='accent'>Klanten Zeggen</span>">What Our <span class="accent">Clients Say</span></h2>
            <div class="progress-dots" id="progressDots"></div>
            <p class="right-text" id="rightText">
              Amal's story reflects the calm, polished experience we create for travelers who want comfort, culture, and memorable moments in Sri Lanka.
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