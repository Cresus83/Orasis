<!doctype html>
<html lang="fr">

<link href="assets/css/erreur_reussie.css" rel="stylesheet">
<title>ORASIS 2023 | Erreur</title>
<?php include "assets/includes/header.php"; 
header('Refresh: 10; URL=articles.php');
?>

<body>
    <section>
        <div class="container">
            <div class="error">
                <div class="left_pic">
                    <img src="assets/img/error.svg" alt="Error StorySet">
                </div>
                <div class="error_text">
                    <h3>Une erreur est survenue lors de la soumission de votre article...</h3>
                    <p>La soumission de votre article n’a malheureusement pue aboutir. Veuillez vérifier la conformité
                        de vos entrées sur la page précédente.<br><br>

                        Si le problème persiste, veuillez retenter plus tard la soumission de votre article ou nous
                        contacter pour résoudre le problème.<br><br></p>
                    <a href="articles.php"><button>Retour automatique à la page précédente dans <span
                                id="seconds">10</span> secondes</button></a>
                </div>
            </div>

        </div>
    </section>


    <script>
    timeLeft = 10;

    function countdown() {
        timeLeft--;
        document.getElementById("seconds").innerHTML = String(timeLeft);
        if (timeLeft > 0) {
            setTimeout(countdown, 1000);
        }
    };

    setTimeout(countdown, 1000);
    </script>
</body>

</html>