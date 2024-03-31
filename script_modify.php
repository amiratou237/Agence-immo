
<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["id_utilisateur"])) {
    // Rediriger vers la page de connexion
    header("Location: connexion.php");
    exit();
}

// Inclure le fichier de configuration de la base de données
include '../script/config.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $localisation = $_POST['localisation'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $numero_telephone = $_POST['numero_telephone'];

    // Mettre à jour les données dans la session
    $_SESSION["nom"] = $nom;
    $_SESSION["prenom"] = $prenom;
    $_SESSION["localisation"] = $localisation;
    $_SESSION["email"] = $email;
    $_SESSION["numero_telephone"] = $numero_telephone;

    // Mettre à jour les données dans la base de données
    try {
        // Préparer et exécuter la requête de mise à jour
        $requete = $pdo->prepare("UPDATE utilisateur SET nom=?, localisation=?, prenom=?, email=?, numero_telephone=? WHERE Id_utilisateur = ?");
        $requete->execute([$nom, $localisation, $prenom, $email, $numero_telephone, $_SESSION["id_utilisateur"]]);

        // Vérifier si la mise à jour a réussi
        if ($requete->rowCount() > 0) {
            // Rediriger vers la page de profil avec un message de succès
            header("Location: account.php");
            exit();
        } else {
            // Rediriger vers la page de profil avec un message d'erreur
            header("Location: modify_account.php");
            exit();
        }
    } catch (PDOException $e) {
        // En cas d'erreur lors de l'exécution de la requête, rediriger vers la page de profil avec un message d'erreur
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
        exit();
    }
}
?>