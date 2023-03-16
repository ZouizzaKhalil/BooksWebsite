<!DOCTYPE html>
<html class="no-js" lang="fr">

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

                        <a class="main-logo" href="indexFr.php">

                            <img src="images/logo/logo_about2.png" alt="" style="width: 140px;"></a>
                        <!--====== End - Main Logo ======-->


                        <!--====== Search Form ======-->
                        <form class="main-form" method="GET" action="shop-list-full-Fr.php">

                            <label for="main-search"></label>

                            <input class="form-control input-text input-text--border-radius input-text--style-1" type="text" name="search" id="main-search" placeholder="Chercher">

                            <button class="btn btn--icon fas fa-search main-search-button" type="submit" name="btn-search"></button>
                        </form>
                        <!--====== End - Search Form ======-->


                        <!--====== Dropdown Main plugin ======-->
                        <div class="menu-init" id="navigation">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs" type="button"></button>

                            <!--====== Menu ======-->
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Fermer</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">

                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">

                                        <a><i class="fas fa-user-cog"></i></a>

                                        <!--====== Dropdown ======-->

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Langue<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                <!--====== Dropdown ======-->

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:120px">
                                                    <li>

                                                        <a href="index.php">ENGLISH</a>
                                                    </li>

                                                    <li>

                                                        <a class="u-c-brand" href="indexFr.php">FRANCAIS</a>
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

                                <span class="ah-close">✕ Fermer</span>

                                <!--====== List ======-->
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li>

                                        <a href="#NEW-ARRIVALS">NOUVEAUTÉS</a>
                                    </li>


                                    <li>

                                        <a href="#HELP">LAISSEZ-NOUS VOUS AIDER</a>
                                    </li>
                                    <li>

                                        <a href="#TOP_TRENDING">HAUTEMENT TENDANCE</a>
                                    </li>

                                    <li>

                                        <a href="#ABOUT_US">À PROPOS DE NOUS</a>
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

                                        <a href="indexFr.php"><i class="fas fa-home u-c-brand"></i></a>
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

                                        <span class="content-span-1" style="color:white;">Obtenez des livres gratuits en informatique.</span>

                                        <span class="content-span-2" style="color: white;">Télécharger gratuitement</span>

                                        <span class="content-span-3" style="color:blanchedalmond">Explorez notre collection de livres gratuits en informatique, couvrant des sujets tels que la programmation, les algorithmes, les structures de données et bien plus encore.</span>

                                        <span class="content-span-4">Gratuit, sans attrape.

                                            <span class="u-c-brand"></span></span>

                                        <a class="shop-now-link btn--e-brand" href="#TOP_TRENDING">TÉLÉCHARGER MAINTENANT</a>
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

                                        <span class="content-span-1 u-c-white">Alerte Nouveau Cours</span>

                                        <span class="content-span-2 u-c-white">Faites avancer vos compétences.</span>

                                        <span class="content-span-3 u-c-white">Inscrivez-vous à notre dernier cours sur l'intelligence artificielle et l'apprentissage automatique pour améliorer vos compétences et rester en avance sur le jeu.</span>

                                        <span class="content-span-4 u-c-white">Offre à durée limitée.

                                            <span class="u-c-brand"></span></span>

                                        <a class="shop-now-link btn--e-brand" href="#TOP_TRENDING">TÉLÉCHARGER MAINTENANT</a>
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

                                        <span class="content-span-1 u-c-secondary">Devenez un professionnel de l'informatique.</span>

                                        <span class="content-span-2 u-c-secondary">Livres PDF gratuits.</span>

                                        <span class="content-span-3 u-c-secondary">Explorez notre vaste collection de livres PDF gratuits, couvrant des sujets tels que l'informatique, l'ingénierie et bien plus encore.</span>

                                        <span class="content-span-4 u-c-secondary">Gratuit, sans attrape.

                                            <span class="u-c-brand"></span></span>

                                        <a class="shop-now-link btn--e-brand" href="#TOP_TRENDING">TÉLÉCHARGER MAINTENANT</a>
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
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">LAISSEZ-NOUS VOUS AIDER</h1>

                                    <span class="section__span u-c-silver">POSEZ VOS QUESTIONS</span>
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
                                <iframe width="350" height="450" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/13389390-a284-4197-bf98-bfdb03347738"></iframe>
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
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">ACHETEZ SELON LES OFFRES</h1>

                                    <span class="section__span u-c-silver">PARCOURIR LES OFFRES PRÉFÉRÉES</span>
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
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">NOUVEAUTÉS</h1>

                                    <span class="section__span u-c-silver">TENEZ-VOUS PRÊT POUR LES NOUVEAUTÉS</span>
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

                                        <span class="u-c-white">À PROPOS DE</span>

                                        <span class="u-c-secondary"> NOUS</span>
                                    </div>
                                    <div class="banner-bg__text-2">

                                        <span class="u-c-secondary"></span>

                                        <span>Bienvenue sur notre site web, votre destination unique pour des livres gratuits en informatique au format PDF.</span>
                                    </div>

                                    <span class="banner-bg__text-block banner-bg__text-3" style="color: whitesmoke;">Notre mission est de rendre les ressources éducatives de qualité accessibles à tous, indépendamment de leur situation financière ou de leur lieu géographique. Nous croyons que la connaissance devrait être librement partagée et que l'éducation ne devrait pas être un privilège, mais un droit.</span>

                                    <span class="banner-bg__text-block banner-bg__text-3" style="color: whitesmoke;">Dans cette optique, nous avons sélectionné une vaste collection de livres en informatique provenant d'auteurs et d'éditeurs réputés qui couvrent une large gamme de sujets. Que vous soyez étudiant, professionnel ou simplement passionné de technologie, vous trouverez quelque chose qui suscitera votre intérêt et vous aidera à développer vos connaissances.</span>


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
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">HAUTEMENT TENDANCE</h1>

                                    <span class="section__span u-c-silver">CHOISISSEZ UNE CATÉGORIE</span>
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

                                        <button class="btn filter__btn filter__btn--style-1 js-checked" type="button" data-filter="*">TOUS</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".headphone">Développement Web</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".smartphone">Sécurité informatique</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".sportgadget">Base de données</button>
                                    </div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".dslr">Intelligence artificielle</button>
                                    </div>
                                </div>
                                <div class="filter__grid-wrapper u-s-m-t-30">
                                    <div class="row">


                                        <?php
                                        // Include the code from code.php
                                        include 'addProductFr.php';
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

                                <span class="outer-footer__content-title">Contactez-nous</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>MARRAKECH MAROC</span>
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

                                            <a class="s-fb--color-hover"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-tw--color-hover"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-youtube--color-hover"><i class="fab fa-youtube"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-insta--color-hover"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-gplus--color-hover"><i class="fab fa-google-plus-g"></i></a>
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

                                                    <a>Panier</a>
                                                </li>
                                                <li>

                                                    <a>Compte</a>
                                                </li>
                                                
                                                <li>

                                                    <a>Finance</a>
                                                </li>
                                                <li>

                                                    <a>Magasin</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                        <div class="outer-footer__list-wrap">

                                            <span class="outer-footer__content-title">Notre entreprise</span>
                                            <ul>
                                                <li>

                                                    <a>À propos de nous</a>
                                                </li>
                                                <li>

                                                    <a>Contactez-nous</a>
                                                </li>
                                            
                                                <li>

                                                    <a>Livraison</a>
                                                </li>
                                                <li>

                                                    <a>Magasin </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Inscrivez-vous à notre newsletter</span>
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

                                        <button class="btn btn--e-brand newsletter__btn" type="submit">S'ABONNER</button>
                                    </div>

                                    <span class="newsletter__text">Abonnez-vous à notre liste de diffusion pour recevoir des mises à jour sur les promotions, les nouvelles arrivées, les remises et les coupons.</span>
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

                                    <a href="indexFr.php">Kotobi</a>

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