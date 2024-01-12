<?php
/*
 * Les boucles for
 */

/*
 * 1) Affichez les nombres de 10 à 1 avec une boucle for
 */
echo "<p>1) Affichez les nombres de 10 à 1 avec une boucle for<br>";
$numbers = "";
for($i = 10; $i > 0; --$i) $numbers = $numbers.$i.",";
echo substr($numbers, 0, -1);
echo "</p>";

/*
 * 2) Affichez les nombres pairs de 0 à 20 avec une boucle for
 */

echo "<p>2) Affichez les nombres pairs de 0 à 20 avec une boucle for<br>";
$numbers = "";
for($i = 0; $i <= 20; ++$i) 
   if($i % 2 == 0) 
      $numbers = $numbers.$i.",";
echo substr($numbers, 0, -1);
echo "</p>";

/*
 * 3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 */

echo "<p>3) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres<br>";
$somme=0;
for($i = 1; $i <= 20; ++$i) $somme += $i;
echo " - La somme des nombres de 1 à 20 est : <strong>".$somme."</strong>";
echo "</p>";

/*
 * 4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres
 * et en affichant à chaque tour si le nombre est pair ou impair (utilisez l'opérateur modulo %)
 */

echo "<p>4) Affichez les nombres de 1 à 20 avec une boucle for en calculant la somme de ces nombres et en affichant à chaque tour si le nombre est pair ou impair<br>";
$somme=0;
for($i = 1; $i <= 20; ++$i){
   if($i % 2 == 0) echo "<strong>" . $i ."</strong> est <span style='color: blue'>pair</span><br>";
   else echo "<strong>" . $i ."</strong> est <span style='color: red'>impair</span><br>";
   $somme += $i;
}
echo " - La somme des nombres de 1 à 20 est : <strong>".$somme."</strong>";
echo "</p>";

/*
 * 5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for
 * et en affichant à chaque tour si la somme est pair ou impair
 */

echo "<p>5) Affichez la somme des nombres de 1 à 20 à chaque tour avec une boucle for et en affichant à chaque tour si la somme est pair ou impair<br>";
$somme=0;
for($i = 1; $i <= 20; ++$i){
   $somme += $i;
   if($somme % 2 == 0) echo "<strong>" . $somme ."</strong> est <span style='color: blue'>pair</span><br>";
   else echo "<strong>" . $somme ."</strong> est <span style='color: red'>impair</span><br>";
}
echo "</p>";

/*
 * 6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.
 * La table doit être formatée de manière lisible, par exemple :
    // 1 x 1 = 1   1 x 2 = 2   ...   1 x 5 = 5
    // 2 x 1 = 2   2 x 2 = 4   ...   2 x 5 = 10
    // ...
    // 5 x 1 = 5   5 x 2 = 10  ...   5 x 5 = 25
 * Vous aurez besoin de concaténer des chaînes de caractères avec l'opérateur .
 * Vous obtiendrez 5 lignes de 5 multiplications chacune.
 */

echo "<p>6) Utilisez deux boucles for imbriquées pour afficher une table de multiplication de 1 à 5.<br>";
$numbers = "";
for($i = 1; $i <= 5; ++$i){
   echo "Table de multiplication de : <span style='color: green'>".$i."</span> (";
   for($y = 0; $y <= 10; ++$y)
      $numbers = $numbers . $y*$i . ",";
   echo substr($numbers, 0, -1) . ")<br>";

}
echo "</p>";