<?php include 'layouts/header.php'; ?>

        <!--Listing One Start-->
        <section class="listing_one_wrap">
            <div class="container-full-width clearfix">
                
            <div class="listing_one_content_right">
    <form class="listing_one_content_right_form" action="recherche.php" method="POST">
        <div class="row">
            <div class="col-xl-4">
                <?php 
                include '../script/config.php';
                // Requête pour récupérer les villes disponibles
                $sqlVilles = "SELECT DISTINCT nom_ville FROM ville";
                $stmtVilles = $pdo->query($sqlVilles);
                $villes = $stmtVilles->fetchAll(PDO::FETCH_COLUMN);
                // Requête pour récupérer les types de propriétés disponibles
                $sqlTypes = "SELECT DISTINCT libelle_type FROM type_propriete";
                $stmtTypes = $pdo->query($sqlTypes);
                $types = $stmtTypes->fetchAll(PDO::FETCH_COLUMN);
                ?>
                <div class="listing_one_content_right_input_box">
                    <h4 class="title">Choisir La ville</h4>
                    <select class="selectpicker" data-width="100%" name="ville">
                        <option selected="selected">Toutes les villes</option>
                        <?php foreach ($villes as $ville) : ?>
                            <option><?php echo $ville; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="listing_one_content_right_input_box">
                    <h4 class="title">choisir le type</h4>
                    <select class="selectpicker" data-width="100%" name="type">
                        <option selected="selected">Tous les types</option>
                        <?php foreach ($types as $type) : ?>
                            <option><?php echo $type; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="listing_one_content_right_input_box">
                    <h4 class="title">Surface</h4>
                    <input type="text" placeholder="Min" class="min_input_box" name="surface_min">
                    <input type="text" placeholder="Max" class="max_input_box" name="surface_max">
                </div>
            </div>
        </div>
    </form>
    <div class="listing_one_quantity_and_price-ranger">
        <div class="row">
            <div class="col-xl-12">
                <div class="listing_one_quantity_box">
                    <div class="product-quantity-box">
                        <div class="input-box">
                            <p class="title">Chambre</p>
                            <input class="quantity-spinner" type="text" value="1" name="chambres">
                        </div>
                    </div>
                    <div class="product-quantity-box bathrooms">
                        <div class="input-box">
                            <p class="title">Douche</p>
                            <input class="quantity-spinner" type="text" value="1" name="douches">
                        </div>
                    </div>
                </div>
                <div class="price_sidebar">
                    <div class="price_sidebar_title>
                        <h3>Prix</h3>
                    </div>
                    <div class="price-ranger">
                        <div id="slider-range"></div>
                        <div class="ranger-min-max-block">
                            <span>de</span>
                            <input type="text" readonly placeholder="0" name="prix_min">
                            <span>à</span>
                            <input type="text" readonly placeholder="1 000 000 000" name="prix_max">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="filter">
                <div class="filter_inner_content">
                    <div class="left">
                        <div class="left_text">
                            <h4>Résultats</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
                    <div class="listings_page_content">
                        <div class="row">
                            <div class="col-xl-6">
                                <!--Listings Page Content Single-->
                                <div class="listings_page_content_single">
                                    <div class="listings_page_content_carousel owl-theme owl-carousel">
                                        <div class="listings_page_content_img_box">
                                            <div class="listings_page_content_img">
                                                <img src="assets/images/resources/listing_1_img_1.jpg" alt="">
                                            </div>
                                            <div class="listings_page_content_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="listings_page_content_btn">
                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                        <div class="listings_page_content_img_box">
                                            <div class="listings_page_content_img">
                                                <img src="assets/images/resources/listing_1_img_2.jpg" alt="">
                                            </div>
                                            <div class="listings_page_content_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="listings_page_content_btn">
                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                        <div class="listings_page_content_img_box">
                                            <div class="listings_page_content_img">
                                                <img src="assets/images/resources/listing_1_img_3.jpg" alt="">
                                            </div>
                                            <div class="listings_page_content_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="listings_page_content_btn">
                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listings_page_bottom_content">
                                        <div class="listings_page_bottom_content_top">
                                            <h4><a href="listing-details.html">Interior Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$86.7600 <span>Sqft</span></h3>
                                        </div>
                                        <div class="listings_page_bottom_item">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="listings_page_content_load_more_btn">
                                    <a href="#" class="thm-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Listing One End-->

        <!--Site Footer One Start-->
        <footer class="site_footer" >
            <div class="container">
                <div class="site_footer_one_top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="footer-widget__column footer_widget__about">
                                <div class="footer_logo">
                                    <a href="index.html"><img src="assets/images/resources/logo.png" alt=""></a>
                                </div>
                                <div class="footer_widget_about_text">
                                    <p>Bienvenue sur notre site immobilier, votre destination en ligne pour trouver et vendre des biens immobiliers. </p>
                                </div>
                                <div class="footer_call_agent_box">
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <p>Appelez Un responsable</p>
                                        <a href="tel:92-888-000-2222">+237 694 255 554</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer_widget__explore clearfix">
                                <div class="footer-widget__title">
                                    <h3>Explorer</h3>
                                </div>
                                <ul class="footer_widget__explore_list list-unstyled">
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Mon compte</a></li>
                                    <li><a href="#">Listes Propriété</a></li>

                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-8 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer_widget__newsletter">
                                <div class="footer-widget__title">
                                    <h3>Newsletter</h3>
                                </div>
                                <form action="#" class="footer_form">
                                    <div class="footer_input_box">
                                        <input type="email" name="email" placeholder="Email Address">
                                        <button type="submit" class="button">Subscribe</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->






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
                    <img src="assets/images/resources/logo-2.png" alt="" />
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
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template scripts -->
    <script src="assets/js/theme.js"></script>


</body>

</html>