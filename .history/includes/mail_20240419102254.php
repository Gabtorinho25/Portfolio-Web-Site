<?php


// ICI ON CREE LA CONDITION QUI DIT QUE QUAND NOTRE SERVEU
if($_SERVER["REQUEST_METHOD"]=="POST") {

    $name = $_POST["nom"]
    $email = $_POST["mail"]
    $phone = $_POST["tel"]
    $content = $_POST["message"]
}

