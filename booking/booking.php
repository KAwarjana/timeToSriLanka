<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time to Ceylon</title>
  <link rel="icon" type="image/png" href="../resources/img/logo.webp">
  
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
     SECTION 1 - HERO (video background)
══════════════════════════════════════ -->
  <section class="hero">
    <div class="hero-video-wrap">
      <div class="hero-video">
        <img src="../resources/img/pageBanners/pexels-akos-helgert-82252426-9013701.webp" alt="Hero Video" class="hero-video-content">
      </div>
      <div class="hero-overlay"></div>
    </div>

    <div class="hero-content">
      <span class="hero-bar"></span>
       <h1 class="hero-title" data-en="Book Your Journey" data-si="ඔබේ ගමන වෙන්කරවා ගන්න" data-ta="Plan Uw Reis">Book Your Journey</h1>
    </div>
  </section>

  <section class="booking-section">
    <div class="booking-left">
      <div class="booking-label" data-en="BOOKING" data-si="බුක් කිරීම" data-ta="UW REISAANVRAAG">BOOKING</div>
      <h2 class="booking-title" data-en="Plan Your <span>Dream Escape</span>" data-si="ඔබගේ <span>සිහිනයෙන් පිරුණු ගමන</span> සැලසුම් කරන්න" data-ta="Plan Uw <span>Droomreis</span>">Plan Your <span>Dream Escape</span></h2>
      <p class="booking-desc" data-en="Let us design a seamless Sri Lanka escape around your pace, interests, and travel dreams." data-si="ඔබේ ගමන් පහසුව, රුචිකත්වයන් සහ සංචාරක සිහිනවලට ගැළපෙන පරිදි, ශ්‍රී ලංකාවේ අමතක නොවන සංචාරයක් අපි ඔබ වෙනුවෙන් සැලසුම් කරමු." data-ta="Laat ons een zorgeloze rondreis door Sri Lanka samenstellen die past bij uw tempo, interesses en reiswensen.">Let us design a seamless Sri Lanka escape around your pace, interests, and travel dreams.</p>
    </div>

    <div class="booking-right">
      <div class="form-heading" data-en="BOOK A TOUR" data-si="ගමනක් වෙන්කරන්න" data-ta="VRAAG EEN REIS AAN">BOOK A TOUR</div>
      <div class="fields-wrap">

        <div class="field-row two-col">
          <div class="field-box">
            <label class="field-label" data-en="Your Name *" data-si="ඔබේ නම *" data-ta="Uw Naam *">Your Name *</label>
            <input class="field-input" id="bkFullName" type="text" minlength="2" maxlength="100" data-placeholder-en="Please Enter Your Name" data-placeholder-si="ඔබේ නම ඇතුලත් කරන්න" data-placeholder-ta="Vul uw naam in" />
          </div>
          <div class="field-box">
            <label class="field-label" data-en="Your Mobile Number *" data-si="ඔබේ දුරකතන අංකය *" data-ta="Uw Mobiele Nummer *">Your Mobile Number *</label>
            <input class="field-input" id="bkMobile" type="tel" minlength="7" maxlength="20" data-placeholder-en="Please Enter Your Mobile Number" data-placeholder-si="ඔබේ දුරකතන අංකය ඇතුලත් කරන්න" data-placeholder-ta="Vul uw mobiele nummer in" />
          </div>
        </div>

        <div class="field-row one-col">
          <div class="field-box">
            <label class="field-label" data-en="Your Email *" data-si="ඔබේ විද්‍යුත් තැපැල් ලිපිනය *" data-ta="Uw E-mailadres *">Your Email *</label>
            <input class="field-input" id="bkEmail" type="email" maxlength="150" data-placeholder-en="Please Enter Your Email" data-placeholder-si="ඔබේ විද්‍යුත් තැපැල් ලිපිනය ඇතුලත් කරන්න" data-placeholder-ta="Vul uw e-mailadres in" />
          </div>
        </div>

        <div class="field-row two-col">
          <div class="field-box" id="box-date-from">
            <label class="field-label" data-en="Date From *" data-si="ආරම්භක දිනය *" data-ta="Vertrekdatum *">Date From *</label>
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
            <label class="field-label" data-en="Date To *" data-si="අවසන් දිනය *" data-ta="Einddatum *">Date To *</label>
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
            <label class="field-label" data-en="Destination *" data-si="ගමනාන්තය *" data-ta="Gewenste Bestemming *">Destination *</label>
            <input class="field-input" id="bkDestination" type="text" minlength="2" maxlength="150" data-placeholder-en="Please Enter Your Destination" data-placeholder-si="ඔබගේ ගමනාන්තය ඇතුලත් කරන්න" data-placeholder-ta="Vul uw gewenste bestemming in" />
          </div>
          <div class="field-box">
            <label class="field-label" data-en="Persons *" data-si="පිරිස *" data-ta="Aantal Reizigers *">Persons *</label>
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
            <label class="field-label" data-en="Kids (Optional)" data-si="ළමයින් (විකල්ප)" data-ta="Aantal kinderen (optioneel)">Kids (Optional)</label>
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
            <label class="field-label" data-en="Average Age Of Children (Optional)" data-si="ළමයින්ගේ සාමාන්‍ය වයස (විකල්ප)" data-ta="Gemiddelde leeftijd van de kinderen (optioneel)">Average Age Of Children (Optional)</label>
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
            <label class="field-label" data-en="Special Request (Optional)" data-si="විශේෂ ඉල්ලීම (විකල්ප)" data-ta="Bijzondere wensen (optioneel)">Special Request (Optional)</label>
            <textarea class="field-input field-textarea" id="bkSpecialRequest" maxlength="1000" data-placeholder-en="Please Enter Your Special Request" data-placeholder-si="ඔබගේ විශේෂ ඉල්ලීම ඇතුලත් කරන්න" data-placeholder-ta="Vertel ons uw bijzondere wensen"></textarea>
          </div>
        </div>

        <div class="book-now-btn" id="bkSubmitBtn" onclick="bkHandleSend()" data-en="BOOK NOW" data-si="දැන් වෙන්කරන්න" data-ta="BOEK NU">BOOK NOW</div>

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
              <h3 id="customerName" data-en="Amal Perera" data-si="අමල් පෙරේරා" data-ta="Amal Perera">Amal Perera</h3>
              <span id="customerCountry" data-en="Sri Lanka" data-si="ශ්‍රී ලංකාව" data-ta="Sri Lanka">Sri Lanka</span>
            </div>
          </div>
          <p class="testimonial-text" id="testimonialText" data-en="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry." data-si="ලොරිම් ඉප්සම් යනු මුද්‍රණ හා වර්ගලේඛන කර්මාන්තයේ සරලව භාවිතා වන දර්ශක වචන සමූහයකි. ලොරිම් ඉප්සම් 1500 ගණන්වල සිට සම්මත පෙළක් ලෙස භාවිතා වී ඇත." data-ta="Lorem Ipsum is gewoon dummytekst van de druk- en zetindustrie. Lorem Ipsum is al sinds de 1500s de standaard dummytekst in de industrie.">
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
            <p class="section-label" data-en="Testimonials" data-si="සමාලෝචන" data-ta="Getuigenissen">Testimonials</p>
            <h2 class="section-title" data-en="Create Your Perfect <span class='accent'>Travel Experience</span>" data-si="ඔබේ <span class='accent'>සිහින සංචාරය</span> නිර්මාණය කරගන්න" data-ta="Laat Ons Uw Ideale Rondreis <span class='accent'>Samenstellen</span>">Create Your Perfect <span class="accent">Travel Experience</span></h2>
            <div class="progress-dots" id="progressDots"></div>
            <p class="right-text" id="rightText" data-en="Share your travel aspirations with us and let TimetoCeylon create an exclusive, fully tailored journey designed around your desires. From carefully selected destinations to personalized service in every detail, we craft an unforgettable Sri Lanka experience that perfectly matches your expectations." data-si="ඔබ සිතේ ඇති සංචාරක සිහින සහ බලාපොරොත්තු අප සමඟ බෙදාගන්න. ඔබේ රුචිකත්වයන් සහ අවශ්‍යතාවලට ගැළපෙන පරිදි සෑම දෙයක්ම සැලසුම් කළ සුවිශේෂී සංචාරයක් TimetoCeylon සමඟින් අත්විඳින්න. සැලකිල්ලෙන් තෝරාගත් ගමනාන්තයන්ගේ සිට, සෑම විස්තරයකටම ගැළපෙන පුද්ගලික සේවාව දක්වා, ඔබේ බලාපොරොත්තු සමඟ මනාව ගැළපෙන අමතක නොවන ශ්‍රී ලංකා සංචාරක අත්දැකීමක් අපි ඔබ වෙනුවෙන් නිර්මාණය කරමු." data-ta="Deel uw reiswensen met ons en laat TimetoCeylon een exclusieve, volledig op maat gemaakte reis samenstellen. Van zorgvuldig geselecteerde bestemmingen tot persoonlijke service in elk detail – wij creëren een onvergetelijke Sri Lanka ervaring die perfect aansluit bij uw verwachtingen.">
              Share your travel aspirations with us and let TimetoCeylon create an exclusive, fully tailored journey designed around your desires. From carefully selected destinations to personalized service in every detail, we craft an unforgettable Sri Lanka experience that perfectly matches your expectations.
            </p>
          </div>
          <div class="nav-buttons">
            <button class="nav-btn" id="prevBtn" onclick="changeSlide('prev')"><img
                src="../resources/img/home/arrow.webp" class="arrow--img"></button>
            <button class="nav-btn" id="nextBtn" onclick="changeSlide('next')"><img
                src="../resources/img/home/arrow.webp" class="arrow--img"></button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Toast notification -->
  <div class="bk-toast" id="bkToast"></div>

  <!-- ------------footer----------- -->
  <?php include('../footer/footer.php'); ?>
  <!-- ------------footer----------- -->

  <script src="../header/header.js"></script>
  <script src="../resources/components/main.js"></script>
  <script src="booking.js"></script>

</body>

</html>