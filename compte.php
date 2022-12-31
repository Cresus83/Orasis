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
    <?php include "assets/sql/user_modify.php" ?>
    <?php include "assets/sql/depot_modify.php" ?>
    <section>
        <div class="vertical_nav">
            <p class="welcome_message"><span class="blue_bold">Bonjour,</span><br><?php echo $_SESSION['nom'];?>
            </p>
            <ul class="vertical_links">
                <?php 

                $listLinks ="";
                if ($_SESSION['role'] == "Administrateur"){
                    $listLinks ="
                    <li class='v_link vertical_active' data-btncat='admin_participants'>Les inscriptions</li>
                    <li class='v_link' data-btncat='admin_depots'>Les dépôts</li>

                    ";
                }

                else {
                    $listLinks ="                
                    <li class='v_link vertical_active' data-btncat='compte'>Mon compte</li>
                    <li class='v_link' data-btncat='depot'>Mes dépôts</li>
                    <li class='v_link' data-btncat='inscription'>Mon inscription</li>";
                }

                echo $listLinks;
                ?>
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
                        <button type="button" class="mobile_link vertical_active" data-btncatmob='compte_mob'>Mon
                            compte </button>
                        <button type="button" class="mobile_link" data-btncatmob='depot_mob'>Mes dépôts</button>

                        <button type="button" class="mobile_link" data-btncatmob='inscription_mob'>Mon inscription
                        </button>

                    </div>
                    <!-- Section "MON COMPTE" -->
                    <?php 

