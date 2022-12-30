<div class="navbar" id="navbar">

    <div class="logo">
        <a href="./index.php"><img src="./assets/img/Orasis_logo.svg" class="orasislogo" alt="ORASIS LOGO"></a>
    </div>


    <ul class="links">

        <li class="link_navbar"><a href="./activites.php">Activites</a></li>
        <li class="link_navbar"><a href="./intervenants.php">Intervenants</a></li>
        <li class="link_navbar"><a href="./informations.php">Informations</a></li>
        <li class="link_navbar"><a href="./contact.php">Contact</a></li>
        <div class="bottom">
            <a href="login.php">Connexion</a>
            <a href="inscription.php">Inscription</a>
        </div>
    </ul>

    <div class="right dropdown">
        <?php
       
        //* Script pour afficher le bouton déconnexion si une session est ouverte
        if (isset($_SESSION['autoriser']) == 'oui') {
            $btn = "";
            $btn = "<a href='./assets/includes/deconnexion.php'><button class='decobtn'><i class='fas fa-sign-out-alt'></i>SE DECONNECTER</button></a>
            <div class='dropdown-content'>
            <a href='compte.php'>Mon espace</a>
            </div>";
            

        } else {
            $btn = "";
            $btn = "<button class='probtn'><i class='fa fa-solid fa-user'></i>ESPACE ADHÉRENT</button>
            
            <div class='dropdown-content'>
            <a href='login.php'>Connexion</a>
            <a href='inscription.php'>Inscription</a>
        </div>";
        }
        echo $btn; ?>
    </div>


    <div class="toggle">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>




</div>