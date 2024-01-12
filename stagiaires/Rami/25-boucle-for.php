<?php
// 1) Affichez les nombres de 10 à 1 avec une boucle for
for($i=0;
$i<=10;
$i++){
    echo "$i ";
}
echo"<br>";

//2) Affichez les nombres pairs de 0 à 20 avec une boucle for

for($i=0;
$i<=20;
$i+=2){
    echo"$i ";
}
echo"<br>";

//3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
$somme=0;
for ($i = 1; 
$i <= 20;
 $i++) {
    echo "$i ";
    $somme = $somme + $i;
}
echo " - La somme des nombres de 1 à 20 est : ".$somme;
echo"<br>";
//   4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 // et en affichant à chaque tour si le nombre est pair ou impair (utilisez l'opérateur modulo %)
 $somme1=0;
 for( $i=1;
 $i<=20;
 $i++){
    $somme1 = $somme1 + $i;
    if($somme1 % 2 === 0){
        echo"$somme1 pair<br>";
    }else{
        echo"$somme1 impair<br>";
    }
    
    
    
 }
 echo " - La somme des nombres de 1 à 20 est : ".$somme1;
echo"<br>";

 /*
 * 5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for
 * et en affichant à chaque tour si la somme est pair ou impair
 */

for ($i=1;
$i<=20;
$i++){
    if ($i % 2===0){
        echo"$i pair <br>";}
        else{
            echo"$i impair <br>";
        }
}
 

 
/*
 * 6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.
 * La table doit être formatée de manière lisible, par exemple :
    // 1 x 1 = 1   1 x 2 = 2   ...   1 x 5 = 5
    // 2 x 1 = 2   2 x 2 = 4   ...   2 x 5 = 10
    // ...
    // 5 x 1 = 5   5 x 2 = 10  ...   5 x 5 = 25
 * Vous aurez besoin de concaténer des chaînes de caractères avec l'opérateur ".".
 * Vous obtiendrez 5 lignes de 5 multiplications chacune.*/

 for($i=1;
 $i<=5;
 $i++){
    for ($l=1;
    $l<=5;
    $l++){
        echo"<br> $l x $i = ".($l*$i)." |";
    }
 }