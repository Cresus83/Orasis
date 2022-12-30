<?php
session_start();
   ?>
<!doctype html>
<html lang="fr">

<link href="assets/css/contact.css" rel="stylesheet">
<title>ORASIS 2023 | Accueil</title>
<?php include "assets/includes/header.php" ?>

<body>
    <!-- Navbar Import -->
    <?php include "assets/includes/navbar.php";
    include "mailSent.php";
    ?>

    <!-- Section LOGIN -->
    <section>
        <div class="card contact">
            <div class="contact_container">
                <div class="title_form">
                    <img src="assets/img/gif/message.gif" alt="GIF Mail">
                    <h3>Contact</h3>
                </div>
                <form method="post" action="">

                    <div class="input_contact">
                        <input class="input_text mr" type="text" name="nom" placeholder="Nom" required>

                        <input class="input_text" type="text" name="prenom" placeholder="Prénom" required>
                    </div>

                    <input class="input_text alone" type="text" name="email" placeholder="Adresse email" required>

                    <textarea class="message" name="msg" placeholder="Votre message" required></textarea>

                    <input type="submit" name="valider" value="Envoyer">
                    <?php echo $messageValid; ?>
                </form>

            </div>


        </div>


    </section>


    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>

</body>

</html>