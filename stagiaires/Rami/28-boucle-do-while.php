<?php
/*
 * Les boucles do while
 */

// Chargement des données
include 'array.php';

// On trie $depFr par ordre alphabétique en retirant les clefs
$depFr = array_values($depFr);

// On compte le nombre de pays dans le tableau $depFr
$nbPays = count($depFr);

// On initialise la variable $nbPaysParPage
$nbPaysParPage = 20;

// On calcule le nombre de pages nécessaires
// pour afficher toutes les régions, ceil arrondit à l'entier supérieur
$nbPages = ceil($nbPays / $nbPaysParPage);

// On initialise la variable $page avec la valeur par défaut 1 si non spécifiée dans $_GET
$page = isset($_GET['pg']) ? max(1, intval($_GET['pg'])) : 1;

// On calcule l'indice de début pour la pagination
$startIndex = ($page - 1) * $nbPaysParPage;

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
    <h4>Ici la pagination</h4>
    <p>Affichez ensuite la liste des régions suivant la variable $_GET nommée 'pg'</p>
    <hr>

    <?php
     
     do {
        echo $depFr[$startIndex] . '<br>';
        $startIndex++;
    } while ($startIndex % $nbPaysParPage !== 0 && $startIndex < $nbPays);

    echo "<br>Pages: ";
    for ($i = 1; $i <= $nbPages; $i++) {
        echo "<a href=\"?pg=$i\">$i</a> ";
    }   
    ?>
    <hr>
    <h4>Ici la pagination</h4>
</body>
</html>