$content_page ="";
$form_content ="";
if ($_SESSION['role'] == "Administrateur"){

    require_once("assets/sql/linkBDD.php");


    //* Requete pour récupérer la liste d'adhérent
    $req= $pdo->prepare('SELECT * FROM utilisateurs ');
    $req->execute();   
    $listeUsers = $req->fetchAll();


    //* Requête pour récupérer la liste des dépots
    $reqDep= $pdo->prepare('SELECT * FROM soumettre,articles,utilisateurs 
    WHERE soumettre.id_article = articles.id_article
    AND soumettre.id_user = utilisateurs.id_user ');
    $reqDep->execute();   
    $listedepots = $reqDep->fetchAll();

    $content_page ="
    <div class='deposit categ admin_participants' data-categorie='admin_participants'>
    <h3>Les inscriptions</h3>
    <input type='text' id='filter_input' onkeyup='searchByname()' placeholder='Chercher un nom...'>
    <table class='table_adherent' id='table'>
    
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Statut</th>
            <th>Rôle</th>
            <th>Inscrit le :</th>
        </tr>";
        
        foreach ($listeUsers as $key => $variable)           
        {
            $content_page .="
            <form action='#' method='post'>
            <tr class='line' style='text-align:center;'";
            
            $userName = $listeUsers[$key]['nom_user'];
            $userFirstname = $listeUsers[$key]['prenom_user'];
            $userEmail = $listeUsers[$key]['email_user'];
            $userStatus = $listeUsers[$key]['statut_user'];
            $userRole = $listeUsers[$key]['role_user'];

            $content_page .=" onclick='return ReAssign(`$userName`, `$userFirstname `, `$userEmail ` )'>
            <td>".$listeUsers[$key]['nom_user']."</td>
            <td>".$listeUsers[$key]['prenom_user']."</td>
            <td>".$listeUsers[$key]['email_user']."</td>";
            if ($listeUsers[$key]['statut_user'] == "Valide"){
                $tdClass ="validate";
            }
            elseif ($listeUsers[$key]['statut_user'] == "En cours"){
                $tdClass ="checking";
            }

            else {
                $tdClass ="refused";
            }
            ;
            $content_page .="
            <td class=".$tdClass.">".$listeUsers[$key]['statut_user']."</td>
            <td>".$listeUsers[$key]['role_user']."</td>
            <td>".$listeUsers[$key]['date_inscription']."</td>
            </tr>
            </form>
            ";

        }
        
        $content_page .="</table>
        ".$msg_valid."
        <p class='remarque'>Veuillez cliquer sur un adhérent pour modifier ses informations.</p>
</div>
    
<div class='modal' id='modal'>
    <div class='modal-content'>
        <div class='btn_close'>
            <span class='close'>&times;</span>
        </div>
        
        <div class='modify_title'>
            <h3>Modification</h3>
        </div>
       
        <form method='post' action='#'>
        
            <input type='text' name='new_nom' id='new_nom' required>

            <input type='text' name='new_prenom' id='new_prenom' required>

            <input type='email' name='new_email' id='new_email' required >

            <select name='new_statut' required>
                <option selected disabled value=''>Status de l'adhérent</option>
                <option value='Valide'>Valide</option>
                <option value='En cours'>En cours</option>
                <option value='Refus'>Refus</option>
            </select>

            <select name='new_role' required>
                <option selected disabled value=''>Rôle de l'adhérent</option>
                <option value='Administrateur'>Administrateur</option>
                <option value='Participant'>Participant</option>
                <option value='Auteur'>Auteur</option>
            </select>
            
            <input type='submit' value='Modifier'  class='validation_pw' name='valider_modif'>
        </form>
    </div>
</div>

<!-- Section 'LES DEPOTS POUR ADMIN' -->
<div class='deposit categ admin_depot' data-categorie='admin_depots'>
                   <h3>Les dépôts</h3>
                   <input type='text' id='filter_title_input' onkeyup='searchByTitle()' placeholder='Chercher un titre...'>
                   <table class='table_deposit deposit_admin' id='table_admin'>
                       <tr>
                           <th>Titre de l'article</th>
                           <th>Resumé de l'article</th>
                           <th>Email de l'auteur</th>
                           <th>Date de l'article</th>
                           <th>Statut du dépôt</th>
                           <th>PDF</th>

                       </tr>
                       ";
                       
                       foreach ($listedepots as $key => $variable)           
                        {
                            $articleId = $listedepots[$key]['soumission_id'];
                            $articleStatut = $listedepots[$key]['soumettre_statut'];
                            $content_page .="
                            <tr class='line' onclick='return ReAssignDepot(`$articleId`)'>
                                <td data-th='Titre de l'article'>".$listedepots[$key]['titre_article']."</td>
                                <td data-th='Resumé de l'article'>".$listedepots[$key]['resumer_article']."</td>
                               
                                <td data-th='Email de l'auteur'>".$listedepots[$key]['email_user']."</td>
                                <td data-th='Date de l'article'>".$listedepots[$key]['soumettre_date_ecriture']."</td>";
                                $statut_line ="";
                                if ($listedepots[$key]['soumettre_statut'] == "Valide"){
                                    $statut_line =" <td class='validate' data-th='Statut du dépôt'>".$listedepots[$key]['soumettre_statut']."</td>";
                                }
                                else if ($listedepots[$key]['soumettre_statut'] == "En cours") {
                                    $statut_line =" <td class='checking' data-th='Statut du dépôt'>".$listedepots[$key]['soumettre_statut']."</td>";
                                }
                                else {
                                    $statut_line =" <td class='refused' data-th='Statut du dépôt'>".$listedepots[$key]['soumettre_statut']."</td>";
                                }
                              
                                $content_page .="
                                ".$statut_line."
                                <td data-th='PDF'><a href='assets/articles/".$listedepots[$key]['fichier_article']."'><i class='fill fa fa-file-pdf-o'></i></a></td>
                            </tr>";
                        }
                       $content_page .="
                       
                   </table>
                   ".$msg_valid."
                   <p class='remarque'>Veuillez cliquer sur un adhérent pour modifier ses informations, il est aussi possible de cliquer sur l'icone PDF pour accéder au fichier.</p>
                   
                   <div class='modal' id='modal2'>
                   <div class='modal-content'>
                       <div class='btn_close'>
                           <span class='close2'>&times;</span>
                       </div>
                       
                       <div class='modify_title'>
                           <h3>Modification</h3>
                       </div>
                      
                       <form method='post' action='#'>
                       
                           <input type='text' name='new_id' id='article_id' hidden >
               
               
                           <select name='new_statut_depot' required>
                               <option selected disabled value=''>Status du dépôt</option>
                               <option value='Valide'>Valide</option>
                               <option value='En cours'>En cours</option>
                               <option value='Refus'>Refus</option>
                           </select>
               

                           
                           <input type='submit' value='Modifier'  class='validation_pw' name='valider_modif_depot'>
                       </form>
                   </div>
                   </div>
               </div>
               </div>
               
";



}

else {
    require_once("assets/sql/linkBDD.php");
    $id = $_SESSION['identification'];
    $req= $pdo->prepare('SELECT * FROM soumettre,articles WHERE id_user = :identif
    AND soumettre.id_article = articles.id_article ');
    $req->bindParam(':identif', $id, PDO::PARAM_INT);
    $req->execute();   
    $listedepots = $req->fetchAll();

    $content_page ="                
    <form class='account_form categ compte mobcateg' data-categorie='compte' data-categmobile='compte_mob' method='post' action='#'>
                        <h3>Mon compte</h3>
                        <span class='title_form'>Informations personnelles</span>
                        <div class='personal'>
                            <input type='text' name='nom' class='mr' disabled value=".$_SESSION['login'].">
                    <input type='text' name='prenom' disabled value=".$_SESSION['prenom'].">
                    <input type='email' name='email' class='mt' disabled value=".$_SESSION['mail'].">
                </div>
                <span class='title_form'>Informations de connexion</span>
                <div class='logging'>
                    <input type='text' name='identifiant' class='mr' disabled value=".$_SESSION['login'].">
                    <input type='password' name='old_pass' value='' placeholder='Ancien mot de passe' required>
                    <input type='password' name='new_pass value='' placeholder=' Nouveau mot de passe' required>
                </div>
                <div class='btn'>
                    <?php echo $error_msg;?>
                    <button type='submit' name='valider' class='validation_pw'>Changer le mot de passe <i
                            class='fa fa-solid fa-lock'></i></button>
                    <p>Si vous souhaitez modifier vos informations personnelles, <a href='contact.php'>veuillez
                            nous
                            contacter.</a></p>
                </div>
                </form>

                <!-- Section 'MES DEPOTS' -->
                <div class='deposit categ depot mobcateg' data-categorie='depot' data-categmobile='depot_mob'>
                    <h3>Mes dépôts</h3>
                    <table class='table_deposit'>
                        <tr>
                            <th>Titre du dépôt</th>
                            <th>Date du dépôt</th>
                            <th>Statut du dépôt</th>

                        </tr>";
                        foreach ($listedepots as $key => $variable)
                        {
                        $content_page .="<tr class='line'>
                            <td data-th='Titre du dépôt'>".$listedepots[$key]['titre_article']."</td>
                            <td data-th='Date du dépôt'>".$listedepots[$key]['date_soumission']."</td>
                            <td class='checking' data-th='Statut du dépôt'>".$listedepots[$key]['soumettre_statut']."
                            </td>
                        </tr>";
                        }
                        $content_page .="

                    </table>
                    <p class='remarque'>Pour soumettre votre article, veuillez vous référez aux instructions <a
                            href='articles.php'> ici</a>.</p>
                </div>
                <!-- Section 'MON INSCRIPTION' -->
                <div class='inscription categ inscription mobcateg' data-categmobile='inscription_mob'
                    data-categorie='inscription'>
                    <h3>Mon inscription</h3>
                    <div class='inscription_card'>
                        <h4>Statut de l’inscription en tant que participant/auteur</h4>
                        <div class='double'>
                            <div class='progress'>
                                <ul class='steps steps--vertical'>
                                    <li class='steps__item steps__item--complete'>
                                        <div class='steps__label'> Renseignement des informations</div>
                                        <div class='steps__space'></div>
                                    </li>";

                                    if ($_SESSION['status'] == "En cours") {
                                    $content_page .="<li class='steps__item steps__item--current'>
                                        <div class='steps__label'> En attente du virement des frais
                                            d’inscription</div>
                                        <div class='steps__space'></div>
                                    </li>
                                    <li class='steps__item'>
                                        <div class='steps__label'> Inscription finalisé</div>
                                        <div class='steps__space'></div>
                                    </li>";
                                    }
                                    else {
                                    $content_page .="<li class='steps__item steps__item--complete '>
                                        <div class='steps__label'> En attente du virement des frais
                                            d’inscription</div>
                                        <div class='steps__space'></div>
                                    </li>
                                    <li class='steps__item steps__item--current'>
                                        <div class='steps__label'> Inscription finalisé</div>
                                        <div class='steps__space'></div>
                                    </li>";
                                    }

                                    $content_page .="
                                </ul>
                                <div class='legend'>
                                    <div class='finalised'>
                                        <p>Étape validée</p>
                                    </div>
                                    <div class='currently'>
                                        <p>Étape actuelle</p>
                                    </div>
                                </div>
                            </div>
                            <div class='text'>
                                <p>Une fois que vous avez effectué le virement bancaire, veuillez nous en
                                    informer et nous communiquer la référence du virement via
                                    orasis23@scienceconf.com. Nous vous répondrons une fois que nous aurons
                                    reçu les frais d’inscription.
                                    <br><br>
                                    <span class='strong'>Instructions de paiement</span><br>
                                    Veuillez transférer les frais sur le compte suivant (USD) :
                                    <br><br>
                                <ul>
                                    <li><span class='strong'>Bénéficiaire:</span> Laboratoire d'Informatique
                                        et
                                        de Systèmes (LIS, UMR 7020)</li>
                                    <li><span class='strong'>Description:</span> ORASIS'23- NOM et Prénom du
                                        participant- PaperID</li>
                                </ul>
                                </p>

                            </div>
                        </div>
                    </div>
                    <p class='remarque'>Pour valider votre inscription, n’oubliez pas d’effectuez le virement comme
                        expliqué <a href='inscription.php'>ici</a>.</p>
                </div>
                ";
                }

                echo $content_page;

                ?>










            </div>

        </div>
        </div>
    </section>
    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>

</body>

</html>