<?PHP

// Récuperation des valeurs indiquer dans le formulaire
@$nom = $_POST['nom'];
@$prenom = $_POST['prenom'];
@$mail = $_POST['adresse'];
@$login = $_POST['login'];
$password ="";
@$mdp = $_POST['pass'];
@$password_check = $_POST['verify_pass'];
@$validerBtn = $_POST['valider'];
$messageValid = "";
$script ="";



if (isset($validerBtn)) {

    //* Sécurité meme mot de passe
    if ($mdp == $password_check) {
        $password = hash('sha256',$mdp);
        $script = "ok";
        var_dump($password);
    }
    else {
    $messageValid = "<p style='color:red;margin:2% auto;text-align:center;'>Votre mot de passe n'est pas identique, veuillez vérifier vos 2 entrées.</p>";
    $script = "stop";
    }
    
    require_once("linkBDD.php");

    //* Sécurité profil déjà existant

    $reqVerif= $pdo->prepare(
        "SELECT * FROM utilisateurs WHERE identifiant_user = :identif OR email_user = :mail");
        $reqVerif ->bindParam(':identif', $login);
        $reqVerif ->bindParam(':mail', $mail);
        $reqVerif->execute(); 
        $resultSame = $reqVerif->fetchAll();
        
    if (empty($resultSame)) {
        $script == "ok";
    } else {
        $messageValid = "<p style='color:red;margin:2% auto;text-align:center;'>Un compte avec votre identifiant ou email est déjà existant, veuillez modifier vos informations.</p>";
        $script = "stop";
    }


    //* Script SQL Inscription
    //* Si vérification 'ok', continuer
    if ($script == "ok") {


            try {
                $req= $pdo->prepare(
                "INSERT INTO `utilisateurs`
                (`id_user`,`role_user`,`statut_user`,`identifiant_user`,`mdp_user`,`nom_user`,`prenom_user`,`email_user`,`date_inscription`)
                VALUES (DEFAULT, :roles, :statut, :identifiant, :mdp, :nom, :prenom, :email, :dateInsc)");
                
                $req->execute(array(
                    'roles'=> 'Participant',
                    'statut'=> 'En cours',
                    'identifiant'=> $login,
                    'mdp'=> $password,
                    'nom'=> $nom,
                    'prenom'=> $prenom,
                    'email'=> $mail,
                    'dateInsc'=> date('Y-m-d')
                ));

                $req->closeCursor();   
                
                $messageValid = "<p style='color:green;margin:2% auto;'>Inscription validé, merci de votre confiance !</p>";
                }
                catch (Exception $e) {
                    
                    $messageValid = "<p style='color:red;margin:2% auto;'>L'inscription n'a pas pu aboutir, merci de revoir vos informations ou retentez plus tard.</p>";
                }
    }  

}
	?>