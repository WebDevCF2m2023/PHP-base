<?php
/*
 * Les opérateurs de comparaison
 */

/*
 * 1) == : égal à
 */

// Utilisez l'opérateur == pour vérifier si $a est égal à $b.
// Affichez "1) $a est égal == à $b<br>" si c'est vrai et "1) $a est différent de $b<br>" sinon.
$a = mt_rand(1,3);
$b = mt_rand(1,3);

echo '<p>-- $a = '.$a.' et $b = '.$b.'</p>';
if($a==$b)
echo "1) $a est égal == à $b<br>";
else "1) $a est différent de $b<br>";



// Vous pouvez observer que $c et $d ne sont strictement pas du même type (int et string):
$c=1;
$d="1";
echo '<p>Exemple de comparaison de type entre $c et $d avec la fonction gettype() :<br>';
echo '$c ('.$c.' '.gettype($c).') et $d ('.$d.' '.gettype($d).')</p>';


/*
 * 2) === : strictement égal à
 */

// Utilisez l'opérateur strictement égal === pour vérifier si $a est égal de $b.
// Affichez "2) $a est strictement égal === à $b<br>" si c'est vrai et "2) $a est strictement différent de $b<br>" sinon.
$a = mt_rand(1,2);
$a2 = ["1",2];
$b = $a2[mt_rand(0,1)];

echo '<p>-- $a = '.$a.' ('.gettype($a).') et $b = '.$b.' ('.gettype($b).')</p>';
if ($a===$b) 
echo "2) $a est strictement égal de $b<br>";
else echo $a !== $b;



/*
 * 3) != : différent de
 */

// Utilisez l'opérateur différent != pour vérifier si $a est égal de $b.
// Affichez "3) $a est différent != de $b<br>" si c'est vrai et "3) $a est égal à $b<br>" sinon.
if ($a!=$b) echo "3) $a est différent != de $b<br>";
echo "3) $a est égal à $b<br>";


/*
 * 4) !== : strictement différent de
 */

// Utilisez l'opérateur strictement différent !== pour vérifier si $a est égal de $b.
// Affichez "4) $a est strictement différent !== de $b<br>" si c'est vrai et "4) $a est strictement égal à $b<br>" sinon.
if ($a!==$b) echo "4) $a est strictement différent !== de $b<br>";
else echo "4) $a est strictement égal à $b<br>";



/*
 * 5) < : inférieur à
 */

// Utilisez l'opérateur < pour vérifier si $a est inférieur à $b.
// Affichez "5) $a est inférieur < à $b<br>" si c'est vrai et "5) $a est supérieur ou égal à $b<br>" sinon.
$a = mt_rand(1,5);
$b = mt_rand(1,5);

echo '<p>-- $a = '.$a.' et $b = '.$b.'</p>';
if ($a<$b)
echo "5) $a est inférieur < à $b<br>";
else echo "5) $a est supérieur ou égal à $b<br>";



/*
 * 6) > : supérieur à
 */

// Utilisez l'opérateur > pour vérifier si $a est supérieur à $b.
// Affichez "6) $a est supérieur > à $b<br>" si c'est vrai et "6) $a est inférieur ou égal à $b<br>" sinon.
if ($a>$b)
echo "6) $a est supérieur > à $b<br>";
else echo "6) $a est inférieur ou égal à $b<br>";



/*
 * 7) <= : inférieur ou égal à
 */

// Utilisez l'opérateur <= pour vérifier si $a est inférieur ou égal à $b.
// Affichez "7) $a est inférieur ou égal <= à $b<br>" si c'est vrai et "7) $a est supérieur à $b<br>" sinon.
if ($a<=$b)
echo "7) $a est inférieur ou égal <= à $b<br>";
else echo "7) $a est supérieur à $b<br>";



/*
 * 8) >= : supérieur ou égal à
 */

// Utilisez l'opérateur >= pour vérifier si $a est supérieur ou égal à $b.
// Affichez "8) $a est supérieur ou égal >= à $b<br>" si c'est vrai et "8) $a est inférieur à $b<br>" sinon.
if ($a>=$b)
echo "8) $a est supérieur ou égal >= à $b<br>";
else echo "8) $a est inférieur à $b<br>";

