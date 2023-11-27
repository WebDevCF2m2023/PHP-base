<?php
/*
qui affiche suivant un chiffre au hasard entre 0 et 10, vous affiche : Si il est de 0 à 3 : EXACTEMENT : "{chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{chiffre} : Peut mieux faire" , Si de 6 à 7 : "{chiffre} : Bien", Sinon "{chiffre} : Très bien"
 */

$number = mt_rand(0, 10);
echo $number < 4 ? "{".$number."} :  EXACTEMENT" : ($number < 6 ? "{".$number."} :  Peut mieux faire" : ($number < 8 ? "{".$number."} :  Bien" : "{".$number."} :  Très bien"));