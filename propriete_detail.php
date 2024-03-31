<?php
// Inclure le fichier de connexion à la base de données (db.php)
include '../script/config.php';

// Démarrer la session
session_start();



// Vérifier si l'utilisateur est connecté, sinon le rediriger vers la page login.php
if (!isset($_SESSION["id_utilisateur"])) {
    header("Location: /../agence_immo_projet/interface/connexion.php");
    exit();
}
?>



<?php
include '../script/config.php';

// Vérifier si l'ID de la propriété a été passé en paramètre
if (isset($_GET['id'])) {
    $proprieteId = $_GET['id'];

    try {
        // Requête pour récupérer les informations de la propriété
        $requete = $pdo->prepare("SELECT p.*, tp.libelle_type, ph.nom_fichier, v.nom_ville, a.*
                                 FROM propriete p
                                 LEFT JOIN type_propriete tp ON p.id_type = tp.id_type
                                 LEFT JOIN photos_propriete ph ON p.id_propriete = ph.id_propriete
                                 LEFT JOIN ville v ON p.id_ville = v.id_ville
                                 LEFT JOIN agent_immo a ON p.id_agent = a.id_agent
                                 WHERE p.id_propriete = ?");
        $requete->execute([$proprieteId]);
        $propriete = $requete->fetch(PDO::FETCH_ASSOC);

        // Vérifier si la propriété a été trouvée
        if ($propriete) {
            // Récupérer les informations de la propriété
            $titre = $propriete['titre'];
            $description = $propriete['description'];
            $type = $propriete['libelle_type'];
            $prix = $propriete['prix'];
            $localisation = $propriete['localisation'];
            $surface = $propriete['surface'];
            $nbre_chambre = $propriete['nbre_chambre'];
            $nb_salle_de_bain = $propriete['nb_salle_de_bain'];
            $statut = $propriete['statut'];
            $ville = $propriete['nom_ville'];

            // Récupérer les images correspondantes à la propriété
            $imagesRequete = $pdo->prepare("SELECT nom_fichier FROM photos_propriete WHERE id_propriete = ?");
            $imagesRequete->execute([$proprieteId]);
            $images = $imagesRequete->fetchAll(PDO::FETCH_ASSOC);

            // Récupérer les informations de l'agent immobilier
            $agentId = $propriete['id_agent'];
            $agentRequete = $pdo->prepare("SELECT * FROM agent_immo WHERE id_agent = ?");
            $agentRequete->execute([$agentId]);
            $agent = $agentRequete->fetch(PDO::FETCH_ASSOC);

            // Vérifier si l'agent immobilier a été trouvé
            if ($agent) {
                // Récupérer les informations de l'agent immobilier
                $nomAgent = $agent['nom'];
                $prenomAgent = $agent['prenom'];
                $emailAgent = $agent['email'];
                $telephoneAgent = $agent['numero_telephone'];
                $localisationAgent = $agent['localisation'];
            } else {
                echo "Aucun agent immobilier trouvé pour cette propriété.";
            }
        } else {
            echo "Aucune propriété trouvée avec cet ID.";
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }
}
?>

















<?php include 'layouts/header.php'; ?>

        <!-- Listings Details Main Image Box Start-->
<section class="listings_details_main_image_box">
    <div class="container-full-width">
        <div class="thm__owl-carousel owl-carousel owl-theme" data-options='{"margin":10, "smartSpeed": 700, "dots": false, "items": 3, "responsive": {
            "0": {
                "items": 1
            },
            "480": {
                "items": 2
            },
            "992": {
                "items": 4
            }
        }}'>
        <?php $counter = 1; ?>
            <?php foreach ($images as $image): ?>
                <div class="div<?php echo $counter; ?>">
                    <img src="agent_immo/image/<?php echo $image['nom_fichier']; ?>" alt="Image de la propriété">
                </div>
                <?php $counter++; ?>
            <?php endforeach; ?>

            
        </div>
    </div>
</section>

