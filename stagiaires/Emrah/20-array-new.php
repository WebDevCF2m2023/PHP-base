<?php
// tableau indexé numériquement
$tab1 = [1, 2, 3];
// tableau indexé numériquement
$tab2 = array(1, 2, 3);
// tableau associatif
$tab3 = ["clef1" => "valeur1", "clef2" => "valeur2"];
// tableau associatif
$tab4 = array("clef1" => "valeur1", "clef2" => "valeur2");
// tableau mixte
$tab5 = ["valeur1", "clef2" => "valeur2"];
// tableau multidimensionnel
$tab6 = ["clef1" => ["clef1.1" => "valeur1.1"], "clef2" => "valeur2"];

// affichage des tableaux via le débugueur var_dump()
var_dump($tab1, $tab2, $tab3, $tab4, $tab5, $tab6);
