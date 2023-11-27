<?php
// Donne un int (integer) de 1 à 4(inclus)
$hasard1 = mt_rand(1, 4);

// Si $hasard1 vaut "1" non strictement
if($hasard1 == "1"){
    echo "$hasard1 - Première place, bravo !";
}
// Sinon si $hasard1 vaut "2" non strictement
elseif($hasard1 == "2"){
    echo "$hasard1 - Deuxième place, pas mal !";
}
// Sinon si $hasard1 vaut "3" non strictement
elseif($hasard1 == "3"){
    echo "$hasard1 - Troisième place, courage.";
}
// Sinon c'est que $hasard1 vaut 4
else{
    echo "$hasard1 - Quatrième place, tes nul.";
}

switch($hasard1){
    case "1":
        echo "$hasard1 - Première place, bravo !";
        break;
    case "2":
        echo "$hasard1 - Deuxième place, pas mal !";
        break;
    case "3":
        echo "$hasard1 - Troisième place, courage.";
        break;
    default:
        echo "$hasard1 - Quatrième place, tes nul.";
        break;
}

switch($hasard1){
    case "1":
    case "2":
    case "3":
        echo "$hasard1 - Chiffre entre 1 et 3";
    default:
        echo "$hasard1 - Chiffre 4";
        break;
}