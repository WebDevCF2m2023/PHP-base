<?php
/*
 * | 11 | ![Exercice 11](
 * | Exercice 11 | Créez un fichier `11-conditions.php`
 * qui affiche, suivant un chiffre au hasard entre 0 et 10,
 * vous affiche :
 * SI il est de 0 à 3 : "{chiffre} : Nul, étudie la prochaine fois",
 * SINON SI de 4 à 5 : "{chiffre} : Peut mieux faire",
 * SINON SI de 6 à 7 : "{chiffre} : Bien",
 * SINON "{chiffre} : Très bien".
 *
 */

// $point vaut un entier au hasard entre 0 et 10
$point = mt_rand(0, 10);

if($point <= 3)
{
    // AVEC echo, les variables entre "" sont interprétées, pas celles entre simple ',
    // pour mettre des chaînes de caractères à la suite les unes des autres, on utilise le "."
    // Cela se nomme la concaténation
    // la virgule fonctionne également, mais n'est pas recommandée
    echo '$point vaut '.
        "$point : Nul, étudie la prochaine fois.";
}
// 4 ou 5, pourrait être $point <= 5
elseif($point<6)
{
    echo '$point vaut '.
        "$point : peut mieux faire.";
}
// 6 ou 7, pourrait être <=7
elseif ($point<8)
{
    echo '$point vaut '.
        "$point : Bien.";
}
// sinon => 8,9,10
else{
    echo '$point vaut '.
        "$point : Très bien.";
}