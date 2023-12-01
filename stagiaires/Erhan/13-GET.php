<?php

// on va vérifier si une variable GET dont la clef est 'section'
// existe (est initialisée et différente de NULL)

if(isset($_GET['section']))
{
    // switch
    switch($_GET['section']):
        case "biographie":
            $title = "Ma vie";
            $text = "\"Ma vie\" est une chanson composée et interprétée par Alain Barrière, sortie en 1964. Elle est la chanson-titre 
            du 45 tours sur lequel elle est pressée.
            
Le titre est l'un des plus connus de l'interprète à travers le monde.";
        break;
        case "livredor":
            $title = "Salut1";
            $text = "Salut1";
        break;
        case "contact":
            $title = "Salut3";
            $text = "Salut3";
        break;

        default:
            $title ="Error 404";
            $text = "Error 404 - PAGE NOT FOUND";
    endswitch;

// pas de variable get nommée section
}else{
    // Nous sommes sur l'accueil
    $title = "Accueil";
    $text = "Bienvenue sur notre page d'accueil";
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_GET</title>
</head>
<body>
<h1>$_GET</h1>
<p>
    <a href="?">Accueil</a>
    <a href="?section=biographie">Biographie</a>
    <a href="?section=contact">Contact</a>
    <a href="?section=livredor">Livre d'or</a>
    <a href="?section=actualites">Actualités</a>
</p>
<h2><?=$title?></h2>
<p><?=nl2br($text); // fonction qui crée des <br> html à chaque retour à la ligne?></p>
<h3>Débogage de $_GET</h3>
<p>
<?php
var_dump($_GET);
?></h3>
</p>
</body>
</html>
