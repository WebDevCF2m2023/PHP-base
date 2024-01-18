<?php

/*
 * Les boucles foreach
 */

include 'array.php';
/*
 * 1) Affichez chaque élément du tableau avec une boucle foreach
 */
$tab = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

echo '<p>1) Affichez les lettres de $tab avec une boucle foreach<br>';

$tab = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];

foreach($tab as $alphabet){
    echo "$alphabet ";
}

echo "</p>";

/*
 * 2) Affichez chaque élément du tableau $tab avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>2) Affichez les lettres de $tab avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($tab as $key => $alphabet){
    echo "$key => $alphabet | ";
}

echo "</p>";


/*
 * 3) Affichez chaque élément du tableau $semaineFr avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>3) Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément<br>';


foreach($semaineFr as $keys => $jours){
    echo "$keys => $jours | ";
}

echo "</p>";

/*
 * 4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr
 */

echo '<p>4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr<br>';

$jourActuel = date('N');
 
echo "Le jour actuel de la semaine est {$semaineFr[$jourActuel]}.";

echo "</p>";

/*
 * 5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach
 */

echo '<p>5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach<br>';

foreach ($classe as $names){
    echo "$names ";
}

echo "</p>";

/*
 * 6) Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach
 * avec un retour à la ligne entre chaque élément
 */

echo '<p>6) Affichez la liste des \'nom\', \'age\' et \'note\' du tableau $classe18 avec une boucle foreach avec un retour à la ligne entre chaque élément<br>';

foreach($classe18 as $class){
    echo "nom : $class[nom] | age : $class[age] | note : $class[note] ";
    echo "</br>";
}

echo "</p>";

/*
 * 7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode
 */

echo '<p>7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode<br>';

foreach($countryCode as $countries){
    foreach($countries as $kye => $countries){
        echo " $countries | ";
    }
    echo "</br>";
}

echo "</p>";