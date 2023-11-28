<?php
// $temp = vaut un entier au hasard entre -100 et 200
$tempEau = mt_rand(-100, 200); 
$reponse = "La temperature de l'eau egale a $tempEau degres <br> Donc elle est %s";

if($tempEau <= 0) {
    $reponse = sprintf($reponse, "solide");
    echo $reponse;
} elseif ($tempEau <= 99) {
    $reponse = sprintf($reponse, "liquide");
    echo $reponse;
} else {
    $reponse = sprintf($reponse, "gazeuse");
    echo $reponse;
}