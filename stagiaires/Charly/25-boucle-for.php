<?php
/*
 * Les boucles for
 */

/*
 * 1) Affichez les nombres de 10 à 1 avec une boucle for
 */

for ($i=10 ;$i>=1; $i--){
    echo "le nombre est $i <br>";
}
?>
echo "<p>1) Affichez les nombres de 10 à 1 avec une boucle for<br>";


echo "</p>";

/*
 * 2) Affichez les nombres pairs de 0 à 20 avec une boucle for
 */
<?php
$i=0; 
for ($j=0 ;$j<=20; $j++){ /* $+=2  plus direct */
    $i+=$j;
    if ( $j % 2 == 0){

    echo "$j est - pair |";
    }
    else
    echo "$j est - impair |";
}?>
/*
 * 3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 */
<?php
 $h=0;
for ($j=1 ;$j<=20; $j++){ /*  ": endfor " pour eviter d'écrire des accolade $somme += $i; */
    $h+=$j;
        echo " $j";
    }
echo " la somme de tous les nombres est  $h";
   ?> 

 /*
  * 4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
  * et en affichant à chaque tour si le nombre est pair ou impair (utilisez l'opérateur modulo %)
  */
 
 echo "<p>4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et en affichant à chaque tour si le nombre est pair ou impair<br>";
 $somme=0;
 
 echo " - La somme des nombres de 1 à 20 est : ".$somme;
 echo "</p>";
 <?php
 $h=0;
for ($j=1 ;$j<=20; $j++){
    $h+=$j;
        echo " $j";
    }
echo " la somme de tous les nombres est  $h";
   ?> 
 
 /*
  * 5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for
  * et en affichant à chaque tour si la somme est pair ou impair
  */
 
 echo "<p>5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si la somme est pair ou impair<br>";
 $somme=0;
 <?php
 echo "</p>";
 $h=0;
for ($j=1 ;$j<=20; $j++){
    $h+=$j;
        echo " $j";
    }
echo " la somme de tous les nombres est  $h";
   ?> 
 
 /*
  * 6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.
  * La table doit être formatée de manière lisible, par exemple :
     // 1 x 1 = 1   1 x 2 = 2   ...   1 x 5 = 5
     // 2 x 1 = 2   2 x 2 = 4   ...   2 x 5 = 10
     // ...
     // 5 x 1 = 5   5 x 2 = 10  ...   5 x 5 = 25
  * Vous aurez besoin de concaténer des chaînes de caractères avec l'opérateur ".".
  * Vous obtiendrez 5 lignes de 5 multiplications chacune.
  */
 
 echo "<p>6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.<br>";
 <?php
 for ($i=1;$i<=5;$++){
    for ($i=1;$i<=5;$++){
        echo "$i x $j = " .($i*$j)."|";
    }
    echo"<br>"
 }
 
 echo "</p>";
 ?>