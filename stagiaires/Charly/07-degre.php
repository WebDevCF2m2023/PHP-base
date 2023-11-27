<?php
// 07-degre.php for Charly

// variable contenant un nombre aléatoire entre -100 et 200
$temp=mt_rand(-100,200);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eau</title>
</head>
<body>
<h1>Eau</h1>
<?php

// affichage de la température avec un retour à la ligne
echo $temp;
?>
<p>
<?php
// si la température est égale ou supérieure à 100
if ($temp >= 100){
    echo "L’eau s'évapore!";
// sinon si la température est plus petit ou égal que 0
} elseif($temp<=0) {
    echo "l'eau est solide";
// sinon
}else {
    echo "l'eau boue";
}


?>
</p>
</body>
</html>
