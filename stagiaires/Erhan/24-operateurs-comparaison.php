<?php

$a = mt_rand(1,3);
$b = mt_rand(1,3);

echo '<p>-- $a = '.$a.' et $b = '.$b.'</p>';

if($a == $b) {
    echo "1) $a est égal == à $b<br>";
} else {
    echo "1) $a est différent de $b<br>";
}

$c=1;
$d="1";

echo '<p>Exemple de comparaison de type entre $c et $d avec la fonction gettype() :<br>';
echo '$c ('.$c.' '.gettype($c).') et $d ('.$d.' '.gettype($d).')</p>';


$a = mt_rand(1,2);
$a2 = ["1",2];
$b = $a2[mt_rand(0,1)];

echo '<p>-- $a = '.$a.' ('.gettype($a).') et $b = '.$b.' ('.gettype($b).')</p>';


if($a === $b){
    echo "2) $a est strictement égal === à $b<br>";
}else {
    echo "2) $a est strictement différent de $b<br>";
}

if($a != $b) {
    echo "3) $a est différent != de $b<br>";
}else {
    echo "3) $a est égal à $b<br>";
}

if($a !== $b) {
    echo "4) $a est strictement différent !== de $b<br>";
}else {
    echo "4) $a est strictement égal à $b<br>";
}


$a = mt_rand(1,5);
$b = mt_rand(1,5);

echo '<p>-- $a = '.$a.' et $b = '.$b.'</p>';

if($a < $b) {
    echo "5) $a est inférieur < à $b<br>";
}else {
    echo "5) $a est supérieur ou égal à $b<br>";
}

if($a > $b) {
    echo "6) $a est supérieur > à $b<br>";
}else {
    echo "6) $a est inférieur ou égal à $b<br>";
}

if($a <= $b) {
    echo "7) $a est inférieur ou égal <= à $b<br>";
}else {
    echo "7) $a est supérieur à $b<br>";
}

if($a >= $b) {
    echo "8) $a est supérieur ou égal >= à $b<br>";
}else {
    echo "8) $a est inférieur à $b<br>";
}



