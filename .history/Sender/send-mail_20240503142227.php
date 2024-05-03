
<?php
require_once 'config.php';

// Activer le rapport d'erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Importer les classes nécessaires de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers PHPMailer
require 'D:\MAMP\htdocs\Portfolio\PHPmailer\src\Exception.php';
require 'D:\MAMP\htdocs\Portfolio\PHPmailer\src\PHPMailer.php';
require 'D:\MAMP\htdocs\Portfolio\PHPmailer\src\SMTP.php';
?>

<?php
// Vérifier si la méthode de requête est POST
if($_SERVER["REQUEST_METHOD"]=="POST") 
try {
    // Créer une nouvelle instance de PHPMailer
    $mail = new PHPMailer(true);

    // Configurer pour utiliser SMTP
    $mail->isSMTP();
    $mail->Host = HOST;   // Définir le serveur SMTP pour l'envoi smtp.gmail.com Pour gmail
    $mail->SMTPAuth   = true; // Activer l'authentification SMTP 
    $mail->Username   = ;   // Nom d'utilisateur SMTP / celui qui va envoyer le mail
    $mail->Password   = ''; // Mot de passe de l'application
    $mail->SMTPSecure = 'ssl';    // Activer le TLS implicite 
    $mail->Port       = ; //  Port 465 SMTP

    // Définir l'adresse e-mail de l'expéditeur
    $mail->setFrom('');

    // Récupérer les données du formulaire
    $name = $_POST["nom"];
    $email = $_POST["mail"];
    $phone = $_POST["tel"];
    $content = $_POST["message"];

    // Créer le contenu du message e-mail
    $mail_envoye = "Monsieur ou Madame $name vous a envoyé un message <br>
    Message reçu: $content <br>
    Vous pouvez le/la joindre par mail: $email ou bien par téléphone au $phone.";

    // Ajouter l'adresse e-mail de destination
    $mail->addAddress(''); // Qui va recevoir le mail
    $mail->isHTML(true); // Définir le format de l'e-mail en HTML
    $mail->Subject = 'Contact via site portfolio'; // Définir le sujet de l'e-mail
    $mail->Body    =  $mail_envoye; // Définir le contenu de l'e-mail

    // Envoyer l'e-mail
    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    // En cas d'erreur, afficher un message d'erreur
    echo "Le message n'a pas pu être envoyé. Erreur Mailer: {$mail->ErrorInfo}";
}
?>

