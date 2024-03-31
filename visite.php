<?php
// Inclure le fichier de configuration
include '../script/config.php';

// Assurez-vous d'avoir démarré la session avant d'accéder à la variable $_SESSION
session_start();

// Vérifiez si l'utilisateur est connecté
if (isset($_SESSION['id_utilisateur'])) {
    // Récupérer l'id de l'utilisateur connecté
    $idUtilisateur = $_SESSION['id_utilisateur'];

    // Requête SQL pour sélectionner les informations de l'utilisateur
    $sql = "SELECT * FROM utilisateur WHERE Id_utilisateur = ?";

    // Préparez la requête
    $stmt = $pdo->prepare($sql);

    // Liez l'id de l'utilisateur en tant que paramètre à la requête préparée
    $stmt->bindParam(1, $idUtilisateur, PDO::PARAM_INT);

    // Exécutez la requête
    $stmt->execute();

    // Récupérez les résultats de la requête
    $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);


} else {
    header("Location: inscription.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil || HomeConnect</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <!-- Css-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">

    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/vegas.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="assets/css/tolips.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="../style/style.css">

</head>

<body>

    <!-- <div class="preloader">
        <img src="assets/images/loader.png" class="preloader__image" alt="">
    </div>/.preloader -->

    <div class="page-wrapper">

        <div class="site-header__header-one-wrap two clearfix">

            <div class="header_top_one two">
                <div class="container">
                    <div class="header_top_one_inner clearfix">
                        <div class="header_top_one_content_box">
                            <div class="header_top_one_content_box_top clearfix">
                                <div class="header_top_one_content_box_top_left float-left">
                                    <p>Bienvenue sur  <span>HomeConnect</span></p>
                                </div>
                                <div class="header_top_one_content_box_top_right float-right">
                                    <ul class="list-unstyled header_top_one_content_box_top_right_list">
                                        <li><a href="visite.php">Mes Visites<span>/</span></a></li>
                                        <li><a href="account.php">Mon compte</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <header class="main-nav__header-one two">
                <div class="container">
                    <nav class="header-navigation one stricky">
                        <div class="container-box clearfix">
                            <div class="main_nav_header_two_logo float-left clearfix">
                                <div class="main_nav_header_two_logo_box">
                                    <a href="index.php"><img src="assets/images/resources/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="container-box_two float-right clearfix">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="main-nav__left main-nav__left_one float-left">
                                    <a href="#" class="side-menu__toggler">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <div class="main-nav__main-navigation two clearfix">
                                        <ul class=" main-nav__navigation-box float-left">
                                            <li class="dropdown">
                                                <a href="index.php">Accueil</a>
                                            </li>
                                            
                                            <li class="dropdown">
                                                <a href="propriete.php">Propriétés</a>
                                            </li>
                                            <li>
                                                <a href="about.php">A propos</a>
                                            </li>
                                            
                                            <li>
                                                <a href="contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div>
                                <div class="main-nav__right main-nav__right_one float-right">

                                    <div class="icon_cart_box">
                                        <a href="#">
                                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                                              </svg></span>
                                        </a>
                                    </div>
                                    <div class="icon_search_box">
                                        <a href="#" class="main-nav__search search-popup__toggler">
                                            <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                              </svg></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>

<body>
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">User profile</a>
        <!-- Form -->

      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;background-image: url(assets/images/main-slider/slider-2-1.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Bienvenue <?php echo $utilisateur['nom'] ?></h1>
            <p class="text-white mt-0 mb-5">Sur cette page, vous pouvez consulter vos demande de visite, supprimer les visites déja effectuer, et accéder aux informations de l'agent qui vous accompagnera lors de la visite.  </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
          <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                        <h3 class="mb-0">Vos visites</h3>
                        </div>
                        <a href="logout.php" class="btn btn-danger">Tout supprimer
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                            <?php
                                        // Vérifiez si l'id_utilisateur est défini dans la session
                                        if (isset($_SESSION['id_utilisateur'])) {
                                            // Récupérez l'id_utilisateur de la session
                                            $idUtilisateur = $_SESSION['id_utilisateur'];

                                            // Requête SQL pour sélectionner les informations des visites
                                            $sql =  "SELECT v.*, p.titre, a.nom
                                                        FROM visite v
                                                        LEFT JOIN propriete p ON v.id_propriete = p.id_propriete
                                                        LEFT JOIN agent_immo a ON v.id_agent = a.id_agent
                                                        WHERE v.id_utilisateur = ?";

                                            // Préparez la requête
                                            $stmt = $pdo->prepare($sql);

                                            // Liez l'id_utilisateur en tant que paramètre à la requête préparée
                                            $stmt->bindParam(1, $idUtilisateur, PDO::PARAM_INT);

                                            // Exécutez la requête
                                            $stmt->execute();

                                            // Récupérez les résultats de la requête
                                            $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        }
                            ?>

                    <main>
                                <?php
                                    // Affichez les informations des visites dans un tableau Bootstrap
                                    echo '<table class="table table-striped">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    echo '<th>Date de visite</th>';
                                    echo '<th>Heure de visite</th>';
                                    echo '<th>Titre de la propriété</th>';
                                    echo '<th>Agent Immobilier (responsable de la visite)</th>';
                                    echo '<th>Statut</th>';
                                    echo '<th>Actions</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody>';
                                ?>

                                            <tbody>
                                        <?php foreach ($resultats as $resultat): ?>
                                            <tr>
                                                <td><?php echo $resultat['date_visite']; ?></td>
                                                <td><?php echo $resultat['heure_visite']; ?></td>
                                                <td><?php echo $resultat['titre']; ?></td>
                                                <td><?php echo $resultat['nom']; ?></td>
                                                <td>
                                                <?php if ($resultat['statut'] == "0") : ?>
                                                    <span class="badge text-bg-warning">En attente</span>
                                                <?php elseif ($resultat['statut'] == "1") : ?>
                                                    <span class="badge text-bg-warning">Valider</span>
                                                <?php elseif ($resultat['statut'] == "2") : ?>
                                                    <span class="badge text-bg-warning">Rejeter</span>
                                                <?php else : ?>
                                                    <?php echo $resultat['statut']; ?>
                                                <?php endif; ?>
                                                </td>
                                                <td><a href="logout.php" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/></svg></a></td>

                                                
                                                
                                            </tr>
                                            
                                        <?php endforeach; ?>
                                        <?php
                                        if (empty($resultats)) {
                            echo "Aucune visite pour le moment.";
                        }
                    
            ?>
                                        
                                    
                                </tbody>
                                
                                </table>
                    </main>
                </div>
          </div>
    </div>
<div class="espace mt-5"></div>
<?php include 'layout/footer.php'; ?>