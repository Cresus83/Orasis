<!doctype html>
<html lang="fr">

<link href="assets/css/compte.css" rel="stylesheet">
<title>ORASIS 2023 | Espace Perso</title>
<?php include "assets/includes/header.php" ?>

<body>
    <?php include "assets/includes/navbar.php" ?>
    <section>
        <div class="vertical_nav">
            <p class="welcome_message"><span class="blue_bold">Bonjour,</span><br>M. Doe !</p>
            <ul class="vertical_links">
                <li class="vertical_active">Mon compte</li>
                <li>Mes dépôts</li>
                <li>Mon inscription</li>
            </ul>
            <div class="inscription_date">
                <span>Inscrit depuis le :</span>
                <p>JJ/MM/AA</p>
            </div>
        </div>
        <div class="container">

            <div class="content_account">
                <div class="gestion">
                    <div class="mobile_nav">
                        <button><i class="fa fa-solid fa-angle-left"></i>Mes dépôts</button>
                        <button>Mon inscription <i class="fa fa-solid fa-angle-right"></i></button>
                    </div>
                    <!-- Section "MON COMPTE" -->
                    <form class="account_form" style="display: none;">
                        <h3>Mon compte</h3>
                        <span class="title_form">Informations personnelles</span>
                        <div class="personal">
                            <input type="text" name="nom" class="mr" disabled value="Nom">
                            <input type="text" name="prenom" disabled value="Prénom">
                            <input type="email" name="email" class="mt" disabled value="Adresse email">
                        </div>
                        <span class="title_form">Informations de connexion</span>
                        <div class="logging">
                            <input type="text" name="identifiant" class="mr" disabled value="Identifiant">
                            <input type="password" name="pass" value="" placeholder="Mot de passe">
                        </div>
                        <div class="btn">
                            <button class="validation_pw">Changer le mot de passe <i
                                    class="fa fa-solid fa-lock"></i></button>
                            <p>Si vous souhaitez modifier vos informations personnelles, <a href="contact.php">veuillez
                                    nous
                                    contacter.</a></p>
                        </div>
                    </form>
                    <!-- Section "MES DEPOTS" -->
                    <div class="deposit">
                        <h3>Mes dépôts<h3>
                                <table class="table_deposit">
                                    <tr>
                                        <th>Titre du dépôt</th>
                                        <th>Date du dépôt</th>
                                        <th>Statut du dépôt</th>

                                    </tr>
                                    <tr class="line">
                                        <td data-th="Titre du dépôt">blabla.pdf</td>
                                        <td data-th="Date du dépôt">JJ/MM/AAAA</td>
                                        <td class="checking" data-th="Statut du dépôt">En cours de traîtement</td>
                                    </tr>
                                    <tr class="line">
                                        <td data-th="Titre du dépôt">blabla.pdf</td>
                                        <td data-th="Date du dépôt">JJ/MM/AAAA</td>
                                        <td class="refused" data-th="Statut du dépôt">Refusé</td>
                                    </tr>
                                    <tr class="line">
                                        <td data-th="Titre du dépôt">blabla.pdf</td>
                                        <td data-th="Date du dépôt">JJ/MM/AAAA</td>
                                        <td class="validate" data-th="Statut du dépôt">Validé</td>
                                    </tr>

                                </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>

</body>

</html>