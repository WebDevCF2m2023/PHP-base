<?php

if(isset($_GET["section"])){
    switch($_GET["section"]):
        case "biographie":
              $title = "Ma vie";
              $text = "blablablablablablablablablablablablablablablablablablablablablabla";
              break;
                case "contact":
                  $title = "Contact";
                  $text="blablablablablablablablablablablablablablablablablablablablablablabla";
              break;
                 case "livredor":
                    $title = "livre d'or";
                    $text = "blablablablablablablablablablablablablablablablablablablablablabla";
              break;

              default:
                    $title="Error 404";
                    $text="Error 404 - page not found";

        endswitch;
}else{
    $title="Accueil";
    $text="Bienvenue sur notre page d'accueil";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13.GET</title>
</head>
<body>
    <h1>13.$_GET</h1>
    <nav>
        <a href="?">Accueil</a>
        <a href="?section=biographie">Biographie</a>
        <a href="?section=contact">Contact</a>
        <a href="?section=livredor">Livre d'or</a>
        <a href="?section=actualite">actualite</a>
    </nav>
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