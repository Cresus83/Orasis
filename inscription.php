<!doctype html>
<html lang="fr">

<link href="assets/css/inscription.css" rel="stylesheet">
<title>ORASIS 2023 | Accueil</title>
<?php include "assets/includes/header.php" ?>

<body>
    <!-- Navbar Import -->
    <?php include "assets/includes/navbar.php" ?>

    <!-- Section LOGIN -->
    <section>
        <div class="card register">
            <div class="register_container">
                <div class="title_form">
                    <img src="assets/img/gif/checklist.gif" alt="GIF checklist">
                    <h3>Inscription</h3>
                </div>
                <form>
                    <span class="label_form">Informations personnelles</span>
                    <div class="input_personnelle">
                        <input class="input_text mr" type="text" name="nom" placeholder="Nom">

                        <input class="input_text " type="password" name="prenom" placeholder="Prénom"><input
                            class="input_text " type="password" name="adresse" placeholder="Adresse email">
                    </div>
                    <span class="label_form">Informations de connexion</span>
                    <input class="input_text alone" type="text" name="login" placeholder="Identifiant">
                    <div class="input_identifiant">

                        <input class="input_text mr" type="password" name="pass" placeholder="Mot de passe"><input
                            class="input_text " type="password" name="verify_pass"
                            placeholder="Resaisir le mot de passe">
                    </div>
                    <input type="submit" name="valider" value="Se connecter">
                    <a href="inscription.php" class="reg_btn">Inscription</a>
                    <a href="contact.php" class="help">Un problème de connexion ?</a>
                </form>

            </div>
            <div class="important_zone">
                <img src="assets/img/gif/warning.gif" alt="GIF Warning">
                <p>LA PARTICIPATION À LA CONFÉRENCE EST SOUMISE À DES CONDITIONS</p><br>
                <p>VEUILLEZ VOUS RENSEIGNER CI-DESSOUS</p>
                <button id="more_btn">Se renseigner</button>
            </div>

        </div>
        <div class="modal" id="modal_register">
            <div class="modal-content">
                <div class="btn_close">
                    <span class="close">&times;</span>
                </div>


                <!-- LIGNE 1 -->

                <div class="more_title">
                    <h3>Concernant l'inscription...</h3>
                </div>
                <div class="content_text">
                    <div class="more_text">
                        <span class="strong">L’inscription en tant que participant ou auteur est payante.
                            <br>Les tarifs sont les suivants :</span><br><br>
                        <p>Les frais d’inscriptions comprennent :<br><br>
                        <ul>
                            <li>La participation à l'ensemble du congrès et aux pauses-café ;</li>
                            Les repas du lundi soir, mardi midi et soir, mercredi midi et soir, jeudi midi et vendredi
                            midi
                            ;</li>
                            <li>Le repas de gala du jeudi soir ;</li>
                            <li>Les animations et visites (voir programme).</li>
                        </ul>
                        </p>
                        <table>
                            <tr>
                                <th>Chambre simple</th>
                                <td>650 €</td>
                            </tr>
                            <tr>
                                <th>Chambre double</th>
                                <td>550 €</td>
                            </tr>

                        </table>
                        <span class="strong">L'inscription est ouverte à partir du 03 avril 2023
                        </span><br><br>
                        <p>
                            *Une majoration de 50€ sera appliquée sur les tarifs pour toute réservation faite à partir
                            du 02 mai 2023, le choix de chambre simple ou double est possible en fonction de la
                            disponibilité des chambres (70 chambres libres, 15 chambres doubles).<br><br>

                    </div>
                    <div class="more_text">

                        <p>Une fois que vous avez effectué le virement bancaire, veuillez nous en informer et nous
                            communiquer la référence du virement via orasis23@scienceconf.com. Nous vous répondrons une
                            fois que nous aurons reçu les frais d’inscription.

                        </p>
                        <br>
                        <span class="strong">Enregistrement de l’auteur
                        </span><br><br>
                        <p>Chaque papier *DOIT* avoir au moins une inscription complète au plus tard le 14 septembre
                            2022. L’inscription complète comprend l’admission à toutes les sessions de la conférence, la
                            pause thé, le déjeuner tous les jours, le dîner de banquet pour une personne.
                        </p>
                        <br>
                        <span class="strong">
                            Instructions de paiement

                        </span><br><br>
                        <p>Veuillez transférer les frais sur le compte suivant (USD) :<br><br>
                        <ul>
                            <li>
                                Bénéficiaire: Laboratoire d'Informatique et de Systèmes (LIS, UMR 7020)</li>
                            <li>Banque bénéficiaire:</li>
                            <li>Numéro de compte du bénéficiaire:</li>
                            <li>Code SWIFT :</li>
                            <li>Adresse :</li>
                            <li>Description: ORASIS'23- NOM et Prénom du participant- PaperID</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>



        </div>
        </div>
    </section>


    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>
    <script>
    // Id du modal général
    let modalRegister = document.getElementById("modal_register");

    // Button pop up
    let btnMore = document.getElementById("more_btn");

    // Bouton fermeture
    let spanClose = document.getElementsByClassName("close")[0];

    // Sur le click, ouverture du modal, cacher le planning de base et bloquer le scroll
    btnMore.onclick = function() {
        modalRegister.style.display = "block";
        document.body.style.overflowY = "hidden";
    };

    // Sur le click, fermeture du modal
    spanClose.onclick = function() {
        modalRegister.style.display = "none";
        document.body.style.overflowY = "visible";
    };

    // Sur un click exterieur, fermeture du modal
    window.onclick = function(event) {
        if (event.target == modalRegister) {
            modalRegister.style.display = "none";
            document.body.style.overflowY = "visible";
        }
    }
    </script>

</body>

</html>