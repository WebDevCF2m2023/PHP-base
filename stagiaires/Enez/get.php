<!DOCTYPE html>
<?php

// on va vérifier si une variable GET dont la clef est 'section'
// exist (est initialisée et différente est nul)


if(isset($_GET['section'])){
    //switch
    switch($_GET['section']):
        case "accueil":
            echo "<h1>Accueil</h1>";
            break;

        case "biographie":
   $title= "Ma vie";
   $text= "Ma vie est une grand Non seulement le jeu est stimulant et la compétition est captivante, mais en plus, de nombreux joueurs et partisans tissent des liens qui, dans bien des cas, durent toute une vie. ";
   break;

   case "contact":
    $title = "Contact";
    $text = "Enez";
    break;

   case "livredor":
    $title="livredor";
    $text = "hello";
    break;

   case "actualités":
    $title="actualités";
    $text="Le monde est en péril";
    break;


    endswitch;   

//pas de variable get nommée section    
}else{
//Nous sommes sur l'Accueil
    $title =  "Accueil";
    $text = "ola";
}

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <h1>$_GET</h1>
<p>
    <a href="?">Accueil<a>
    <a href="?section=biographie">Biographie</a>
    <a href="?section=contact">Contact</a>
    <a href="?section=livredor">Livre d'or</a>
    <a href="?section=actualités">Actualités</a>
</p>
<h2><?=$title?></h2>
<p><?=nl2br($text); // fonction qui crée ds <br> à chaque retour à la ligne ?></p>
<h3>Débogage de $_GET</a>    
<p><?php    
var_dump($_GET);
?></p>
</body>
</html>