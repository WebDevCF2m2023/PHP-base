<?php
/*
 * Les boucles do while
 */

// chargement des données
include 'array.php';

// on trie $depFr par ordre alphabétique en retirant les clefs
$depFr = array_values($depFr);
// On compte le nombre de pays dans le tableau $depFr
$nbPays = count($depFr);
// On initialise la variable $nbPaysParPage
$nbPaysParPage = 20;
// On calcule le nombre de pages nécessaires
// pour afficher toutes les régions, ceil arrondit à l'entier supérieur
$nbPages = ceil($nbPays / $nbPaysParPage);

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

    <hr>
    <h4>Ici la pagination</h4>
    
<?php
if(isset($_GET["pg"])){
    switch($_GET["pg"]){
        case "1":
            $i = 1; 
            do{
                echo "$depFr[$i]<br>";
                $i++;
            }while ($i<21);
        break;
        case "2":
            $i = 21;
            do{
                echo "$depFr[$i]<br>";
                $i++;
            }while ($i<41);
        break;
        case "3":
            $i = 41;
            do{
                echo "$depFr[$i]<br>";
                $i++;
            }while ($i<61);
        break;
        case "4":
            $i = 61;
            do{
                echo "$depFr[$i]<br>";
                $i++;
            }while ($i<81);
        break;
        case "5":
            $i = 81;
            do{
                echo "$depFr[$i]<br>";
                $i++;
            }while ($i<100);
        break;
        case "6":
            $i = 100;
            do{
                echo "$depFr[$i]<br>";
                $i++;
            }while ($i<101);
        break;
        default:
        include('page404.php');

        }
    }
    ?>
    <a href="?pg=1">1 </a><a href="?pg=2">2 </a><a href="?pg=3">3 </a><a href="?pg=4">4 </a><a href="?pg=5">5 </a><a href="?pg=6">6</a>
</body>
</html>