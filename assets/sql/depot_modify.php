<?PHP

$msg_valid ="";

@$modifClicked2 =$_POST['valider_modif_depot'];

@$id_article =$_POST['new_id'];
@$status_depot =$_POST['new_statut_depot'];


if (isset($modifClicked2)) { 

require_once("linkBDD.php");

try {
    $modifDepot= $pdo->prepare(' UPDATE  soumettre  SET  
    soumettre_statut = :new_stat 
    WHERE soumission_id = :new_id ');
    
    
    $modifDepot->bindParam(':new_stat', $status_depot, PDO::PARAM_STR);
    $modifDepot->bindParam(':new_id', $id_article, PDO::PARAM_INT);

    print_r($modifDepot->errorInfo());
    $modifDepot->execute();   
    $msg_valid ="<p style='color:green;margin-top:5%;'>Les informations ont été modifiés avec succés.</p>";
    
}

    
    catch (Exception $e) {
        $msg_valid ="<p style='color:red;margin-top:5%;'>Les informations n'ont pas pu étre modifiés, veuillez revoir vos informations.</p>";
        print_r($modifDepot->errorInfo());
    }


}   
	?>