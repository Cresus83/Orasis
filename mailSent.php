<?php
// Récuperation des valeurs indiquer dans le formulaire
    @$nom = $_POST['nom'];
    @$prenom = $_POST['prenom'];
    @$email = $_POST['email'];
    @$messagecont = $_POST['msg'];
    @$validerBtn = $_POST['valider'];
    @$messageValid = "";
    @$nomprenom = $nom . ' ' . $prenom;

    
        
    
// lance les classes de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($validerBtn)) {
// chemin du dossier PHPMailer % fichier d'envoi du mail
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// passer true dans le constructeur active les exceptions dans PHPMailer
$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";


try {
    // Paramêtres de serveur
    // $mail->isSendmail();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
	$mail->setLanguage('fr', '/optional/path/to/language/directory/');

    $mail->Username = 'contact.orasis2023@gmail.com'; // YOUR gmail email
    $mail->Password = 'hcvgxezomyxagpvw'; // YOUR gmail password

    // Expéditeur paramêtre
    $mail->setFrom($email);
    $mail->addAddress("contact.orasis2023@gmail.com");
    $mail->addReplyTo($email, $nomprenom);

    // Contenue de l'email
    $mail->IsHTML(true);
    $mail->Subject = "[ORASIS 2023] Contact formulaire";
    $mail->Body =  			"\!/ Ceci est un email envoyé depuis le formulaire de contact du site ORASIS 2023 \!/".
    						"<li>Message de $nom $prenom </li>".
                            "<li>Le message: $messagecont</li>".
                            
'<b>Merci de ne pas répondre à cet e-mail.</b>';
    $mail->send();
    // Affiche la page qui indiquent que l'email a bien été envoyée
    $messageValid = "<p style='color:green;margin:2% auto;'>Le mail à bien été envoyé, merci de nous avoir contacté.</p>";
} catch (Exception $e) {
    $messageValid = "<p style='color:red;margin:2% auto;'>Le mail n'a pas pu être envoyé, merci de revoir vos informations ou retentez plus tard.</p>";
    //echo 'Caught exception: ',  $e->getMessage(), "\n";
}
}
?>