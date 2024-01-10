<?php
// tableau indexé ou list
$monTab = ['un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix'];

// affichage depuis la clef 0
echo $monTab[0];
echo "<hr>";
echo $monTab[1];
echo "<hr>";
echo $monTab[2];
echo "<hr>";
echo $monTab[3];
echo "<hr>";
// concaténation avec le "."
echo $monTab[4]."<hr>";
// concaténation de 2 résultats
echo $monTab[5]."<hr>".$monTab[6]."<hr>";
// concaténation avec la virgule possible, mais non recommandé
echo $monTab[7], "<hr>", $monTab[8], "<hr>", $monTab[9], "<hr>";

