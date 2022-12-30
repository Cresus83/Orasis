<?php
session_start();
   ?>
<!DOCTYPE html>
<html lang="fr">
<link href="assets/css/sessions.css" rel="stylesheet">
<title>ORASIS 2023 | Sessions</title>
<!-- Header Import -->
<?php include "assets/includes/header.php" ?>

<body data-title="js_sessions">
    <!-- Navbar Import -->
    <?php include "assets/includes/navbar.php" ?>

    <main id="main">

        <section>
            <div class="title">
                <span>nos sessions</span>
                <h2>nos sessions</h2>
            </div>
            <div class="gallery">
                <h4>Filtrer par domaine :</h4>
                <div class="gallery_filters">

                    <a href="#" data-cat="all">Tout</a>
                    <span>-</span>
                    <a href="#" data-cat="3d">3D</a>
                    <span>-</span>
                    <a href="#" data-cat="classification">Classification</a>
                    <span>-</span>
                    <a href="#" data-cat="detection">Détéction</a>
                    <span>-</span>
                    <a href="#" data-cat="robots">Robotique</a>
                    <span>-</span>
                    <a href="#" data-cat="geometrie">Géométrie</a>
                    <span>-</span>
                    <a href="#" data-cat="appariement">Appariement</a>
                </div>

                <div class="gallery_videos">
                    <div class="portfolio-item" data-item="3d"><iframe width="400" height="280"
                            src="https://www.youtube.com/embed/DguWRu53TN8" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div class="portfolio-item" data-item="classification"><iframe width="400" height="280"
                            src="https://www.youtube.com/embed/3-oi0JgWeDY" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div class="portfolio-item" data-item="detection"><iframe width="400" height="280"
                            src="https://www.youtube.com/embed/zp7TlCPGCqU" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div class="portfolio-item" data-item="robots"><iframe width="400" height="280"
                            src="https://www.youtube.com/embed/g4Dip2SHVO0" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div class="portfolio-item" data-item="geometrie"><iframe width="400" height="280"
                            src="https://www.youtube.com/embed/41FspR1H7oc" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                    <div class="portfolio-item" data-item="appariement"><iframe width="400" height="280"
                            src="https://www.youtube.com/embed/ky3OcDwrcA4" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></div>
                </div>
            </div>
        </section>

    </main>
    <!-- Footer Import -->
    <?php include "assets/includes/footer.php" ?>

</body>

</html>