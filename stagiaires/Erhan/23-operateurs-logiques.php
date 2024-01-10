<?php

$age = 24;
$genre = "F";

if($age >= 18 && $genre == "F"){
    echo "1) Bienvenue sur le site<br>";
}else {
    echo "1) Désolé, accès réservé aux femmes majeures uniquement<br>";
}

$page = mt_rand(5, 25);

if($page < 10 || $page > 20){
    echo "2) La page $page est soit inférieure à 10, soit supérieure à 20<br>";
}else {
    echo "2) La page $page est entre 10 et 20<br>";
}

$note = mt_rand(5, 15);

if($note < 10 xor $note > 10){
    echo "3) La $note est soit inférieure à 10, soit supérieure à 10<br>";
}else {
    echo "3) La $note est 10<br>";
}

$pageActu = 5;
$nbPage = 5;

if(!($pageActu == $nbPage)){
    echo "4) Nous ne sommes pas sur la dernière page $pageActu / $nbPage<br>";
}else {
    echo "4) Nous sommes sur la dernière page $pageActu / $nbPage<br>";
}
