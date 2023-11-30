<?php

// on va vérifier si une variable GET dont la clef est 'section'
// existe (est initialisée et différente est NUL)

if(isset($_GET['section'])){

    // switch 
    switch($_GET['section']):
case "biographie":
       $title= "Ma vie";
       $text= "balblablalblalblalblalblalblalblalblablalbla";
       break;
       
case "contact":
       $title= "contact";
       $text= "Guillaume";
       break;

case "livredor":
      $title= "contact";
      $text= "Guillaume";
      break;

case "actualités":
      $title= "actualités";
      $text= "blbalblblabllablalblabla";
       
endswitch;

//pas de variable get nommée section
}else{
//Nous sommes sur l'Acceuil
    $title ="Accueil";
    $text ="Bienvenue sur notre page d'Accueil";
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
    <h3>Débogage de $_GET</h3>
    <p>
    <p><?php
    var_dump($_GET);
    ?></p>
</body>
</html>