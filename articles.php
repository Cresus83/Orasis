<?php
session_start();
   ?>
<!doctype html>
<html lang="fr">

<link href="assets/css/articles.css" rel="stylesheet">
<title>ORASIS 2023 | Articles</title>
<?php include "assets/includes/header.php";


//* Script pour afficher le bouton redirection du formulaire si non connecté
if (@$_SESSION['status'] == "Valide") {
    
    $style="";
    $style = "<style>.redirect {
        display:none;
       }</style>";

    $mail_user = $_SESSION['mail'];
    $prenom_user = $_SESSION['prenom'];
    $nom_user = $_SESSION['nom'];

    
} else {

$style="";
$style = "<style>

.redirect {
    display:block;
   }
   
   .submit {display:none;}</style>";


    $mail_user = '';
    $prenom_user ='';
    $nom_user = '';
}



echo $style; ?>


<body data-title="js_articles">
    <!-- Navbar Import -->
    <?php include "assets/includes/navbar.php" ?>
    <?php include "assets/sql/send_articles.php" ?>



    <main id="main">
        <section>
            <div class="title">
                <span>les articles</span>
                <h2>les articles</h2>
            </div>
            <div class="container info_articles">
                <div class="big_title">
                    <h3>Soumission d'un article...</h3>
                </div>
                <div class="text_articles">
                    <p>
                        Les articles longs (6 à 8 pages) seront rédigés de préférence en français (les soumissions en
                        anglais sont acceptées) et devront impérativement être soumis au format PDF et respecter les
                        consignes de mise en page décrites ci-dessous. Il sera également possible de soumettre des
                        articles courts (2 pages) proposant juste une idée.
                        <br><br>
                        L’objectif étant alors d’exposer un résultat préliminaire devant la communauté avec le support
                        d’un poster. Il est aussi possible de participer aux journées ORASIS pour présenter un travail
                        déjà publié (en le signalant).
                        <br><br>
                        Ce type de soumission pourra donner lieux à des exposés ou des posters et ne feront pas
                        nécessairement l'objet d’une relecture approfondie.
                        <br><br>
                        <span class="strong_text">Instructions :</span>
                        <br><br>
                    <ol>
                        <li> Si vous n’en avez pas encore un, créez un compte d’utilisateur pour le site de soumission
                            (sciencesconf)</li>
                        <li> Après la connexion sur le site, vous pouvez créer des soumissions. Dans un premier temps,
                            il
                            suffit d’indiquer le titre, un résumé et les noms et coordonnées des auteurs. La soumission
                            de
                            l’article associé peut être effectuée dans un deuxième temps.</li>
                        <li>Jusqu’à la date limite de soumission (15/02/2023), toutes les données concernant une
                            soumission
                            peuvent être modifiées. Afin de nous permettre de préparer la distribution des relectures et
                            d'avoir une estimation du nombre de papiers, il est recommandé de soumettre un résumé pour
                            le
                            07/02/2023. Cette première soumission pourra ensuite être modifiée pour remettre l'article
                            final.</li>
                    </ol>
                    <br><br>
                    <span class="strong_text">Le modèle suivant doit être respecté autant que le permet votre
                        logiciel favori:</span><br><br>
                    <ul>
                        <li>
                            La base du texte est du Times-Roman 10 points présentée en deux colonnes.</li>
                        <li> La séparation inter-colonne est de 28 points (ou 1cm).</li>
                        <li> Le titre principal est gras et en 14 points.</li>
                        <li> Dans les sections, le titre est en gras et en 12 points.</li>
                        <li> Les paragraphes ne sont pas indentés.</li>
                        <li> La première page contient le titre en français et en anglais, suivi du nom des auteurs et
                            de
                            leurs institutions, un résumé en français et en anglais.</li>
                    </ul><br><br>
                    Le fichier <span class="strong_text">ORASIS2021.pdf</span> contient également la définition complète
                    de la pagination.Pour les
                    auteurs utilisant LaTeX le fichier latex.tex est une base pour obtenir une sortie conforme avec
                    <span class="strong_text"> LaTeX2e ou LaTeX.</span>
                    <br><br>
                    Ce document doit être compilé en utilisant le style rfia2000.sty. Ces fichiers sont disponibles
                    dans l’archive <span class="strong_text">ORASIS_LaTeX.zip</span>.Vous pouvez également inclure le
                    package Times sous LaTeX grâce
                    à l’instruction <span class="strong_text">\usepackage{times}</span>.
                    <br><br>
                    Les auteurs utilisant Word trouveront des renseignements dans le fichier <span
                        class="strong_text">ORASIS-Word.zip </span>. Ces
                    auteurs devront cependant exporter leur article au format PDF avant de soumettre leur fichier.
                    Les fichiers<span class="strong_text"> ORASIS2021Latex.pdf</span> et <span
                        class="strong_text">ORASIS2021Word.pdf</span> donnent des exemples de sortie correcte
                    pour un texte formaté avec LaTeX ou avec Word.
                    <br><br>
                    Veuillez vous assurer que le texte est correctement centré sur la page (marge gauche et marge
                    droite de même taille).
                    <br><br>
                    <span class="important_text">
                        Remarque : pour soumettre un article, il vous faut au préalable être connecté.</span>

                    </p>
                </div>
            </div>

        </section>

        <section>
            <div class="container form_article">


                <p class="important_text centered">Avant de soumettre un article, veuillez vous référer aux instructions
                    ci-dessus, dans le cas contraire, votre soumission d’article sera refusée.</p>



                <form method="post" action="#" enctype="multipart/form-data">
                    <p class="label_form">Informations sur l'auteur</p>
                    <div class="top_row">

                        <input id="nom" name="nom" type="text" placeholder="Nom de l'auteur"
                            value="<?php print ($nom_user); ?>" disabled>
                        <input name="prenom" type="text" placeholder="Prénom de l'auteur"
                            value="<?php print ($prenom_user); ?>" disabled>
                    </div>

                    <div class="bot_row">
                        <input type="email" name="adresse_email" placeholder="Email de l' auteur"
                            value="<?php print ($mail_user); ?>" disabled>
                    </div>

                    <p class="label_form">Informations sur l'article</p>
                    <div class="bot_row">
                        <input type="text" name="titre" placeholder="Titre de l'article" required maxlength="50">

                        <textarea placeholder="Résumer de l'article" name="resume" required maxlength="250"></textarea>
                    </div>

                    <div class="zone">

                        <div id="dropZ">

                            <div class="selectFile">
                                <label for="file">Déposer votre fichier</label>
                                <input type="file" name="files_article" accept="application/pdf" id="file">
                            </div>
                            <p class="indication">Poid du fichier : 5 Mo maximum</p>
                            <p class="result" id="result_file">Aucun fichier choisi</p>
                        </div>

                    </div>
                    <input class="submit" type="submit" name="valider" value="Soumettre votre article"></input>
                    <?php echo $messageValid ;?>
                    <div class="redirect"><a href="login.php"><button type="button">Veuillez vous connectez pour
                                soumettre un
                                article.</button></a></div>
                </form>

            </div>
        </section>
    </main>


    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>
    <script>
    const inputElement = document.getElementById('file');
    const fileResult = document.getElementById('result_file');

    inputElement.addEventListener('change', function(e) {
        console.log(e.target.value); // First print
        fileResult.innerText = e.target.files[0].name;

    });
    </script>
</body>

</html>