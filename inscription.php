<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">

    <title>Agence Immo - Inscription</title>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row mt-3">
            <div class="col">
                    <form class="form text-center" action="../script/auth/register.php" method="POST" onsubmit="return validateForm()">
                        <p class="title">Inscription</p>
                        <?php
// Vérifier si le paramètre d'URL "erreur" est présent
if (isset($_GET["erreur"]) && $_GET["erreur"] == "email_existe") {
    echo '<div class="alert alert-danger" role="alert">
    Une erreur s\'est produite : cet e-mail est déjà utilisé.
    </div>';
}
?>
                        <p class="message">Rejoignez notre communauté en vous inscrivant dès maintenant sur Agence Immo ! </p>
                            <div class="flex">
                            <label>
                                <input  name="nom" id="nom" placeholder="" type="text" class="input" required>
                                <span>Nom</span>
                            </label>
                    
                            <label>
                                <input required name="prenom" id="prenom" placeholder="" type="text" class="input">
                                <span>Prénom</span>
                            </label>
                        </div>  
                        <label>
                            <input required  name="localisation" id="localisation" placeholder="" type="text" class="input">
                            <span>Localisation</span>
                        </label>
                    
                        <label>
                            <input required name="email" id="email" placeholder="" type="email" class="input">
                            <span>Email</span>
                        </label> 
                            
                        <label>
                            <input required name="mot_de_passe" id="mot_de_passe" placeholder="" type="password" class="input">
                            <span>Mot de passe</span>
                        </label>
                        <label>
                            <input required  name="confirmerMotdepasse" id="confirmerMotdepasse" placeholder="" type="password" class="input">
                            <span>confirmez mot de passe</span>
                            <span id="error-message" class="text-danger"></span>
                        </label>
        
                        <label>
                            <input required name="numero_telephone" id="numero_telephone" placeholder="" type="text" class="input">
                            <span>Numéro de télephone</span>
                        </label>
                        <button class="submit">S'inscrire</button>
                        <p class="signin">Vous avez déjà un compte ? <a href="connexion.php">Se connecter</a> </p>
                    </form>
            </div>
        </div>
    </div>
    <script>
        function validateForm() {
            var motdepasse = document.getElementById("mot_de_passe").value;
            var confirmerMotdepasse = document.getElementById("confirmerMotdepasse").value;
            var errorMessage = document.getElementById("error-message");

            if (motdepasse !== confirmerMotdepasse) {
                errorMessage.textContent = "Les mots de passe ne correspondent pas.";
                return false; // Annuler la soumission du formulaire
            } else {
                errorMessage.textContent = ""; // Réinitialiser le message d'erreur
                return true; // Soumettre le formulaire
            }
        }
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

