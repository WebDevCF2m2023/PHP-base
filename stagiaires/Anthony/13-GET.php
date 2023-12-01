<?php

// On va vérifier si une variable GET dont la clé est 'section' 
// existe (est initialisé et différente de NULL)

if(isset($_GET['section'])){
    // switch
    switch ($_GET['section']):
        case "biographie":
            $title = "Ma vie";
            $text = "Ma vie est une chanson composée et interprétée par Alain Barrière, sortie en 1964. Elle est la chanson-titre du 45 tours sur lequel elle est pressée.";
            break;
        case "contact":
            $title ="Contact";
            $text ="Anthony@hotmail.com";
            break;
        case "livredor":
            $title = "Livre d'or";
            $text = "Laisez un petit mot d'amour ici";
            break;
        case "actualités":
            $title = "Actualités";
            $text = "Il va faire froid toute la semaine, prévoyez des habits chauds";
            break;


    endswitch;
           
}
//Pas de variable get nommée section
else{
    // Nous sommes sur l'accueil
    $title = "Accueil";
    $text = "Bienvenue sur notre page d'accueil";
}

?>

<!DOCTYPE html>
<html lang="fr">
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
        <a href="?section=actualités">Actualités</a>
    </p>
    <h2><?=$title?></h2>
    <p><?=nl2br($text)?></p> <!--Fonction  qui crée des <br> html à chaque retour de ligne -->

    <h3>Débogage de $_GET</h3>
    <p><?php
    var_dump($_GET);
    ?></p>

</body>
</html>