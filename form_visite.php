<?php
include '../script/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dateVisite = $_POST['date_visite'];
    $heureVisite = $_POST['heure_visite'];
    $idPropriete = $_POST['id_propriete'];
    $idUtilisateur = $_POST['id_utilisateur'];
    $idAgent = $_POST['id_agent'];

    try {
        $requete = $pdo->prepare("INSERT INTO visite (date_visite, heure_visite, id_propriete, Id_utilisateur, id_agent) VALUES (?, ?, ?, ?, ?)");
        $requete->execute([$dateVisite, $heureVisite, $idPropriete, $idUtilisateur, $idAgent]);

        // Rediriger vers la page propriete_detail.php avec un message de succès
        $message = "Visite enregistrée avec succès.";
        header("Location: propriete_detail.php?id=".$idPropriete."&message=".urlencode($message));
        exit();
    } catch (PDOException $e) {
        echo "Erreur lors de l'enregistrement de la visite : " . $e->getMessage();
    }
}
?>