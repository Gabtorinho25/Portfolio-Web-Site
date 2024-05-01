<?php


// ICI ON CREE LA CONDITION QUI DIT QUE QUAND NOTRE SERVEUR ENREGISTRE UNE REQUÊTE 
if($_SERVER["REQUEST_METHOD"]=="POST") {

    $name = $_POST["nom"]
    $email = $_POST["mail"]
    $phone = $_POST["tel"]
    $content = $_POST["message"]
}


