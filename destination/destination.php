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
    <link rel="stylesheet" href="destination.css">
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

    <section class="destinations-section">

        <!-- ════════════════════════════════
         CARD 1
         Row 1: 40% img LEFT | 60% text RIGHT
         Row 2: 40% para LEFT | 60% 3-images RIGHT
    ════════════════════════════════ -->
        <div class="dest-card">
            <div class="dest-inner">

                <!-- ROW 1 -->
                <div class="dest-row row1-card1">

                    <!-- Left 40%: single image -->
                    <div class="dest-col col-img">
                        <div class="main-img-wrap">
                            <img src="https://images.unsplash.com/photo-1533050487297-09b450131914?w=700&q=80"
                                alt="Destination" />
                        </div>
                    </div>

                    <!-- Right 60%: label + title + paragraphs -->
                    <div class="dest-col col-text">
                        <p class="dest-label">DESTINATION</p>
                        <h2 class="dest-title">Topic For <em>Destination</em></h2>
                        <p class="dest-para">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.
                            Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500s Lorem Ipsum Is
                            Simply Dummy Text Of The Printing And Typesetting Industry.</p>
                        <p class="dest-para">Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The
                            1500s Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum
                            Has Been The Industry's Standard Dummy Text Ever Since The 1500s.</p>
                        <p class="dest-para">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.
                            Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500s Lorem Ipsum Is
                            Simply Dummy Text Of The Printing And Typesetting Industry.</p>
                    </div>

                </div>

                <!-- ROW 2 -->
                <div class="dest-row row2-card1">

                    <!-- Left 40%: paragraph -->
                    <div class="dest-col col-text">
                        <p class="dest-para">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.
                            Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500s Lorem Ipsum Is
                            Simply Dummy Text Of The Printing And Typesetting Industry.</p>
                        <p class="dest-para">Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The
                            1500s Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum
                            Has Been The Industry's Standard Dummy Text Ever Since The 1500s.</p>
                    </div>

                    <!-- Right 60%: 3 images — img1(small) | img2(wide) | img3(small) -->
                    <div class="dest-col col-imgs">
                        <div class="triple-imgs">
                            <div class="tri-img tri-img--sm">
                                <img src="https://images.unsplash.com/photo-1501854140801-50d01698950b?w=400&q=80"
                                    alt="Destination" />
                            </div>
                            <div class="tri-img tri-img--wide">
                                <img src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?w=600&q=80"
                                    alt="Destination" />
                            </div>
                            <div class="tri-img tri-img--sm">
                                <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?w=400&q=80"
                                    alt="Destination" />
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <!-- ════════════════════════════════
         CARD 2 (mirror of Card 1)
         Row 1: 60% text LEFT | 40% img RIGHT
         Row 2: 60% 3-images LEFT | 40% para RIGHT
    ════════════════════════════════ -->
        <div class="dest-card">
            <div class="dest-inner">

                <!-- ROW 1 -->
                <div class="dest-row row1-card2">

                    <!-- Left 60%: label + title + paragraphs -->
                    <div class="dest-col col-text">
                        <p class="dest-label">DESTINATION</p>
                        <h2 class="dest-title">Topic For <em>Destination</em></h2>
                        <p class="dest-para">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.
                            Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500s Lorem Ipsum Is
                            Simply Dummy Text Of The Printing And Typesetting Industry.</p>
                        <p class="dest-para">Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The
                            1500s Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum
                            Has Been The Industry's Standard Dummy Text Ever Since The 1500s.</p>
                        <p class="dest-para">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.
                            Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500s Lorem Ipsum Is
                            Simply Dummy Text Of The Printing And Typesetting Industry.</p>
                    </div>

                    <!-- Right 40%: single image -->
                    <div class="dest-col col-img">
                        <div class="main-img-wrap">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=700&q=80"
                                alt="Destination" />
                        </div>
                    </div>

                </div>

                <!-- ROW 2 -->
                <div class="dest-row row2-card2">

                    <!-- Left 60%: 3 images — img1(small) | img2(wide) | img3(small) -->
                    <div class="dest-col col-imgs">
                        <div class="triple-imgs">
                            <div class="tri-img tri-img--sm">
                                <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=400&q=80"
                                    alt="Destination" />
                            </div>
                            <div class="tri-img tri-img--wide">
                                <img src="https://images.unsplash.com/photo-1582510003544-4d00b7f74220?w=600&q=80"
                                    alt="Destination" />
                            </div>
                            <div class="tri-img tri-img--sm">
                                <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&q=80"
                                    alt="Destination" />
                            </div>
                        </div>
                    </div>

                    <!-- Right 40%: paragraph -->
                    <div class="dest-col col-text">
                        <p class="dest-para">Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry.
                            Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500s Lorem Ipsum Is
                            Simply Dummy Text Of The Printing And Typesetting Industry.</p>
                        <p class="dest-para">Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The
                            1500s Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum
                            Has Been The Industry's Standard Dummy Text Ever Since The 1500s.</p>
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

</body>

</html>