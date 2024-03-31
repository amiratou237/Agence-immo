<?php include 'layout/header.php';?>
        <!-- Banner Section One Start -->
        <section class="banner-one two">
            <div class="banner-two__bg-slide">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "loop": true, "effect": "fade", "slidesPerView": 1, "autoplay": { "delay": 5000 }, "pagination": {
                    "el": "#banner-two__bg-slide-pagination",
                    "type": "bullets",
                    "clickable": true
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/main-slider/slider-2-1.jpg);"></div>
                            <!-- /.image-layer -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/main-slider/slider-2-2.jpg);"></div>
                            <!-- /.image-layer -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="image-layer"
                                style="background-image: url(assets/images/main-slider/slider-2-3.jpg);"></div>
                            <!-- /.image-layer -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
                <div class="swiper-pagination" id="banner-two__bg-slide-pagination"></div>
            </div><!-- /.banner-two__bg-slide -->
            <div class="container">
                <div class="content-box">
                    <div class="top-title">
                        <div class="banner_two_shape"><img src="assets/images/shapes/banner_two_shape.png" alt=""></div>
                        <h2>HomeConnect <br> Le site des agents Immobilliers</h2>
                    </div>

                    <div class="product-tab-box tabs-box">
                        <ul class="tab-btns tab-buttons clearfix list-unstyled">
                            <li data-tab="#desc" class="tab-btn active-btn"><span>A vendre</span></li>
                            <li data-tab="#addi__info" class="tab-btn"><span>A louer</span></li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="desc">
                                <form class="banner_one_search_form" action="/listing-2.html">
                                    <div class="banner_one_search_form_input_box">
                                        <input type="text" placeholder="Rechercher une propriété,un agent immobilier">
                                        <button type="submit" class="thm-btn banner_one_search_btn">Rechercher Une Propriété</button>
                                        <div class="banner_one_search_icon">
                                            <a href="#"><span class="icon-magnifying-glass"></span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab" id="addi__info">
                                <form class="banner_one_search_form" action="/listing-2.html">
                                    <div class="banner_one_search_form_input_box">
                                        <input type="text" placeholder="Rechercher une propriété,un agent immobilier">
                                        <button type="submit" class="thm-btn banner_one_search_btn">Rechercher Une Propriété</button>
                                        <div class="banner_one_search_icon">
                                            <a href="#"><span class="icon-magnifying-glass"></span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section One End -->

        <!--Cities One Start-->
        <section class="cities_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Cities One Single-->
                        <div class="cities_one_single">
                            <div class="cities_one_properties">
                                <div class="cities_one_properties_content">
                                    <h4><a href="listing-2.html">Douala</a></h4>
                                    <p>Nombre de propriétes</p>
                                </div>
                                <div class="cities_one_main_img_box">
                                    <img src="assets/images/resources/cities_one_img_1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Cities One Single-->
                        <div class="cities_one_single">
                            <div class="cities_one_properties">
                                <div class="cities_one_properties_content">
                                    <h4><a href="listing-2.html">Yaoundé</a></h4>
                                    <p>Nombre de propriétes</p>
                                </div>
                                <div class="cities_one_main_img_box">
                                    <img src="assets/images/resources/cities_one_img_2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!--Cities One Single-->
                        <div class="cities_one_single">
                            <div class="cities_one_properties">
                                <div class="cities_one_properties_content">
                                    <h4><a href="listing-2.html">Baffousam</a></h4>
                                    <p>Nombre de propriétes</p>
                                </div>
                                <div class="cities_one_main_img_box">
                                    <img src="assets/images/resources/cities_one_img_3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Cities One End-->

        <!--Latest Properties Two Start-->
        <section class="latest_properties">
            <div class="container">
                <div class="block-title text-center">
                    <h2>Propriétés Récentes</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="thm-swiper__slider swiper-container thm-swiper__slider-pause-hover"
                            data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
                                "el": "#latest_properties_pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "navigation": {
                                "nextEl": ".latest_properties_next",
                                "prevEl": ".latest_properties_prev",
                                "clickable": true
                            },
                            "breakpoints": {
                                "0": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 1
                                },
                                "425": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 1
                                },
                                "767": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 2
                                },
                                "991": {
                                    "spaceBetween": 20,
                                    "slidesPerView": 2
                                },
                                "1289": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 3
                                },
                                "1440": {
                                    "spaceBetween": 30,
                                    "slidesPerView": 3
                                }
                            }}'>
                            <div class="swiper-wrapper">


                            <?php
                                    include '../script/config.php';

                                    try {
                                        // Requête pour récupérer toutes les propriétés
                                        $requete = "SELECT * FROM propriete";
                                        $resultat = $pdo->query($requete);

                                        // Vérification des erreurs de requête
                                        if (!$resultat) {
                                            die("Erreur de requête : " . $pdo->errorInfo()[2]);
                                        }

                                        // Vérification si des propriétés existent
                                        if ($resultat->rowCount() > 0) {
                                            while ($row = $resultat->fetch()) {
                                                $idPropriete = $row['id_propriete'];

                                                // Début de la div latest_properties_single
                                                echo '<div class="swiper-slide">';

                                                echo '<div class="latest_properties_single">';
                                                    echo '<div class="latest_properties_img_carousel owl-theme owl-carousel">';

                                                    // Requête pour récupérer les images de la propriété
                                                    $requeteImages = "SELECT * FROM photos_propriete WHERE id_propriete = $idPropriete";
                                                    $resultatImages = $pdo->query($requeteImages);

                                                    // Vérification des erreurs de requête des images
                                                    if (!$resultatImages) {
                                                        die("Erreur de requête des images : " . $pdo->errorInfo()[2]);
                                                    }

                                                    // Affichage des images de la propriété
                                                    while ($rowImage = $resultatImages->fetch()) {
                                                        echo '<div class="latest_properties_img">';
                                                        echo '<img src="agent_immo/image/' . $rowImage['nom_fichier'] . '" alt="">';
                                                        echo '<div class="latest_properties_icon">';
                                                        echo '<i class="fa fa-heart"> Favoris</i>';
                                                        echo '</div>';
                                                        echo '<div class="featured_and_sale_btn">';
                                                        echo '<a href="#" class="sale_btn">Visiter</a>';
                                                        echo '</div>';
                                                        echo '</div>';
                                                    }

                                                    echo '</div>';
                                                echo '<div class="latest_properties_content">';
                                                echo '<div class="latest_properties_top_content">';

                                                // Affichage du titre de la propriété
                                                echo '<h4><a href="propriete_detail.php?id=' . $idPropriete . '">' . $row['titre'] . '</a></h4>';
                                                // Affichage de la localisation de la propriété
                                                echo '<p>' . $row['localisation'] . '</p>';

                                                // Affichage du prix de la propriété
                                                echo '<h3> ' . $row['prix'] . ' Fcfa</h3>';

                                                echo '</div>';
                                                echo '<div class="latest_properties_bottom_content">';
                                                echo '<ul class="list-unstyled">';

                                                // Affichage du nombre de chambres
                                                echo '<li><span class="icon-bed"></span> ' . $row['nbre_chambre'] . '</li>';

                                                // Affichage du nombre de salles de bain
                                                echo '<li><span class="icon-shower"></span> ' . $row['nb_salle_de_bain'] . '</li>';

                                                // Affichage de la surface en km
                                                echo '<li><span class="icon-square-measument"></span>' . $row['surface'] . ' km2 </li>';

                                                echo '</ul>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                        } else {
                                            echo "Aucune propriété trouvée.";
                                        }
                                    } catch (PDOException $e) {
                                        // En cas d'erreur de requête ou de connexion à la base de données, afficher un message d'erreur
                                        die("Erreur de requête : " . $e->getMessage());
                                    }

                                    // Fermeture de la connexion à la base de données (si nécessaire)
                                    $pdo = null;
                            ?>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" id="latest_properties_pagination"></div>
            </div>
        </section>
        <!--Latest Properties Two End-->

        <!--CTA One Start-->
        <section class="cta_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta_one_inner">
                            <div class="cta_one_text">
                                <h2>Nous aidons les personnes et les foyers à se retrouver</h2>
                            </div>
                            <div class="cta_one_btn">
                                <a href="listing-1.html" class="thm-btn">Listes Propriétés</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->
        <!--Team One Start-->
        <section class="team_one"><br> <br><br>
            <div class="container">
                <div class="block-title text-center">
                    <h2>Des visites Guider Avec Nos Agents Immobilliers</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Team One Single-->
                        <div class="team_one_single wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team_one_img">
                                <img src="assets/images/team/team_1_img_1.jpg" alt="">

                            </div>
                            <div class="team_one_content">
                                <h4>Nom Agents</h4>
                                <a href="tel:888-666-000"><i class="fa fa-phone"></i>telephone</a>
                            </div>
                            <div class="team_one_view_details">
                                <a href="members_details.html">Plus d'informations</a>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </section>
        <!--Team One End-->






        <?php include 'layout/footer.php';?>











    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>




    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
                <i class="fa fa-times"></i>
            </span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image">
                    <img src="assets/images/resources/logo.png" alt="" />
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container clearfix"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-message"></i>
                    <a href="mailto:needhelp@polimark.com">needhelp@tolins.com</a>
                </li>
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
    </div>



    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/typed-2.0.11.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/jarallax.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>


</body>

</html>