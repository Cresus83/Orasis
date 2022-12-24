<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="ORASIS 2023, la 18ème édition d'ORASIS ouvre ses portes 22 au 26 mai !"
    "/>
    <meta name=" robots" content="index, follow"/>
    <meta property="og:title" content="ORASIS 2023 | Accueil"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="#">
    <meta property="og:description" content="ORASIS 2023, la 18ème édition d'ORASIS ouvre ses portes 22 au 26 mai !"
    "/>
    <meta property=" og:locale" content="fr_FR"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="ORASIS 2023 | Accueil"/>
    <meta name="twitter:description" content="ORASIS 2023, la 18ème édition d'ORASIS ouvre ses portes 22 au 26 mai !"/>
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">
    <title>ORASIS 2023 | Accueil</title>
    <!-- CSS files -->
    <link href="assets/css/accueil.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <!-- FontAwesome link -->
    <script src="https://kit.fontawesome.com/ec5f85796d.js" crossorigin="anonymous"></script>
    <!-- JS LIBRARY -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          crossorigin="anonymous">
</head>

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
                    <p class="about_text">La 19ème édition du colloque d’ORASIS, journées francophones des jeunes chercheurs
                        en vision par ordinateur, se déroulera du 22 au 26 mai 2023 à Carqueiranne (Var, PACA). <br><br>
                        Elle sera organisée par l'équipe Signal et Image du Laboratoire d'Informatique et Systèmes UMR7020,
                        au centre vacanciel Miléade à Carqueiranne.</p>
                    <button class="btnmore">En savoir plus <i class="fa fa-solid fa-chevron-right"></i></button>
                    <div class="about_icons">
                        <div class="intervenants">
                            <img src="./assets/img/mic.svg" alt="Micro">
                            <p class="about_icon_title">Intervenants</p>
                            <p class="about_icon_text">Venez assister aux interventions de nos comités.</p>
                        </div>
                        <div class="auteurs">
                            <img src="./assets/img/mic.svg" alt="Micro">
                            <p class="about_icon_title">Auteurs</p>
                            <p class="about_icon_text">C’est l’occasion de mettre en avant vos articles.</p>
                        </div>
                    </div>
                </div>
                <div class="rightzone">
                    <img class="about_img" src="./assets/img/about_us.svg" alt="A propos">
                </div>
            </div>
    </section>

    <!-- ======= Section Decouvrir Orasis ======= -->
    <section>
        <div class="title">
            <span>découvrir orasis</span>
            <h2>découvrir orasis</h2>
        </div>
        <div class="container discover">

            <div class="doublesquare">
                <div class="bot-img">
                    <img src="./assets/img/themes.png" alt="Themes">
                </div>
                <div class="rightzone">
                    <h3 class="discover_title">Découvrez les thématiques que nous aborderons durant ORASIS 2023</h3>
                    <p class="discover_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        consectetur condimentum odio, et scelerisque mi luctus ac. Pellentesque luctus, ante sit amet
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
                                    <span class="close">&times;</span>
                                </div>
                                <div class="title">
                                    <span>Les thématiques</span>
                                    <h2>Les thématiques</h2>
                                </div>

                                <div class="grid_theme">
                                    <!-- LIGNE 1 -->
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/vision.png"
                                                 alt="Vision & Géometrie">
                                        </div>
                                        <div class="theme_text">
                                            <p>VISION & GÉOMÉTRIE</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/asservissement.png"
                                                 alt="Vision & Asservissement">
                                        </div>
                                        <div class="theme_text">
                                            <p>VISION & ASSERVISSEMENT</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/active.png" alt="Vision active">
                                        </div>
                                        <div class="theme_text">
                                            <p>VISION ACTIVE</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/robotique.png"
                                                 alt="Vision Robotique">
                                        </div>
                                        <div class="theme_text">
                                            <p>VISION ROBOTIQUE</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/3d.png" alt="Modélisation 3d">
                                        </div>
                                        <div class="theme_text">
                                            <p>MODÉLISATION 3D</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/mvt.png"
                                                 alt="Analyse du mouvement">
                                        </div>
                                        <div class="theme_text">
                                            <p>ANALYSE DU MVT & DE SCÈNES</p>
                                        </div>
                                    </div>
                                    <!-- LIGNE 2 -->
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/suivi.png" alt="Suivi visuel">
                                        </div>
                                        <div class="theme_text">
                                            <p>SUIVI VISUELS</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/deformable.png"
                                                 alt="Modèle déformable">
                                        </div>
                                        <div class="theme_text">
                                            <p>MODÈLES DÉFORMABLES</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/apprenti.png" alt="Apprentissage">
                                        </div>
                                        <div class="theme_text">
                                            <p>APPRENTISSAGE</p>
                                        </div>
                                    </div>

                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/class.png" alt="Classification">
                                        </div>
                                        <div class="theme_text">
                                            <p>CLASSIFICATION</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/interpre.png"
                                                 alt="Interpretation">
                                        </div>
                                        <div class="theme_text">
                                            <p>INTERPRÉTATION</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/indexation.png"
                                                 alt="Indexation multimédia">
                                        </div>
                                        <div class="theme_text">
                                            <p>INDEXATION MULTIMÉDIA</p>
                                        </div>
                                    </div>
                                    <!-- LIGNE 3 -->
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/compress.png" alt="Compression">
                                        </div>
                                        <div class="theme_text">
                                            <p>COMPRESSION</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/segment.png" alt="Segmentation">
                                        </div>
                                        <div class="theme_text">
                                            <p>SEGMENTATION</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/reconnaissance.png"
                                                 alt="Indexation multimédia">
                                        </div>
                                        <div class="theme_text">
                                            <p>RECONNAISSANCE</p>
                                        </div>
                                    </div>
                                    <div class="theme_item">
                                        <div class="theme_icon">
                                            <img class="icon_theme" src="./assets/img/vr.png" alt="RÉALITÉ VIRTUELLE">
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
    </section>
</main>


<!-- Footer Import -->
<?php include "assets/includes/footer.php" ?>

</body>
</html>
