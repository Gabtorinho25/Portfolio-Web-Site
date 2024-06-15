<?php
$ini = parse_ini_file('../ini/app.ini');

// Importer les classes nécessaires de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers PHPMailer
require '/var/www/html/PHPmailer/src/Exception.php';
require '/var/www/html/PHPmailer/src/PHPMailer.php';
require '/var/www/html/PHPmailer/src/SMTP.php';

// Fonction pour assainir les entrées
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Fonction pour valider l'email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Vérifier si la méthode de requête est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Assainir et valider les données d'entrée
        $name = sanitizeInput($_POST["nom"]);
        $email = sanitizeInput($_POST["mail"]);
        $phone = sanitizeInput($_POST["tel"]);
        $content = sanitizeInput($_POST["message"]);

        if (!validateEmail($email)) {
            throw new Exception("Format d'email invalide.");
        }

        // Créer une nouvelle instance de PHPMailer
        $mail = new PHPMailer(true);

        // Configurer pour utiliser SMTP
        $mail->isSMTP();
        $mail->Host = $ini['HOST'];   // Définir le serveur SMTP pour l'envoi
        $mail->SMTPAuth = true; // Activer l'authentification SMTP 
        $mail->Username = $ini['USERNAME'];   // Nom d'utilisateur SMTP / celui qui va envoyer le mail
        $mail->Password = $ini['PASSWORD']; // Mot de passe de l'application
        $mail->SMTPSecure = 'ssl';    // Activer le TLS implicite 
        $mail->Port = $ini['PORT']; // Port SMTP

        // Définir l'adresse e-mail de l'expéditeur
        $mail->setFrom($ini['USERNAME']);

        // Créer le contenu du message e-mail
        $mail_envoye = "Monsieur ou Madame $name vous a envoyé un message <br>
        Message reçu: $content <br>
        Vous pouvez le/la joindre par mail: $email ou bien par téléphone au $phone.";

        // Ajouter l'adresse e-mail de destination
        $mail->addAddress($ini['USERNAME']); // Qui va recevoir le mail
        $mail->isHTML(true); // Définir le format de l'e-mail en HTML
        $mail->Subject = 'Contact via site portfolio'; // Définir le sujet de l'e-mail
        $mail->Body = $mail_envoye; // Définir le contenu de l'e-mail

        if ($mail->send()) {
            // Afficher un message et rediriger après 2 secondes
            echo '<p>Le message a été envoyé</p>';
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "https://gdsnts.ovh/";
                    }, 2000); // 2000 ms = 2 secondes
                  </script>';
        } else {
            throw new Exception("L'envoi de l'e-mail a échoué.");
        }
    } catch (Exception $e) {
        // En cas d'erreur, afficher un message d'erreur et rediriger
        echo "<p>Le message n'a pas pu être envoyé. Veuillez saisir un email correct</p>";
        echo '<script>
                setTimeout(function() {
                    window.location.href = "https://gdsnts.ovh/";
                }, 4000); // 4000 ms = 4 secondes
              </script>';
    }
}
?>
