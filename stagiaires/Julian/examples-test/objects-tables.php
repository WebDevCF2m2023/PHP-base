<?php
$monTableauAssoc = [
    "prenom" => "Paul",
    "nom" => "Smith",
    "caracteristiques" => [
        "age" => 25,
        "taille" => 1.80,
        "poids" => 80,
        "couleurYeau" => "marron",
        "couleurChevaux" => "brun"
    ],
    
];


echo $monTableauAssoc["prenom"] . '<br>';
echo $monTableauAssoc["nom"] . '<br>';
echo $monTableauAssoc["caracteristiques"]["age"] . '<br>';
echo $monTableauAssoc["caracteristiques"]["taille"] . '<br>';
echo $monTableauAssoc["caracteristiques"]["poids"] . '<br>';
echo $monTableauAssoc["caracteristiques"]["couleurYeau"] . '<br>';
echo $monTableauAssoc["caracteristiques"]["couleurChevaux"] . '<br>';

echo '<hr>';


