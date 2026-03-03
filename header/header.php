<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time to Sri Lanka</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Outfit:wght@300;400;500;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="header.css">
</head>

<body>

    <!-- TOP BAR -->
    <div class="topbar">
      <div class="topbar-left">
        <a class="topbar-item" href="tel:+94255528956">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="#F4F0FB" stroke="#4C00B0" stroke-width="1"
            stroke-linecap="round" stroke-linejoin="round">
            <path
              d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.05 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
          </svg>
          +94 255 528 956
        </a>
        <div class="topbar-divider"></div>
        <a class="topbar-item" href="/cdn-cgi/l/email-protection#384c51555d4c574b4a515459565359785f55595154165b5755">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="#F4F0FB" stroke="#4C00B0" stroke-width="1"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
            <polyline points="22,6 12,12 2,6" />
          </svg>
          <span class="__cf_email__"
            data-cfemail="fa8e93979f8e95898893969b94919bba9d979b9396d4999597">[email&#160;protected]</span>
        </a>
      </div>

      <!-- Language Selector -->
      <div class="lang-select" id="langSelect" onclick="toggleLang(event)">
        <span class="lang-flag" id="activeLangFlag"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40">
            <rect width="60" height="40" fill="#012169" />
            <path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8" />
            <path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4" />
            <path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="12" />
            <path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="7" />
          </svg></span>
        <span id="activeLangName">English</span>
        <span class="arrow"></span>
        <div class="lang-dropdown" id="langDropdown">
          <div class="lang-option active" onclick="setLang('en',event)">
            <span class="lang-flag"
              style="width:22px;height:15px;display:inline-flex;border-radius:2px;overflow:hidden;flex-shrink:0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 40" style="width:100%;height:100%">
                <rect width="60" height="40" fill="#012169" />
                <path d="M0,0 L60,40 M60,0 L0,40" stroke="#fff" stroke-width="8" />
                <path d="M0,0 L60,40 M60,0 L0,40" stroke="#C8102E" stroke-width="4" />
                <path d="M30,0 V40 M0,20 H60" stroke="#fff" stroke-width="12" />
                <path d="M30,0 V40 M0,20 H60" stroke="#C8102E" stroke-width="7" />
              </svg>
            </span>
            English
          </div>
          <div class="lang-option" onclick="setLang('si',event)">
            <span class="lang-flag"
              style="width:22px;height:15px;display:inline-flex;border-radius:2px;overflow:hidden;flex-shrink:0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 45" style="width:100%;height:100%">
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
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 45" style="width:100%;height:100%">
                <rect width="90" height="45" fill="#8D153A" />
                <rect width="10" height="45" fill="#FF7900" />
                <rect x="10" width="10" height="45" fill="#009F4D" />
                <rect x="20" width="70" height="45" fill="#8D153A" rx="2" />
                <rect x="20" width="70" height="45" fill="none" stroke="#FC0" stroke-width="3" /><text x="55" y="33"
                  font-size="22" text-anchor="middle" fill="#FC0">🦁</text>
              </svg>
            </span>
            தமிழ்
          </div>
        </div>
      </div>
    </div>

    <!-- MAIN NAVBAR -->
    <nav class="navbar">
      <div class="logo">T</div>

      <ul class="nav-links" id="navLinks">
        <li><a href="../home/index.php" class="active" data-en="Home" data-si="මුල් පිටුව" data-ta="முகப்பு">Home</a></li>
        <li class="has-sub" id="expDropdown">
          <a href="../experiences/experiences.php" onclick="toggleSub('expDropdown',event)" data-en="Experience" data-si="අත්දැකීම"
            data-ta="அனுபவம்">
            Experience <span class="arrow"></span>
          </a>
          <ul class="subnav">
            <li><a href="#" data-en="Cultural Tours" data-si="සංස්කෘතික චාරිකා" data-ta="கலாச்சார சுற்றுலா">Cultural
                Tours</a></li>
            <li><a href="#" data-en="Wildlife Safari" data-si="වනජීවී සෆාරි" data-ta="வனவிலங்கு சஃபாரி">Wildlife
                Safari</a></li>
            <li><a href="#" data-en="Beach Escapes" data-si="වෙරළ ගමන" data-ta="கடற்கரை பயணம்">Beach Escapes</a></li>
            <li><a href="#" data-en="Adventure" data-si="ඇඩ්වෙන්චර්" data-ta="சாகசம்">Adventure</a></li>
          </ul>
        </li>
        <li class="has-sub" id="svcDropdown">
          <a href="../services/services.php" onclick="toggleSub('svcDropdown',event)" data-en="Services" data-si="සේවාවන්" data-ta="சேவைகள்">
            Services <span class="arrow"></span>
          </a>
          <ul class="subnav">
            <li><a href="../services/hotel-booking.php" data-en="Hotel Booking" data-si="හෝටල් වෙන් කිරීම" data-ta="ஹோட்டல் முன்பதிவு">Hotel
                Booking</a></li>
            <li><a href="#" data-en="Transport" data-si="ප්‍රවාහනය" data-ta="போக்குவரத்து">Transport</a></li>
            <li><a href="#" data-en="Guided Tours" data-si="මාර්ගෝපදේශ චාරිකා" data-ta="வழிகாட்டப்பட்ட சுற்றுலா">Guided
                Tours</a></li>
          </ul>
        </li>
        <li><a href="../experiences/experiences.php" data-en="Packages" data-si="පැකේජ" data-ta="தொகுப்புகள்">Packages</a></li>
        <li><a href="../destinations/destinations.php" data-en="Destinations" data-si="ගමනාන්ත" data-ta="இடங்கள்">Destinations</a></li>
      </ul>

      <div class="nav-right">
        <button class="toggle-btn" id="toggleBtn" onclick="togglePanel()" aria-label="Menu">
          <span></span><span></span><span></span>
        </button>
        <button class="book-btn" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="இப்போது முன்பதிவு">BOOK
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
            <div class="panel-logo-icon">T</div>
            <div>
              <div class="panel-logo-text">Time to Sri Lanka</div>
              <div class="panel-logo-sub">Your Island Experience</div>
            </div>
          </div>
          <button class="panel-close" onclick="closePanel()">✕</button>
        </div>

        <!-- Navigation -->
        <div class="panel-nav">
          <div class="panel-nav-label" data-en="Navigation" data-si="නාවිගේෂනය" data-ta="வழிசெலுத்தல்">Navigation</div>
          <ul class="panel-nav-list">
            <li class="panel-nav-item">
              <a href="../home/index.php" class="active" data-en="Home" data-si="මුල් පිටුව" data-ta="முகப்பு">
                🏠 Home
              </a>
            </li>
            <li class="panel-nav-item" id="pExp">
              <a href="../experiences/experiences.php" onclick="togglePanelSub('pExp',event)" data-en="Experience" data-si="අත්දැකීම"
                data-ta="அனுபவம்">
                🌴 <span data-en="Experience" data-si="අත්දැකීම" data-ta="அனுபவம்">Experience</span>
                <span class="panel-chevron"></span>
              </a>
              <ul class="panel-subnav">
                <li><a href="#" data-en="Cultural Tours" data-si="සංස්කෘතික චාරිකා" data-ta="கலாச்சார சுற்றுலா">Cultural
                    Tours</a></li>
                <li><a href="#" data-en="Wildlife Safari" data-si="වනජීවී සෆාරි" data-ta="வனவிலங்கு சஃபாரி">Wildlife
                    Safari</a></li>
                <li><a href="#" data-en="Beach Escapes" data-si="වෙරළ ගමන" data-ta="கடற்கரை பயணம்">Beach Escapes</a>
                </li>
                <li><a href="#" data-en="Adventure" data-si="ඇඩ්වෙන්චර්" data-ta="சாகசம்">Adventure</a></li>
              </ul>
            </li>
            <li class="panel-nav-item" id="pSvc">
              <a href="../services/services.php" onclick="togglePanelSub('pSvc',event)" data-en="Services" data-si="සේවාවන්" data-ta="சேவைகள்">
                🛎 <span data-en="Services" data-si="සේවාවන්" data-ta="சேவைகள்">Services</span>
                <span class="panel-chevron"></span>
              </a>
              <ul class="panel-subnav">
                <li><a href="#" data-en="Hotel Booking" data-si="හෝටල් වෙන් කිරීම" data-ta="ஹோட்டல் முன்பதிவு">Hotel
                    Booking</a></li>
                <li><a href="#" data-en="Transport" data-si="ප්‍රවාහනය" data-ta="போக்குவரத்து">Transport</a></li>
                <li><a href="#" data-en="Guided Tours" data-si="මාර්ගෝපදේශ චාරිකා"
                    data-ta="வழிகாட்டப்பட்ட சுற்றுலா">Guided Tours</a></li>
              </ul>
            </li>
            <li class="panel-nav-item">
              <a href="../experiences/experiences.php" data-en="Packages" data-si="පැකේජ" data-ta="தொகுப்புகள்">📦 <span data-en="Packages"
                  data-si="පැකේජ" data-ta="தொகுப்புகள்">Packages</span></a>
            </li>
            <li class="panel-nav-item">
              <a href="../destinations/destinations.php" data-en="Destinations" data-si="ගමනාන්ත" data-ta="இடங்கள்">📍 <span data-en="Destinations"
                  data-si="ගමනාන්ත" data-ta="இடங்கள்">Destinations</span></a>
            </li>
            <li class="panel-nav-item">
              <a href="../about/about.php" data-en="About Us" data-si="අප ගැන" data-ta="எங்களை பற்றி">ℹ️ <span data-en="About Us"
                  data-si="අප ගැන" data-ta="எங்களை பற்றி">About Us</span></a>
            </li>
            <li class="panel-nav-item">
              <a href="../contact/contact.php" data-en="Contact" data-si="සම්බන්ධ කරන්න" data-ta="தொடர்பு">📞 <span data-en="Contact"
                  data-si="සම්බන්ධ කරන්න" data-ta="தொடர்பு">Contact</span></a>
            </li>
          </ul>
        </div>

        <div class="panel-divider"></div>

        <!-- Contact -->
        <div class="panel-contact">
          <div class="panel-contact-label" data-en="Contact Us" data-si="අප හා සම්බන්ධ වන්න"
            data-ta="எங்களை தொடர்பு கொள்ளுங்கள்">Contact Us</div>
          <a class="panel-contact-item" href="tel:+94255528956">
            <span class="panel-contact-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.7)"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.05 1.18 2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" />
              </svg>
            </span>
            +94 255 528 956
          </a>
          <a class="panel-contact-item"
            href="/cdn-cgi/l/email-protection#087c61656d7c677b7a616469666369486f65696164266b6765">
            <span class="panel-contact-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.7)"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,12 2,6" />
              </svg>
            </span>
            <span class="__cf_email__"
              data-cfemail="cfbba6a2aabba0bcbda6a3aea1a4ae8fa8a2aea6a3e1aca0a2">[email&#160;protected]</span>
          </a>
          <div class="panel-contact-item">
            <span class="panel-contact-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.7)"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="10" r="3" />
                <path d="M12 2a8 8 0 018 8c0 5.25-8 12-8 12S4 15.25 4 10a8 8 0 018-8z" />
              </svg>
            </span>
            No. 57, Jethawana Road, Colombo 14
          </div>
        </div>

        <div class="panel-divider"></div>

        <!-- About -->
        <div class="panel-about">
          <div class="panel-about-label" data-en="About Us" data-si="අප ගැන" data-ta="எங்களை பற்றி">About Us</div>
          <p data-en="Discover the pearl of the Indian Ocean. We craft unforgettable journeys across Sri Lanka's ancient temples, emerald mountains, and golden shores."
            data-si="ඉන්දීය සාගරයේ මුතු ඇටය ගවේෂණය කරන්න. අපි ශ්‍රී ලංකාවේ පුරාණ දේවස්ථාන, මරකත කඳු සහ රන් වෙරළ හරහා අමතක නොවන ගමන් සංවිධානය කරමු."
            data-ta="இந்திய கடலின் முத்தை கண்டுபிடியுங்கள். இலங்கையின் பண்டைய கோயில்கள், மரகத மலைகள் மற்றும் தங்க கடற்கரைகளில் மறக்க முடியாத பயணங்களை நாங்கள் உருவாக்குகிறோம்.">
            Discover the pearl of the Indian Ocean. We craft unforgettable journeys across Sri Lanka's ancient temples,
            emerald mountains, and golden shores.
          </p>
          <div class="panel-socials">
            <a class="panel-social-btn" href="#" title="Facebook">f</a>
            <a class="panel-social-btn" href="#" title="X/Twitter">𝕏</a>
            <a class="panel-social-btn" href="#" title="Instagram">📸</a>
            <a class="panel-social-btn" href="#" title="YouTube">▶</a>
            <a class="panel-social-btn" href="#" title="WhatsApp">💬</a>
          </div>
        </div>

        <!-- Panel Book Button -->
        <div class="panel-book-wrap">
          <button class="panel-book-btn" data-en="✈ BOOK YOUR JOURNEY NOW" data-si="✈ දැන් ඔබේ ගමන වෙන් කරන්න"
            data-ta="✈ இப்போது உங்கள் பயணத்தை முன்பதிவு செய்யுங்கள்">✈ BOOK YOUR JOURNEY NOW</button>
        </div>

      </div>
    </aside>
    <script src="header.js"></script>
  </body>

</html>