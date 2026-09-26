<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time to Ceylon</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500 ;700&family=Outfit:wght@300;400;500;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="header.css">
  <link rel="icon" type="image/png" href="../resources/img/logo_single.webp">
</head>

<body>

  <!-- TOP BAR -->
  <div class="topbar">
    <div class="topbar-left">
      <div class="topbar-phones">
        <a class="topbar-item" href="tel:+94711112208">
          <span class="topbar-flag">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 45">
              <rect width="90" height="45" fill="#8D153A" />
              <rect width="10" height="45" fill="#FF7900" />
              <rect x="10" width="10" height="45" fill="#009F4D" />
              <rect x="20" width="70" height="45" fill="#8D153A" />
              <rect x="20" width="70" height="45" fill="none" stroke="#FC0" stroke-width="3" />
              <text x="55" y="33" font-size="22" text-anchor="middle" fill="#FC0">🦁</text>
            </svg>
          </span>
          +94 71 1112208
        </a>
        <div class="topbar-divider"></div>
        <a class="topbar-item" href="https://wa.me/31618324770" target="_blank" rel="noreferrer">
          <span class="topbar-flag">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 600">
              <rect fill="#AE1C28" width="900" height="200" />
              <rect fill="#FFFFFF" y="200" width="900" height="200" />
              <rect fill="#21468B" y="400" width="900" height="200" />
            </svg>
          </span>
          +31 6 18324770
        </a>
      </div>
      <div class="topbar-divider"></div>
      <a class="topbar-item" href="mailto:info@timetoceylon.com">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="#F4F0FB" stroke="#4C00B0" stroke-width="1"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
          <polyline points="22,6 12,12 2,6" />
        </svg>
        <span class="__cf_email__"
          data-cfemail="fa8e93979f8e95898893969b94919bba9d979b9396d4999597">info@timetoceylon.com</span>
      </a>
    </div>

    <!-- Language Selector -->
    <div class="lang-select" id="langSelect" onclick="toggleLang(event)">
      <span class="lang-flag" id="activeLangFlag"><svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 60 40">
          <rect width="60" height="40" fill="#012169" />
          <path d="M0,0 L60,40 M60,0 L0,40" stroke="#f5f0ff" stroke-width="8" />
          <path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4" />
          <path d="M30,0 V40 M0,20 H60" stroke="#f5f0ff" stroke-width="12" />
          <path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="7" />
        </svg></span>
      <span id="activeLangName">English</span>
      <span class="arrow"></span>
      <div class="lang-dropdown" id="langDropdown">
        <div class="lang-option active" onclick="setLang('en',event)">
          <span class="lang-flag"
            style="width:22px;height:15px;display:inline-flex;border-radius:2px;overflow:hidden;flex-shrink:0">
            <svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 60 40" style="width:100%;height:100%">
              <rect width="60" height="40" fill="#012169" />
              <path d="M0,0 L60,40 M60,0 L0,40" stroke="#f5f0ff" stroke-width="8" />
              <path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4" />
              <path d="M30,0 V40 M0,20 H60" stroke="#f5f0ff" stroke-width="12" />
              <path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="7" />
            </svg>
          </span>
          English
        </div>
        <div class="lang-option" onclick="setLang('si',event)">
          <span class="lang-flag"
            style="width:22px;height:15px;display:inline-flex;border-radius:2px;overflow:hidden;flex-shrink:0">
            <svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 90 45" style="width:100%;height:100%">
              <rect width="90" height="45" fill="#8D153A" />
              <rect width="10" height="45" fill="#FF7900" />
              <rect x="10" width="10" height="45" fill="#009F4D" />
              <rect x="20" width="70" height="45" fill="#8D153A" rx="2" />
              <rect x="20" width="70" height="45" fill="none" stroke="#FC0" stroke-width="3" /><text x="55" y="33"
                font-size="22" text-anchor="middle" fill="#FC0">🦁</text>
            </svg>
          </span>
          සිංහල
        </div>
        <div class="lang-option" onclick="setLang('ta',event)">
          <span class="lang-flag"
            style="width:22px;height:15px;display:inline-flex;border-radius:2px;overflow:hidden;flex-shrink:0">
            <svg xmlns="http://w3.org" viewBox="0 0 900 600" width="100%" height="auto">
              <!-- Red Stripe -->
              <rect fill="#AE1C28" width="900" height="200" />
              <!-- White Stripe -->
              <rect fill="#FFFFFF" y="200" width="900" height="200" />
              <!-- Blue Stripe -->
              <rect fill="#21468B" y="400" width="900" height="200" />
            </svg>
          </span>
          Nederlands
        </div>
      </div>
    </div>
  </div>

  <!-- MAIN NAVBAR -->
  <nav class="navbar">
    <div class="logo" onclick="window.location='../home/index.php';" style="cursor:pointer;">
      <img src="../resources/img/logo_banner.webp" alt="Time to Ceylon Logo" class="header-logo-img logo-desktop-img">
      <img src="../resources/img/logo_single.webp" alt="Time to Ceylon Logo" class="header-logo-img logo-mobile-img">
    </div>

    <ul class="nav-links" id="navLinks">
      <li><a href="../home/index.php" class="active" data-en="Home" data-si="මුල් පිටුව" data-ta="Home">Home</a></li>
      <li class="has-sub" id="expDropdown">
        <a href="../experiences/experiences.php" data-en="Experience <span class='arrow'>" data-si="අත්දැකීම් <span class='arrow'>" data-ta="Belevenissen <span class='arrow'>">
          Experience <span class="arrow"></span>
        </a>
        <ul class="subnav">
          <li><a href="../experiences/adventure.php" data-en="Adventure" data-si="ඇඩ්වෙන්චර්" data-ta="Avontuur">Adventure</a></li>
          <li><a href="../experiences/wildlife-safari.php" data-en="Wildlife Safari" data-si="වනජීවී සෆාරි" data-ta="Wildlifesafari">Wildlife Safari</a></li>
          <li><a href="../experiences/cultural-discovery.php" data-en="Cultural Discovery" data-si="සංස්කෘතික ගවේෂණය" data-ta="Cultuur en erfgoed">Cultural Discovery</a></li>
          <li><a href="../experiences/ayurveda-wellness.php" data-en="Ayurveda & Wellness" data-si="ආයුර්වේද හා සුවතා" data-ta="Ayurveda & Welzijn">Ayurveda & Wellness</a></li>
          <li><a href="../experiences/scenic-journeys.php" data-en="Scenic Journeys" data-si="සුන්දර ගමන්" data-ta="Bijzondere rondreizen">Scenic Journeys</a></li>
          <li><a href="../experiences/coastal-escape.php" data-en="Coastal Escape" data-si="මුහුදු වෙරළේ විවේකය" data-ta="Kust en stranden">Coastal Escape</a></li>
        </ul>
      </li>
      <li class="has-sub" id="svcDropdown">
        <a href="../services/services.php" data-en="Services <span class='arrow'>" data-si="සේවාවන් <span class='arrow'>" data-ta="Diensten <span class='arrow'>">
          Services <span class="arrow"></span>
        </a>
        <ul class="subnav">
          <li><a href="../services/services.php#hotel" data-en="Private Chauffeur Tours" data-si="පුද්ගලික චෛෆුවර් චාරිකා" data-ta="Privérondreizen met chauffeur">Private Chauffeur Tours</a></li>
          <li><a href="../services/services.php#transport" data-en="Tailor-Made Itineraries" data-si="අභිරුචි සැලසුම් ගමන්" data-ta="Reizen op maat">Tailor-Made Itineraries</a></li>
          <li><a href="../services/services.php#guided" data-en="Handpicked Accommodations" data-si="තෝරාගත් නවාතැන්" data-ta="Zorgvuldig geselecteerde accommodaties">Handpicked Accommodations</a></li>
          <li><a href="../services/services.php#guided" data-en="Airport Meet & Transfer" data-si="වායුගත මුණගැස්ම සහ මාරු කිරීම" data-ta="Ontvangst en transfer vanaf de luchthaven">Airport Meet & Transfer</a></li>
          <li><a href="../services/services.php#guided" data-en="Local Travel Concierge" data-si="දේශීය සංචාර උපදේශක" data-ta="Persoonlijke reisassistentie ter plaatse">Local Travel Concierge</a></li>
          <li><a href="../services/services.php#guided" data-en="24/7 Guest Assistance" data-si="24/7 අමුත්තන්ට සහාය" data-ta="24/7 gastondersteuning">24/7 Guest Assistance</a></li>
        </ul>
      </li>
      <li><a href="../packages/packages.php" data-en="Packages" data-si="පැකේජ" data-ta="Pakketten">Packages</a></li>
      <li><a href="../destination/destination.php" data-en="Destinations" data-si="ගමනාන්ත" data-ta="Bestemmingen">Destinations</a></li>
    </ul>

    <div class="nav-right">
      <button class="toggle-btn" id="toggleBtn" onclick="togglePanel()" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
      <button class="book-btn" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="BOEK NU" onclick="window.location='../booking/booking.php';">BOOK
        NOW</button>
    </div>
  </nav>

  <!-- OVERLAY -->
  <div class="overlay" id="overlay" onclick="closePanel()"></div>

  <!-- SIDE PANEL -->
  <aside class="side-panel" id="sidePanel">
    <div class="panel-bg-img" id="panelBgImg"></div>
    <div class="panel-inner">

      <!-- Header -->
      <div class="panel-header">
        <div class="panel-logo">
          <div class="panel-logo-icon">
            <img src="../resources/img/logo_banner.webp" alt="Time to Ceylon Logo" class="header-logo-img">
          </div>
          <!-- <div>
            <div class="panel-logo-text" data-en="Time to Ceylon" data-si="Time to Ceylon" data-ta="Time to Ceylon">Time to Ceylon</div>
            <div class="panel-logo-sub" data-en="Your Island Experience" data-si="ඔබේ දූපත් අත්දැකීම" data-ta="Uw eiland Belevenissen">Your Island Experience</div>
          </div> -->
        </div>
        <button class="panel-close" onclick="closePanel()">✕</button>
      </div>

      <!-- Navigation -->
      <div class="panel-nav">
        <div class="panel-nav-label" data-en="Navigation" data-si="නාවිගේෂනය" data-ta="Navigatie">Navigation</div>
        <ul class="panel-nav-list">
          <li class="panel-nav-item">
            <a href="../home/index.php" class="active" data-en="Home" data-si="මුල් පිටුව" data-ta="Home">
              🏠 Home
            </a>
          </li>
          <li class="panel-nav-item" id="pExp">
            <a href="../experiences/experiences.php" onclick="togglePanelSub('pExp',event)" data-en="Experience" data-si="අත්දැකීම්"
              data-ta="Belevenissen">
              🌴 <span data-en="Experience" data-si="අත්දැකීම්" data-ta="Belevenissen">Experience</span>
              <span class="panel-chevron"></span>
            </a>
            <ul class="panel-subnav">
              <li><a href="../experiences/adventure.php" data-en="Adventure" data-si="ඇඩ්වෙන්චර්" data-ta="Avontuur">Adventure</a></li>
              <li><a href="../experiences/wildlife-safari.php" data-en="Wildlife Safari" data-si="වනජීවී සෆාරි" data-ta="Wildlife safaritocht">Wildlife Safari</a></li>
              <li><a href="../experiences/cultural-discovery.php" data-en="Cultural Discovery" data-si="සංස්කෘතික ගවේෂණය" data-ta="Culturele Ontdekking">Cultural Discovery</a></li>
              <li><a href="../experiences/ayurveda-wellness.php" data-en="Ayurveda & Wellness" data-si="ආයුර්වේද හා සුවතා" data-ta="Ayurveda & Welzijn">Ayurveda & Wellness</a></li>
              <li><a href="../experiences/scenic-journeys.php" data-en="Scenic Journeys" data-si="ද්‍රුපීත ගමන්" data-ta="Scenische reizen">Scenic Journeys</a></li>
              <li><a href="../experiences/coastal-escape.php" data-en="Coastal Escape" data-si="වෙරළ තාටා ගමන" data-ta="Kustontsnapping">Coastal Escape</a></li>
            </ul>
          </li>
          <li class="panel-nav-item" id="pSvc">
            <a href="../services/services.php" onclick="togglePanelSub('pSvc',event)" data-en="Services" data-si="සේවාවන්" data-ta="Diensten">
              🛎 <span data-en="Services" data-si="සේවාවන්" data-ta="Diensten">Services</span>
              <span class="panel-chevron"></span>
            </a>
            <ul class="panel-subnav">
              <li><a href="../services/services.php#hotel" data-en="Private Chauffeur Tours" data-si="පුද්ගලික චෛෆුවර් චාරිකා" data-ta="Privé chauffeurtochten">Private Chauffeur Tours</a></li>
              <li><a href="../services/services.php#transport" data-en="Tailor-Made Itineraries" data-si="අභිරුචි සැලසුම් ගමන්" data-ta="Gepersonaliseerde itineraries">Tailor-Made Itineraries</a></li>
              <li><a href="../services/services.php#guided" data-en="Handpicked Accommodations" data-si="තෝරාගත් නවාතැන්" data-ta="Handpicked accommodaties">Handpicked Accommodations</a></li>
              <li><a href="../services/services.php#guided" data-en="Airport Meet & Transfer" data-si="වායුගත මුණගැස්ම සහ මාරු කිරීම" data-ta="Luchthavenontvangst en transfer">Airport Meet & Transfer</a></li>
              <li><a href="../services/services.php#guided" data-en="Local Travel Concierge" data-si="දේශීය සංචාර උපදේශක" data-ta="Lokale reisconcierge">Local Travel Concierge</a></li>
              <li><a href="../services/services.php#guided" data-en="24/7 Guest Assistance" data-si="24/7 අමුත්තන්ට සහාය" data-ta="24/7 gastondersteuning">24/7 Guest Assistance</a></li>
            </ul>
          </li>
          <li class="panel-nav-item">
            <a href="../packages/packages.php" data-en="Packages" data-si="පැකේජ" data-ta="Pakketten">📦 <span data-en="Packages"
                data-si="පැකේජ" data-ta="Pakketten">Packages</span></a>
          </li>
          <li class="panel-nav-item">
            <a href="../destination/destination.php" data-en="Destinations" data-si="ගමනාන්ත" data-ta="Bestemmingen">📍 <span data-en="Destinations"
                data-si="ගමනාන්ත" data-ta="Bestemmingen">Destinations</span></a>
          </li>
          <li class="panel-nav-item">
            <a href="../gallery/gallery.php" data-en="Gallery" data-si="ගැලරිය" data-ta="Galerij">🖼 <span data-en="Gallery"
                data-si="ගැලරිය" data-ta="Galerij">Gallery</span></a>
          </li>
          <li class="panel-nav-item">
            <a href="../about/about.php" data-en="About Us" data-si="අප ගැන" data-ta="Over ons">ℹ️ <span data-en="About Us"
                data-si="අප ගැන" data-ta="Over ons">About Us</span></a>
          </li>
          <li class="panel-nav-item">
            <a href="../about/about.php#contact" data-en="Contact" data-si="සම්බන්ධ වන්න" data-ta="Contact">📞 <span data-en="Contact"
                data-si="සම්බන්ධ වන්න" data-ta="Contact">Contact</span></a>
          </li>
        </ul>
      </div>

      <div class="panel-divider"></div>

      <!-- Contact -->
      <div class="panel-contact">
        <div class="panel-contact-label" data-en="Contact Us" data-si="අප හා සම්බන්ධ වන්න"
          data-ta="Neem contact met ons op">Contact Us</div>
        <a class="panel-contact-item" href="tel:+94711112208">
          <span class="panel-contact-icon">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.7)"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.05 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
            </svg>
          </span>
          +94 71 1112208
        </a>
        <a class="panel-contact-item"
          href="mailto:info@timetoceylon.com">
          <span class="panel-contact-icon">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.7)"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,12 2,6" />
            </svg>
          </span>
          <span class="__cf_email__"
            data-cfemail="cfbba6a2aabba0bcbda6a3aea1a4ae8fa8a2aea6a3e1aca0a2">info@timetoceylon.com</span>
        </a>
        <div class="panel-contact-item">
          <span class="panel-contact-icon">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.7)"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="10" r="3" />
              <path d="M12 2a8 8 0 018 8c0 5.25-8 12-8 12S4 15.25 4 10a8 8 0 018-8z" />
            </svg>
          </span>
          No. 16 A 2nd cross street, Uyanwatta, Matara, Sri Lanka
        </div>
      </div>

      <div class="panel-divider"></div>

      <!-- About -->
      <div class="panel-about">
        <div class="panel-about-label" data-en="About Us" data-si="අප ගැන" data-ta="Over ons">About Us</div>
        <p data-en="Discover the pearl of the Indian Ocean. We craft unforgettable journeys across Sri Lanka's ancient temples, emerald mountains, and golden shores."
          data-si="ඉන්දීය සාගරයේ මුතු ඇටය ගවේෂණය කරන්න. අපි ශ්‍රී ලංකාවේ පුරාණ දේවස්ථාන, මරකත කඳු සහ රන් වෙරළ හරහා අමතක නොවන ගමන් සංවිධානය කරමු."
          data-ta="Ontdek de parel van de Indische Oceaan. Wij creëren onvergetelijke reizen door Sri Lanka’s oude tempels, smaragdgroene bergen en gouden stranden.">
          Discover the pearl of the Indian Ocean. We craft unforgettable journeys across Sri Lanka's ancient temples,
          emerald mountains, and golden shores.
        </p>
        <div class="panel-socials">
          <!-- Facebook -->
          <a class="panel-social-btn" href="https://www.facebook.com/share/1DB9cy6f1o/?mibextid=wwXIfr" title="Facebook" target="_blank" rel="noreferrer">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
            </svg>
          </a>
          <!-- X / Twitter -->
          <a class="panel-social-btn" href="#" title="X/Twitter" target="_blank" rel="noreferrer">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
            </svg>
          </a>
          <!-- Instagram -->
          <a class="panel-social-btn" href="https://www.instagram.com/private_sri_lanka_tours_?igsh=azZ5ZDhkODQ3N2g0&utm_source=qr" title="Instagram" target="_blank" rel="noreferrer">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2" />
              <circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="2" />
              <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" />
            </svg>
          </a>
          <!-- YouTube -->
          <a class="panel-social-btn" href="#" title="YouTube" target="_blank" rel="noreferrer">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
            </svg>
          </a>
          <!-- WhatsApp -->
          <a class="panel-social-btn" href="https://wa.me/31618324770" title="WhatsApp" target="_blank" rel="noreferrer">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Panel Book Button -->
      <div class="panel-book-wrap">
        <button class="panel-book-btn" data-en="✈ BOOK YOUR JOURNEY NOW" data-si="✈ දැන් ඔබේ ගමන වෙන් කරන්න"
          data-ta="✈ PLAN UW REIS" onclick="window.location='../booking/booking.php';">✈ BOOK YOUR JOURNEY NOW</button>
      </div>

    </div>
  </aside>
  <script src="header.js"></script>
</body>

</html>