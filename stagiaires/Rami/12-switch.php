<?php

$chiffre = rand(0, 10);

if ($chiffre >= 0 && $chiffre <= 3) {
    echo "$chiffre : Nul, étudie la prochaine fois";
} elseif ($chiffre >= 4 && $chiffre <= 5) {
    echo "$chiffre : Peut mieux faire";
} elseif ($chiffre >= 6 && $chiffre <= 7) {
    echo "$chiffre : Bien";
} else {
    echo "$chiffre : Très bien";
}

switch($chiffre) {
    case 0:
    case 1:        
    case 2:
    case 3:
       echo "$chiffre : Nul, étudie la prochaine fois";
       break;
    case 4:
    case 5: 
        echo "$chiffre : Peut mieux faire";
        break;
    case 6:
    case 7:
        echo "$chiffre : Bien";
        break;
    default:
    echo "$chiffre : Très bien";
        break;
    }