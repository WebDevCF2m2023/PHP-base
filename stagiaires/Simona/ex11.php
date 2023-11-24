<?php

$chiffre = rand(0, 10);


if ($chiffre >= 0 && $chiffre <= 3) {
    $resultat = "EXACTEMENT : {$chiffre} : Nul, étudie la prochaine fois";
} elseif ($chiffre >= 4 && $chiffre <= 5) {
    $resultat = "{$chiffre} : Peut mieux faire";
} elseif ($chiffre >= 6 && $chiffre <= 7) {
    $resultat = "{$chiffre} : Bien";
} else {
    $resultat = "{$chiffre} : Très bien";
}
echo $resultat;
?>