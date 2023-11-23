<?php

$myInteger = 5; //integer en camelCase

$my_float = -12.36; //float en snake_case

$MyString = "Je suis du texte et j'en suis fier"; //String en PascalCase 

$bool = true; // booléen ou false : variable binaire

$MyBool = false; //booléen en PascalCase (UpperCamelCase)

$is_null = null; //Variable ne contenant... rien (NULL)
// ne pas confondre  avec vide

// affichage des variables via le débugueur var_dump()


$arrayIndex = array("un","deux","trois"); //Tableau créé avec array(), variable fondamentale permettant de contenir un nombre indéfini d'autres variables en CamelCase

$arrayIndex_2 = [1,2,3]; //Tableau indexé créé  avec []

$ArrayAssoc = [
    "key1" => "du texte",
    "key2" => 5,
    "key3" => true,
    4=>false,
    "key5"=>[
        1,
        2,
        3
    ],
]; // tableau associatif multidimentionnel 

//On va afficher nos variables grâce à l'outil de débogage le plus simple :
// var_dump 

var_dump($myInteger, $my_float, $MyString, $bool, $MyBool, $is_null, $arrayIndex, $arrayIndex_2, $ArrayAssoc,);

?>