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


echo $monTableauAssoc["prenom"] . '<hr>';
echo $monTableauAssoc["nom"] . '<hr>';
echo $monTableauAssoc["caracteristiques"]["age"] . '<hr>';
echo $monTableauAssoc["caracteristiques"]["taille"] . '<hr>';
echo $monTableauAssoc["caracteristiques"]["poids"] . '<hr>';
echo $monTableauAssoc["caracteristiques"]["couleurYeau"] . '<hr>';
echo $monTableauAssoc["caracteristiques"]["couleurChevaux"] . '<hr>';




