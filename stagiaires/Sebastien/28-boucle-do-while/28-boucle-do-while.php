<?php
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

// On initialise la variable $_GET['pg'] à 1 par défaut
$currentPage = isset($_GET['pg']) ? intval($_GET['pg']) : 1;

// On s'assure que la valeur de $_GET['pg'] est dans les limites valides
$currentPage = max(1, min($currentPage, $nbPages));

// On calcule l'indice de départ pour la pagination
$startIndex = ($currentPage - 1) * $nbPaysParPage;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>28-boucle-do-while.</title>
</head>
<body>
    <h1>28-boucle-do-while.</h1>
    <h2>Créez la pagination avec la boucle do while</h2>
    <p>Puis créez le menu pour passer d'une page à l'autre en utilisant la variable $_GET nommée 'pg'</p>
    <p>Exemple d'un lien valide : <a href="?pg=3">3</a></p>
    <?php
    echo "Pour ce tableau de $nbPays pays, répartis par $nbPaysParPage pays par page,
 vous obtiendrez $nbPages pages<br>";
    ?>
    <h2>Les régions de France</h2>
    
    <!-- Affichage de la pagination -->
    <div>
        <?php
        // Boucle do-while pour afficher les liens de pagination
        $page = 1;
        do {
            echo '<a href="?pg=' . $page . '">' . $page . '</a> ';
            $page++;
        } while ($page <= $nbPages);
        ?>
    </div>

    <h4>Liste des régions</h4>
    <ul>
        <?php
        // Affichage des régions pour la page actuelle
        for ($i = $startIndex; $i < min($startIndex + $nbPaysParPage, $nbPays); $i++) {
            echo '<li>' . $depFr[$i] . '</li>';
        }
        ?>
    </ul>

    <!-- Affichage de la pagination en bas de la liste des régions -->
    <div>
        <?php
        // Boucle do-while pour afficher les liens de pagination en bas de la liste des régions
        $page = 1;
        do {
            echo '<a href="?pg=' . $page . '">' . $page . '</a> ';
            $page++;
        } while ($page <= $nbPages);
        ?>
    </div>
</body>
</html>
