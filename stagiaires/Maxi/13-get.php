<?php

// on va vérifier si une variable GET existe (est initialisée et différente de NULL)
if(isset($_GET['section'])){
    switch ($_GET['section']):
     case "biographie":
     $title = "Ma vie";
     $text = "euhezhfzefhezhfeuzhfzfeheuzfhzfhfifhuezhfuzihf";
     break;
     case "contact":
     $title = "Contact";
     $text = "ererf@cf2m.be";
     break;
     case "livredor":
     $title = "Livre d'Or";
     $text = "Message";   
     break;
     case "actualité":
     $title = "Actualité";
     $text = "Le Centre de Formation 2 Mille (CF2M) implanté à Saint-Gilles, propose des formations professionnelles en informatique pour chercheur.se d’emploi. Ainsi que des formations de base et détermination pour les jeunes de 18 à 29 ans. ";
     default:
     $title = 404;
     $text = "Error 404 -page not found";
    endswitch;
}

else{
    $title = "Accueil";
    $text = "Bienvenue sur notre page d'accueil";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <h1>$_GET</h1>
    <p>
        <a href="?">Accueil</a>
        <a href="?section=biographie">Biographie</a>
        <a href="?section=contact">Contact</a>
        <a href="?section=livredor">Livre d'or</a>
        <a href="?section=actualité">Actualité</a>
    </p>
    <h2><?=$title?></h2>
    <p><?=nl2br($text);// fonction qui crée des <br> html à chaque retour à la ligne ?></p>
    <h3>Débogage de $_GET</h3>

    <p><?php
    var_dump($_GET);
    ?></p>
</body>
</html>