<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/PHPMailer.php';

?>
<?php
// ICI ON CREE LA CONDITION QUI DIT QUE QUAND NOTRE SERVEUR ENREGISTRE UNE METHODE POST ALORS ON ENREGISTRE DANS DES VARIABLES LES DONNEES DU FORMULAIRE

if($_SERVER["REQUEST_METHOD"]=="POST") {

    $name = $_POST["nom"]
    $email = $_POST["mail"]
    $phone = $_POST["tel"]
    $content = $_POST["message"]
}

//ON CREE LE MESSAGE QUI VA ÊTRE ENVOYE PAR MAIL 

$mail_envoye = "Monsieur ou Madame $name vous a envoyé un message. \n
Message reçu: $content \n 
Vous pouvez le/la joindre par mail:$email ou bien par téléphone au $phone."

//ENVOIE DU MAIL 

mail('gdsntspro@gmail.com', 'Contact via site portfolio',$mail_envoye)