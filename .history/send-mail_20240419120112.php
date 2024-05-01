<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/PHPMailer.php';
require 'PHPmailer/src/SMTP.php';
?>

<?php
// ICI ON CREE LA CONDITION QUI DIT QUE QUAND NOTRE SERVEUR ENREGISTRE UNE METHODE POST ALORS ON ENREGISTRE DANS DES VARIABLES LES DONNEES DU FORMULAIRE

if($_SERVER["REQUEST_METHOD"]=="POST") {

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';   //Set the SMTP server to send through
    $mail->SMTPAuth   = true; //Enable SMTP 
    $mail->Username   = 'portfoliogdsnts@gmail.com';   //SMTP username
    $mail->Password   = 'xlayzkwfuiukzdqp'; //password app
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    //Enable implicit TLS 
    $mail->Port       = 465; 

    $mail->setFrom('portfoliogdsnts@gmail.com');

    $name = $_POST["nom"]
    $email = $_POST["mail"]
    $phone = $_POST["tel"]
    $content = $_POST["message"]

    //ON CREE LE MESSAGE QUI VA ÊTRE ENVOYE PAR MAIL 

$mail_envoye = "Monsieur ou Madame $name vous a envoyé un message. \n
Message reçu: $content \n 
Vous pouvez le/la joindre par mail:$email ou bien par téléphone au $phone."
    $mail->addAddress($email); //email in the form 
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
}



//ENVOIE DU MAIL 

mail('gdsntspro@gmail.com', 'Contact via site portfolio',$mail_envoye)

?>