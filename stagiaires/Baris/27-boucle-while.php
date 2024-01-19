<?php
/*
 * Les boucles while
 */

echo "<p>1) Calculez la somme des entiers de 1 à 10 avec la boucle while<br>";

$somme = 0;


// ligne qui doit devenir fonctionnelle :
echo "La somme des entiers de 1 à 10 est : $somme";

echo "</p>";

echo "<p>2) Affichez une table de multiplication (de 1 à 10 au hasard) en utilisant la boucle while<br>";

// essai pour le random_int, qui permet de générer un nombre aléatoire cryptographiquement sûr
// https://www.php.net/manual/fr/function.random-int.php
// Nous pouvons utiliser la fonction mt_rand() qui est plus rapide pour générer des nombres aléatoires
try {
    $nombre = random_int(1, 10); // Génère un nombre aléatoire entre 1 et 10
    // si erreur, on attrape l'exception
} catch (\Random\RandomException $e) {
    // affiche l'erreur
    echo $e->getMessage();
}


echo "Table de multiplication de $nombre :<br>";
