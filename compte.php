<?php
session_start();

   if($_SESSION['autoriser'] != 'oui'){
    header("location:index.php");
    exit();
   }
   ?>
<!doctype html>
<html lang="fr">

<link href="assets/css/compte.css" rel="stylesheet">
<title>ORASIS 2023 | Espace Perso</title>
<?php include "assets/includes/header.php" ?>

<body data-title="js_compte">
    <?php include "assets/includes/navbar.php" ?>
    <?php include "assets/sql/mdp_modify.php" ?>
    <section>
        <div class="vertical_nav">
            <p class="welcome_message"><span class="blue_bold">Bonjour,</span><br><?php echo $_SESSION['nom'];?>
            </p>
            <ul class="vertical_links">
                <li class="v_link vertical_active" data-btncat="compte">Mon compte</li>
                <li class="v_link" data-btncat="depot">Mes dépôts</li>
                <li class="v_link" data-btncat="inscription">Mon inscription</li>
            </ul>
            <div class="inscription_date">
                <span>Inscrit depuis le :</span>
                <p><?php echo $_SESSION['date_inscrip'];?></p>
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
                    <form class="account_form categ compte" data-categorie="compte" method="post" action="#">
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
                            <input type="password" name="old_pass" value="" placeholder="Ancien mot de passe" required>
                            <input type="password" name="new_pass" value="" placeholder="Nouveau mot de passe" required>
                        </div>
                        <div class="btn">
                            <?php echo $error_msg;?>
                            <button type="submit" name="valider" class="validation_pw">Changer le mot de passe <i
                                    class="fa fa-solid fa-lock"></i></button>
                            <p>Si vous souhaitez modifier vos informations personnelles, <a href="contact.php">veuillez
                                    nous
                                    contacter.</a></p>
                        </div>
                    </form>
                    <!-- Section "MES DEPOTS" -->
                    <div class="deposit categ depot" data-categorie="depot">
                        <h3>Mes dépôts</h3>
                        <table class="table_deposit">
                            <tr>
                                <th>Titre du dépôt</th>
                                <th>Date du dépôt</th>
                                <th>Statut du dépôt</th>

                            </tr>
                            <tr class="line">
                                <td data-th="Titre du dépôt">blabla.pdf</td>
                                <td data-th="Date du dépôt">JJ/MM/AAAA</td>
                                <td class="checking" data-th="Statut du dépôt">En cours</td>
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
                        <p class="remarque">Pour soumettre votre article, veuillez vous référez aux instructions <a
                                href="articles.php"> ici</a>.</p>
                    </div>

                    <!-- Section "MON INSCRIPTION" -->
                    <div class="inscription categ inscription" data-categorie="inscription">
                        <h3>Mon inscription</h3>
                        <div class="inscription_card">
                            <h4>Statut de l’inscription en tant que participant/auteur</h4>
                            <div class="double">
                                <div class="progress">
                                    <ul class="steps steps--vertical">
                                        <li class="steps__item steps__item--complete">
                                            <div class="steps__label"> Renseignement des informations</div>
                                            <div class="steps__space"></div>
                                        </li>
                                        <li class="steps__item steps__item--current">
                                            <div class="steps__label"> En attente du virement des frais
                                                d’inscription</div>
                                            <div class="steps__space"></div>
                                        </li>
                                        <li class="steps__item">
                                            <div class="steps__label"> Inscription finalisé</div>
                                            <div class="steps__space"></div>
                                        </li>
                                    </ul>
                                    <div class="legend">
                                        <div class="finalised">
                                            <p>Étape validée</p>
                                        </div>
                                        <div class="currently">
                                            <p>Étape actuelle</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Une fois que vous avez effectué le virement bancaire, veuillez nous en
                                        informer et nous communiquer la référence du virement via
                                        orasis23@scienceconf.com. Nous vous répondrons une fois que nous aurons
                                        reçu les frais d’inscription.
                                        <br><br>
                                        <span class="strong">Instructions de paiement</span><br>
                                        Veuillez transférer les frais sur le compte suivant (USD) :
                                        <br><br>
                                    <ul>
                                        <li><span class="strong">Bénéficiaire:</span> Laboratoire d'Informatique
                                            et
                                            de Systèmes (LIS, UMR 7020)</li>
                                        <li><span class="strong">Description:</span> ORASIS'23- NOM et Prénom du
                                            participant- PaperID</li>
                                    </ul>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <p class="remarque">Pour valider votre inscription, n’oubliez pas d’effectuez le virement comme
                            expliqué <a href="inscription.php">ici</a>.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>

</body>

</html>