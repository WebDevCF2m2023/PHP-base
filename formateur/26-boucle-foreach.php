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

foreach ($tab as $element ){
    echo $element." ";
}

echo "</p>";

foreach($tab as $liste => $tabb){
    echo "$liste : $tabb ";
}

 /* 2) Affichez chaque élément du tableau $tab avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>2) Affichez les lettres de $tab avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($tab as $key => $tabs):
    echo "$key => $tabs | ";
endforeach;

echo "</p>";


/*
 * 3) Affichez chaque élément du tableau $semaineFr avec une boucle foreach
 * en affichant aussi la clef de chaque élément
 */

echo '<p>3) Affichez les jours de la semaine avec une boucle foreach en affichant aussi la clef de chaque élément<br>';

foreach($semaineFr as $key => $value){
    echo "$key : $value | ";
}

echo "</p>";

/*
 * 4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr
 */

echo '<p>4) Affichez le jour actuel de la semaine en français avec la fonction date() et la variable $semaineFr<br>';
// https://www.php.net/manual/fr/function.date.php
// et https://www.php.net/manual/fr/datetime.format.php
$today = date("N"); 
echo $semaineFr[$today];
echo "</p>";

/*
 * 5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach
 */

echo '<p>5) Affichez la liste des prénoms du tableau $classe avec une boucle foreach<br>';

foreach($classe as $nom){
    echo "$nom ";
}

echo "</p>";

/*
 * 6) Affichez la liste des 'nom', 'age' et 'note' du tableau $classe18 avec une boucle foreach
 * avec un retour à la ligne entre chaque élément
 */

echo '<p>6) Affichez la liste des \'nom\', \'age\' et \'note\' du tableau $classe18 avec une boucle foreach avec un retour à la ligne entre chaque élément<br>';

foreach($classe18 as $classe){
    // propre au echo "" => des clef de tableaux au format string sans ' ou "
    echo "nom : $classe[nom] | âge : $classe[age] | note : $classe[note]";
    // fréquemment utilisé en OO 
    echo "nom : {$classe['nom']} | âge : {$classe['age']} | note : {$classe['note']}";
    // simple concaténation
    echo "nom : ".$classe['nom']." | âge : ".$classe['age']." | note : ".$classe['note'];
    echo "<br>";
}

echo "</p>";

/*
 * 7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode
 */

echo '<p>7) Avec 2 boucles foreach, affichez tous les champs la liste des pays du tableau $countryCode<br>';


foreach($countryCode as $pays){
    foreach($pays as $loool){
        echo "$loool | ";
    };
    echo "<br /><hr>";
    
}

echo "</p>";