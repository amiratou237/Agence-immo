<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">

    <title>Agence Immo - Connexion</title>
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row mt-3">
            <div class="col">
                    <form class="form text-center" action="../script/auth/login.php" method="POST" onsubmit="return validateForm()">
                        <p class="title">Connexion</p>
                        <p class="message">Bon retour parmis nous ! </p>

                        <?php if (!empty($erreur_message)) { ?>
        <p style="color: red;"><?php echo $erreur_message; ?></p>
    <?php } ?>
                        <label>
                            <input required name="email" id="email" placeholder="" type="email" class="input">
                            <span>Email</span>
                        </label> 
                            
                        <label>
                            <input required name="mot_de_passe" id="mot_de_passe" placeholder="" type="password" class="input">
                            <span>Mot de passe</span>
                        </label>

                        <button class="submit">Se connecter</button>
                        <p class="signin">Vous êtes nouveau ? <a href="inscription.php">S'inscrire</a> </p>
                    </form>
            </div>
        </div>
    </div>


</body>
</html>

