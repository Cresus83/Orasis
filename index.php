<?php
session_start();
   ?>
<!doctype html>
<html lang="fr">

<link href="assets/css/accueil.css" rel="stylesheet">
<title>ORASIS 2023 | Accueil</title>
<?php include "assets/includes/header.php" ?>



<body data-title="js_index">
    <!-- Navbar Import -->
    <?php include "assets/includes/navbar.php" ?>

    <!-- ======= Header ======= -->
    <header id="hero">
        <!-- Composant Titre -->
        <div class="title-hero">
            <h1 class="main-title">BIENVENUE DANS LA 19ème ÉDITION D'ORASIS</h1>
            <h4 class="second-title">Évènement planifié du 22 au 26 mai</h4>
        </div>
        <!-- tsParticles container -->
        <web-particles id="tsparticles"
            options='{"fps_limit":60,"interactivity":{"detectsOn":"canvas","events":{"onClick":{"enable":true,"mode":"push"},"onHover":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"push":{"particles_nb":2},"repulse":{"distance":200,"duration":0.4}}},"particles":{"color":{"value":"#ffffff"},"links":{"color":"#ffffff","distance":150,"enable":true,"opacity":1,"width":1},"move":{"bounce":false,"direction":"none","enable":true,"outMode":"out","random":false,"speed":2,"straight":false},"number":{"density":{"enable":true,"area":800},"value":50},"opacity":{"value":1},"shape":{"type":"circle"},"size":{"random":true,"value":5}},"detectRetina":true}'>
        </web-particles>
        <!-- Opacité effect -->
        <div class="cover"></div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Section A propos ======= -->
        <section>
            <div class="title">
                <span>à propos</span>
                <h2>à propos</h2>
            </div>
            <div class="container about">
                <div class="leftzone">
                    <p class="about_text">La 19ème édition du colloque d’ORASIS, journées francophones des jeunes
                        chercheurs
                        en vision par ordinateur, se déroulera du 22 au 26 mai 2023 à Carqueiranne (Var, PACA). <br><br>
                        Elle sera organisée par l'équipe Signal et Image du Laboratoire d'Informatique et Systèmes
                        UMR7020,
                        au centre vacanciel Miléade à Carqueiranne.</p>
                    <button id="about_btn" class="btnmore">En savoir plus <i
                            class="fa fa-solid fa-chevron-right"></i></button>
                    <div class="about_icons">
                        <div class="intervenants">
                            <img src="./assets/img/svg/mic.svg" alt="Micro">
                            <p class="about_icon_title">Intervenants</p>
                            <p class="about_icon_text">Venez assister aux interventions de nos comités.</p>
                        </div>
                        <div class="auteurs">
                            <img src="./assets/img/svg/people-fill.svg" alt="Micro">
                            <p class="about_icon_title">Auteurs</p>
                            <p class="about_icon_text">C’est l’occasion de mettre en avant vos articles.</p>
                        </div>
                    </div>
                </div>
                <div class="rightzone">
                    <img class="about_img" src="./assets/img/svg/about_us.svg" alt="A propos">
                </div>
            </div>
            <div class="modal" id="modal_about">
                <div class="modal-content">
                    <div class="btn_close">
                        <span class="close close3">&times;</span>
                    </div>
                    <div class="about_title">
                        <h3>QU’EST-CE QU’ORASIS 2023 ?</h3>
                    </div>
                    <div class="about_content">

                        <div class="about_text2">
                            <p>La 19ième édition du colloque d’ORASIS, journées francophones des jeunes chercheurs en
                                vision par ordinateur, se déroulera du 22 au 26 mai 2023 à Carqueiranne (Var,
                                PACA).<br><br>
                                Elle sera organisée par l'équipe Signal et Image du Laboratoire d'Informatique et
                                Systèmes UMR7020, au centre vacanciel Miléade à Carqueiranne.<br><br>
                                Ce colloque vise à réunir de jeunes chercheurs francophones (doctorants et jeunes
                                docteurs) issus de la communauté de la vision par ordinateur ou de domaines connexes,
                                avec l'ambition de favoriser, dans une ambiance conviviale, les échanges entre les
                                participants, notamment entre les jeunes chercheurs et chercheurs expérimentés dans le
                                domaine.
                                <br><span class="strong">Comment va se dérouler la conférence ?</span><br>
                                Les journées seront rythmées par des sessions plénières ainsi que des sessions posters,
                                plusieurs sessions (7) de conférenciers invités complètent le déroulement de ces
                                journées.<br><br>
                                Les contributions doivent porter sur des travaux de recherche en lien avec la vision par
                                ordinateur et le traitement d'images.<br><br>
                                Elles peuvent concerner des domaines d'application comme la vision robotique, l'imagerie
                                médicale et biologique, l'imagerie par satellite, le multimédia, la réalité virtuelle.
                            </p>
                        </div>
                        <div class="about_img2">
                            <img src="./assets/img/webp/plage-caquerainne.webp" alt="Plage Caquerainne">
                        </div>
                    </div>

                </div>
        </section>

        <!-- ======= Section Decouvrir Orasis ======= -->
        <section>
            <div class="title">
                <span>découvrir orasis</span>
                <h2>découvrir orasis</h2>
            </div>
            <div class="container discover ">

                <div class="doublesquare">
                    <div class="bot-img">
                        <img src="./assets/img/webp/themes.webp" alt="Themes">
                    </div>
                    <div class="rightzone">
                        <h3 class="discover_title">Découvrez les thématiques que nous aborderons durant ORASIS 2023</h3>
                        <p class="discover_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                            consectetur condimentum odio, et scelerisque mi luctus ac. Pellentesque luctus, ante sit
                            amet
                            commodo sodales...</p>
                        <div id="discover_button">
                            <button class="learn-more" id="theme_btn">
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">découvrir les thèmes</span>
                            </button>
                            <div class="modal" id="modal_theme">
                                <div class="modal-content">
                                    <div class="btn_close">
                                        <span class="close close4">&times;</span>
                                    </div>
                                    <div class="title">
                                        <span>Les thématiques</span>
                                        <h2>Les thématiques</h2>
                                    </div>

                                    <div class="grid_theme">
                                        <!-- LIGNE 1 -->
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/vision.webp"
                                                    alt="Vision & Géometrie">
                                            </div>
                                            <div class="theme_text">
                                                <p>VISION & GÉOMÉTRIE</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/asservissement.webp"
                                                    alt="Vision & Asservissement">
                                            </div>
                                            <div class="theme_text">
                                                <p>VISION & ASSERVISSEMENT</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/active.webp"
                                                    alt="Vision active">
                                            </div>
                                            <div class="theme_text">
                                                <p>VISION ACTIVE</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/robotique.webp"
                                                    alt="Vision Robotique">
                                            </div>
                                            <div class="theme_text">
                                                <p>VISION ROBOTIQUE</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/3d.webp" alt="Modélisation 3d">
                                            </div>
                                            <div class="theme_text">
                                                <p>MODÉLISATION 3D</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/mvt.webp"
                                                    alt="Analyse du mouvement">
                                            </div>
                                            <div class="theme_text">
                                                <p>ANALYSE DU MVT & DE SCÈNES</p>
                                            </div>
                                        </div>
                                        <!-- LIGNE 2 -->
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/suivi.webp" alt="Suivi visuel">
                                            </div>
                                            <div class="theme_text">
                                                <p>SUIVI VISUELS</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/deformable.webp"
                                                    alt="Modèle déformable">
                                            </div>
                                            <div class="theme_text">
                                                <p>MODÈLES DÉFORMABLES</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/apprenti.webp"
                                                    alt="Apprentissage">
                                            </div>
                                            <div class="theme_text">
                                                <p>APPRENTISSAGE</p>
                                            </div>
                                        </div>

                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/class.webp"
                                                    alt="Classification">
                                            </div>
                                            <div class="theme_text">
                                                <p>CLASSIFICATION</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/interpre.webp"
                                                    alt="Interpretation">
                                            </div>
                                            <div class="theme_text">
                                                <p>INTERPRÉTATION</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/indexation.webp"
                                                    alt="Indexation multimédia">
                                            </div>
                                            <div class="theme_text">
                                                <p>INDEXATION MULTIMÉDIA</p>
                                            </div>
                                        </div>
                                        <!-- LIGNE 3 -->
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/compress.webp"
                                                    alt="Compression">
                                            </div>
                                            <div class="theme_text">
                                                <p>COMPRESSION</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/segment.webp"
                                                    alt="Segmentation">
                                            </div>
                                            <div class="theme_text">
                                                <p>SEGMENTATION</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/reconnaissance.webp"
                                                    alt="Indexation multimédia">
                                            </div>
                                            <div class="theme_text">
                                                <p>RECONNAISSANCE</p>
                                            </div>
                                        </div>
                                        <div class="theme_item">
                                            <div class="theme_icon">
                                                <img class="icon_theme" src="./assets/img/webp/vr.webp"
                                                    alt="RÉALITÉ VIRTUELLE">
                                            </div>
                                            <div class="theme_text">
                                                <p>RÉALITÉ VIRTUELLE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Section INTERVENANTS ORASIS ======= -->
        <section>
            <div class="container discover doublesquare2">
                <div class="leftzone">
                    <h3 class="discover_title">Jeter un œil aux personnalités qui interviendront durant cette
                        conférence</h3>
                    <p class="discover_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        consectetur condimentum odio, et scelerisque mi luctus ac. Pellentesque luctus, ante sit amet
                        commodo sodales...</p>
                    <div id="discover_button">
                        <a href="intervenants.php">
                            <button class="learn-more length">
                                <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">nos intervenants</span>
                            </button></a>
                    </div>

                </div>
                <div class="bot-img">
                    <img src="./assets/img/webp/confer.webp" alt="Conferences">
                </div>
            </div>
        </section>
        <!-- ======= Section PLANNING ORASIS ======= -->
        <section>
            <div class="container discover">

                <div class="doublesquare">
                    <div class="bot-img">
                        <img src="./assets/img/webp/planning.webp" alt="Themes">
                    </div>
                    <div class="rightzone">
                        <h3 class="discover_title">Quel est le planning d’ORASIS 2023 ?</h3>
                        <p class="discover_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                            consectetur condimentum odio, et scelerisque mi luctus ac. Pellentesque luctus, ante sit
                            amet commodo sodales...</p>
                        <div id="discover_button"><a href="programme.php">
                                <button class="learn-more" id="theme_btn">
                                    <span class="circle" aria-hidden="true">
                                        <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">voir le planning</span>
                                </button></a>
                        </div>
        </section>

        <!-- ======= Section Vidéos Orasis ======= -->
        <section>
            <div class="title">
                <span>éditions précédentes</span>
                <h2>éditions précédentes</h2>
            </div>
            <div class="container videos">

                <div class="videos-carousel owl-carousel owl-theme">
                    <div><iframe width="488" height="313" src="https://www.youtube.com/embed/qxJ0wFKSztQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div><iframe width="488" height="313" src="https://www.youtube.com/embed/qxJ0wFKSztQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div><iframe width="488" height="313" src="https://www.youtube.com/embed/qxJ0wFKSztQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div><iframe width="488" height="313" src="https://www.youtube.com/embed/qxJ0wFKSztQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div><iframe width="488" height="313" src="https://www.youtube.com/embed/qxJ0wFKSztQ"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>

                </div>

                <a href="sessions.php"><button class="btnCTA">VOIR TOUTES LES VIDÉOS <i
                            class="fa fa-solid fa-chevron-right"></i></button></a>

            </div>
        </section>

        <!-- ======= Section Activités ======= -->
        <section>
            <div class="title">
                <span>activités</span>
                <h2>activités</h2>
            </div>
            <div class="container Activites">

                <div class="doublesquare">
                    <div class="leftzone">

                        <img class="topimg" src="./assets/img/webp/act1.webp" alt="VTT">


                        <img class="botimg" src="./assets/img/webp/act2.webp" alt="Parachute">


                    </div>
                    <div class="rightzone">

                        <p class="activity_text">Durant cette 19ème édition d’ORASIS, le divertissement est présent !
                            En effet, diverses activités sont prévues pour cette édition pour divertir un maximum nos
                            participants...
                            Vous pouvez retrouver les activités en cliquant sur le bouton ci-dessous.
                        </p>
                        <a href="./activites.php"> <button class="btnmore">Découvrir <i
                                    class="fa fa-solid fa-chevron-right"></i></button></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Section Inscriptions ======= -->
        <section>
            <div class="inscription">
                <div class="register_bg"></div>
                <div class="title">
                    <span style="color: rgba(213, 213, 213, 0.62);">s'inscrire</span>
                    <h2 style="color: #fff">s'inscrire</h2>
                </div>

                <div class="register_content">
                    <p class="register_text">La 19ème édition d'ORASIS acceuille des auteurs volontaires !<br><br>
                        Si vous souhaitez soumettre un article en tant qu’auteur pour une quelconque raison, c’est
                        possible
                        !<br><br>
                        Vous aurez aussi l’occasion de présenter votre article* à la conférence.

                    </p>
                    <a href="inscription.php"><button class="registerbtn">Inscription <i
                                class="fa fa-solid fa-chevron-right"></i></button></a>
                    <a href="articles.php">Instruction pour les soummisions d'articles</a>
                    <p class="remarques2">*Pour obtenir l’accès à la soumission d’article, il vous faut au préalable
                        créer un
                        compte
                        “auteur”.</p>
                </div>

            </div>
        </section>
    </main>


    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>

</body>

</html>