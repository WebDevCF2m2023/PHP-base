<?php
/*
 * Les boucles do while
 */

// chargement des données
include 'array.php';

// on réinitialise les clef de $depFr en gardant l'ordre des valeurs
$depFr = array_values($depFr);
// On compte le nombre de pays dans le tableau $depFr
$nbPays = count($depFr);
// On initialise la variable $nbPaysParPage
$nbPaysParPage = 20;
// On calcule le nombre de pages nécessaires
// pour afficher toutes les régions, ceil arrondit à l'entier supérieur
$nbPages = ceil($nbPays / $nbPaysParPage);

/*
* on va récupérer la page actuelle depuis la variable get si elle existe
*/

// si elle existe et n'est pas vide (!empty) ET qu'elle contient une chaîne de caractère composée uniquement de numériques (ctype_digit) (0123456789) 
if(!empty($_GET['pg']) && ctype_digit($_GET['pg'])){
    // transformation de la variable globable en variable locale traitée:
        // transtypage avec (int), transforme en entier, donne 0 en cas d'erreur
        $pageActu = (int) $_GET['pg'];
        // équivaut à $pageActu = intval($_GET['pg']); qui renvoie 1 en cas d'erreur (et un warning)
        // équivaut à settype($_GET['pg'], "integer"); mais renvoie false en cas d'erreur

    // sinon
}else{
    // page par défaut
    $pageActu = 1;
}


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>28-boucle-do-while</title>
</head>
<body>
    <h1>28-boucle-do-while</h1>
    <h2>Créez la pagination avec la boucle do while</h2>
    <p>Puis créez le menu pour passer d'une page à l'autre en utilisant la variable $_GET nommée 'pg'</p>
    <p>Exemple d'un lien valide : <a href="?pg=3">3</a></p>
    <?php
    echo "Pour ce tableau de $nbPays pays, répartis par $nbPaysParPage pays par page,
 vous obtiendrez $nbPages pages<br>";
    ?>
<h2>Les régions de France</h2>
    <h4>Page <?php

    // initialisation de la variable de boucle
    $i=1;
    // on fait le do 1 fois que le while soit juste ou non
    do{
        // si on on veut afficher la page actuel
        if($pageActu === $i):
    // affichage de la page sans lien        
    ?>
    <?=$i?> -
    <?php
        // sinon
        else:
    // création du lien cliquable
        ?>
    <a href="?pg=<?=$i?>"><?=$i?></a> -
        <?php
        // fin du if
        endif;
        // incrémentation
        $i++;
    }
    while($i<=$nbPages);
    ?></h4>
<p>Affichez ensuite la liste des régions suivant la variable $_GET nommée 'pg'</p>
    <hr>

    <hr>
    <h4>Ici la pagination</h4>
</body>
</html>
