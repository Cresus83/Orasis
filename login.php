<!doctype html>
<html lang="fr">

<link href="assets/css/login.css" rel="stylesheet">
<title>ORASIS 2023 | Accueil</title>
<?php include "assets/includes/header.php" ?>

<body>
    <!-- Navbar Import -->
    <?php include "assets/includes/navbar.php" ?>

    <!-- Section LOGIN -->
    <section>
        <div class="card login">
            <div class="left_img">
                <img class="storyset" src="assets/img/login_story.png" alt="StorySet Login">
            </div>

            <div class="form_container">
                <img src="assets/img/gif/login.gif" alt="GIF login">
                <h3>Connexion</h3>
                <form>
                    <div>
                        <input class="input_text" type="text" name="login" placeholder="Identifiant"><i
                            class="fa fa-solid fa-user"></i>
                    </div>
                    <div><input class="input_text mg" type="password" name="pass" placeholder="Mot de passe"><i
                            class="fa fa-solid fa-lock"></i></div>

                    <input type="submit" name="valider" value="Se connecter">
                    <a href="inscription.php" class="reg_btn">Inscription</a>
                    <a href="contact.php" class="help">Un problème de connexion ?</a>
                </form>

            </div>
        </div>
    </section>


    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>

</body>

</html>