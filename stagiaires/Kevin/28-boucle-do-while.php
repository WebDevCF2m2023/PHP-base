<?php
require 'array.php';

$depFr = array_values($depFr);
$nbPays = count($depFr);
$nbPaysParPage = 20;
$nbPages = ceil($nbPays / $nbPaysParPage);
$page = 1;
if(!empty($_GET["pg"]) && ctype_digit($_GET["pg"])){
    $page = (int) $_GET["pg"];
    if($page > $nbPages) $page = 1;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        nav a, footer a{
            margin-left: 2rem;
        }
        ol li{
            font-size: 1.25rem;
            
            &:nth-child(even){
                color: red;
            }
        }
    </style>
    <title>28-boucle-do-while</title>
</head>
<body>
    <h1>28-boucle-do-while</h1>
    <h2>Les régions de France : Page <?= $page ?></h2>
    <nav>
        <?php
        $i = 1;
        do{
        ?>
            <a href='?pg=<?= $i ?>'>Page <?= $i++ ?></a>
        <?php
        }while($i <= $nbPages);
        ?>
    </nav>
    <ol>
    <?php
    $i = ($page - 1) * $nbPaysParPage;
    do{
        if($i >= $nbPays) break;
    ?>
        <li> <?= $depFr[$i++] ?> </li>
    <?php
    }while($i < $nbPaysParPage * $page);
    ?>
    </ol>
    <footer>
    <?php
        $i = 1;
        do{
        ?>
            <a href='?pg=<?= $i ?>'>Page <?= $i++ ?></a>
        <?php
        }while($i <= $nbPages);
        ?>
    </footer>
</body>
</html>
