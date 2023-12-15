<?php
// tableau associatif
$tab3 = ["clef1" => "valeur1", "clef2" => "valeur2"];

// affichage du tableau via le débugueur var_dump()
var_dump($tab3);
// affichera :
// array(2) { ["clef1"]=> string(7) "valeur1" ["clef2"]=> string(7) "valeur2" }

$monTabAssoc =  [ "prenom" => "Laura", "nom" => "TK", "caracteristique" => "Cash", "dateDeNaissance" => "1994-24-10", ];

echo $monTabAssoc["prenom"];
echo"<hr>";
echo $monTabAssoc["nom"];
echo"<hr>";
echo $monTabAssoc["caracteristique"];
echo"<hr>";
echo $monTabAssoc["dateDeNaissance"];
echo"<hr>";

?>