<!--Listing Details Top Start-->
<section class="listing_details_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="listing_details_top_left">
                    <div class="listing_details_top_title">
                        <?php
                        // Afficher le titre, l'adresse et le prix de la propriété
                        echo '<h3>' . $propriete['titre'] . '</h3>';
                        echo '<p>' .$propriete['nom_ville']  .'-'  .$propriete['localisation'] . '</p>';
                        echo '<h4>' . $propriete['prix'] . ' Fcfa</h4>';
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="listing_details_top_right clearfix">
                    <div class="listing_details_top_product_list_box">
                        <ul class="listing_details_top_product_list list-unstyled">
                            <li>
                                <div class="icon_box">
                                    <span class="icon-bed"></span>
                                </div>
                                <div class="text_box">
                                    <?php
                                    // Afficher le nombre de chambres
                                    echo '<h5>' . $propriete['nbre_chambre'] . '</h5>';
                                    echo '<p>Chambres</p>';
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="icon_box">
                                    <span class="icon-shower"></span>
                                </div>
                                <div class="text_box">
                                    <?php
                                    // Afficher le nombre de salles de bain
                                    echo '<h5>' . $propriete['nb_salle_de_bain'] . '</h5>';
                                    echo '<p>Salle de bain</p>';
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="icon_box">
                                    <span class="icon-square-measument"></span>
                                </div>
                                <div class="text_box">
                                    <?php
                                    // Afficher la surface de la propriété
                                    echo '<h5>' . $propriete['surface'] . '</h5>';
                                    echo '<p>Km2</p>';
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="listing_details_top_right_btn_box">
                        <a href="#" class="featured_btn">
                        <?php if ($statut == "1") : ?>
                    À vendre
                <?php elseif ($statut == "0") : ?>
                    À louer
                <?php else : ?>
                    <?php echo $statut; ?>
                <?php endif; ?>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Listing Details Top End-->



        <!--Listing Details Start-->
        <section class="listing_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="listing_details_left">
                            <div class="listing_details_text">
                                <p class="text_1"><?php echo $propriete['description'] ;?> </p>
                                
                            </div>
                            <div class="listings_details_features">
                                <div class="listings_details_features_title">
                                    <h3>Prendre Rendez-vous Pour une visite Guidé</h3>
                                </div>
                                <div class="row">

                                <form action="form_visite.php" class="footer_form" method="post">
                                    <div class="footer_input_box">
                                        <input type="hidden" name="id_utilisateur" value="<?php echo $_SESSION['id_utilisateur']; ?>">
                                        <input type="hidden" name="id_propriete" value="<?php echo $_GET['id']; ?>">
                                        <input type="hidden" name="id_agent" value="<?php echo $propriete['id_agent']; ?>">
                                        
                                        <label for="date">Jour visite</label>
                                        <input type="date" required name="date_visite">   
                                        
                                        <label for="heure">Heure de visite</label>
                                        <input type="time" required name="heure_visite">
                                        
                                        <button type="submit" class="button">Envoyer</button>
                                    </div>
                            </form> <br><br>
                            <?php
                                // Vérifier si le paramètre d'URL "erreur" est présent
                                if (isset($_GET["message"]) && $_GET["message"] == "Visite enregistrée avec succès.") {
                                    echo '<br><div class="alert alert-success" role="alert">
                                    Message succès : Visite enregistré.
                                    </div>';
                                }
                            ?>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="listing_details_sidebar">
                            <div class="listing_details_sidebar_agent">

                                <div class="listing_details_sidebar_agent_content">
                                    <div class="listing_details_sidebar_agent_title">
                                        <h3><?php echo $nomAgent.' ' .$prenomAgent; ?></h3>
                                        <p>Agent Immobilier</p>
                                    </div>
                                    <ul class="listing_details_sidebar_agent_contact_info list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-phone-square-alt"></i>
                                            </div>
                                            <div class="text">
                                                <a href="tel:"><?php echo $telephoneAgent; ?></a>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <a href="mailto:"><?php echo $emailAgent;?> </a>
                                            </div>

                                            
                                        </li>
                                    </ul>
                                    <div class="listing_details_sidebar_agent__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Listing Details End-->

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