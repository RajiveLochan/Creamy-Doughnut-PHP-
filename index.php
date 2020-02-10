<!DOCTYPE html>
<html lang="en" id="mainPage">
<head>
    <title>Creamy Doughnuts | Home Page</title>
    <script src="http://use.edgefonts.net/righteous:n4:all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans|Montserrat" rel="stylesheet">
    <?php require_once 'includes/header.html'; ?>
    <style>
        .slideshow_loop_images {
            width: 800px;
            height: 400px;
        }
        .footer {
            position: sticky;
            background: #1ba3e1;
            width: 100%;
            height: 20px;
        }

        .footer p {
            position: absolute;
            color: #ffffff;
            font: 0.55em "Arial";
            padding-top: 4px;
            padding-left: 4px;
        }
    </style>
</head>

<body>
<?php include_once('includes/signInStrip.html'); ?>
<div class="page_container">
    <?php include_once('includes/navigation.html'); ?>
    <main>
        <div class="main_content">
            <div class="showcase">
                <div id="logo_wrapper">
                    <img src="./img/logo.png" srcset="./img/logo@2x.png 2x, ./img/logo@3x.png 3x" alt="logo">
                </div>
                <div class="slideshow_loop">
                    <figure>
                        <img id="loop_1" src="./img/loop-1.jpg" alt="loop_1" class="slideshow_loop_images">
                        <figcaption><strong>Gift Packs</strong> |
                            <small>Enjoying our mouth-watering range of doughnuts alone? Why not share it with your
                                friends by giving them a Creamy Doughnut Gift Pack.
                            </small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img id="loop_2" src="./img/loop-2.jpg" alt="loop_2" class="slideshow_loop_images">
                        <figcaption><strong>Party Packs</strong> |
                            <small>Get yourself a delicious mix of different flavoured doughnuts of your choice in this
                                colourful Party Packs!
                            </small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img id="loop_3" src="./img/loop-3.jpg" alt="loop_3" class="slideshow_loop_images">
                        <figcaption><strong>Toppings</strong> |
                            <small>We make our own doughnuts toppings in-house, so do not hesitate to ask for some extra
                                toppings on your next purchase!
                            </small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img id="loop_4" src="./img/loop-4.jpg" alt="loop_4" class="slideshow_loop_images">
                        <figcaption><strong>Sugar-Glazed Doughnuts</strong> |
                            <small>Deep-fried doughs doused with a sugary syrup, that would make your taste-buds go
                                crazy!!!.
                            </small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img id="loop_5" src="./img/loop-5.jpg" alt="loop_5" class="slideshow_loop_images">
                        <figcaption><strong>Fresh Doughnuts</strong> |
                            <small>Our doughnuts are freshly made with natural ingredients, using the best ingredients
                                we can find.
                            </small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img id="loop_6" src="./img/loop-6.jpg" alt="loop_6" class="slideshow_loop_images">
                        <figcaption><strong>Delivery</strong> |
                            <small>Craving for doughnuts? Unable to make it to our store? No worries! We got your back,
                                just call us and we will get your doughnuts delivered to you.
                            </small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img id="loop_7" src="./img/loop-7.jpg" alt="loop_7" class="slideshow_loop_images">
                        <figcaption><strong>Range of Flavours</strong> |
                            <small>We have a wide variety of different flavoured doughnuts, that comes with a mix of
                                toppings and jam.
                            </small>
                        </figcaption>
                    </figure>
                    <figure>
                        <img id="loop_8" src="./img/loop-8.jpg" alt="loop_8" class="slideshow_loop_images">
                        <figcaption><strong>Creamy Doughnut Cake</strong> |
                            <small>Is it a doughnut or a cake? Whichever it is, it looks delicious!.</small>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="content">
                <div class="promos">
                    <img id="promo_offer" src="./img/promo-offer.jpg" alt="promo_offer">
                    <img id="quote" src="./img/quote-1.jpg" alt="doughnut_quotes">
                    <img id="coming_soon" src="./img/coming-soon.jpg" alt="rainbow_doughnut_coming_soon">
                    <img id="clipart" src="./img/clip-art.jpg" alt="clip_art">
                    <a id="link_strawberry" class="image_links"><input type="button" id="strawberry"></a>
                    <div id="popup_strawberry" class="popup_image"><img src="./img/strawberry-doughnut.jpg" alt="img_strawberry"></div>
                    <a id="link_chocolate" class="image_links"><input type="button" id="chocolate"></a>
                    <div id="popup_chocolate" class="popup_image"><img src="./img/chocolate-doughnut.jpg" alt="img_chocolate"></div>
                    <a id="link_butterscotch" class="image_links"><input type="button" id="butterscotch"></a>
                    <div id="popup_butterscotch" class="popup_image"><img src="./img/butterscotch-doughnuts.jpg" alt="img_butterscotch"></div>
                </div>
                <div class="locations_slide">
                    <a class="arrow prev" id="prev"></a>
                    <a class="arrow next" id="next"></a>
                    <div id="location_3" class="locations">
                        <figcaption class="top_caption">London</figcaption>
                        <figcaption class="bottom_caption">This is our prime outlet, located in the heart of london.
                        </figcaption>
                    </div>
                    <div id="location_2" class="locations">
                        <figcaption class="top_caption">Edinburgh</figcaption>
                        <figcaption class="bottom_caption">Our oldest outlet is located here.</figcaption>
                    </div>
                    <div id="location_1" class="locations">
                        <figcaption class="top_caption">Liverpool</figcaption>
                        <figcaption class="bottom_caption">Come find us at our Liverpool location and grab a bunch of
                            doughnuts.
                        </figcaption>
                    </div>
                </div>
            </div>
            <?php include_once('includes/hover_buttons.html');?>
        </div>
    </main>
</div>
<footer>
    <div class="footer">
        <nav id="page-footer">
            <p>
                <small>Creamy Doughnuts Copyright &copy; 2018</small>
            </p>
        </nav>
    </div>
</footer>
<script>
    document.getElementById("prev").onclick = function () {
        bannerLeft();
    };
    document.getElementById("next").onclick = function () {
        bannerRight();
    };
</script>
</body>
</html>
