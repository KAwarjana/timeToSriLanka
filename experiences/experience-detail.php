<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time to Ceylon</title>
    <link rel="icon" type="image/png" href="../resources/img/logo.png">

    <link rel="stylesheet" href="../header/header.css">
    <link rel="stylesheet" href="experience-detail.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <style>
        /* Tab Navigation Styles */
        .exp-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            padding: 24px 40px;
            max-width: 1160px;
            margin: 0 auto;
            z-index: 2;
            position: relative;
        }

        .exp-tab {
            padding: 10px 20px;
            border: 2px solid var(--purple-mid, #7c3aed);
            background: transparent;
            color: var(--font-color, #260058);
            font-family: 'Outfit', sans-serif;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .exp-tab:hover {
            background: var(--purple-mid, #7c3aed);
            color: white;
        }

        .exp-tab.active {
            background: var(--purple-mid, #7c3aed);
            color: white;
        }

        .exp-panel {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .exp-panel.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Mobile dropdown */
        .exp-dropdown {
            display: none;
            width: 100%;
            max-width: 400px;
            margin: 16px auto;
            padding: 12px 16px;
            border: 2px solid var(--purple-mid, #7c3aed);
            border-radius: 10px;
            background: white;
            color: var(--font-color, #260058);
            font-family: 'Outfit', sans-serif;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            z-index: 2;
            position: relative;
        }

        @media (max-width: 768px) {
            .exp-tabs {
                display: none;
            }
            .exp-dropdown {
                display: block;
            }
        }
    </style>
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
            <h1 class="hero-title" data-en="Explore Our Experiences" data-si="අපගේ අත්දැකීම් ගවේෂණය කරන්න" data-ta="Verken Onze Ervaringen">Explore Our Experiences</h1>
        </div>
    </section>

    <!-- Tab Navigation -->
    <div class="exp-tabs" id="expTabs">
        <button class="exp-tab active" onclick="showExperience('adventure')" data-en="Adventure" data-si="සාහසික ගමන" data-ta="Avontuur">Adventure</button>
        <button class="exp-tab" onclick="showExperience('wildlife')" data-en="Wildlife Safari" data-si="වනජීවී සෆාරි" data-ta="Wildlife Safari">Wildlife Safari</button>
        <button class="exp-tab" onclick="showExperience('cultural')" data-en="Cultural" data-si="සංස්කෘතික" data-ta="Cultureel">Cultural</button>
        <button class="exp-tab" onclick="showExperience('ayurveda')" data-en="Ayurveda" data-si="ආයුර්වේද" data-ta="Ayurveda">Ayurveda</button>
        <button class="exp-tab" onclick="showExperience('scenic')" data-en="Scenic" data-si="රූපමය" data-ta="Schilderachtig">Scenic</button>
        <button class="exp-tab" onclick="showExperience('coastal')" data-en="Coastal" data-si="වෙරළ" data-ta="Kust">Coastal</button>
    </div>

    <!-- Mobile Dropdown -->
    <select class="exp-dropdown" id="expDropdown" onchange="showExperience(this.value)">
        <option value="adventure" data-en="Adventure" data-si="සාහසික ගමන" data-ta="Avontuur">Adventure</option>
        <option value="wildlife" data-en="Wildlife Safari" data-si="වනජීවී සෆාරි" data-ta="Wildlife Safari">Wildlife Safari</option>
        <option value="cultural" data-en="Cultural Discovery" data-si="සංස්කෘතික ගවේෂණය" data-ta="Culturele Ontdekking">Cultural Discovery</option>
        <option value="ayurveda" data-en="Ayurveda & Wellness" data-si="ආයුර්වේද සහ සුවය" data-ta="Ayurveda & Wellness">Ayurveda & Wellness</option>
        <option value="scenic" data-en="Scenic Journeys" data-si="රූපමය ගමන්" data-ta="Schilderachtige Reizen">Scenic Journeys</option>
        <option value="coastal" data-en="Coastal Escape" data-si="වෙරළ නිවාඩුව" data-ta="Kustontsnapping">Coastal Escape</option>
    </select>

    <!-- ADVENTURE PANEL -->
    <div class="exp-panel active" id="adventure">
        <section class="main-section">
            <div class="main-section-div">
                <div class="main-image-wrap">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=600&q=80" alt="Mountain trail adventure" class="main-img" />
                </div>
                <div class="content-col">
                    <div class="label" data-en="ADVENTURE" data-si="සාහසික ගමන" data-ta="AVONTUUR">ADVENTURE</div>
                    <h2 class="title" data-en="Mountain <span class='accent'>Trails</span>" data-si="කඳු <span class='accent'>මාර්ග</span>" data-ta="Berg <span class='accent'>Paden</span>">Mountain <span class="accent">Trails</span></h2>
                    <div class="body-text">
                        <p data-en="Trek through misty tea plantations and ancient forest paths that wind across Sri Lanka's central highlands. From Ella to Adam's Peak, every trail reveals breathtaking panoramas and hidden waterfalls waiting to be discovered by adventurous souls." data-si="ශ්‍රී ලංකාවේ මධ්‍යම උස්බිම් පුරා වැටී ඇති මීදුම් තේ වතු සහ පුරාණ වන මාර්ග හරහා ගමන් කරන්න. ඇල්ලේ සිට ශ්‍රී පාදස්ථානය දක්වා, සෑම මාර්ගයක්ම හුස්ම ගන්නා පノරම දසුන් සහ සැඟවුණු ජලපාරවල් හෙළිදරව් කරයි." data-ta="Trek door mistige theeplantages en oude bospaden door het centrale hoogland van Sri Lanka. Van Ella tot Adam's Peak, elk pad onthult adembenemende panorama's.">Trek through misty tea plantations and ancient forest paths that wind across Sri Lanka's central highlands. From Ella to Adam's Peak, every trail reveals breathtaking panoramas and hidden waterfalls waiting to be discovered by adventurous souls.</p>
                        <p data-en="Climb the legendary Sigiriya Rock Fortress or hike Pidurangala for sunrise views over the jungle canopy below. The Knuckles Mountain Range offers rugged terrain through cloud forests, while Little Adam's Peak provides an easy yet rewarding ascent with stunning valley vistas." data-si="සිගිරිය පාෂාණ කොටුව තරණය කරන්න හෝ පිදුරංගලයට පයින් යන්න. නකල්ස් කඳු වාරය මීදුම් වනාන්තර හරහා දුෂ්කර භූමි තත්ත්වයන් ලබා දෙයි." data-ta="Beklim het legendarische Sigiriya of wandel Pidurangala voor zonsopgang. De Knuckles Mountain Range biedt ruig terrein door wolkenbossen.">Climb the legendary Sigiriya Rock Fortress or hike Pidurangala for sunrise views over the jungle canopy below. The Knuckles Mountain Range offers rugged terrain through cloud forests, while Little Adam's Peak provides an easy yet rewarding ascent with stunning valley vistas.</p>
                        <p data-en="Sri Lanka's diverse landscapes make it a trekker's paradise within a compact island nation. You can start your morning in cool mountain mist and end the day in warm lowland forest, passing through working tea estates and ancient pathways used for centuries by local villagers." data-si="ශ්‍රී ලංකාවේ විවිධ ලන්ඩස්කේප් එක සංකීර්ණ දූපත් ජාතියක් තුළ ට්‍රෙකර්වරයෙකුගේ ස්වර්ගය බවට පත් කරයි." data-ta="De diverse landschappen van Sri Lanka maken het een trekkersparadijs binnen een compacte eilandnatie.">Sri Lanka's diverse landscapes make it a trekker's paradise within a compact island nation. You can start your morning in cool mountain mist and end the day in warm lowland forest, passing through working tea estates and ancient pathways used for centuries by local villagers.</p>
                    </div>
                    <div class="gallery-row">
                        <div class="gallery-item"><img src="../resources/img/home/1.jpeg" alt="Tea plantation hiking" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1469521669194-babb45599def?w=400&q=80" alt="Summit view" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=400&q=80" alt="Waterfall trek" /></div>
                    </div>
                </div>
            </div>
            <div class="body-text1">
                <p data-en="Adventure seekers can also explore the Horton Plains National Park, home to World's End and Baker's Falls. The park's unique ecosystem supports many endemic species found nowhere else on Earth, making every hike a journey of discovery." data-si="හෝර්ටන් තැන්න ජාතික වනෝද්‍යානය ද ගවේෂණය කළ හැකිය. වනෝද්‍යානයේ අද්විතීය පරිසර පද්ධතිය පෘථිවියේ වෙන කොහේවත් නොමැති බොහෝ දේශීය විශේෂ සහාය දක්වයි." data-sa="Avonturiers kunnen ook het Horton Plains National Park verkennen, de thuisbasis van World's End en Baker's Falls. Het unieke ecosysteem van het park ondersteunt veel endemische soorten.">Adventure seekers can also explore the Horton Plains National Park, home to World's End and Baker's Falls. The park's unique ecosystem supports many endemic species found nowhere else on Earth, making every hike a journey of discovery.</p>
                <p data-en="The best time for hiking in Sri Lanka is from December to March when the weather is dry and cool in the hill country. Our expert guides provide all necessary equipment and safety briefings, ensuring your adventure is both thrilling and secure." data-si="ශ්‍රී ලංකාවේ පයින් යාමට හොඳම කාලය දෙසැම්බර් සිට මාර්තු දක්වා වේ. අපගේ විශේෂඥ මාර්ගෝපදේශකයින් සියලුම අවශ්‍ය උපකරණ සහ ආරක්ෂක උපදෙස් ලබා දෙයි." data-ta="De beste tijd om te wandelen in Sri Lanka is van december tot maart. Onze deskundige gidsen verzorgen alle benodigde uitrusting en veiligheidsinstructies.">The best time for hiking in Sri Lanka is from December to March when the weather is dry and cool in the hill country. Our expert guides provide all necessary equipment and safety briefings, ensuring your adventure is both thrilling and secure.</p>
                <p data-en="Whether you are an experienced mountaineer or a casual nature lover, Sri Lanka offers trails for every fitness level. From gentle walks through botanical gardens to challenging multi-day treks across mountain ranges, your perfect adventure awaits." data-si="ඔබ අත්දැකීම් සහිත කඳු නැගීම්කරුවෙකු හෝ නිදහස් ස්වභාවික ප්‍රේමියෙකු වුවද, ශ්‍රී ලංකාව සෑම ශාරීරික ශක්ති මට්ටමකටම මාර්ග ලබා දෙයි." data-ta="Of u nu een ervaren bergbeklimmer bent of een casual natuurliefhebber, Sri Lanka biedt paden voor elk fitnessniveau.">Whether you are an experienced mountaineer or a casual nature lover, Sri Lanka offers trails for every fitness level. From gentle walks through botanical gardens to challenging multi-day treks across mountain ranges, your perfect adventure awaits.</p>
            </div>
        </section>
    </div>

    <!-- WILDLIFE PANEL -->
    <div class="exp-panel" id="wildlife">
        <section class="main-section">
            <div class="main-section-div">
                <div class="main-image-wrap">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=600&q=80" alt="Wildlife safari jeep" class="main-img" />
                </div>
                <div class="content-col">
                    <div class="label" data-en="WILDLIFE SAFARI" data-si="වනජීවී සෆාරි" data-ta="WILDLIFE SAFARI">WILDLIFE SAFARI</div>
                    <h2 class="title" data-en="Wild <span class='accent'>Encounters</span>" data-si="වන <span class='accent'>සංසර්ග</span>" data-ta="Wilde <span class='accent'>Ontmoetingen</span>">Wild <span class="accent">Encounters</span></h2>
                    <div class="body-text">
                        <p data-en="Embark on thrilling jeep safaris through Yala and Udawalawe National Parks, home to leopards, elephants, and over two hundred bird species. Early morning drives offer the best chance to witness wildlife in their most active and natural state." data-si="යාල සහ උඩවලවේ ජාතික වනෝද්‍යාන හරහා උත්තේජක ජීප් සෆාරි වලට නැගී සිටින්න. උදෑසන මුල් පැයවල ධාවනයන් වනජීවී දැකගැනීමට හොඳම අවස්ථාව සපයයි." data-ta="Ga op spannende jeepsafari's door Yala en Udawalawe National Parks. Vroege ochtendritten bieden de beste kans om wildlife te zien.">Embark on thrilling jeep safaris through Yala and Udawalawe National Parks, home to leopards, elephants, and over two hundred bird species. Early morning drives offer the best chance to witness wildlife in their most active and natural state.</p>
                        <p data-en="Yala National Park boasts the highest leopard density in the world, while Udawalawe is renowned for its large herds of wild elephants. Spot crocodiles basking by waterholes, watch peacocks display their feathers, and encounter sloth bears in their natural scrubland habitat." data-si="යාල ජාතික වනෝද්‍යානය ලොව වැඩිම දිවි සංඛ්‍යාතයක් ඇති ස්ථානය වන අතර, උඩවලවේ විශාල වන අලි රංචු වලට ප්‍රසිද්ධයි." data-ta="Yala National Park heeft de hoogste luipaarddichtheid ter wereld, terwijl Udawalawe bekend staat om zijn grote kuddes wilde olifanten.">Yala National Park boasts the highest leopard density in the world, while Udawalawe is renowned for its large herds of wild elephants. Spot crocodiles basking by waterholes, watch peacocks display their feathers, and encounter sloth bears in their natural scrubland habitat.</p>
                        <p data-en="A typical safari includes a guided tour in a specially designed open-top jeep with a knowledgeable naturalist guide. Most operators offer early morning or late afternoon drives lasting two to three hours, which is when animals congregate around water sources and are easiest to spot." data-si="සාමාන්‍ය සෆාරියකට විශේෂිතව නිර්මාණය කරන ලද විවෘත-ඉහළ ජීප් එකක මඟපෙන්වීමේ සංචාරයක් ඇතුළත් වේ. සතුන් ජල මූලාශ්‍ර වටා රැස්වන අවස්ථාව වන අතර, ඒවා සොයාගැනීමට පහසුම කාලයයි." data-ta="Een typische safari omvat een rondleiding in een speciaal ontworpen open jeep met een deskundige natuurgids. Dit is wanneer dieren zich rond waterbronnen verzamelen en het gemakkelijkst te zien zijn.">A typical safari includes a guided tour in a specially designed open-top jeep with a knowledgeable naturalist guide. Most operators offer early morning or late afternoon drives lasting two to three hours, which is when animals congregate around water sources and are easiest to spot.</p>
                    </div>
                    <div class="gallery-row">
                        <div class="gallery-item"><img src="../resources/img/home/1.jpeg" alt="Leopard spotting" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1469521669194-babb45599def?w=400&q=80" alt="Elephant herd" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=400&q=80" alt="Bird watching" /></div>
                    </div>
                </div>
            </div>
            <div class="body-text1">
                <p data-en="For bird enthusiasts, the Sinharaja Rainforest and Bundala National Park offer extraordinary avian diversity. Spot endemic species like the Sri Lankan junglefowl and colorful parakeets, along with migratory birds that visit during the winter months." data-si="සිංහරාජ වැසි වනාන්තරය සහ බුන්දල ජාතික වනෝද්‍යානය අසාමාන්‍ය පක්ෂි විවිධත්වයක් ලබා දෙයි. ශ්‍රී ලංකා වනකුකුළා සහ වර්ණවත් පැරකීට් වැනි දේශීය විශේෂ සොයාගන්න." data-ta="Voor vogelliefhebbers bieden het Sinharaja Regenwoud en Bundala National Park een buitengewone vogeldiversiteit. Spot endemische soorten zoals de Sri Lankaanse junglefowl.">For bird enthusiasts, the Sinharaja Rainforest and Bundala National Park offer extraordinary avian diversity. Spot endemic species like the Sri Lankan junglefowl and colorful parakeets, along with migratory birds that visit during the winter months.</p>
                <p data-en="Wilpattu National Park, known for its willus or natural lakes, provides a more secluded safari experience. The park's dense forest canopy creates perfect conditions for spotting leopards and sloth bears in their undisturbed natural environment." data-si="විල්පත්තු ජාතික වනෝද්‍යානය, එහි විල් හෝ ස්වාභාවික විල් වලට ප්‍රසිද්ධයි, වඩාත් වෙන්වූ සෆාරි අත්දැකීමක් ලබා දෙයි." data-ta="Wilpattu National Park, bekend om zijn natuurlijke meren, biedt een meer afgelegen safari-ervaring.">Wilpattu National Park, known for its willus or natural lakes, provides a more secluded safari experience. The park's dense forest canopy creates perfect conditions for spotting leopards and sloth bears in their undisturbed natural environment.</p>
                <p data-en="Our safaris are conducted with strict adherence to wildlife protection guidelines. We maintain respectful distances from animals, avoid disturbing their natural behavior, and support local conservation efforts that help preserve these magnificent creatures for future generations." data-si="අපගේ සෆාරි වානජීවී ආරක්ෂණ මාර්ගෝපදේශයන්ට දැඩි ලෙස අනුගත වෙමින් පවත්වාගෙන යයි. අපි සතුන්ගෙන් ගෞරවනීය දුරක් පවත්වා ගනිමු." data-ta="Onze safari's worden uitgevoerd met strikte naleving van richtlijnen voor wildlifebescherming. We houden respectvolle afstand van dieren.">Our safaris are conducted with strict adherence to wildlife protection guidelines. We maintain respectful distances from animals, avoid disturbing their natural behavior, and support local conservation efforts that help preserve these magnificent creatures for future generations.</p>
            </div>
        </section>
    </div>

    <!-- CULTURAL PANEL -->
    <div class="exp-panel" id="cultural">
        <section class="main-section">
            <div class="main-section-div">
                <div class="main-image-wrap">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=600&q=80" alt="Ancient temple ruins" class="main-img" />
                </div>
                <div class="content-col">
                    <div class="label" data-en="CULTURAL DISCOVERY" data-si="සංස්කෘතික ගවේෂණය" data-ta="CULTURELE ONTDEKKING">CULTURAL DISCOVERY</div>
                    <h2 class="title" data-en="Ancient <span class='accent'>Heritage</span>" data-si="පුරාණ <span class='accent'>උරුමය</span>" data-ta="Oud <span class='accent'>Erfgoed</span>">Ancient <span class="accent">Heritage</span></h2>
                    <div class="body-text">
                        <p data-en="Explore the UNESCO World Heritage Cultural Triangle where ancient kings built magnificent cities and sacred temples. Sigiriya's fifth-century rock fortress and Dambulla's cave temples showcase the artistic brilliance of Sri Lanka's golden age." data-si="UNESCO ලෝක උරුම සංස්කෘතික ත්‍රිකෝණය සොයා බලන්න. සිගිරිය පාෂාණ කොටුව සහ දඹුල්ල ලෙන දේවාල ශ්‍රී ලංකාවේ ස්වර්ණමය යුගයේ කලාත්මක දිග්ගජය ප්‍රදර්ශනය කරයි." data-ta="Verken de UNESCO Werelderfgoed Culturele Driehoek. Het rotsfort van Sigiriya en de grottempels van Dambulla tonen de artistieke briljantheid van het gouden tijdperk van Sri Lanka.">Explore the UNESCO World Heritage Cultural Triangle where ancient kings built magnificent cities and sacred temples. Sigiriya's fifth-century rock fortress and Dambulla's cave temples showcase the artistic brilliance of Sri Lanka's golden age.</p>
                        <p data-en="Walk through the sacred city of Kandy, home to the Temple of the Tooth Relic, and witness ancient frescoes at Sigiriya that have retained their vibrant colors for over fifteen centuries. The Dambulla Cave Temple contains one of the most complete collections of Buddhist art in South Asia." data-si="දන්ත ධාතුව ඇති දේවාලයට නිවහන වන මහනුවර හරහා ඇවිද යන්න. දඹුල්ල ලෙන දේවාලය දකුණු ආසියාවේ වඩාත්ම සම්පූර්ණ බෞද්ධ කලා එකතුවලින් එකකි." data-ta="Wandel door de heilige stad Kandy, de thuisbasis van de Tempel van de Tandreliek. De Dambulla Grot Tempel bevat een van de meest complete collecties boeddhistische kunst in Zuid-Azië.">Walk through the sacred city of Kandy, home to the Temple of the Tooth Relic, and witness ancient frescoes at Sigiriya that have retained their vibrant colors for over fifteen centuries. The Dambulla Cave Temple contains one of the most complete collections of Buddhist art in South Asia.</p>
                        <p data-en="Every stone tells stories of civilizations that shaped Asian culture over two millennia of rich history. From the massive dagobas of Anuradhapura to the colonial charm of Galle Fort, Sri Lanka offers an unparalleled journey through history, spirituality, and architectural genius." data-si="සෑම ගලකම ආසියානු සංස්කෘතිය හැඩගස්වා ඇති ශිෂ්ටාචාරවල කතා කියයි. අනුරාධපුරයේ විශාල දාගැබ් වල සිට ගාල්ල කොටුවේ යටත්විජිත ආකර්ෂණය දක්වා." data-ta="Elke steen vertelt verhalen van beschavingen die de Aziatische cultuur hebben gevormd. Van de dagoba's van Anuradhapura tot de koloniale charme van Galle Fort.">Every stone tells stories of civilizations that shaped Asian culture over two millennia of rich history. From the massive dagobas of Anuradhapura to the colonial charm of Galle Fort, Sri Lanka offers an unparalleled journey through history, spirituality, and architectural genius.</p>
                    </div>
                    <div class="gallery-row">
                        <div class="gallery-item"><img src="../resources/img/home/1.jpeg" alt="Sigiriya rock fortress" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1469521669194-babb45599def?w=400&q=80" alt="Kandy temple ceremony" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=400&q=80" alt="Traditional dance performance" /></div>
                    </div>
                </div>
            </div>
            <div class="body-text1">
                <p data-en="The ancient city of Polonnaruwa reveals the grandeur of Sri Lanka's second capital, with its well-preserved ruins of palaces, temples, and massive Buddha statues. The Gal Viharaya's rock-carved Buddhas are considered masterpieces of Sinhalese stone craftsmanship." data-si="පොළොන්නරුවේ පුරාණ නගරය ශ්‍රී ලංකාවේ දෙවන අගනුවරේ මහිමය හෙළිදරව් කරයි. ගල් විහාරයේ පාෂාණ කැටයම් බුද්ධ ප්‍රතිමා සිංහල පාෂාණ කර්මාන්තයේ මාස්ටර්පීසස් ලෙස සැලකේ." data-ta="De oude stad Polonnaruwa onthult de grootsheid van de tweede hoofdstad van Sri Lanka. De rotsgehakte Boeddha's van Gal Viharaya worden beschouwd als meesterwerken.">The ancient city of Polonnaruwa reveals the grandeur of Sri Lanka's second capital, with its well-preserved ruins of palaces, temples, and massive Buddha statues. The Gal Viharaya's rock-carved Buddhas are considered masterpieces of Sinhalese stone craftsmanship.</p>
                <p data-en="Experience traditional Kandyan dance performances that bring alive the island's rich performing arts heritage. The vibrant costumes, rhythmic drumming, and acrobatic movements tell stories of ancient rituals and royal celebrations passed down through generations." data-si="දූපතේ පොහොසත් සංගීත කලා උරුමය සජීවීව ගෙන එන සාම්ප්‍රදායික කන්දyan නර්තන ප්‍රදර්ශන අත්විඳින්න." data-ta="Ervaar traditionele Kandyan dansvoorstellingen die het rijke erfgoed van uitvoerende kunsten tot leven brengen.">Experience traditional Kandyan dance performances that bring alive the island's rich performing arts heritage. The vibrant costumes, rhythmic drumming, and acrobatic movements tell stories of ancient rituals and royal celebrations passed down through generations.</p>
                <p data-en="Visit local artisan villages where traditional crafts like batik, wood carving, and pottery continue to thrive. Meet master craftsmen who preserve centuries-old techniques, creating intricate works of art that reflect Sri Lanka's unique cultural identity." data-si="බැටික්, ලී කැටයම්, සහ මැටි කෞතුකාගාර වැනි සාම්ප්‍රදායික ශිල්පීය ක්‍රම තවමත් සමෘද්ධිමත් වන දේශීය ශිල්පී ගම්වලට සංචාරය කරන්න." data-ta="Bezoek lokale ambachtelijke dorpen waar traditionele ambachten zoals batik, houtsnijwerk en aardewerk blijven bloeien.">Visit local artisan villages where traditional crafts like batik, wood carving, and pottery continue to thrive. Meet master craftsmen who preserve centuries-old techniques, creating intricate works of art that reflect Sri Lanka's unique cultural identity.</p>
            </div>
        </section>
    </div>

    <!-- AYURVEDA PANEL -->
    <div class="exp-panel" id="ayurveda">
        <section class="main-section">
            <div class="main-section-div">
                <div class="main-image-wrap">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=600&q=80" alt="Ayurveda treatment spa" class="main-img" />
                </div>
                <div class="content-col">
                    <div class="label" data-en="AYURVEDA & WELLNESS" data-si="ආයුර්වේද සහ සුවය" data-ta="AYURVEDA & WELLNESS">AYURVEDA & WELLNESS</div>
                    <h2 class="title" data-en="Healing <span class='accent'>Traditions</span>" data-si="සුවය <span class='accent'>සම්ප්‍රදායන්</span>" data-ta="Helende <span class='accent'>Tradities</span>">Healing <span class="accent">Traditions</span></h2>
                    <div class="body-text">
                        <p data-en="Discover the ancient science of Ayurveda, practiced in Sri Lanka for over five thousand years now. Personalized consultations with Ayurvedic doctors determine your unique constitution before tailor-made treatments restore balance to your body, mind, and soul." data-si="ශ්‍රී ලංකාවේ දැන් වසර පහළොස් දහසකට වඩා වැඩි කාලයක් භාවිතා වන ආයුර්වේදයේ පුරාණ විද්‍යාව සොයා බලන්න." data-ta="Ontdek de oude wetenschap van Ayurveda, al meer dan vijfduizend jaar beoefend in Sri Lanka.">Discover the ancient science of Ayurveda, practiced in Sri Lanka for over five thousand years now. Personalized consultations with Ayurvedic doctors determine your unique constitution before tailor-made treatments restore balance to your body, mind, and soul.</p>
                        <p data-en="Indulge in traditional therapies including Abhyanga oil massages, Shirodhara forehead treatments, and Panchakarma detox programs. Expert therapists use medicinal herbs and plants grown in lush tropical gardens to create natural elixirs that promote deep relaxation and complete rejuvenation." data-si="අභ්‍යංග තෙල් මසාජ්, ශිරෝධාරා නළල් ප්‍රතිකාර සහ පංචකර්ම විෂ නිවාරණ වැඩසටහන් ඇතුළු සාම්ප්‍රදායික ප්‍රතිකාර වලින් ප්‍රීතිමත් වන්න." data-ta="Geniet van traditionele therapieën waaronder Abhyanga-oliemassages, Shirodhara-voorhoofdsbehandelingen en Panchakarma-detoxprogramma's.">Indulge in traditional therapies including Abhyanga oil massages, Shirodhara forehead treatments, and Panchakarma detox programs. Expert therapists use medicinal herbs and plants grown in lush tropical gardens to create natural elixirs that promote deep relaxation and complete rejuvenation.</p>
                        <p data-en="Wellness retreats range from five to twenty-one days, offering beauty and detox packages customized to your dosha type. Each morning begins with yoga and meditation, followed by healing treatments, Ayurvedic cuisine, and peaceful moments surrounded by verdant jungle and tranquil rice paddies." data-si="සුවය නිවාඩු නිකේතන පහේ සිට විසි එක දක්වා දින ගණනක් පවතින අතර, ඔබගේ දෝෂ වර්ගයට අනුව පුද්ගලීකරණය කළ පැකේජ ලබා දෙයි." data-ta="Wellness-retraites variëren van vijf tot eenentwintig dagen en bieden pakketten aangepast aan uw dosha-type.">Wellness retreats range from five to twenty-one days, offering beauty and detox packages customized to your dosha type. Each morning begins with yoga and meditation, followed by healing treatments, Ayurvedic cuisine, and peaceful moments surrounded by verdant jungle and tranquil rice paddies.</p>
                    </div>
                    <div class="gallery-row">
                        <div class="gallery-item"><img src="../resources/img/home/1.jpeg" alt="Yoga session" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1469521669194-babb45599def?w=400&q=80" alt="Herbal massage" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=400&q=80" alt="Wellness retreat" /></div>
                    </div>
                </div>
            </div>
            <div class="body-text1">
                <p data-en="Sri Lanka's wellness centers are nestled in breathtaking locations, from beachfront resorts to hill country retreats. Many facilities feature infinity pools overlooking the ocean, open-air treatment pavilions, and organic gardens where healing herbs are cultivated." data-si="ශ්‍රී ලංකාවේ සුවය මධ්‍යස්ථාන වෙරළබඩ නිකේතන වල සිට කඳුකර නිවාඩු නිකේතන දක්වා හුස්ම ගන්නා ස්ථානවල පිහිටා ඇත." data-ta="De wellnesscentra van Sri Lanka liggen op adembenemende locaties, van strandresorts tot heuvelretraites.">Sri Lanka's wellness centers are nestled in breathtaking locations, from beachfront resorts to hill country retreats. Many facilities feature infinity pools overlooking the ocean, open-air treatment pavilions, and organic gardens where healing herbs are cultivated.</p>
                <p data-en="Learn the art of Sri Lankan cooking with classes that teach you to prepare nourishing Ayurvedic meals using locally sourced spices and ingredients. Discover how food becomes medicine as expert chefs explain the healing properties of turmeric, ginger, cinnamon, and other native spices." data-si="දේශීයව ලබා ගත් මසාලා සහ අමුද්‍රව්‍ය භාවිතා කරමින් පෝෂණාත්මක ආයුර්වේද ආහාර සකස් කරන ආකාරය ඉගැන්වීමේ පන්ති සමඟ ශ්‍රී ලංකා පිසීමේ කලාව ඉගෙන ගන්න." data-ta="Leer de kunst van Sri Lankaans koken met lessen die u leren voedzame Ayurvedische maaltijden te bereiden met lokaal verkregen kruiden.">Learn the art of Sri Lankan cooking with classes that teach you to prepare nourishing Ayurvedic meals using locally sourced spices and ingredients. Discover how food becomes medicine as expert chefs explain the healing properties of turmeric, ginger, cinnamon, and other native spices.</p>
                <p data-en="Our wellness programs are designed by certified Ayurvedic practitioners who combine ancient wisdom with modern understanding. Whether you seek stress relief, detoxification, or simply a peaceful escape, our personalized programs deliver lasting benefits for your overall wellbeing." data-si="අපගේ සුවය වැඩසටහන් සහතිකගත ආයුර්වේද වෘත්තිකයින් විසින් නිර්මාණය කරන ලද අතර, ඔවුන් පුරාණ ප්‍රඥාව නවීන අවබෝධය සමඟ ඒකාබද්ධ කරයි." data-ta="Onze wellnessprogramma's zijn ontworpen door gecertificeerde Ayurvedische beoefenaars die oude wijsheid combineren met modern inzicht.">Our wellness programs are designed by certified Ayurvedic practitioners who combine ancient wisdom with modern understanding. Whether you seek stress relief, detoxification, or simply a peaceful escape, our personalized programs deliver lasting benefits for your overall wellbeing.</p>
            </div>
        </section>
    </div>

    <!-- SCENIC PANEL -->
    <div class="exp-panel" id="scenic">
        <section class="main-section">
            <div class="main-section-div">
                <div class="main-image-wrap">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=600&q=80" alt="Scenic train journey" class="main-img" />
                </div>
                <div class="content-col">
                    <div class="label" data-en="SCENIC JOURNEYS" data-si="රූපමය ගමන්" data-ta="SCENIC REIZEN">SCENIC JOURNEYS</div>
                    <h2 class="title" data-en="Island <span class='accent'>Railways</span>" data-si="දූපත් <span class='accent'>දුම්රිය මාර්ග</span>" data-ta="Eiland <span class='accent'>Spoorwegen</span>">Island <span class="accent">Railways</span></h2>
                    <div class="body-text">
                        <p data-en="Ride one of the world's most beautiful train journeys from Kandy to Ella, winding through emerald tea plantations and misty mountain passes. The iconic blue train carriages offer panoramic views of cascading waterfalls and deep valleys below." data-si="කඳුකර මීදුම් මාර්ග හරහා හැසිරෙන මරකත තේ වතු හරහා මහනුවර සිට ඇල්ල දක්වා ලොව වඩාත්ම සුන්දර දුම්රිය ගමන් වලින් එකකට නැගී සිටින්න." data-ta="Maak een van 's werelds mooiste treinreizen van Kandy naar Ella, slingerend door smaragdgroene theeplantages en mistige bergpassen.">Ride one of the world's most beautiful train journeys from Kandy to Ella, winding through emerald tea plantations and misty mountain passes. The iconic blue train carriages offer panoramic views of cascading waterfalls and deep valleys below.</p>
                        <p data-en="The nine-arch bridge near Ella is an engineering marvel set amidst lush greenery, best experienced by train as it chugs through the hill country. Local vendors sell fresh fruits and snacks onboard, while friendly locals share stories of life in the highlands with passing travelers." data-si="ඇල්ල අසල පුරාණ ගොඩනැගිලි නවයේ පාලම පොහොසත් හරිතාගාරය මධ්‍යයේ පිහිටා ඇති ඉංජිනේරු පුදුමයකි." data-ta="De negen-bogenbrug bij Ella is een technisch wonder te midden van weelderig groen, het best te ervaren per trein.">The nine-arch bridge near Ella is an engineering marvel set amidst lush greenery, best experienced by train as it chugs through the hill country. Local vendors sell fresh fruits and snacks onboard, while friendly locals share stories of life in the highlands with passing travelers.</p>
                        <p data-en="Scenic railway routes connect colonial hill stations with coastal towns, offering a unique perspective of Sri Lanka's diverse landscapes. From the cool central highlands to warm coastal plains, each journey reveals changing scenery within just a few hours of comfortable and affordable travel." data-si="රූපමය දුම්රිය මාර්ග යටත්විජිත කඳු නිවාස සහ වෙරළබඩ නගර සම්බන්ධ කරමින් ශ්‍රී ලංකාවේ විවිධ ලන්ඩස්කේප් වල අද්විතීය දෘෂ්ටිකෝණයක් ලබා දෙයි." data-ta="Schilderachtige spoorwegroutes verbinden koloniale bergstations met kustplaatsen en bieden een uniek perspectief op de diverse landschappen van Sri Lanka.">Scenic railway routes connect colonial hill stations with coastal towns, offering a unique perspective of Sri Lanka's diverse landscapes. From the cool central highlands to warm coastal plains, each journey reveals changing scenery within just a few hours of comfortable and affordable travel.</p>
                    </div>
                    <div class="gallery-row">
                        <div class="gallery-item"><img src="../resources/img/home/1.jpeg" alt="Nine arch bridge" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1469521669194-babb45599def?w=400&q=80" alt="Tea plantation view" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=400&q=80" alt="Mountain railway" /></div>
                    </div>
                </div>
            </div>
            <div class="body-text1">
                <p data-en="The train journey from Colombo to Jaffna takes you through Sri Lanka's changing landscapes, from bustling cities to serene lagoons and palm-fringed northern coasts. This route offers glimpses of daily life in Tamil communities and the island's diverse cultural tapestry." data-si="කොළඹ සිට යාපනය දක්වා දුම්රිය ගමන ඔබව කලබලකාරී නගර වල සිට සාමකාමී කලපු සහ තල් ගස් වලින් වටවූ උතුරු වෙරළවල් දක්වා ගෙන යයි." data-ta="De treinreis van Colombo naar Jaffna voert u door de veranderende landschappen van Sri Lanka, van bruisende steden tot serene lagunes.">The train journey from Colombo to Jaffna takes you through Sri Lanka's changing landscapes, from bustling cities to serene lagoons and palm-fringed northern coasts. This route offers glimpses of daily life in Tamil communities and the island's diverse cultural tapestry.</p>
                <p data-en="For photography enthusiasts, the early morning train from Nanu Oya to Ella provides magical light conditions as mist rises from the valleys below. Capture stunning images of tea pickers at work, mist-covered mountains, and the famous Demodara railway loop." data-si="ඡායාරූප රසිකයින් සඳහා, නානු ඔය සිට ඇල්ල දක්වා උදෑසන දුම්රිය මහාච්චරක වල සිට මීදුම ඉහළ නගින විට මායාජාල ආලෝක තත්ත්වයන් ලබා දෙයි." data-ta="Voor fotografieliefhebbers biedt de vroege ochtendtrein van Nanu Oya naar Ella magische lichtomstandigheden terwijl mist opstijgt uit de valleien.">For photography enthusiasts, the early morning train from Nanu Oya to Ella provides magical light conditions as mist rises from the valleys below. Capture stunning images of tea pickers at work, mist-covered mountains, and the famous Demodara railway loop.</p>
                <p data-en="Our scenic journey packages include first-class observation saloon seats, onboard refreshments, and guided commentary about the landmarks you pass. We can also arrange overnight stays at charming hill country bungalows to extend your railway adventure." data-si="අපගේ රූපමය ගමන් පැකේජ වලට පළමු පන්තියේ නිරීක්ෂණ ශාලා ආසන, නැවතුම් දුම්රියේ පිණිසරු සහ මඟපෙන්වීමේ විස්තර ඇතුළත් වේ." data-ta="Onze schilderachtige reispakketten omvatten eersteklas observatiesalonzitplaatsen, verfrissingen aan boord en begeleide commentaar.">Our scenic journey packages include first-class observation saloon seats, onboard refreshments, and guided commentary about the landmarks you pass. We can also arrange overnight stays at charming hill country bungalows to extend your railway adventure.</p>
            </div>
        </section>
    </div>

    <!-- COASTAL PANEL -->
    <div class="exp-panel" id="coastal">
        <section class="main-section">
            <div class="main-section-div">
                <div class="main-image-wrap">
                    <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?w=600&q=80" alt="Tropical beach sunset" class="main-img" />
                </div>
                <div class="content-col">
                    <div class="label" data-en="COASTAL ESCAPE" data-si="වෙරළ නිවාඩුව" data-ta="KUSTONTSNAPPING">COASTAL ESCAPE</div>
                    <h2 class="title" data-en="Ocean <span class='accent'>Retreats</span>" data-si="මුහුදු <span class='accent'>නිවාඩු නිකේතන</span>" data-ta="Oceaan <span class='accent'>Retraites</span>">Ocean <span class="accent">Retreats</span></h2>
                    <div class="body-text">
                        <p data-en="Unwind on pristine golden beaches stretching from Mirissa to Arugam Bay, where turquoise waters meet palm-fringed shores. Whether you seek surfing waves, whale watching, or simply peaceful sunsets, Sri Lanka's coastline offers the perfect tropical escape." data-si="මිරිස්සා සිට අරුගම් බේ දක්වා විහිදී ඇති පිරිසිදු රන්වන් වෙරළවල් වල විවේක ගන්න. ඔබ සර්ෆිං රළ සොයන්නේ නම්, තල්මසුන් නැරඹීම හෝ සරලවම සාමකාමී සූර්යාස්ත දර්ශන, ශ්‍රී ලංකාවේ වෙරළ තීරය පරිපූර්ණ නිවර්තන නිවාඩුවක් ලබා දෙයි." data-ta="Ontspan op ongerepte gouden stranden die zich uitstrekken van Mirissa tot Arugam Bay. Of u nu op zoek bent naar surf golven, walvissen spotten of gewoon vredige zonsondergangen.">Unwind on pristine golden beaches stretching from Mirissa to Arugam Bay, where turquoise waters meet palm-fringed shores. Whether you seek surfing waves, whale watching, or simply peaceful sunsets, Sri Lanka's coastline offers the perfect tropical escape.</p>
                        <p data-en="The southern coast features hidden coves and vibrant coral reefs ideal for snorkeling and diving enthusiasts. Watch blue whales breach offshore, spot sea turtles nesting on quiet beaches, and enjoy fresh seafood prepared with aromatic Sri Lankan spices at beachfront restaurants." data-si="දකුණු වෙරළ තීරයේ සැඟවුණු කොට්ඨාස සහ ස්නෝර්කලිං සහ ඩයිවිං රසිකයින්ට පරිපූර්ණ දීප්තිමත් පරල් පර වෙරළවල් ඇත. මුහුදු තල්මසුන් මුහුදෙන් එපිටට පැනීම නැරඹීම, නිශ්චල වෙරළවල මුහුදු ඇස්වල බිත්තර දැමීම සහ වෙරළබඩ අවන්හල්වල සුවඳ ශ්‍රී ලංකා මසාලා සමඟ සකස් කළ තම්බාගත් මුහුදු ආහාර භුක්ති විඳින්න." data-ta="De zuidkust heeft verborgen inhammen en levendige koraalriffen die ideaal zijn voor snorkel- en duikliefhebbers. Kijk naar bultruggen die uit zee springen, spot zeeschildpadden die nestelen op rustige stranden.">The southern coast features hidden coves and vibrant coral reefs ideal for snorkeling and diving enthusiasts. Watch blue whales breach offshore, spot sea turtles nesting on quiet beaches, and enjoy fresh seafood prepared with aromatic Sri Lankan spices at beachfront restaurants.</p>
                        <p data-en="From the colonial charm of Galle Fort to the laid-back vibes of Hiriketiya, each coastal town has its own unique character. Relax in boutique villas overlooking the Indian Ocean, take a traditional catamaran ride at dawn, and let the rhythm of the waves wash your worries away completely." data-si="ගාල්ල කොටුවේ යටත්විජිත ආකර්ෂණයේ සිට හිරිකෙටියේ නිදහස් වාතාවරණය දක්වා, සෑම වෙරළබඩ නගරයකටම තමන්ගේම අද්විතීය ලක්ෂණ ඇත. ඉන්දීය සාගරය දෙස බලා සිටින බුටික් විලා වල විවේක ගන්න, අලුයම් වරුවේ සාම්ප්‍රදායික කැටමරාන් යාත්‍රා පැදීමක් කරන්න, සහ රළවල තාලය ඔබගේ කාරණා සම්පූර්ණයෙන් සේ සේදී යනු ඇත." data-ta="Van de koloniale charme van Galle Fort tot de relaxte sfeer van Hiriketiya, elke kustplaats heeft zijn eigen unieke karakter. Ontspan in boutique villa's met uitzicht op de Indische Oceaan, maak een traditionele catamaranrit bij dageraad.">From the colonial charm of Galle Fort to the laid-back vibes of Hiriketiya, each coastal town has its own unique character. Relax in boutique villas overlooking the Indian Ocean, take a traditional catamaran ride at dawn, and let the rhythm of the waves wash your worries away completely.</p>
                    </div>
                    <div class="gallery-row">
                        <div class="gallery-item"><img src="../resources/img/home/1.jpeg" alt="Surfing waves" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1469521669194-babb45599def?w=400&q=80" alt="Whale watching" /></div>
                        <div class="gallery-item"><img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=400&q=80" alt="Beachfront villa" /></div>
                    </div>
                </div>
            </div>
            <div class="body-text1">
                <p data-en="The east coast around Trincomalee and Passikudah offers calm, shallow waters perfect for swimming and paddleboarding from May to October. These pristine beaches remain relatively untouched, providing a serene alternative to the more popular southern coastline." data-si="තිරිකුණාමලය සහ පස්සිකුඩා වටා ඇති නැගෙනහිර වෙරළ තීරය මැයි සිට ඔක්තෝබර් දක්වා පිහිනීම සහ පැඩල්බෝඩිං සඳහා පරිපූර්ණ සන්සුන්, තරංග ජලය ලබා දෙයි." data-ta="De oostkust rond Trincomalee en Passikudah biedt rustig, ondiep water dat perfect is voor zwemmen en paddleboarden van mei tot oktober.">The east coast around Trincomalee and Passikudah offers calm, shallow waters perfect for swimming and paddleboarding from May to October. These pristine beaches remain relatively untouched, providing a serene alternative to the more popular southern coastline.</p>
                <p data-en="For marine life enthusiasts, Pigeon Island National Park near Nilaveli provides exceptional snorkeling among colorful coral gardens teeming with reef fish. The waters around the island are also home to blacktip reef sharks and sea turtles that glide gracefully through the clear blue depths." data-si="මුහුදු ජීවී රසිකයින් සඳහා, නිලාවෙලි අසල පරවි දූපත් ජාතික වනෝද්‍යානය පරල් මසුන්ගෙන් පිරුණු වර්ණවත් පරල් උද්‍යාන අතර අසාමාන්‍ය ස්නෝර්කලිං ලබා දෙයි." data-ta="Voor zeelevenliefhebbers biedt Pigeon Island National Park bij Nilaveli uitzonderlijk snorkelen tussen kleurrijke koraaltuinen die wemelen van rifvissen.">For marine life enthusiasts, Pigeon Island National Park near Nilaveli provides exceptional snorkeling among colorful coral gardens teeming with reef fish. The waters around the island are also home to blacktip reef sharks and sea turtles that glide gracefully through the clear blue depths.</p>
                <p data-en="Our coastal packages include beachfront accommodations, water sports equipment, and guided excursions to nearby attractions. Whether you prefer the vibrant surf culture of Weligama or the tranquil lagoons of Kalpitiya, we create the perfect seaside getaway tailored to your preferences." data-si="අපගේ වෙරළ පැකේජ වලට වෙරළබඩ නවාතැන්, ජල ක්‍රීඩා උපකරණ සහ අසල්වැසි ආකර්ෂණීය ස්ථාන වෙත මඟපෙන්වීමේ සංචාර ඇතුළත් වේ." data-ta="Onze kustpakketten omvatten accommodaties aan het strand, watersportuitrusting en begeleide excursies naar nabijgelegen attracties.">Our coastal packages include beachfront accommodations, water sports equipment, and guided excursions to nearby attractions. Whether you prefer the vibrant surf culture of Weligama or the tranquil lagoons of Kalpitiya, we create the perfect seaside getaway tailored to your preferences.</p>
            </div>
        </section>
    </div>

    <!-- ------------footer----------- -->
    <?php include('../footer/footer.php'); ?>
    <!-- ------------footer----------- -->

    <script src="../header/header.js"></script>
    <script src="../resources/components/main.js"></script>

    <script>
        // Tab switching functionality
        function showExperience(expId) {
            // Hide all panels
            document.querySelectorAll('.exp-panel').forEach(panel => {
                panel.classList.remove('active');
            });

            // Show selected panel
            document.getElementById(expId).classList.add('active');

            // Update tab buttons
            document.querySelectorAll('.exp-tab').forEach(tab => {
                tab.classList.remove('active');
            });

            // Find and activate the clicked tab
            document.querySelectorAll('.exp-tab').forEach(tab => {
                if(tab.getAttribute('onclick').includes(expId)) {
                    tab.classList.add('active');
                }
            });

            // Update dropdown
            document.getElementById('expDropdown').value = expId;

            // Scroll to top of content
            document.querySelector('.exp-tabs').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    </script>

</body>

</html>