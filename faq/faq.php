<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time to Ceylon</title>
  <link rel="icon" type="image/png" href="../resources/img/logo.png">

  <link rel="stylesheet" href="../header/header.css">
  <link rel="stylesheet" href="faq.css">
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
        <img src="../resources/img/pageBanners/pexels-thilina-alagiyawanna-3266092-36873013.jpg" alt="Hero Video" class="hero-video-content">
      </div>
      <div class="hero-overlay"></div>
    </div>

    <!-- Content -->
    <div class="hero-content">
      <span class="hero-bar"></span>
      <h1 class="hero-title" data-en="Policies & Support" data-si="ප්‍රතිපත්ති සහ සහාය" data-ta="Beleid & Ondersteuning">Policies & Support</h1>
    </div>
  </section>

  <section>
    <!-- ══ MAIN ══ -->
    <div class="page-wrap">

      <!-- Tab Bar -->
      <div class="tab-bar" role="tablist">
        <button class="tab-btn active" onclick="switchTab('privacy')" role="tab" data-en="Privacy & Policy" data-si="පෞද්ගලිකත්වය සහ ප්‍රතිපත්තිය" data-ta="Privacy & Beleid">Privacy & Policy</button>
        <button class="tab-btn" onclick="switchTab('terms')" role="tab" data-en="Terms & Conditions" data-si="නියම හා කොන්දේසි" data-ta="Algemene Voorwaarden">Terms & Conditions</button>
        <button class="tab-btn" onclick="switchTab('faq')" role="tab" data-en="FAQ" data-si="නිතර අසන පැන" data-ta="Veelgestelde Vragen">FAQ</button>
      </div>

      <!-- ── Panel 1: Privacy & Policy ── -->
      <div class="tab-panel active" id="panel-privacy" role="tabpanel">
        <h2 class="panel-title" data-en="Privacy & Policy" data-si="පෞද්ගලිකත්වය සහ ප්‍රතිපත්තිය" data-ta="Privacy & Beleid">Privacy & Policy</h2>

        <div class="policy-row">
          <div class="policy-heading" data-en="Collection of Personal Information" data-si="පුද්ගලික තොරතුරු එකතු කිරීම" data-ta="Verzameling van Persoonlijke Informatie">Collection of Personal Information</div>
          <div class="policy-body"
            data-en="We collect your personal information including your full name, email address, phone number, and passport details when you make a booking through our website or contact our travel consultants directly for any Sri Lanka travel arrangements and unique experiences."
            data-si="ඔබ අපගේ වෙබ් අඩවිය හරහා වෙන්කරවා ගැනීමක් සිදු කරන විට හෝ ශ්‍රී ලංකා සංචාරක සැලසුම් සහ අනන්‍ය අත්දැකීම් සඳහා අපගේ සංචාරක උපදේශකවරුන් සමඟ සෘජුවම සම්බන්ධ වන විට, ඔබේ සම්පූර්ණ නම, විද්‍යුත් තැපැල් ලිපිනය, දුරකථන අංකය සහ ගමන් බලපත්‍ර විස්තර ඇතුළු ඔබේ පුද්ගලික තොරතුරු අප එකතු කරයි."
            data-ta="We verzamelen uw persoonlijke gegevens, waaronder uw volledige naam, e-mailadres, telefoonnummer en paspoortgegevens, wanneer u via onze website een boeking maakt of rechtstreeks contact opneemt met onze reisadviseurs voor reisregelingen en unieke ervaringen in Sri Lanka.">
            We collect your personal information including your full name, email address, phone number, and
            passport details when you make a booking through our website or contact our travel consultants directly
            for any Sri Lanka travel arrangements and unique experiences.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Use of Your Information" data-si="ඔබේ තොරතුරු භාවිතය" data-ta="Gebruik van Uw Gegevens">Use of Your Information</div>
          <div class="policy-body"
            data-en="Your information is used to process bookings, arrange travel services, communicate important updates, and personalize your experience with tailored recommendations for destinations, activities, and accommodations that match your interests during your journey. We analyze your preferences to suggest relevant experiences that match your interests, ensuring each trip is uniquely crafted to exceed your expectations and create lasting memories throughout your Sri Lanka adventure."
            data-si="ඔබේ තොරතුරු වෙන්කරවා ගැනීම් සැකසීම, සංචාරක සේවා සංවිධානය කිරීම, වැදගත් යාවත්කාලීන කිරීම් සන්නිවේදනය කිරීම සහ ඔබේ සංචාරය පුරාම ඔබේ රුචිකත්වයන්ට ගැලපෙන ගමනාන්ත, ක්‍රියාකාරකම් සහ නවාතැන් සඳහා අභිරුචි නිර්දේශ සමඟ ඔබේ අත්දැකීම පුද්ගලීකරණය කිරීම සඳහා භාවිතා කෙරේ. සෑම සංචාරයක්ම අනන්‍ය ලෙස සැලසුම් කර ඔබේ අපේක්ෂාවන් ඉක්මවා යන මතක සටහන් ඇති කිරීම සහතික කරමින්, ඔබේ රුචිකත්වයන්ට අදාළ අත්දැකීම් යෝජනා කිරීම සඳහා අපි ඔබේ මනාපයන් විශ්ලේෂණය කරමු."
            data-ta="Uw gegevens worden gebruikt om boekingen te verwerken, reisdiensten te regelen, belangrijke updates te communiceren en uw ervaring te personaliseren met op maat gemaakte aanbevelingen voor bestemmingen, activiteiten en accommodaties die aansluiten bij uw interesses tijdens uw reis. We analyseren uw voorkeuren om relevante ervaringen voor te stellen, zodat elke reis uniek wordt samengesteld en uw verwachtingen overtreft.">
            Your information is used to process bookings, arrange travel services, communicate important updates,
            and personalize your experience with tailored recommendations for destinations, activities, and
            accommodations that match your interests during your journey. We analyze your preferences to suggest
            relevant experiences that match your interests, ensuring each trip is uniquely crafted to exceed your
            expectations and create lasting memories throughout your Sri Lanka adventure.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Data Security Measures" data-si="දත්ත ආරක්ෂණ පියවර" data-ta="Gegevensbeveiligingsmaatregelen">Data Security Measures</div>
          <div class="policy-body"
            data-en="We implement industry-standard encryption protocols and secure servers to protect your personal data from unauthorized access, misuse, or disclosure at all times during your booking process and throughout your entire travel experience with us. Our dedicated team monitors systems continuously to detect and prevent potential threats, ensuring your information remains safe throughout your entire booking and travel experience with us properly."
            data-si="ඔබගේ වෙන්කරවා ගැනීමේ ක්‍රියාවලිය තුළ සහ ඔබගේ මුළු සංචාරක අත්දැකීම පුරාවටම ඔබේ පුද්ගලික දත්ත අනවසර ප්‍රවේශය, අනිසි භාවිතය හෝ අනාවරණයෙන් සෑම විටම ආරක්ෂා කිරීම සඳහා අපි කර්මාන්ත ප්‍රමිතියේ සංකේතාංකන ක්‍රමවේද සහ ආරක්ෂිත සර්වර භාවිතා කරමු. අපගේ කැපවූ කණ්ඩායම ඔබගේ තොරතුරු ඔබගේ මුළු වෙන්කරවා ගැනීම සහ සංචාරක අත්දැකීම පුරාවටම ආරක්ෂිතව තබා ගැනීම සහතික කරමින්, විභව තර්ජන හඳුනාගැනීම සහ වැළැක්වීම සඳහා පද්ධති අඛණ්ඩව නිරීක්ෂණය කරයි."
            data-ta="We passen encryptieprotocollen en beveiligde servers volgens de industriestandaard toe om uw persoonlijke gegevens te beschermen tegen ongeoorloofde toegang, misbruik of openbaarmaking tijdens het boekingsproces en tijdens uw gehele reiservaring bij ons. Ons toegewijde team bewaakt de systemen voortdurend om potentiële bedreigingen op te sporen en te voorkomen.">
            We implement industry-standard encryption protocols and secure servers to protect your personal data
            from unauthorized access, misuse, or disclosure at all times during your booking process and throughout
            your entire travel experience with us. Our dedicated team monitors systems continuously to detect and
            prevent potential threats, ensuring your information remains safe throughout your entire booking and
            travel experience with us properly.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Third Party Disclosure" data-si="තෙවන පාර්ශව හෙළිදරව් කිරීම" data-ta="Openbaarmaking aan Derden">Third Party Disclosure</div>
          <div class="policy-body"
            data-en="We may share your information with trusted partners including hotels, transport providers, activity operators, and government agencies solely to fulfill your travel arrangements and comply with applicable legal obligations across Sri Lanka. These partners are carefully vetted and bound by confidentiality agreements to ensure your data is handled responsibly and only for the intended purpose of your travel arrangements and experiences."
            data-si="ශ්‍රී ලංකාව පුරා ඔබගේ සංචාරක සැලසුම් ඉටු කිරීම සහ අදාළ නීතිමය බැඳීම් වලට අනුකූල වීම සඳහා පමණක්, හෝටල්, ප්‍රවාහන සපයන්නන්, ක්‍රියාකාරකම් ක්‍රියාකරුවන් සහ රජයේ ආයතන ඇතුළු විශ්වාසනීය හවුල්කරුවන් සමඟ ඔබේ තොරතුරු අප බෙදාගත හැක. මෙම හවුල්කරුවන් ප්‍රවේශමෙන් තෝරාගෙන ඇති අතර, ඔබේ දත්ත වගකීමෙන් හසුරුවනු ලබන බව සහතික කිරීම සඳහා රහස්‍යභාවය ගිවිසුම් වලට බැඳී සිටී."
            data-ta="We kunnen uw gegevens delen met vertrouwde partners, waaronder hotels, vervoerders, activiteitenaanbieders en overheidsinstanties, uitsluitend om uw reisregelingen te vervullen en te voldoen aan de toepasselijke wettelijke verplichtingen in heel Sri Lanka. Deze partners worden zorgvuldig gescreend en zijn gebonden aan geheimhoudingsovereenkomsten.">
            We may share your information with trusted partners including hotels, transport providers, activity
            operators, and government agencies solely to fulfill your travel arrangements and comply with applicable
            legal obligations across Sri Lanka. These partners are carefully vetted and bound by confidentiality
            agreements to ensure your data is handled responsibly and only for the intended purpose of your travel
            arrangements and experiences.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Cookie Policy" data-si="කුකී ප්‍රතිපත්තිය" data-ta="Cookiebeleid">Cookie Policy</div>
          <div class="policy-body"
            data-en="Our website uses cookies and similar technologies to enhance user experience, analyze traffic patterns, remember your preferences, and deliver relevant content for future visits and bookings on our platform and partner sites. You can manage cookie settings through your browser preferences, though disabling cookies may affect certain functionalities of our website and booking system throughout your browsing experience."
            data-si="අපගේ වෙබ් අඩවිය පරිශීලක අත්දැකීම වැඩිදියුණු කිරීමට, ගමනාගමන රටා විශ්ලේෂණය කිරීමට, ඔබේ මනාපයන් මතක තබා ගැනීමට සහ අපගේ වේදිකාව හා හවුල්කරු අඩවි වල අනාගත සංචාර සහ වෙන්කරවා ගැනීම් සඳහා අදාළ අන්තර්ගතය ලබා දීමට කුකීස් සහ සමාන තාක්ෂණයන් භාවිතා කරයි. ඔබට බ්‍රවුසර මනාපයන් හරහා කුකී සැකසුම් කළමනාකරණය කළ හැකි නමුත්, කුකීස් අක්‍රිය කිරීම අපගේ වෙබ් අඩවියේ සහ වෙන්කරවා ගැනීමේ පද්ධතියේ ඇතැම් ක්‍රියාකාරීත්වයන්ට බලපෑම් කළ හැක."
            data-ta="Onze website gebruikt cookies en vergelijkbare technologieën om de gebruikerservaring te verbeteren, verkeerspatronen te analyseren, uw voorkeuren te onthouden en relevante inhoud te leveren voor toekomstige bezoeken en boekingen op ons platform en partnersites. U kunt cookie-instellingen beheren via uw browservoorkeuren, hoewel het uitschakelen van cookies bepaalde functionaliteiten kan beïnvloeden.">
            Our website uses cookies and similar technologies to enhance user experience, analyze traffic patterns,
            remember your preferences, and deliver relevant content for future visits and bookings on our platform
            and partner sites. You can manage cookie settings through your browser preferences, though disabling
            cookies may affect certain functionalities of our website and booking system throughout your browsing
            experience.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Your Data Rights" data-si="ඔබේ දත්ත අයිතිවාසිකම්" data-ta="Uw Gegevensrechten">Your Data Rights</div>
          <div class="policy-body"
            data-en="You have the right to access, correct, or delete your personal data by contacting our support team with a written request at any time during your relationship with our travel services and bookings. We will respond to all data requests within a reasonable timeframe and ensure your rights are respected in accordance with applicable data protection laws and regulations across Sri Lanka and internationally."
            data-si="අපගේ සංචාරක සේවා සහ වෙන්කරවා ගැනීම් සමඟ ඔබේ සම්බන්ධතාවය පවතින ඕනෑම අවස්ථාවක අපගේ සහාය කණ්ඩායම වෙත ලිඛිත ඉල්ලීමක් මගින් සම්බන්ධ වී ඔබේ පුද්ගලික දත්ත වෙත ප්‍රවේශ වීමට, නිවැරදි කිරීමට හෝ මකා දැමීමට ඔබට අයිතියක් ඇත. අපි සියලුම දත්ත ඉල්ලීම් වලට සාධාරණ කාල සීමාවක් තුළ ප්‍රතිචාර දක්වන අතර, ශ්‍රී ලංකාව සහ ජාත්‍යන්තරව අදාළ දත්ත ආරක්ෂණ නීති හා රෙගුලාසි වලට අනුකූලව ඔබේ අයිතිවාසිකම් ගරු කරන බව සහතික කරමු."
            data-ta="U hebt het recht om uw persoonlijke gegevens in te zien, te corrigeren of te laten verwijderen door contact op te nemen met ons ondersteuningsteam via een schriftelijk verzoek, op elk moment tijdens uw relatie met onze reisdiensten en boekingen. We reageren binnen een redelijke termijn op alle gegevensverzoeken.">
            You have the right to access, correct, or delete your personal data by contacting our support team with
            a written request at any time during your relationship with our travel services and bookings. We will
            respond to all data requests within a reasonable timeframe and ensure your rights are respected in
            accordance with applicable data protection laws and regulations across Sri Lanka and internationally.
          </div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Policy Updates" data-si="ප්‍රතිපත්ති යාවත්කාලීන කිරීම්" data-ta="Beleidsupdates">Policy Updates</div>
          <div class="policy-body"
            data-en="We may update this privacy policy periodically to reflect changes in our practices, legal requirements, or service offerings, and any changes will be posted on this page with the revised effective date noted clearly for all visitors. We encourage you to review this policy regularly to stay informed about how we protect your personal information and data throughout your entire relationship with our travel services."
            data-si="අපගේ භාවිතයන්, නීතිමය අවශ්‍යතා හෝ සේවා පිරිනැමීම් වල වෙනස්කම් පිළිබිඹු කිරීම සඳහා අපි මෙම පෞද්ගලිකත්ව ප්‍රතිපත්තිය නිතිපතා යාවත්කාලීන කළ හැකි අතර, ඕනෑම වෙනස්කමක් සියලුම නරඹන්නන් සඳහා පැහැදිලිව සටහන් කරන ලද සංශෝධිත ක්‍රියාත්මක වන දිනය සමඟ මෙම පිටුවේ පළ කරනු ලැබේ. ඔබගේ පුද්ගලික තොරතුරු අප ආරක්ෂා කරන ආකාරය පිළිබඳව දැනුවත්ව සිටීම සඳහා මෙම ප්‍රතිපත්තිය නිතිපතා සමාලෝචනය කිරීමට අපි ඔබව දිරිමත් කරමු."
            data-ta="We kunnen dit privacybeleid periodiek bijwerken om wijzigingen in onze praktijken, wettelijke vereisten of dienstenaanbod weer te geven, en eventuele wijzigingen worden op deze pagina geplaatst met de herziene ingangsdatum duidelijk vermeld.">
            We may update this privacy policy periodically to reflect changes in our practices, legal requirements,
            or service offerings, and any changes will be posted on this page with the revised effective date noted
            clearly for all visitors. We encourage you to review this policy regularly to stay informed about how we
            protect your personal information and data throughout your entire relationship with our travel
            services.</div>
        </div>
      </div>

      <!-- ── Panel 2: Terms & Conditions ── -->
      <div class="tab-panel" id="panel-terms" role="tabpanel">
        <h2 class="panel-title" data-en="Terms & Conditions" data-si="නියම හා කොන්දේසි" data-ta="Algemene Voorwaarden">Terms & Conditions</h2>

        <div class="policy-row">
          <div class="policy-heading" data-en="Booking Confirmation" data-si="වෙන්කරවා ගැනීමේ තහවුරු කිරීම" data-ta="Boekingsbevestiging">Booking Confirmation</div>
          <div class="policy-body"
            data-en="All bookings are confirmed upon receipt of full payment or a non-refundable deposit as specified during the checkout process on our website or through direct communication with our travel consultants."
            data-si="අපගේ වෙබ් අඩවියේ පරික්ෂා කිරීමේ ක්‍රියාවලිය තුළ හෝ අපගේ සංචාරක උපදේශකවරුන් සමඟ සෘජු සන්නිවේදනය හරහා සඳහන් කර ඇති පරිදි සම්පූර්ණ ගෙවීම හෝ ආපසු නොගෙවන තැන්පතුවක් ලැබීමෙන් සියලුම වෙන්කරවා ගැනීම් තහවුරු කෙරේ."
            data-ta="Alle boekingen worden bevestigd na ontvangst van de volledige betaling of een niet-terugbetaalbare aanbetaling, zoals aangegeven tijdens het afrekenproces op onze website of via rechtstreeks contact met onze reisadviseurs.">
            All bookings are confirmed upon receipt of full payment or a non-refundable deposit as specified during
            the checkout process on our website or through direct communication with our travel consultants.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Payment Terms" data-si="ගෙවීම් නියම" data-ta="Betalingsvoorwaarden">Payment Terms</div>
          <div class="policy-body"
            data-en="Full payment is required at least fourteen days before your scheduled departure date unless otherwise agreed in writing with our reservations team for special arrangements or group bookings. We accept bank transfers, credit cards, and selected digital payment methods for your convenience."
            data-si="විශේෂ විධිවිධාන හෝ කණ්ඩායම් වෙන්කරවා ගැනීම් සඳහා අපගේ වෙන්කරවා ගැනීම් කණ්ඩායම සමඟ ලිඛිතව එකඟ නොවන්නේ නම්, ඔබේ නියමිත පිටත්වීමේ දිනයට අවම වශයෙන් දින දහහතරකට පෙර සම්පූර්ණ ගෙවීම අවශ්‍ය වේ. ඔබේ පහසුව සඳහා අපි බැංකු මාරු කිරීම්, ණය කාඩ්පත් සහ තෝරාගත් ඩිජිටල් ගෙවීම් ක්‍රම පිළිගනිමු."
            data-ta="Volledige betaling is vereist ten minste veertien dagen voor uw geplande vertrekdatum, tenzij schriftelijk anders overeengekomen met ons reserveringsteam. We accepteren bankoverschrijvingen, creditcards en geselecteerde digitale betaalmethoden.">
            Full payment is required at least fourteen days before your scheduled departure date unless otherwise
            agreed in writing with our reservations team for special arrangements or group bookings. We accept bank
            transfers, credit cards, and selected digital payment methods for your convenience.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Cancellation Policy" data-si="අවලංගු කිරීමේ ප්‍රතිපත්තිය" data-ta="Annuleringsbeleid">Cancellation Policy</div>
          <div class="policy-body"
            data-en="Cancellations made more than thirty days before departure receive a full refund minus any non-refundable deposits. Cancellations within thirty days forfeit the entire payment amount unless covered by travel insurance. Refunds are processed within fourteen business days of cancellation request approval."
            data-si="පිටත්වීමට දින තිහකට වඩා පෙර සිදු කරන අවලංගු කිරීම් සඳහා ආපසු නොගෙවන ඕනෑම තැන්පතුවක් අඩු කර සම්පූර්ණ ආපසු ගෙවීමක් ලැබේ. දින තිහක් ඇතුළත සිදු කරන අවලංගු කිරීම් සංචාරක රක්ෂණයෙන් ආවරණය නොවන්නේ නම් සම්පූර්ණ ගෙවීමේ මුදල අහිමි කරයි. අවලංගු කිරීමේ ඉල්ලීම අනුමත වූ පසු ව්‍යාපාරික දින දහහතරක් තුළ ආපසු ගෙවීම් සිදු කෙරේ."
            data-ta="Annuleringen meer dan dertig dagen voor vertrek komen in aanmerking voor volledige terugbetaling, verminderd met eventuele niet-terugbetaalbare aanbetalingen. Annuleringen binnen dertig dagen verliezen het volledige betaalde bedrag, tenzij gedekt door reisverzekering.">
            Cancellations made more than thirty days before departure receive a full refund minus any non-refundable
            deposits. Cancellations within thirty days forfeit the entire payment amount unless covered by travel
            insurance. Refunds are processed within fourteen business days of cancellation request approval.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Travel Insurance" data-si="සංචාරක රක්ෂණය" data-ta="Reisverzekering">Travel Insurance</div>
          <div class="policy-body"
            data-en="We strongly recommend purchasing comprehensive travel insurance that covers trip cancellation, medical emergencies, lost baggage, and personal liability before embarking on your Sri Lanka adventure. Proof of insurance may be required before certain activities or remote destination tours commence."
            data-si="ඔබේ ශ්‍රී ලංකා ගමන ආරම්භ කිරීමට පෙර ගමන් අවලංගු කිරීම, වෛද්‍ය හදිසි අවස්ථා, නැති වූ ලගේජ් සහ පුද්ගලික වගකීම ආවරණය කරන පුළුල් සංචාරක රක්ෂණයක් මිලදී ගැනීමට අපි තරයේ නිර්දේශ කරමු. ඇතැම් ක්‍රියාකාරකම් හෝ ඈත ගමනාන්ත සංචාර ආරම්භ කිරීමට පෙර රක්ෂණයේ සාක්ෂි අවශ්‍ය විය හැක."
            data-ta="We raden ten zeerste aan om een uitgebreide reisverzekering af te sluiten die annulering, medische noodgevallen, verloren bagage en persoonlijke aansprakelijkheid dekt voordat u aan uw Sri Lanka-avontuur begint. Bewijs van verzekering kan vereist zijn voor bepaalde activiteiten of tours naar afgelegen bestemmingen.">
            We strongly recommend purchasing comprehensive travel insurance that covers trip cancellation, medical
            emergencies, lost baggage, and personal liability before embarking on your Sri Lanka adventure. Proof of
            insurance may be required before certain activities or remote destination tours commence.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Liability Disclaimer" data-si="වගකීම් වෙතින් නිදහස් වීම" data-ta="Aansprakelijkheidsuitsluiting">Liability Disclaimer</div>
          <div class="policy-body"
            data-en="Time to Ceylon acts as an intermediary between travelers and service providers. We are not liable for delays, cancellations, or changes caused by circumstances beyond our reasonable control including weather, natural disasters, political unrest, or supplier failures."
            data-si="Time to Ceylon සංචාරකයන් සහ සේවා සපයන්නන් අතර මැදිහත්කරුවෙකු ලෙස ක්‍රියා කරයි. කාලගුණය, ස්වාභාවික ව්‍යසන, දේශපාලන අස්ථාවරත්වය හෝ සැපයුම්කරුවන්ගේ අසාර්ථකත්වය ඇතුළු අපගේ සාධාරණ පාලනයෙන් ඔබ්බට ඇති තත්වයන් නිසා ඇතිවන ප්‍රමාද, අවලංගු කිරීම් හෝ වෙනස්කම් සඳහා අපි වගකිව යුතු නොවේ."
            data-ta="Time to Ceylon treedt op als tussenpersoon tussen reizigers en dienstverleners. We zijn niet aansprakelijk voor vertragingen, annuleringen of wijzigingen veroorzaakt door omstandigheden buiten onze redelijke controle, waaronder weer, natuurrampen, politieke onrust of storingen bij leveranciers.">
            Time to Ceylon acts as an intermediary between travelers and service providers. We are not liable for
            delays, cancellations, or changes caused by circumstances beyond our reasonable control including
            weather, natural disasters, political unrest, or supplier failures.</div>
        </div>
        <div class="policy-row">
          <div class="policy-heading" data-en="Governing Law" data-si="පාලක නීතිය" data-ta="Toepasselijk Recht">Governing Law</div>
          <div class="policy-body"
            data-en="These terms and conditions are governed by the laws of Sri Lanka. Any disputes arising from bookings or travel services shall be resolved through arbitration in Colombo, Sri Lanka. Both parties agree to submit to the exclusive jurisdiction of Sri Lankan courts."
            data-si="මෙම නියම හා කොන්දේසි ශ්‍රී ලංකාවේ නීතිවලට අනුකූලව පාලනය කෙරේ. වෙන්කරවා ගැනීම් හෝ සංචාරක සේවා වලින් ඇතිවන ඕනෑම ආරවුලක් කොළඹ, ශ්‍රී ලංකාවේ මැදිහත්කරණය හරහා විසඳනු ලැබේ. දෙපාර්ශවයම ශ්‍රී ලංකා අධිකරණවල සුවිශේෂී අධිකරණ බලයට යටත් වීමට එකඟ වේ."
            data-ta="Deze algemene voorwaarden worden beheerst door de wetten van Sri Lanka. Eventuele geschillen die voortvloeien uit boekingen of reisdiensten worden opgelost via arbitrage in Colombo, Sri Lanka. Beide partijen stemmen ermee in zich te onderwerpen aan de exclusieve jurisdictie van de Sri Lankaanse rechtbanken.">
            These terms and conditions are governed by the laws of Sri Lanka. Any disputes arising from bookings or
            travel services shall be resolved through arbitration in Colombo, Sri Lanka. Both parties agree to
            submit to the exclusive jurisdiction of Sri Lankan courts.</div>
        </div>
      </div>

      <!-- ── Panel 3: FAQ ── -->
      <div class="tab-panel" id="panel-faq" role="tabpanel">
        <h2 class="panel-title" data-en="Frequently Asked Questions" data-si="නිතර අසන ප්‍රශ්න" data-ta="Veelgestelde Vragen">Frequently Asked Questions</h2>

        <!-- Category: Getting Started -->
        <div class="faq-category">
          <div class="faq-category-row">
            <div>
              <div class="faq-cat-label" data-en="Getting Started" data-si="ආරම්භ කිරීම" data-ta="Aan de Slag">Getting Started</div>
              <div class="faq-cat-label-divider"></div>
            </div>
            <div class="faq-items">
              <div class="faq-item open">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="How do I book a tour with Time to Ceylon?" data-si="Time to Ceylon සමඟ සංචාරයක් වෙන්කරවා ගන්නේ කෙසේද?" data-ta="Hoe boek ik een tour bij Time to Ceylon?">How do I book a tour with Time to Ceylon?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="You can book a tour directly through our website by selecting your preferred package and completing the online checkout process. Alternatively, you may contact our travel consultants via email or phone for personalized assistance with your booking. Our team is available Monday through Saturday to help you choose the perfect itinerary and answer any questions."
                    data-si="ඔබට ඔබ කැමති පැකේජය තෝරාගෙන මාර්ගගත පරික්ෂා කිරීමේ ක්‍රියාවලිය සම්පූර්ණ කිරීමෙන් අපගේ වෙබ් අඩවිය හරහා සෘජුවම සංචාරයක් වෙන්කරවා ගත හැක. විකල්පයක් ලෙස, ඔබේ වෙන්කරවා ගැනීම සඳහා පුද්ගලීකරණය කළ සහාය සඳහා විද්‍යුත් තැපෑල හෝ දුරකථනය හරහා අපගේ සංචාරක උපදේශකවරුන් සම්බන්ධ කර ගත හැක. පරිපූර්ණ ගමන් සැලැස්මක් තෝරාගැනීමට සහ ඕනෑම ප්‍රශ්නයකට පිළිතුරු දීමට අපගේ කණ්ඩායම සඳුදා සිට සෙනසුරාදා දක්වා සේවා සලසයි."
                    data-ta="U kunt rechtstreeks via onze website een tour boeken door uw gewenste pakket te selecteren en het online afrekenproces te voltooien. U kunt ook via e-mail of telefoon contact opnemen met onze reisadviseurs voor persoonlijke hulp bij uw boeking. Ons team is van maandag tot en met zaterdag beschikbaar om u te helpen de perfecte reisroute te kiezen en al uw vragen te beantwoorden.">
                    You can book a tour directly through our website by selecting your preferred package and
                    completing the online checkout process. Alternatively, you may contact our travel consultants
                    via email or phone for personalized assistance with your booking. Our team is available Monday
                    through Saturday to help you choose the perfect itinerary and answer any questions.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="What is the best time to visit Sri Lanka?" data-si="ශ්‍රී ලංකාවට යාමට වඩාත් සුදුසු කාලය කුමක්ද?" data-ta="Wat is de beste tijd om Sri Lanka te bezoeken?">What is the best time to visit Sri Lanka?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="The best time to visit Sri Lanka is from December to March for the west and south coasts, and from May to September for the east coast. The hill country remains pleasant throughout the year with cooler temperatures and occasional rainfall."
                    data-si="බටහිර සහ දකුණු වෙරළ තීරයන් සඳහා ශ්‍රී ලංකාවට යාමට වඩාත් සුදුසු කාලය දෙසැම්බර් සිට මාර්තු දක්වා වන අතර, නැගෙනහිර වෙරළ තීරය සඳහා මැයි සිට සැප්තැම්බර් දක්වා වේ. කඳුකර ප්‍රදේශය සිසිල් උෂ්ණත්වයන් සහ ඉඳහිට වර්ෂාපතනය සමඟ වර්ෂය පුරාම ප්‍රසන්නව පවතී."
                    data-ta="De beste tijd om Sri Lanka te bezoeken is van december tot maart voor de west- en zuidkust, en van mei tot september voor de oostkust. Het heuvelland blijft het hele jaar door aangenaam met koelere temperaturen en incidentele regenval.">
                    The best time to visit Sri Lanka is from December to March for the west and south coasts, and
                    from May to September for the east coast. The hill country remains pleasant throughout the year
                    with cooler temperatures and occasional rainfall.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="Do I need a visa to travel to Sri Lanka?" data-si="ශ්‍රී ලංකාවට සංචාරය කිරීමට වීසා බලපත්‍රයක් අවශ්‍යද?" data-ta="Heb ik een visum nodig om naar Sri Lanka te reizen?">Do I need a visa to travel to Sri Lanka?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Yes, most travelers require an Electronic Travel Authorization or visa to enter Sri Lanka. You can apply online through the official government portal before your departure. We recommend applying at least two weeks before your travel date."
                    data-si="ඔව්, බොහෝ සංචාරකයන්ට ශ්‍රී ලංකාවට ඇතුළු වීමට ඉලෙක්ට්‍රොනික සංචාරක අවසරයක් හෝ වීසාවක් අවශ්‍ය වේ. ඔබට ඔබේ පිටත්වීමට පෙර නිල රජයේ පෝට්ල් හරහා මාර්ගගතව අයදුම් කළ හැක. ඔබේ සංචාරක දිනයට අවම වශයෙන් සති දෙකකට පෙර අයදුම් කිරීම අපි නිර්දේශ කරමු."
                    data-ta="Ja, de meeste reizigers hebben een elektronische reisvergunning of visum nodig om Sri Lanka binnen te komen. U kunt online aanvragen via het officiële overheidsportaal voordat u vertrekt. We raden aan om ten minste twee weken van tevoren aan te vragen.">
                    Yes, most travelers require an Electronic Travel Authorization or visa to enter Sri Lanka. You
                    can apply online through the official government portal before your departure. We recommend
                    applying at least two weeks before your travel date.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="What should I pack for my Sri Lanka trip?" data-si="මගේ ශ්‍රී ලංකා සංචාරය සඳහා මම කුමක් රැගෙන යා යුතුද?" data-ta="Wat moet ik inpakken voor mijn reis naar Sri Lanka?">What should I pack for my Sri Lanka trip?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Pack lightweight cotton clothing, comfortable walking shoes, sun protection, insect repellent, and a reusable water bottle. For temple visits, bring modest clothing that covers your shoulders and knees as a sign of respect."
                    data-si="සැහැල්ලු කපු ඇඳුම්, සුවපහසු ඇවිදින සපත්තු, හිරු ආරක්ෂණ, ක්‍රිමිනාශක සහ නැවත භාවිතා කළ හැකි ජල බෝතලයක් රැගෙන යන්න. පන්සල් ගිවිසුම් සඳහා, ගෞරවයේ සලකුණක් ලෙස ඔබේ උරහිස් සහ දණහිස් ආවරණය කරන නිහතමානී ඇඳුම් රැගෙන යන්න."
                    data-ta="Pak lichte katoenen kleding, comfortabele wandelschoenen, zonbescherming, insectenwerend middel en een herbruikbare waterfles in. Draag voor tempelbezoeken bescheiden kleding die uw schouders en knieën bedekt, als teken van respect.">
                    Pack lightweight cotton clothing, comfortable walking shoes, sun protection, insect repellent,
                    and a reusable water bottle. For temple visits, bring modest clothing that covers your shoulders
                    and knees as a sign of respect.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="Are your tours suitable for families with children?" data-si="ඔබේ සංචාර දරුවන් සහිත පවුල් සඳහා සුදුසුද?" data-ta="Zijn uw tours geschikt voor gezinnen met kinderen?">Are your tours suitable for families with children?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Absolutely, we offer family-friendly tours with activities suitable for all ages including wildlife safaris, beach visits, and cultural experiences. Our team can recommend the best itineraries based on your children's ages and interests."
                    data-si="ඇත්තෙන්ම, වන සත්ව සෆාරි, වෙරළ ගිවිසුම් සහ සංස්කෘතික අත්දැකීම් ඇතුළු සියලුම වයස් සීමාවන්ට සුදුසු ක්‍රියාකාරකම් සහිත පවුල් හිතකාමී සංචාර අපි පිරිනමමු. ඔබේ දරුවන්ගේ වයස සහ රුචිකත්වයන් මත පදනම්ව හොඳම ගමන් සැලසුම් නිර්දේශ කිරීමට අපගේ කණ්ඩායමට හැක."
                    data-ta="Absoluut, we bieden gezinsvriendelijke tours met activiteiten die geschikt zijn voor alle leeftijden, waaronder safari's, strandbezoeken en culturele ervaringen. Ons team kan de beste reisroutes aanbevelen op basis van de leeftijd en interesses van uw kinderen.">
                    Absolutely, we offer family-friendly tours with activities suitable for all ages including
                    wildlife safaris, beach visits, and cultural experiences. Our team can recommend the best
                    itineraries based on your children's ages and interests.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="What payment methods do you accept?" data-si="ඔබ පිළිගන්නා ගෙවීම් ක්‍රම මොනවාද?" data-ta="Welke betaalmethoden accepteert u?">What payment methods do you accept?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="We accept bank transfers, major credit cards, and selected digital payment platforms. Full payment is typically required fourteen days before departure, though deposit options are available for early bookings and group reservations."
                    data-si="බැංකු මාරු කිරීම්, ප්‍රධාන ණය කාඩ්පත් සහ තෝරාගත් ඩිජිටල් ගෙවීම් වේදිකා අපි පිළිගනිමු. පිටත්වීමට දින දහහතරකට පෙර සාමාන්‍යයෙන් සම්පූර්ණ ගෙවීම අවශ්‍ය වන නමුත්, කලින් වෙන්කරවා ගැනීම් සහ කණ්ඩායම් වෙන්කරවා ගැනීම් සඳහා තැන්පතු විකල්ප ලබා ගත හැක."
                    data-ta="We accepteren bankoverschrijvingen, grote creditcards en geselecteerde digitale betaalplatforms. Volledige betaling is meestal veertien dagen voor vertrek vereist, hoewel aanbetalingsopties beschikbaar zijn voor vroege boekingen en groepsreserveringen.">
                    We accept bank transfers, major credit cards, and selected digital payment platforms. Full
                    payment is typically required fourteen days before departure, though deposit options are
                    available for early bookings and group reservations.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="Can I customize my travel itinerary?" data-si="මට මගේ ගමන් සැලැස්ම අභිරුචිකරණය කළ හැකිද?" data-ta="Kan ik mijn reisroute aanpassen?">Can I customize my travel itinerary?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Yes, we specialize in creating bespoke travel experiences tailored to your preferences, interests, and schedule. Contact our team to discuss your dream itinerary and we will craft a personalized journey across Sri Lanka."
                    data-si="ඔව්, ඔබේ මනාපයන්, රුචිකත්වයන් සහ කාලසටහනට ගැලපෙන අභිරුචි සංචාරක අත්දැකීම් නිර්මාණය කිරීම සඳහා අපි විශේෂඥතාවය ලබා ඇත. ඔබේ සිහින ගමන් සැලැස්ම සාකච්ඡා කිරීමට අපගේ කණ්ඩායම සම්බන්ධ කරගන්න, එවිට අපි ශ්‍රී ලංකාව පුරා පුද්ගලීකරණය කළ ගමනක් නිර්මාණය කරන්නෙමු."
                    data-ta="Ja, we zijn gespecialiseerd in het creëren van op maat gemaakte reiservaringen die zijn afgestemd op uw voorkeuren, interesses en schema. Neem contact op met ons team om uw droomreis te bespreken en wij stellen een persoonlijke reis door heel Sri Lanka samen.">
                    Yes, we specialize in creating bespoke travel experiences tailored to your preferences,
                    interests, and schedule. Contact our team to discuss your dream itinerary and we will craft a
                    personalized journey across Sri Lanka.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Category: Safety & Logistics -->
        <div class="faq-category">
          <div class="faq-category-row">
            <div>
              <div class="faq-cat-label" data-en="Safety & Logistics" data-si="ආරක්ෂාව හා සැපයුම් කළමනාකරණය" data-ta="Veiligheid & Logistiek">Safety & Logistics</div>
              <div class="faq-cat-label-divider"></div>
            </div>
            <div class="faq-items">
              <div class="faq-item open">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="What safety measures are in place during tours?" data-si="සංචාර අතරතුර ක්‍රියාත්මක ආරක්ෂණ පියවර මොනවාද?" data-ta="Welke veiligheidsmaatregelen zijn er tijdens de tours?">What safety measures are in place during tours?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Your safety is our top priority. All our vehicles are regularly inspected, drivers are licensed professionals, and we provide emergency contact numbers for all tours. We also monitor weather conditions and adjust itineraries accordingly. Our guides are trained in first aid and carry emergency medical kits during all excursions."
                    data-si="ඔබේ ආරක්ෂාව අපගේ ප්‍රමුඛතම කාරණයයි. අපගේ සියලුම වාහන නිතිපතා පරීක්ෂා කරනු ලබන අතර, රියදුරන් බලපත්‍රලාභී වෘත්තිකයන් වන අතර, සියලුම සංචාර සඳහා හදිසි සම්බන්ධතා අංක අප ලබා දෙයි. අපි කාලගුණ තත්වයන් ද නිරීක්ෂණය කර ඒ අනුව ගමන් සැලසුම් සකස් කරමු. අපගේ මාර්ගෝපදේශකයන් ප්‍රථමාධාර පුහුණුව ලබා ඇති අතර සියලුම සංචාරවලදී හදිසි වෛද්‍ය කට්ටල රැගෙන යති."
                    data-ta="Uw veiligheid is onze topprioriteit. Al onze voertuigen worden regelmatig geïnspecteerd, chauffeurs zijn gediplomeerde professionals en we verstrekken noodcontactnummers voor alle tours. We houden ook de weersomstandigheden in de gaten en passen de reisroutes hierop aan. Onze gidsen zijn opgeleid in eerste hulp en dragen medische noodkits bij alle excursies.">
                    Your safety is our top priority. All our vehicles are regularly inspected, drivers are licensed
                    professionals, and we provide emergency contact numbers for all tours. We also monitor weather
                    conditions and adjust itineraries accordingly. Our guides are trained in first aid and carry
                    emergency medical kits during all excursions.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="Do you offer airport pickup services?" data-si="ඔබ ගුවන් තොටුපළ ලබා ගැනීමේ සේවා පිරිනමනවාද?" data-ta="Biedt u ophaaldiensten van het vliegveld aan?">Do you offer airport pickup services?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Yes, we offer convenient airport pickup and drop-off services at Bandaranaike International Airport. Your driver will be waiting at the arrival hall with a name board and will assist with your luggage to the vehicle."
                    data-si="ඔව්, බණ්ඩාරනායක ජාත්‍යන්තර ගුවන් තොටුපළේදී පහසු ගුවන් තොටුපළ ලබා ගැනීමේ සහ බැහැර කිරීමේ සේවා අපි පිරිනමමු. ඔබේ රියදුරු පැමිණීමේ ශාලාවේදී නාම පුවරුවක් සමඟ රැඳී සිටින අතර ඔබේ ලගේජ් වාහනය දක්වා රැගෙන යාමට සහාය වනු ඇත."
                    data-ta="Ja, we bieden handige ophaal- en afzetdiensten aan op de internationale luchthaven Bandaranaike. Uw chauffeur wacht in de aankomsthal met een naambord en helpt u met uw bagage naar het voertuig.">
                    Yes, we offer convenient airport pickup and drop-off services at Bandaranaike International
                    Airport. Your driver will be waiting at the arrival hall with a name board and will assist with
                    your luggage to the vehicle.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="What happens if my tour is cancelled due to weather?" data-si="කාලගුණය හේතුවෙන් මගේ සංචාරය අවලංගු වුවහොත් සිදුවන්නේ කුමක්ද?" data-ta="Wat gebeurt er als mijn tour wordt geannuleerd vanwege het weer?">What happens if my tour is cancelled due to weather?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="In the event of weather-related cancellations, we will offer alternative activities or reschedule your tour at no additional cost. Your safety is paramount, and we will never proceed with tours in dangerous conditions."
                    data-si="කාලගුණයට සම්බන්ධ අවලංගු කිරීමක් සිදුවුවහොත්, අපි විකල්ප ක්‍රියාකාරකම් පිරිනමන්නෙමු හෝ අමතර ගාස්තුවක් නොමැතිව ඔබේ සංචාරය නැවත සැලසුම් කරන්නෙමු. ඔබේ ආරක්ෂාව ඉතාමත් වැදගත් වන අතර, අනතුරුදායක තත්වයන් තුළ අපි කිසිවිටෙකත් සංචාර සමඟ ඉදිරියට යන්නේ නැත."
                    data-ta="Bij weersgerelateerde annuleringen bieden we alternatieve activiteiten aan of plannen we uw tour opnieuw zonder extra kosten. Uw veiligheid staat voorop en we zullen nooit doorgaan met tours onder gevaarlijke omstandigheden.">
                    In the event of weather-related cancellations, we will offer alternative activities or
                    reschedule your tour at no additional cost. Your safety is paramount, and we will never proceed
                    with tours in dangerous conditions.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="Are meals included in the tour packages?" data-si="ආහාර වේල් සංචාරක පැකේජ වල ඇතුළත්ද?" data-ta="Zijn maaltijden inbegrepen in de tourpakketten?">Are meals included in the tour packages?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Most of our tour packages include daily breakfast, and some include additional meals as specified in the itinerary. We accommodate dietary requirements including vegetarian, vegan, and halal options with advance notice."
                    data-si="අපගේ බොහෝ සංචාරක පැකේජ දිනපතා උදෑසන ආහාරය ඇතුළත් වන අතර, සමහරක් ගමන් සැලැස්මේ දක්වා ඇති පරිදි අමතර ආහාර ඇතුළත් වේ. පෙර දැනුම්දීමකින් නිර්මාංශ, වීගන් සහ හලාල් විකල්ප ඇතුළු ආහාර අවශ්‍යතා අප සපුරාලමු."
                    data-ta="De meeste van onze tourpakketten omvatten dagelijks ontbijt, en sommige omvatten extra maaltijden zoals aangegeven in de reisroute. We houden rekening met dieetwensen, waaronder vegetarische, veganistische en halal-opties, mits vooraf aangegeven.">
                    Most of our tour packages include daily breakfast, and some include additional meals as
                    specified in the itinerary. We accommodate dietary requirements including vegetarian, vegan, and
                    halal options with advance notice.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Category: Booking Details -->
        <div class="faq-category">
          <div class="faq-category-row">
            <div>
              <div class="faq-cat-label" data-en="Booking Details" data-si="වෙන්කරවා ගැනීමේ විස්තර" data-ta="Boekingsdetails">Booking Details</div>
              <div class="faq-cat-label-divider"></div>
            </div>
            <div class="faq-items">
              <div class="faq-item open">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="What languages do your guides speak?" data-si="ඔබේ මාර්ගෝපදේශකයන් කතා කරන භාෂා මොනවාද?" data-ta="Welke talen spreken uw gidsen?">What languages do your guides speak?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Our professional guides are fluent in English and Sinhala. Some guides also speak Tamil, French, German, and other languages. Please specify your language preference when booking so we can assign the most suitable guide for your cultural and nature experiences."
                    data-si="අපගේ වෘත්තීය මාර්ගෝපදේශකයන් ඉංග්‍රීසි සහ සිංහල භාෂාවලින් අනර්ගල වේ. සමහර මාර්ගෝපදේශකයන් දෙමළ, ප්‍රංශ, ජර්මානු සහ අනෙකුත් භාෂාවලින්ද කතා කරයි. ඔබේ සංස්කෘතික සහ ස්වභාවික අත්දැකීම් සඳහා වඩාත් සුදුසු මාර්ගෝපදේශකයා පවරා ගැනීමට හැකි වන පරිදි වෙන්කරවා ගැනීමේදී ඔබේ භාෂා මනාපය සඳහන් කරන්න."
                    data-ta="Onze professionele gidsen spreken vloeiend Engels en Singalees. Sommige gidsen spreken ook Tamil, Frans, Duits en andere talen. Vermeld uw taalvoorkeur bij het boeken zodat we de meest geschikte gids kunnen toewijzen voor uw culturele en natuurervaringen.">
                    Our professional guides are fluent in English and Sinhala. Some guides also speak Tamil, French,
                    German, and other languages. Please specify your language preference when booking so we can
                    assign the most suitable guide for your cultural and nature experiences.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="How far in advance should I book my trip?" data-si="මගේ සංචාරය කොපමණ කලකට පෙර වෙන්කරවා ගත යුතුද?" data-ta="Hoe ver van tevoren moet ik mijn reis boeken?">How far in advance should I book my trip?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="We recommend booking at least thirty days in advance to secure your preferred dates and accommodations. During peak season from December to March, we suggest booking even earlier as popular destinations fill up quickly."
                    data-si="ඔබ කැමති දින සහ නවාතැන් තහවුරු කර ගැනීමට අවම වශයෙන් දින තිහකට පෙර වෙන්කරවා ගැනීම අපි නිර්දේශ කරමු. දෙසැම්බර් සිට මාර්තු දක්වා උච්ච සමය තුළ, ජනප්‍රිය ගමනාන්ත ඉක්මනින් පිරී යන බැවින් තවත් කලින් වෙන්කරවා ගැනීමට අපි යෝජනා කරමු."
                    data-ta="We raden aan om ten minste dertig dagen van tevoren te boeken om uw gewenste data en accommodaties veilig te stellen. Tijdens het hoogseizoen van december tot maart raden we aan nog eerder te boeken, omdat populaire bestemmingen snel volraken.">
                    We recommend booking at least thirty days in advance to secure your preferred dates and
                    accommodations. During peak season from December to March, we suggest booking even earlier as
                    popular destinations fill up quickly.</p>
                </div>
              </div>
              <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                  <span class="faq-question-text" data-en="Do you offer group discounts for large bookings?" data-si="ලොකු වෙන්කරවා ගැනීම් සඳහා ඔබ කණ්ඩායම් වට්ටම් පිරිනමනවාද?" data-ta="Biedt u groepskortingen aan voor grote boekingen?">Do you offer group discounts for large bookings?</span>
                  <span class="faq-icon">+</span>
                </div>
                <div class="faq-answer">
                  <p data-en="Yes, we offer attractive group discounts for bookings of six or more travelers. Contact our team for a customized quote based on your group size, travel dates, and selected activities across Sri Lanka."
                    data-si="ඔව්, සංචාරකයන් හය දෙනෙකු හෝ ඊට වැඩි ගණනක් සඳහා ආකර්ෂණීය කණ්ඩායම් වට්ටම් අපි පිරිනමමු. ශ්‍රී ලංකාව පුරා ඔබේ කණ්ඩායමේ ප්‍රමාණය, සංචාරක දින සහ තෝරාගත් ක්‍රියාකාරකම් මත පදනම්ව අභිරුචි මිල ගණනක් සඳහා අපගේ කණ්ඩායම සම්බන්ධ කරගන්න."
                    data-ta="Ja, we bieden aantrekkelijke groepskortingen voor boekingen van zes of meer reizigers. Neem contact op met ons team voor een offerte op maat, gebaseerd op uw groepsgrootte, reisdata en geselecteerde activiteiten in heel Sri Lanka.">
                    Yes, we offer attractive group discounts for bookings of six or more travelers. Contact our team
                    for a customized quote based on your group size, travel dates, and selected activities across
                    Sri Lanka.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /panel-faq -->

    </div>
    <!-- /page-wrap -->
  </section>

  <!-- ------------footer----------- -->
  <?php include('../footer/footer.php'); ?>
  <!-- ------------footer----------- -->

  <script src="../header/header.js"></script>
  <script src="../resources/components/main.js"></script>
  <script src="faq.js"></script>

</body>

</html>