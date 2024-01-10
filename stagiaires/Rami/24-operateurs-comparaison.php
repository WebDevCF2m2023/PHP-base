<?php


/*
 * 3) != : différent de
 */

$a="40";
$b="10";

if($a != $b){
    echo"2) $a est différent != de $b<br>";
}
else{
    echo"2) $a est égal à $b<br>";
}
// Utilisez l'opérateur différent != pour vérifier si $a est égal de $b.
// Affichez "2) $a est différent != de $b<br>" si c'est vrai et "2) $a est égal à $b<br>" sinon.


/*
 * 4) !== : strictement différent de
 */

// Utilisez l'opérateur strictement différent !== pour vérifier si $a est égal de $b.
// Affichez "4) $a est strictement différent !== de $b<br>" si c'est vrai et "4) $a est strictement égal à $b<br>" sinon.

$a="40";
$b="10";

if($a !== $b){
    echo"$a est strictement différent !== de $b<br>";
}
else {
    echo "4) $a est strictement égal à $b<br>";
}

/*
 * 5) < : inférieur à
 */

// Utilisez l'opérateur < pour vérifier si $a est inférieur à $b.
// Affichez "5) $a est inférieur < à $b<br>" si c'est vrai et "5) $a est supérieur ou égal à $b<br>" sinon.
$a = mt_rand(1,5);
$b = mt_rand(1,5);

echo '<p>-- $a = '.$a.' et $b = '.$b.'</p>';



/*
 * 6) > : supérieur à
 */

// Utilisez l'opérateur > pour vérifier si $a est supérieur à $b.
// Affichez "6) $a est supérieur > à $b<br>" si c'est vrai et "6) $a est inférieur ou égal à $b<br>" sinon.



/*
 * 7) <= : inférieur ou égal à
 */

// Utilisez l'opérateur <= pour vérifier si $a est inférieur ou égal à $b.
// Affichez "7) $a est inférieur ou égal <= à $b<br>" si c'est vrai et "7) $a est supérieur à $b<br>" sinon.



/*
 * 8) >= : supérieur ou égal à
 */

// Utilisez l'opérateur >= pour vérifier si $a est supérieur ou égal à $b.
// Affichez "8) $a est supérieur ou égal >= à $b<br>" si c'est vrai et "8) $a est inférieur à $b<br>" sinon.

