<?php

// 1) Créez une fonction qui prend en paramètre un nombre et qui retourne le carré de ce nombre.
function square(int $x){
    return $x*$x;
}
// puis affichez le carré de 5, 10 et 15 en utilisant cette fonction.
echo "carrée:<br>";
echo square(5)."<br>";
echo square(10)."<br>";
echo square(15)."<br>";

// 2) Créez une fonction qui prend en paramètre un nombre et qui retourne le cube de ce nombre.
function cube(int $x){
    return $x*$x*$x;
}

// puis affichez le cube de 5, 10 et 15 en utilisant cette fonction.
echo "cube:<br>";
echo cube(5)."<br>";
echo cube(10)."<br>";
echo cube(15)."<br>";

// 3) Créez une fonction qui prend une date à n'importe quel format et qui retourne la date au format français
// telle qu'indiquée dans l'exemple en utilisant $semaineFr et $moisFr.
// Exemple: 2018-12-25 -> Mardi 25 décembre 2018
// Exemple: 2018-12-25 12:27:35 -> Mardi 25 décembre 2018 à 12h27
// vous pouvez utiliser strtotime() pour convertir une date en timestamp (temps en secondes depuis le 1er janvier 1970)
// et date() pour convertir un timestamp en date au format de votre choix.

function dateEnFr($date){
    $semaineFr=[1 =>'lundi','mardi','mercredi','jeudi',
        'vendredi','samedi','dimanche',];
    $moisFr=[1 =>'janvier','février','mars','avril','mai','juin','juillet',
        'août','septembre','octobre','novembre','décembre',];
    // A FAIRE
    $year = date("o", strtotime($date));
    $month = $moisFr[date("n", strtotime($date))];
    $day_month = date("j", strtotime($date));
    $day_week = $semaineFr[date("N", strtotime($date))];
    //put the date in the $message
    $message = "$day_week $day_month $month $year";
    //put the hour in the date if available
    if (preg_match("/\d{2}:\d{2}/", $date)){
        $hour = date("G", strtotime($date));
        $minute = date("i", strtotime($date));
        $message.=" ".$hour."h"."$minute";
    }
    return $message;
}
echo dateEnFr('2021-12-25 12:27:35');
echo '<br>';
echo dateEnFr('2023-01-25 11:20');
echo '<br>';
echo dateEnFr('2024-02-25');