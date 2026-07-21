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
     SECTION 1 — HERO (video background)
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
            <h1 class="hero-title">Our Sri Lanka Tour Packages</h1>
        </div>
    </section>


    <section class="packages-section">
        <div class="packages-grid">

            <!-- Package 1 — Grand Ceylon Experience -->
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
                    <h3 class="pkg-title">👑 Grand Ceylon <span>Experience</span></h3>
                    <p class="pkg-tag">14 Days | 13 Nights &middot; Nature &middot; Wildlife &middot; Culture &middot; Mountains &middot; Beaches</p>
                    <p class="pkg-desc">Discover the very best of Sri Lanka on our signature 14-day private journey. From ancient UNESCO World Heritage Sites and breathtaking mountain landscapes to thrilling wildlife safaris, scenic train journeys, tropical beaches, and authentic local culture, every experience is carefully curated to create an unforgettable holiday.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=1" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 2 — Ceylon Discovery -->
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
                    <h3 class="pkg-title">🌿 Ceylon <span>Discovery</span></h3>
                    <p class="pkg-tag">7 Days | 6 Nights &middot; Culture &middot; Heritage &middot; Ancient Kingdoms &middot; Nature</p>
                    <p class="pkg-desc">Discover the timeless beauty of Sri Lanka on our carefully curated 7-day private journey. From ancient UNESCO World Heritage Sites and sacred temples to magnificent royal kingdoms and vibrant heritage, every moment is thoughtfully designed around the island's rich history.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=2" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 3 — Signature Journey -->
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
                    <h3 class="pkg-title">⭐ Signature <span>Journey</span></h3>
                    <p class="pkg-tag">9 Days | 8 Nights &middot; Culture &middot; Wildlife &middot; Tea Country &middot; Beaches</p>
                    <p class="pkg-desc">Experience the perfect balance of Sri Lanka's rich culture, breathtaking landscapes, incredible wildlife, and beautiful southern coastline on our carefully curated 9-day private journey, from sacred temples and tea plantations to exciting safaris and relaxing beaches.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=3" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 4 — Bird Watching Tour -->
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
                    <h3 class="pkg-title">🦜 Bird Watching <span>Tour</span></h3>
                    <p class="pkg-tag">Half-Day Private Tour &middot; Nature &middot; Wildlife &middot; Rainforest</p>
                    <p class="pkg-desc">Experience the incredible biodiversity of Sinharaja Rainforest, Sri Lanka's last remaining tropical rainforest and a UNESCO World Heritage Site, discovering rare endemic bird species with an experienced naturalist guide.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=4" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 5 — Ella Day Tour -->
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
                    <h3 class="pkg-title">🏞️ Ella <span>Day Tour</span></h3>
                    <p class="pkg-tag">Full-Day Private Tour &middot; Mountains &middot; Waterfalls &middot; Tea Country</p>
                    <p class="pkg-desc">Discover the breathtaking beauty of Sri Lanka's hill country, travelling through scenic mountain roads and lush tea plantations while visiting Ella's most famous attractions including the iconic Nine Arch Bridge.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=5" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 6 — Sigiriya & Dambulla Day Tour -->
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
                    <h3 class="pkg-title">🏛️ Sigiriya & <span>Dambulla Day Tour</span></h3>
                    <p class="pkg-tag">Full-Day Private Tour &middot; Culture &middot; Heritage &middot; UNESCO &middot; History</p>
                    <p class="pkg-desc">Discover two of Sri Lanka's most iconic UNESCO World Heritage Sites, climbing the magnificent Sigiriya Rock Fortress and exploring the sacred Dambulla Cave Temple with its ancient statues and cave paintings.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=6" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 7 — Wilpattu National Park Day Tour -->
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
                    <h3 class="pkg-title">🐆 Wilpattu National Park <span>Day Tour</span></h3>
                    <p class="pkg-tag">Full-Day Private Safari &middot; Wildlife &middot; Safari &middot; Nature &middot; Adventure</p>
                    <p class="pkg-desc">Experience the incredible wildlife of Wilpattu National Park, Sri Lanka's largest national park, exploring in a private 4x4 safari jeep in search of leopards, elephants, sloth bears, and the famous natural Villus.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=7" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 8 — Cultural Heritage Tour -->
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
                    <h3 class="pkg-title">🏛️ Cultural Heritage <span>Tour</span></h3>
                    <p class="pkg-tag">5 Days | 4 Nights &middot; Culture &middot; Heritage &middot; UNESCO &middot; History</p>
                    <p class="pkg-desc">Discover the rich cultural heritage of Sri Lanka on our carefully curated 5-day private journey. Explore ancient UNESCO World Heritage Sites, sacred temples, and historic cities while experiencing the island's fascinating history, Buddhist traditions, and authentic local culture.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=8" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
                </div>
            </div>

            <!-- Package 9 — Scenic Sri Lanka Tour -->
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
                    <h3 class="pkg-title">🌄 Scenic Sri Lanka <span>Tour</span></h3>
                    <p class="pkg-tag">10 Days | 9 Nights &middot; Culture &middot; Mountains &middot; Wildlife &middot; Beaches &middot; Adventure</p>
                    <p class="pkg-desc">Discover the very best of Sri Lanka on our carefully curated 10-day private journey. From ancient UNESCO World Heritage Sites and misty tea plantations to breathtaking mountain landscapes, exciting wildlife safaris, and beautiful southern beaches, every experience is thoughtfully designed for you.</p>
                </div>
                <div class="pkg-actions">
                    <a href="../packageDetails/packageDetails.php?pkg=9" class="pkg-btn pkg-btn-more">SEE MORE</a>
                    <button class="pkg-btn pkg-btn-book" onclick="window.location='../booking/booking.php';">BOOK NOW</button>
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