<?php

if(isset($_GET['section'])){
    switch($_GET['section']){
        case "biographie":
            $title = "Ma vie";
            $text = "\"Lorem ipsum\" dolor sit amet consectetur adipisicing elit. Velit, vero consectetur.
            Fugiat vero ipsa eum ratione qui reiciendis obcaecati, nostrum ad at asperiores quis officiis expedita facilis possimus necessitatibus,
            maxime omnis natus. Ullam obcaecati expedita cumque fugit!";
            break;
        case "contact":
            $title = "Contact";
            $text = "Voici mon contact";
            break;
        case "livredor":
            $title = "Livre d'or";
            $text = "Voici mon livre d'or";
            break;
        case "actualites":
            $title = "Actualites";
            $text = "Voici mes actualites";
            break;
        default:
            $title = "ERROR 404";
            $text = "Error 404: Page not found";
    }
} else {
    $title = "Accueil";
    $text = "Bienvenue sur notre page d'accueil";
}


?>
  
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
