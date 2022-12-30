<?php

   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$valider=$_POST["valider"];
   $pwd_hashed = hash('sha256',$pass);
   $erreur="";

if(isset($valider)){
    include("./assets/sql/linkBDD.php");
    $sel=$pdo->prepare("select * from utilisateurs where identifiant_user=? and mdp_user=? limit 1");
    $sel->execute(array($login,$pwd_hashed));
    $tab=$sel->fetchAll();
 
    if(count($tab)>0 ){
        session_start();
        $_SESSION['autoriser'] = 'oui'; 
        $_SESSION['nom'] = $tab[0]["nom_user"]; 
        $_SESSION['prenom'] = $tab[0]["prenom_user"]; 
        $_SESSION['status'] = $tab[0]["statut_user"];
        $_SESSION['mail'] = $tab[0]["email_user"];
        $_SESSION['login'] = $tab[0]["identifiant_user"]; 
        $_SESSION['date_inscrip'] = $tab[0]["date_inscription"]; 
        $_SESSION['role'] = $tab[0]["role_user"]; 
        header("Location:compte.php");
    }
    else
       $erreur="<p style='color:red;'>Mauvais login ou mot de passe!</p>";
   }
   

?>