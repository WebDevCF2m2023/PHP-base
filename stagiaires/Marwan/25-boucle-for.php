<?php
/*
 * Les boucles for
 */

/*
 * 1) Affichez les nombres de 10 à 1 avec une boucle for
 */

echo "<p>1) Affichez les nombres de 10 à 1 avec une boucle for<br>";

echo "</p>";
for ($i = 10;$i >= 1; $i--){
   echo "$i  ";
}
/*
 * 2) Affichez les nombres pairs de 0 à 20 avec une boucle for
 */

echo "<p>2) Affichez les nombres pairs de 0 à 20 avec une boucle for<br>";

echo "</p>";
for($i = 0;$i <=20 ;$i+=2){
   echo"$i ";
}

/*
 * 3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 */


echo "<p>3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres<br>";

$total=0;
for($i=1;$i<21;$i++){
   echo"$i ";
   $total+=$i;
  
}
echo " - La somme des nombres de 1 à 20 est : ".$total;
echo "</p>";



/*
 * 4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 * et en affichant à chaque tour si le nombre est pair ou impair (utilisez l'opérateur modulo %)
 */

 
echo "<p>4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et en affichant à chaque tour si le nombre est pair ou impair<br>";
$total=0;
for($i=1;$i<=20;$i++):
$total+=$i;

if ($i % 2 === 0):
echo "$i : pair | "; 
else:
echo "$i: est impair | ";
endif;
endfor;
echo " - La somme des nombres de 1 à 20 est : ".$total;
echo "</p>";

echo "</p>";
/*
 * 5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for
 * et en affichant à chaque tour si la somme est pair ou impair
 */

 $total=0;
   for($i=1;$i<=20;$i++):
   $total+=$i;
  
   if ($total % 2 === 0):
   echo "$total : pair | "; 
   else:
   echo "$total: est impair | ";
   endif;
endfor;
$total=0;


 
echo "<p>5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si la somme est pair ou impair<br>";
$somme=0;

echo "</p>";

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
for ($i = 1; $i <= 5; $i++) {
   echo "<strong>Table de multiplication par $i :</strong><br>";
   
   echo "<table border='1'>";
   for ($j = 1; $j <= 5; $j++) {
   echo "<tr><td>$i x $j</td><td>" .($i * $j). "</td></tr>";
   }
   echo "</table>";
   echo "<br>";
   }


echo "<p>6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.<br>";

echo "</p>";