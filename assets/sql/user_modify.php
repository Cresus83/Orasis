<?PHP

$msg_valid ="";

@$modifClicked =$_POST['valider_modif'];

@$nom =$_POST['new_nom'];
@$prenom =$_POST['new_prenom'];
@$email =$_POST['new_email'];
@$status =$_POST['new_statut'];
@$role =$_POST['new_role'];

if (isset($modifClicked)) { 

require_once("linkBDD.php");

try {
    $modifUser= $pdo->prepare(' UPDATE  utilisateurs  SET  
    nom_user = :new_name, 
    prenom_user = :new_firstname, 
    email_user = :new_email, 
    statut_user = :new_stat, 
    role_user = :new_role
    WHERE email_user = :new_email ');
    
    
    $modifUser->bindParam(':new_name', $nom, PDO::PARAM_STR);
    $modifUser->bindParam(':new_firstname', $prenom, PDO::PARAM_STR);
    $modifUser->bindParam(':new_email', $email, PDO::PARAM_STR);
    $modifUser->bindParam(':new_stat', $status, PDO::PARAM_STR);
    $modifUser->bindParam(':new_role', $role, PDO::PARAM_STR);

    $modifUser->execute();   
    $msg_valid ="<p style='color:green;margin-top:5%;'>Les informations ont été modifiées avec succès.</p>";
    
}

    
    catch (Exception $e) {
        $msg_valid ="<p style='color:red;margin-top:5%;'>Les informations n'ont pas pu étre modifiés, veuillez revoir vos informations.</p>";
        //print_r($modifUser->errorInfo());
    }


}   
	?>