<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/logo-1.png" rel="shortcut icon">
    <title>Kotobi</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="config">

    <style>
        * {
            scroll-behavior: smooth;
        }
    </style>







    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/logo-1.png" alt="">
        </div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        <!--====== Main Header ======-->
        <header class="header--style-1">

            <!--====== Nav 1 ======-->
            <nav class="primary-nav primary-nav-wrapper--border">
                <div class="container">

                    <!--====== Primary Nav ======-->
                    <div class="primary-nav">

                        <!--====== Main Logo ======-->

                        <a class="main-logo" href="index.php">

                            <img src="images/logo/logo_about2.png" alt="" style="width: 140px;"></a>
                        <!--====== End - Main Logo ======-->


                        <!--====== Search Form ======-->
                        <form class="main-form" method="GET" action="shop-list-full.php">

                            <label for="main-search"></label>

                            <input class="form-control input-text input-text--border-radius input-text--style-1" type="text" name="search" id="main-search" placeholder="Search">

                            <button class="btn btn--icon fas fa-search main-search-button" type="submit" name="btn-search"></button>
                        </form>
                        <!--====== End - Search Form ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">

                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">

                                        <a><i class="fas fa-user-cog"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:120px">
                                                    <li>

                                                        <a class="u-c-brand" href="index.php">ENGLISH</a>
                                                    </li>

                                                    <li>

                                                        <a href="indexFr.php">FRANCAIS</a>
                                                    </li>

                                                </ul>
                                                <!--====== End - Dropdown ======-->
                                            </li>

                                        </ul>
                                        <!--====== End - Dropdown ======-->
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                        <a href="tel:+212000000000"><i class="fas fa-phone-volume"></i></a>
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                        <a href="mailto:contact-kotobi@gmail.com"><i class="far fa-envelope"></i></a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Primary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 1 ======-->


            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
                    <div class="secondary-nav">

                        <!--====== Dropdown Main plugin ======-->
                        <div aria-disabled="true" class="menu-init" id="navigation1">



                            <!--====== Menu ======-->
                            <!--====== Copy1_Mbutton ======-->
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation2">



                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li>

                                        <a href="#NEW-ARRIVALS">NEW ARRIVALS</a>
                                    </li>


                                    <li>

                                        <a href="#HELP">LET US HELP YOU</a>
                                    </li>
                                    <li>

                                        <a href="#TOP_TRENDING">TOP TRENDING</a>
                                    </li>

                                    <li>

                                        <a href="#ABOUT_US">ABOUT US</a>
                                    </li>
                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation3">



                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">



                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li>

                                        <a href="index.php"><i class="fas fa-home u-c-brand"></i></a>
                                    </li>


                                </ul>
                                <!--====== End - List ======-->
                            </div>
                            <!--====== End - Menu ======-->
                        </div>
                        <!--====== End - Dropdown Main plugin ======-->
                    </div>
                    <!--====== End - Secondary Nav ======-->
                </div>
            </nav>
            <!--====== End - Nav 2 ======-->
        </header>
        <!--====== End - Main Header ======-->






        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Primary Slider ======-->
            <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-1" id="hero-slider">
                    <div class="hero-slide hero-slide--1">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1" style="color:white;">Get Free Computer Science Books</span>

                                        <span class="content-span-2" style="color: white;">Download for Free</span>

                                        <span class="content-span-3" style="color:blanchedalmond">Explore our collection of free computer science books, covering topics such as programming, algorithms, data structures, and more.</span>

                                        <span class="content-span-4">No cost, no catch

                                            <span class="u-c-brand"></span></span>

                                        <a class="shop-now-link btn--e-brand" href="#TOP_TRENDING">DOWNLOAD NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-white">New Course Alert</span>

                                        <span class="content-span-2 u-c-white">Advance Your Skills</span>

                                        <span class="content-span-3 u-c-white">Enroll in our latest course on artificial intelligence and machine learning to enhance your skills and stay ahead of the game.</span>

                                        <span class="content-span-4 u-c-white">Limited Time Offer

                                            <span class="u-c-brand"></span></span>

                                        <a class="shop-now-link btn--e-brand" href="#TOP_TRENDING">DOWNLOAD NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-secondary">Become a Computer Science Pro</span>

                                        <span class="content-span-2 u-c-secondary">Free PDF Books</span>

                                        <span class="content-span-3 u-c-secondary">Explore our vast collection of free PDF books, covering topics like computer science, engineering, and more.</span>

                                        <span class="content-span-4 u-c-secondary">No Cost, No Catch

                                            <span class="u-c-brand"></span></span>

                                        <a class="shop-now-link btn--e-brand" href="#TOP_TRENDING">DOWNLOAD NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Primary Slider ======-->

            <!-- chatbot -->
            <div class="u-s-p-y-60" style="background-color: beige;" id="HELP">
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">LET US HELP YOU</h1>

                                    <span class="section__span u-c-silver">ASK YOUR QUESTIONS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__content" style="background-color: beige;">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-md-7 u-s-m-b-30">

                            <a class="collection">
                                <div class="aspect aspect--bg-grey aspect--1286-890">

                                    <img class="aspect__img collection__img" src="images/collection/ask.jpg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-5 u-s-m-b-30">

                            <a class="chatbot" href="#">
                                <iframe allow="microphone;" width="350" height="450" src="https://console.dialogflow.com/api-client/demo/embedded/13389390-a284-4197-bf98-bfdb03347738">
                                </iframe>
                            </a>



                        </div>
                    </div>
                </div>
            </div>

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">SHOP BY DEALS</h1>

                                    <span class="section__span u-c-silver">BROWSE FAVOURITE DEALS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-7 col-md-7 u-s-m-b-30">

                                <a class="collection">
                                    <div class="aspect aspect--bg-grey aspect--1286-890">

                                        <img class="aspect__img collection__img" src="images/collection/coll-v3.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-5 col-md-5 u-s-m-b-30">

                                <a class="collection">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img collection__img" src="images/collection/coll-v2.jpg" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--====== Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->

            <div class="u-s-p-b-60" id="NEW-ARRIVALS">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">NEW ARRIVALS</h1>

                                    <span class="section__span u-c-silver">GET UP FOR NEW ARRIVALS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="slider-fouc">
                            <div class="owl-carousel product-slider" data-item="4">


                                <?php include 'addProduct2.php';  ?>

                            </div>



                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>





            <div class="banner-bg" style="margin-bottom: 50px;" id="ABOUT_US">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="banner-bg__wrap">
                                    <div class="banner-bg__text-1">

                                        <span class="u-c-white">About</span>

                                        <span class="u-c-secondary">Us</span>
                                    </div>
                                    <div class="banner-bg__text-2">

                                        <span class="u-c-secondary"></span>

                                        <span>Welcome to our website, your one-stop destination for free computer science books in PDF format.</span>
                                    </div>

                                    <span class="banner-bg__text-block banner-bg__text-3" style="color: whitesmoke;">Our mission is to make quality educational resources accessible to everyone, regardless of their financial situation or geographic location. We believe that knowledge should be freely shared and that education should not be a privilege, but a right.</span>

                                    <span class="banner-bg__text-block banner-bg__text-3" style="color: whitesmoke;">With that in mind, we have curated a vast collection of computer science books from reputable authors and publishers that cover a wide range of topics. Whether you're a student, a professional, or just someone who is passionate about technology, you will find something that piques your interest and helps you grow your knowledge.</span>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>







            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60" id="TOP_TRENDING">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">TOP TRENDING</h1>

                                    <span class="section__span u-c-silver">CHOOSE CATEGORY</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="filter-category-container">
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1 js-checked" type="button" data-filter="*">ALL</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".headphone">Web Development</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".smartphone">Cybersecurity</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".sportgadget">Database</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".dslr">AI</button>
                                    </div>
                                </div>
                                <div class="filter__grid-wrapper u-s-m-t-30">
                                    <div class="row">


                                        <?php
                                        // Include the code from code.php
                                        include 'addProduct.php';
                                        ?>




                                    </div>
                                </div>


                            </div>





                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->


            <!--====== Section 3 ======-->

            <!--====== End - Section 3 ======-->


            <!--====== Section 4 ======-->


            <!--====== End - Section 4 ======-->


            <!--====== Section 5 ======-->



            <!--====== End - Section 5 ======-->


            <!--====== Section 6 ======-->


            <!--====== Section Intro ======-->

            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->

            <!--====== End - Section Content ======-->

            <!--====== End - Section 6 ======-->


            <!--====== Section 7 ======-->

            <!--====== End - Section 7 ======-->


            <!--====== Section 8 ======-->

            <!--====== End - Section 8 ======-->


            <!--====== Section 9 ======-->

            <!--====== End - Section 9 ======-->


            <!--====== Section 10 ======-->

            <!--====== End - Section 10 ======-->


            <!--====== Section 11 ======-->

            <!--====== End - Section 11 ======-->


            <!--====== Section 12 ======-->

            <!--====== End - Section 12 ======-->
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->

        <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Contact Us</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>MARRAKECH MOROCCO</span>
                                </div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>(+212) 000 000 000</span>
                                </div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>contact-books@gmail.com</span>
                                </div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">Information</span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="#">Cart</a>
                                                </li>
                                                <li>

                                                    <a href="#">Account</a>
                                                </li>
                                                <li>

                                                    <a href="#">Manufacturer</a>
                                                </li>
                                                <li>

                                                    <a href="#">Finance</a>
                                                </li>
                                                <li>

                                                    <a href="#">Shop</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                        <div class="outer-footer__list-wrap">

                                            <span class="outer-footer__content-title">Our Company</span>
                                            <ul>
                                                <li>

                                                    <a href="#">About us</a>
                                                </li>
                                                <li>

                                                    <a href="#">Contact Us</a>
                                                </li>
                                                <li>

                                                    <a href="#">Sitemap</a>
                                                </li>
                                                <li>

                                                    <a href="#">Delivery</a>
                                                </li>
                                                <li>

                                                    <a href="#">Store</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Join our Newsletter</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button>
                                    </div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2023</span>

                                    <a href="index.php">Kotobi</a>

                                    <span>All Right Reserved</span>
                                </div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>



        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->

        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->

        <!--====== End - Add to Cart Modal ======-->


        <!--====== Newsletter Subscribe Modal ======-->

        <!--====== End - Newsletter Subscribe Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->



    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>

</html>