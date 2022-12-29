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
        $_SESSION['login'] = $tab[0]["nom_user"]; 
        header("Location:compte.php");
    }
    else
       $erreur="<p style='color:red;'>Mauvais login ou mot de passe!</p>";
   }
   

?>