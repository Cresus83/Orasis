<?php
// Récuperation des valeurs indiquer dans le formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $immadh = $_POST['immatri'];
    $messagecont = $_POST['message'];


// lance les classes de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// chemin du dossier PHPMailer % fichier d'envoi du mail
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// passer true dans le constructeur active les exceptions dans PHPMailer
$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";


try {
    // Paramêtres de serveur
    $mail->isSendmail();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
	$mail->setLanguage('fr', '/optional/path/to/language/directory/');

    $mail->Username = 'glideworld.contact@gmail.com'; // YOUR gmail email
    $mail->Password = 'rayan83500'; // YOUR gmail password

    // Expéditeur paramêtre
    $mail->setFrom($email);
    $mail->addAddress($email);
    $mail->addBCC("glideworld.contact@gmail.com");

    // Contenue de l'email
    $mail->IsHTML(true);
    $mail->Subject = "Contact par BDD";
    $mail->Body =  			"\!/ Ceci est une copie de votre formulaire \!/".
    						"<li>Message de $nom $prenom </li>".
                            "<li>Immatriculé : $immadh </li>".
                            "<li>Le message: $messagecont</li>".
                            
'<b>Merci de ne pas répondre à cet e-mail.</b>';
    $mail->send();
    // Affiche la page qui indiquent que l'email a bien été envoyée
    header('Location: envoi_reussie.php');
} catch (Exception $e) {
    header('Location: envoie_fail.php');
}

?>