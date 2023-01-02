<?PHP

$error_msg ="";

@$btnClicked =$_POST['valider'];

if (isset($btnClicked)) { 
//*Ancien mot de passe
$oldmdp = $_POST['old_pass'];
$hash_old = hash('sha256',$oldmdp);

//*Nouveau mot de passe
$nouveaumdp = $_POST['new_pass'];
$hash_new = hash('sha256',$nouveaumdp);

require_once("linkBDD.php");

    $req= $pdo->prepare('SELECT * FROM utilisateurs WHERE mdp_user = :mdp_input ');
    $req->bindParam(':mdp_input', $hash_old, PDO::PARAM_STR);
    $req->execute();   
    $resultatmdp = $req->fetchAll();

    @$resultat_mdp = $resultatmdp[0]['mdp_user'];
    
    
if ($hash_old == $resultat_mdp ) {
	
    $modif= $pdo->prepare(' UPDATE  utilisateurs  SET  mdp_user = :newmdp WHERE mdp_user = :mdp_input ');
    
    
    $modif->bindParam(':mdp_input', $hash_old, PDO::PARAM_STR);
    $modif->bindParam(':newmdp', $hash_new, PDO::PARAM_STR);

    $modif->execute();   
    $error_msg ="<p style='color:green;'>Votre mot de passe a été modifé avec succès.</p>";
}
else {
    $error_msg ="<p style='color:red;'>L'ancien mot de passe que vous avez entrez ne correspond pas au mot de passe actuel.</p>";
}

}           
	?>