<?php
/*
 * Les boucles foreach
 */

echo "<p>1) Calculez la somme des entiers de 1 à 10 avec la boucle while<br>";

$somme = 0;
$i = 1;
while($i <= 10) $somme += $i++;


// ligne qui doit devenir fonctionnelle :
echo "La somme des entiers de 1 à 10 est : $somme";

echo "</p>";

echo "<p>2) Affichez une table de multiplication (de 1 à 10 au hasard) en utilisant la boucle while<br>";

// essai pour le random_int, qui permet de générer un nombre aléatoire cryptographiquement sûr
// https://www.php.net/manual/fr/function.random-int.php
// Nous pouvons utiliser la fonction mt_rand() qui est plus rapide pour générer des nombres aléatoires
try {
    $nombre = random_int(1, 10); // Génère un nombre aléatoire entre 1 et 10
    $i = 0;
    echo "Table de multiplication de $nombre :<br>";
    while($i <= 10)
        echo "$i x $nombre = " . $i++ * $nombre . " | ";
} catch (\Random\RandomException|ValueError $e) {
    echo $e->getMessage();
}

echo "</p>";

echo "<p>3) Affichez la factorielle d'un nombre au hasard entre 3 et 12 en utilisant la boucle while<br>
La factorielle d'un nombre entier positif n, notée n!, est le produit de tous les entiers positifs inférieurs ou égaux à n.<br><br>
Par exemple : <br>3! = 3 x 2 x 1 = 6 <br> 5! = 5 x 4 x 3 x 2 x 1 = 120 <br> 
7! = 7 x 6 x 5 x 4 x 3 x 2 x 1 = 5040
<br><br>";



$nombre = mt_rand(3, 12);
$factorielle = 1;
$i = $nombre;
while($i > 1)
    $factorielle *= $i--;

// ligne qui doit devenir fonctionnelle :
echo "La factorielle de $nombre est : $factorielle";

echo "</p>";