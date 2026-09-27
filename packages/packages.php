<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time to Ceylon</title>
    <link rel="icon" type="image/png" href="../resources/img/logo.webp">

    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="packages.css">
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
                <img src="../resources/img/pageBanners/pexels-nandakumarrajesh1312007-20169596.webp" alt="Hero Video" class="hero-video-content">
            </div>
            <div class="hero-overlay"></div>
        </div>

        <div class="hero-content">
            <span class="hero-bar"></span>
            <h1 class="hero-title" data-en="Our Sri Lanka Tour Packages" data-si="අපගේ ශ්‍රී ලංකා සංචාරක පැකේජ" data-ta="Onze samengestelde reizen en excursies in Sri Lanka">Our Sri Lanka Tour Packages</h1>
        </div>
    </section>


    <section class="packages-section">
        <div class="packages-grid">

            <!-- Package 1 - Grand Ceylon Experience -->
            <div class="pkg-card" data-pkg="1">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/packages/caption.webp" class="pkg-main-img" alt="Grand Ceylon Experience" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/packages/caption.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/wilpattu/wilpattu01.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/yala/yala1.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/sigiriya/sigiriya1.webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="👑 Grand Ceylon <span>Experience</span>" data-si="👑 විශිෂ්ට ලංකා <span>අත්දැකීම</span>" data-ta="👑 Groots Ceylon <span>Ervaring</span>">👑 Grand Ceylon <span>Experience</span></h3>
                    <p class="pkg-tag" data-en="14 Days | 13 Nights &middot; Nature &middot; Wildlife &middot; Culture &middot; Mountains &middot; Beaches" data-si="දින 14 | රාත්‍රී 13 &middot; ස්වභාවික &middot; වන සතුන් &middot; සංස්කෘතිය &middot; කඳුකරය &middot; වෙරළ" data-ta="14 Dagen | 13 Nachten &middot; Natuur &middot; Wildlife &middot; Cultuur &middot; Bergen &middot; Stranden">14 Days | 13 Nights &middot; Nature &middot; Wildlife &middot; Culture &middot; Mountains &middot; Beaches</p>
                    <p class="pkg-desc" data-en="Discover the very best of Sri Lanka on our signature 14-day private journey. From ancient UNESCO World Heritage Sites and breathtaking mountain landscapes to thrilling wildlife safaris, scenic train journeys, tropical beaches, and authentic local culture, every experience is carefully curated to create an unforgettable holiday." data-si="අපගේ සුවිශේෂී දින 14ක පුද්ගලික සංචාරය සමඟ ශ්‍රී ලංකාවේ හොඳම දේ අත්විඳින්න. පුරාණ යුනෙස්කෝ ලෝක උරුම ස්ථාන සහ විශ්මයජනක කඳුකර දර්ශනවල සිට ත්‍රාසජනක වනජීවී සෆාරි, දර්ශනීය දුම්රිය ගමන්, නිවර්තන වෙරළ තීරයන් සහ අව්‍යාජ දේශීය සංස්කෘතිය දක්වා සෑම අත්දැකීමක්ම අමතක නොවන නිවාඩුවක් නිර්මාණය කිරීම සඳහා ප්‍රවේශමෙන් තෝරාගෙන ඇත." data-ta="Ontdek het beste van Sri Lanka tijdens deze exclusieve 14-daagse privérondreis. U bezoekt eeuwenoud UNESCO-werelderfgoed, indrukwekkende berglandschappen, nationale parken en tropische stranden en maakt kennis met de authentieke lokale cultuur.">Discover the very best of Sri Lanka on our signature 14-day private journey. From ancient UNESCO World Heritage Sites and breathtaking mountain landscapes to thrilling wildlife safaris, scenic train journeys, tropical beaches, and authentic local culture, every experience is carefully curated to create an unforgettable holiday.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=1" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 2 - Ceylon Discovery -->
            <div class="pkg-card" data-pkg="2">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/destinations/anuradhapura/anuradhapura1.webp" class="pkg-main-img" alt="Ceylon Discovery" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/destinations/anuradhapura/anuradhapura1.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/polonnaruwa/polonnaruwa1.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/dambulla/DambullaCaveTemple1.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/kandy/kandy1.webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="🌿 Ceylon <span>Discovery</span>" data-si="🌿 ලංකා <span>සොයාගැනීම</span>" data-ta="🌿 Ceylon <span>Ontdekking</span>">🌿 Ceylon <span>Discovery</span></h3>
                    <p class="pkg-tag" data-en="7 Days | 6 Nights &middot; Culture &middot; Heritage &middot; Ancient Kingdoms &middot; Nature" data-si="දින 7 | රාත්‍රී 6 &middot; සංස්කෘතිය &middot; උරුමය &middot; පුරාණ රාජධානි &middot; ස්වභාවික" data-ta="7 Dagen | 6 Nachten &middot; Cultuur &middot; Erfgoed &middot; Oude Koninkrijken &middot; Natuur">7 Days | 6 Nights &middot; Culture &middot; Heritage &middot; Ancient Kingdoms &middot; Nature</p>
                    <p class="pkg-desc" data-en="Discover the timeless beauty of Sri Lanka on our carefully curated 7-day private journey. From ancient UNESCO World Heritage Sites and sacred temples to magnificent royal kingdoms and vibrant heritage, every moment is thoughtfully designed around the island's rich history." data-si="අපගේ ප්‍රවේශමෙන් සැලසුම් කළ දින 7ක පුද්ගලික සංචාරය සමඟ ශ්‍රී ලංකාවේ කාලාතිත සුන්දරත්වය සොයා ගන්න. පුරාණ යුනෙස්කෝ ලෝක උරුම ස්ථාන සහ පූජනීය විහාරස්ථානවල සිට විශිෂ්ට රාජකීය රාජධානි සහ විචිත්‍රවත් උරුමය දක්වා සෑම මොහොතක්ම දිවයිනේ පොහොසත් ඉතිහාසය වටා ප්‍රවේශමෙන් සැලසුම් කර ඇත." data-ta="Maak tijdens deze 7-daagse privérondreis kennis met de rijke geschiedenis van Sri Lanka. U ontdekt eeuwenoud UNESCO-werelderfgoed, heilige tempels en de indrukwekkende overblijfselen van voormalige koninkrijken.">Discover the timeless beauty of Sri Lanka on our carefully curated 7-day private journey. From ancient UNESCO World Heritage Sites and sacred temples to magnificent royal kingdoms and vibrant heritage, every moment is thoughtfully designed around the island's rich history.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=2" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 3 - Signature Journey -->
            <div class="pkg-card" data-pkg="3">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/destinations/minneriya/minneriya1.webp" class="pkg-main-img" alt="Signature Journey" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/destinations/minneriya/minneriya1.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/ravanafalls/ravanafalls1.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/galle/galle2.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/pigeonisland/pigeonisland4.webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="⭐ Signature <span>Journey</span>" data-si="⭐ සුවිශේෂී <span>සංචාරය</span>" data-ta="⭐ Signature <span>Reis</span>">⭐ Signature <span>Journey</span></h3>
                    <p class="pkg-tag" data-en="9 Days | 8 Nights &middot; Culture &middot; Wildlife &middot; Tea Country &middot; Beaches" data-si="දින 9 | රාත්‍රී 8 &middot; සංස්කෘතිය &middot; වන සතුන් &middot; තේ දේශය &middot; වෙරළ" data-ta="9 Dagen | 8 Nachten &middot; Cultuur &middot; Wildlife &middot; Theestreek &middot; Stranden">9 Days | 8 Nights &middot; Culture &middot; Wildlife &middot; Tea Country &middot; Beaches</p>
                    <p class="pkg-desc" data-en="Experience the perfect balance of Sri Lanka's rich culture, breathtaking landscapes, incredible wildlife, and beautiful southern coastline on our carefully curated 9-day private journey, from sacred temples and tea plantations to exciting safaris and relaxing beaches." data-si="අපගේ ප්‍රවේශමෙන් සැලසුම් කළ දින 9ක පුද්ගලික සංචාරය සමඟ ශ්‍රී ලංකාවේ පොහොසත් සංස්කෘතිය, විශ්මයජනක දර්ශන, විශිෂ්ට වනජීවී සහ සුන්දර දකුණු වෙරළ තීරයේ පරිපූර්ණ සමතුලිතතාවය අත්විඳින්න. පූජනීය විහාරස්ථාන සහ තේ වතු සිට උද්යෝගජනක සෆාරි සහ විවේකදායක වෙරළ දක්වා මෙම සංචාරය සැලසුම් කර ඇත." data-ta="Deze zorgvuldig samengestelde 9-daagse privérondreis combineert cultuur, indrukwekkende landschappen, wilde dieren en de prachtige zuidkust. U bezoekt onder meer heilige tempels en theeplantages, maakt een safari en ontspant aan het strand.">Experience the perfect balance of Sri Lanka's rich culture, breathtaking landscapes, incredible wildlife, and beautiful southern coastline on our carefully curated 9-day private journey, from sacred temples and tea plantations to exciting safaris and relaxing beaches.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=3" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 4 - Bird Watching Tour -->
            <div class="pkg-card" data-pkg="4">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/destinations/sinharaja/sinharaja1.webp" class="pkg-main-img" alt="Bird Watching Tour" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/destinations/sinharaja/sinharaja1.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/Ceylon-Green-Pigeon-2.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/85.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/provincial-butterflies-of-sri-lanka-8.webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="🦜 Bird Watching <span>Tour</span>" data-si="🦜 පක්ෂි නැරඹීමේ <span>සංචාරය</span>" data-ta="🦜 Vogels Spotten <span>Tour</span>">🦜 Bird Watching <span>Tour</span></h3>
                    <p class="pkg-tag" data-en="Half-Day Private Tour &middot; Nature &middot; Wildlife &middot; Rainforest" data-si="අර්ධ දින පුද්ගලික සංචාරය &middot; ස්වභාවික &middot; වන සතුන් &middot; වර්ෂාවනාන්තරය" data-ta="Halve Dag Privétour &middot; Natuur &middot; Wildlife &middot; Regenwoud">Half-Day Private Tour &middot; Nature &middot; Wildlife &middot; Rainforest</p>
                    <p class="pkg-desc" data-en="Experience the incredible biodiversity of Sinharaja Rainforest, Sri Lanka's last remaining tropical rainforest and a UNESCO World Heritage Site, discovering rare endemic bird species with an experienced naturalist guide." data-si="ශ්‍රී ලංකාවේ ඉතිරිව ඇති අවසාන නිවර්තන වැසි වනාන්තරය සහ යුනෙස්කෝ ලෝක උරුම ස්ථානය වන සිංහරාජ වැසි වනාන්තරයේ විශිෂ්ට ජෛව විවිධත්වය අත්විඳින්න. පළපුරුදු ස්වභාවවේදී මාර්ගෝපදේශකයෙකු සමඟ දුර්ලභ ආවේණික පක්ෂි විශේෂ සොයා ගන්න." data-ta="Ontdek samen met een ervaren natuurgids de uitzonderlijke biodiversiteit van het Sinharaja-regenwoud, het laatste tropische regenwoud van Sri Lanka en UNESCO-werelderfgoed. Onderweg gaat u op zoek naar zeldzame en endemische vogelsoorten.">Experience the incredible biodiversity of Sinharaja Rainforest, Sri Lanka's last remaining tropical rainforest and a UNESCO World Heritage Site, discovering rare endemic bird species with an experienced naturalist guide.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=4" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 5 - Ella Day Tour -->
            <div class="pkg-card" data-pkg="5">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/packages/nine-arch-bridge-ella-sri-lanka-0429.webp" class="pkg-main-img" alt="Ella Day Tour" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/packages/nine-arch-bridge-ella-sri-lanka-0429.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/little-adams-peak-ella-1024x683.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/Ella-Sri-Lanka.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/caption.webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="🏞️ Ella <span>Day Tour</span>" data-si="🏞️ ඇල්ල <span>දින සංචාරය</span>" data-ta="🏞️ Ella <span>Dagtour</span>">🏞️ Ella <span>Day Tour</span></h3>
                    <p class="pkg-tag" data-en="Full-Day Private Tour &middot; Mountains &middot; Waterfalls &middot; Tea Country" data-si="පූර්ණ දින පුද්ගලික සංචාරය &middot; කඳුකරය &middot; දිය ඇල්ල &middot; තේ දේශය" data-ta="Volledige Dag Privétour &middot; Bergen &middot; Watervallen &middot; Theestreek">Full-Day Private Tour &middot; Mountains &middot; Waterfalls &middot; Tea Country</p>
                    <p class="pkg-desc" data-en="Discover the breathtaking beauty of Sri Lanka's hill country, travelling through scenic mountain roads and lush tea plantations while visiting Ella's most famous attractions including the iconic Nine Arch Bridge." data-si="ශ්‍රී ලංකාවේ කඳුකර ප්‍රදේශයේ විශ්මයජනක සුන්දරත්වය සොයා ගන්න. දර්ශනීය කඳුකර මාර්ග සහ සශ්‍රීක තේ වතු හරහා ගමන් කරමින්, ප්‍රසිද්ධ නයින් ආර්ච් පාලම ඇතුළු ඇල්ලේ වඩාත් ප්‍රසිද්ධ ආකර්ෂණීය ස්ථාන නැරඹීමට යන්න." data-ta="Ontdek het indrukwekkende heuvelland van Sri Lanka. U rijdt over mooie bergwegen, langs groene theeplantages en bezoekt de bekendste bezienswaardigheden van Ella, waaronder de iconische Nine Arch Bridge.">Discover the breathtaking beauty of Sri Lanka's hill country, travelling through scenic mountain roads and lush tea plantations while visiting Ella's most famous attractions including the iconic Nine Arch Bridge.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=5" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 6 - Sigiriya & Dambulla Day Tour -->
            <div class="pkg-card" data-pkg="6">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/packages/image_processing20200227-4-1ywg9yl.webp" class="pkg-main-img" alt="Sigiriya and Dambulla Day Tour" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/packages/image_processing20200227-4-1ywg9yl.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/sigiriya/sigiriya4.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/dambulla/DambullaCaveTemple1.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/hi-i-am-sumith-i-am-the.webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="🏛️ Sigiriya & <span>Dambulla Day Tour</span>" data-si="🏛️ සීගිරිය සහ <span>දඹුල්ල දින සංචාරය</span>" data-ta="🏛️ Sigiriya & <span>Dambulla Dagtour</span>">🏛️ Sigiriya & <span>Dambulla Day Tour</span></h3>
                    <p class="pkg-tag" data-en="Full-Day Private Tour &middot; Culture &middot; Heritage &middot; UNESCO &middot; History" data-si="පූර්ණ දින පුද්ගලික සංචාරය &middot; සංස්කෘතිය &middot; උරුමය &middot; යුනෙස්කෝ &middot; ඉතිහාසය" data-ta="Volledige Dag Privétour &middot; Cultuur &middot; Erfgoed &middot; UNESCO &middot; Geschiedenis">Full-Day Private Tour &middot; Culture &middot; Heritage &middot; UNESCO &middot; History</p>
                    <p class="pkg-desc" data-en="Discover two of Sri Lanka's most iconic UNESCO World Heritage Sites, climbing the magnificent Sigiriya Rock Fortress and exploring the sacred Dambulla Cave Temple with its ancient statues and cave paintings." data-si="ශ්‍රී ලංකාවේ වඩාත් ප්‍රසිද්ධ යුනෙස්කෝ ලෝක උරුම ස්ථාන දෙකක් සොයා ගන්න. විශිෂ්ට සීගිරිය පර්වත බලකොටුව තරණය කර, පුරාණ ප්‍රතිමා සහ ගුහා සිතුවම් සහිත පූජනීය දඹුල්ල ගුහා විහාරය ගවේෂණය කරන්න." data-ta="Ontdek twee van Sri Lanka's meest iconische UNESCO-werelderfgoedsites: beklim het prachtige Sigiriya-rotsfort en verken de heilige Dambulla-grottempel met zijn eeuwenoude beelden en grotschilderingen.">Discover two of Sri Lanka's most iconic UNESCO World Heritage Sites, climbing the magnificent Sigiriya Rock Fortress and exploring the sacred Dambulla Cave Temple with its ancient statues and cave paintings.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=6" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 7 - Wilpattu National Park Day Tour -->
            <div class="pkg-card" data-pkg="7">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/packages/LK50F01000-14-E.webp" class="pkg-main-img" alt="Wilpattu National Park Day Tour" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/packages/LK50F01000-14-E.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/47.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/kumana-national-park-title-photo_orig.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/736248696_27306282552333112_5851728031208810976_n.webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="🐆 Wilpattu National Park <span>Day Tour</span>" data-si="🐆 විල්පත්තු ජාතික උද්‍යාන <span>දින සංචාරය</span>" data-ta="🐆 Wilpattu Nationaal Park <span>Dagtour</span>">🐆 Wilpattu National Park <span>Day Tour</span></h3>
                    <p class="pkg-tag" data-en="Full-Day Private Safari &middot; Wildlife &middot; Safari &middot; Nature &middot; Adventure" data-si="පූර්ණ දින පුද්ගලික සෆාරි &middot; වන සතුන් &middot; සෆාරි &middot; ස්වභාවික &middot; සාහසික" data-ta="Volledige Dag Privésafari &middot; Wildlife &middot; Safari &middot; Natuur &middot; Avontuur">Full-Day Private Safari &middot; Wildlife &middot; Safari &middot; Nature &middot; Adventure</p>
                    <p class="pkg-desc" data-en="Experience the incredible wildlife of Wilpattu National Park, Sri Lanka's largest national park, exploring in a private 4x4 safari jeep in search of leopards, elephants, sloth bears, and the famous natural Villus." data-si="ශ්‍රී ලංකාවේ විශාලතම ජාතික උද්‍යානය වන විල්පත්තු ජාතික උද්‍යානයේ විශිෂ්ට වනජීවී අත්දැකීමක් ලබා ගන්න. පුද්ගලික 4x4 සෆාරි ජීප් රථයකින් ගවේෂණය කරමින් දිවියන්, අලි ඇතුන්, අලස වලසුන් සහ ප්‍රසිද්ධ ස්වාභාවික විල්ලු සොයන්න." data-ta="Verken Wilpattu National Park, het grootste nationale park van Sri Lanka, tijdens een privésafari per 4x4-jeep. Ga op zoek naar luipaarden, olifanten en lippenberen en ontdek de karakteristieke natuurlijke meren, die lokaal villus worden genoemd.">Experience the incredible wildlife of Wilpattu National Park, Sri Lanka's largest national park, exploring in a private 4x4 safari jeep in search of leopards, elephants, sloth bears, and the famous natural Villus.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=7" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 8 - Cultural Heritage Tour -->
            <div class="pkg-card" data-pkg="8">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/destinations/kandy/kandy1.webp" class="pkg-main-img" alt="Cultural Heritage Tour" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/destinations/kandy/kandy1.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/anuradhapura/anuradhapura1.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/dambulla/DambullaCaveTemple1.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/unnamed (1).webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="🏛️ Cultural Heritage <span>Tour</span>" data-si="🏛️ සංස්කෘතික උරුම <span>සංචාරය</span>" data-ta="🏛️ Cultureel Erfgoed <span>Tour</span>">🏛️ Cultural Heritage <span>Tour</span></h3>
                    <p class="pkg-tag" data-en="5 Days | 4 Nights &middot; Culture &middot; Heritage &middot; UNESCO &middot; History" data-si="දින 5 | රාත්‍රී 4 &middot; සංස්කෘතිය &middot; උරුමය &middot; යුනෙස්කෝ &middot; ඉතිහාසය" data-ta="5 Dagen | 4 Nachten &middot; Cultuur &middot; Erfgoed &middot; UNESCO &middot; Geschiedenis">5 Days | 4 Nights &middot; Culture &middot; Heritage &middot; UNESCO &middot; History</p>
                    <p class="pkg-desc" data-en="Discover the rich cultural heritage of Sri Lanka on our carefully curated 5-day private journey. Explore ancient UNESCO World Heritage Sites, sacred temples, and historic cities while experiencing the island's fascinating history, Buddhist traditions, and authentic local culture." data-si="අපගේ ප්‍රවේශමෙන් සැලසුම් කළ දින 5ක පුද්ගලික සංචාරය සමඟ ශ්‍රී ලංකාවේ පොහොසත් සංස්කෘතික උරුමය සොයා ගන්න. පුරාණ යුනෙස්කෝ ලෝක උරුම ස්ථාන, පූජනීය විහාරස්ථාන සහ ඓතිහාසික නගර ගවේෂණය කරමින් දිවයිනේ සිත්ගන්නාසුලු ඉතිහාසය, බෞද්ධ සම්ප්‍රදායන් සහ අව්‍යාජ දේශීය සංස්කෘතිය අත්විඳින්න." data-ta="Ontdek tijdens deze 5-daagse privérondreis het rijke culturele erfgoed van Sri Lanka. U bezoekt eeuwenoud UNESCO-werelderfgoed, heilige tempels en historische steden en maakt kennis met de boeddhistische tradities en lokale cultuur.">Discover the rich cultural heritage of Sri Lanka on our carefully curated 5-day private journey. Explore ancient UNESCO World Heritage Sites, sacred temples, and historic cities while experiencing the island's fascinating history, Buddhist traditions, and authentic local culture.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=8" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 9 - Scenic Sri Lanka Tour -->
            <div class="pkg-card" data-pkg="9">
                <div class="pkg-main-img-wrap">
                    <img src="../resources/img/destinations/pinnawala/pinnawala1.webp" class="pkg-main-img" alt="Scenic Sri Lanka Tour" />
                </div>
                <div class="pkg-thumb-row">
                    <img src="../resources/img/destinations/pinnawala/pinnawala1.webp" class="active" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/mirissa/mirissa1.webp" onclick="swapImage(this)" />
                    <img src="../resources/img/packages/unnamed (1).webp" onclick="swapImage(this)" />
                    <img src="../resources/img/destinations/horton/horton1.webp" onclick="swapImage(this)" />
                </div>
                <div class="pkg-body">
                    <h3 class="pkg-title" data-en="🌄 Scenic Sri Lanka <span>Tour</span>" data-si="🌄 දර්ශනීය ශ්‍රී ලංකා <span>සංචාරය</span>" data-ta="🌄 Schilderachtig Sri Lanka <span>Tour</span>">🌄 Scenic Sri Lanka <span>Tour</span></h3>
                    <p class="pkg-tag" data-en="10 Days | 9 Nights &middot; Culture &middot; Mountains &middot; Wildlife &middot; Beaches &middot; Adventure" data-si="දින 10 | රාත්‍රී 9 &middot; සංස්කෘතිය &middot; කඳුකරය &middot; වන සතුන් &middot; වෙරළ &middot; සාහසික" data-ta="10 Dagen | 9 Nachten &middot; Cultuur &middot; Bergen &middot; Wildlife &middot; Stranden &middot; Avontuur">10 Days | 9 Nights &middot; Culture &middot; Mountains &middot; Wildlife &middot; Beaches &middot; Adventure</p>
                    <p class="pkg-desc" data-en="Discover the very best of Sri Lanka on our carefully curated 10-day private journey. From ancient UNESCO World Heritage Sites and misty tea plantations to breathtaking mountain landscapes, exciting wildlife safaris, and beautiful southern beaches, every experience is thoughtfully designed for you." data-si="අපගේ ප්‍රවේශමෙන් සැලසුම් කළ දින 10ක පුද්ගලික සංචාරය සමඟ ශ්‍රී ලංකාවේ හොඳම දේ අත්විඳින්න. පුරාණ යුනෙස්කෝ ලෝක උරුම ස්ථාන සහ මීදුමෙන් වැසුණු තේ වතු සිට විශ්මයජනක කඳුකර දර්ශන, උද්යෝගජනක වනජීවී සෆාරි සහ සුන්දර දකුණු වෙරළ දක්වා සෑම අත්දැකීමක්ම ඔබ වෙනුවෙන් ප්‍රවේශමෙන් සැලසුම් කර ඇත." data-ta="Ontdek in tien dagen het beste van Sri Lanka: van eeuwenoud UNESCO-werelderfgoed en mistige theeplantages tot indrukwekkende bergen, spannende safari's en de mooie stranden aan de zuidkust.">Discover the very best of Sri Lanka on our carefully curated 10-day private journey. From ancient UNESCO World Heritage Sites and misty tea plantations to breathtaking mountain landscapes, exciting wildlife safaris, and beautiful southern beaches, every experience is thoughtfully designed for you.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=9" class="pkg-btn pkg-btn-more" data-en="SEE MORE" data-si="වැඩිදුර බලන්න" data-ta="MEER BEKIJKEN">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" data-en="BOOK NOW" data-si="දැන් වෙන් කරන්න" data-ta="NU BOEKEN" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

        </div>
    </section>

    <!-- ------------footer----------- -->
    <?php include('../footer/footer.php'); ?>
    <!-- ------------footer----------- -->

    <script src="../header/header.js"></script>
    <script src="packages.js"></script>

</body>

</html>