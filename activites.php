<!DOCTYPE html>
<html lang="fr">
<link href="assets/css/activite.css" rel="stylesheet">
<title>ORASIS 2023 | Activités</title>

<!-- Header Import -->
<?php include "assets/includes/header.php" ?>

<body data-title="js_activites">
    <!-- Navbar Import -->
    <?php include "assets/includes/navbar.php" ?>

    <main id="main">

    <section>
        <div class="title">
            <span>activités</span>
            <h2>activités</h2>
        </div>
        <div class="activites">
            <div class="activite_card rando">
                <div class="activite_btn">
                    <button class="acti" data-activite="randonnee">En savoir plus <i
                            class="fa fa-solid fa-plus"></i></button>
                </div>
                <div class="activite_title">
                    <p>Randonnée</p>
                </div>
            </div>
            <div class="activite_card chasse">
                <div class="activite_btn">
                    <button class="acti" data-activite="chasse">En savoir plus <i
                            class="fa fa-solid fa-plus"></i></button>
                </div>
                <div class="activite_title">
                    <p>Chasse au trésor</p>
                </div>
            </div>
            <div class="activite_card scooter">
                <div class="activite_btn">
                    <button class="acti" data-activite="scooter">En savoir plus <i
                            class="fa fa-solid fa-plus"></i></button>
                </div>
                <div class="activite_title">
                    <p>Scooter sous-marin</p>
                </div>
            </div>
            <div class="activite_card gala">
                <div class="activite_btn">
                    <button class="acti" data-activite="gala">En savoir plus <i
                            class="fa fa-solid fa-plus"></i></button>
                </div>
                <div class="activite_title">
                    <p>Soirée de gala</p>
                </div>
            </div>
        </div>
        <div class="popup">
            <div class="modal" data-activite="randonnee">
                <div class="modal-content">
                    <div class="btn_close">
                        <span class="close">&times;</span>
                    </div>
                    <div class="content_act">
                        <div class="activity_photo">
                            <img src="./assets/img/rando2.png" alt="Randonnée">
                        </div>
                        <div class="activity_text">
                            <h4>
                                QU’EST-CE QUE LA RANDONNÉE ?
                            </h4>
                            <p>La randonnée pédestre est une promenade sportive qui s'effectue à pied, généralement sur
                                des sentiers dans la nature, en plaine comme en montagne.<br>
                                Sa durée est extrêmement variable : de la randonnée de quelques heures, à la grande
                                randonnée de plusieurs jours, voire plusieurs semaines. Ce n'est pas une activité de
                                compétition, contrairement au trail ou la course d'orientation par exemple.<br>
                                Les améliorations que nous proposons sont des checkpoints de récupération.
                                <br>C’est-à-dire
                                des points de repos avec des collations pour récupérer de l'énergie.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" data-activite="chasse">
                <div class="modal-content">
                    <div class="btn_close">
                        <span class="close">&times;</span>
                    </div>
                    <div class="content_act">
                        <div class="activity_photo">
                            <img src="./assets/img/chasse2.png" alt="Chasse au trésor">
                        </div>
                        <div class="activity_text">
                            <h4>
                                QU’EST CE QUE LA CHASSE AU TRÉSOR ?
                            </h4>
                            <p>Une chasse au trésor est un jeu ludique et original dans lequel les participants doivent
                                trouver et collecter des objets ou des énigmes dans un lieu spécifique.<br>
                                N’importe quel objet peut servir d’indice, mais ce sont généralement des objets
                                difficiles à trouver pour lesquels vous allez donner une devinette ou simplement une
                                photo. La chasse au trésor est un jeu d’énigmes qui peut se jouer à l’intérieur ou à
                                l’extérieur.<br>
                                C’est un grand classique des centres de loisirs, des camps scouts et des colonies de
                                vacances. Il existe de nombreuses variantes de ce jeu, mais la plupart des chasses
                                impliquent une liste d’objets/énigmes qui doivent être trouvés et collectés dans un
                                délai précis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" data-activite="scooter">
                <div class="modal-content">
                    <div class="btn_close">
                        <span class="close">&times;</span>
                    </div>
                    <div class="content_act">
                        <div class="activity_photo">
                            <img src="./assets/img/scooter.png" alt="Scooter Sous Marin">
                        </div>
                        <div class="activity_text">
                            <h4>
                                QU’EST CE QUE LE SCOOTER SOUS MARIN ?
                            </h4>
                            <p>Le propulseur aquatique est un petit engin au design épuré et équipé d’un moteur
                                électrique à hélices. Une fois immergé dans l’eau, le scooter permet de tirer le nageur
                                à une vitesse pouvant aller jusqu’à 2 mètres par seconde.<br>
                                Cette nouvelle façon de se déplacer offre des sensations inédites sous l’eau et surtout
                                un moyen de pratiquer les sports sub aquatiques autrement à La Réunion.<br>
                                Si le scooter sous-marin emmène les plongeurs et les apnéistes les plus aguerris vers
                                les profondeurs en un minimum de temps, sa facilité de prise en main le rend accessible
                                à tous.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" data-activite="gala">
                <div class="modal-content">
                    <div class="btn_close">
                        <span class="close">&times;</span>
                    </div>
                    <div class="content_act">
                        <div class="activity_photo">
                            <img src="./assets/img/gala2.png" alt="Soirée de gala">
                        </div>
                        <div class="activity_text">
                            <h4>
                                QU’EST CE QU’UN GALA DE SOIRÉE ?
                            </h4>
                            <p>Un dîner de gala ou une soirée de gala font partie des événements inoubliables qui
                                revêtent un caractère officiel.<br>
                                Une telle fête d’entreprise peut faire suite à un évènement professionnel de type
                                présentation d’un lancement de produit ou colloque professionnel.<br>
                                Il clôture à la perfection un séminaire d’entreprise avec animations team building. Un
                                dîner de gala peut aussi être un évènement original, organisé en remerciement de
                                l’investissement de vos collaborateurs lors d’un projet particulier, une inauguration ou
                                pour fêter un anniversaire d’entreprise.<br>
                                Vous pouvez aussi choisir d’associer votre image à un gala de bienfaisance, au profit
                                d’une œuvre caritative (la croix rouge française ou une œuvre de bienfaisance locale).
                            </p>
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