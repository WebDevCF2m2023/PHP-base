<?php

$myInteger = 5;

$my_float = 12.36;

$MyString = "je suis du texte et j'en suis fier!";

$bool = true; // ou false: variable binaire

$MyBool = false; // booleen en pascalcase

$is_null = NULL; // variable ne contenant ... rie (NULL)

$arrayIndex = array("un","deux","trois"); // tableau, indexé crée avec array(), variable fondamentale permettant de contenir un nombre indéfine d'autres variables

$arrayIndex2 = [1,2,3]; // tableau indexé crée avec []

$ArrayAssoc = [
    "key1"=>"du texte",
    "key2"=>5,
    "key3"=> true,
    4=>false,
    "key5"=>[
        1,
        2,
        3,
    ]
]; // tableau associatif multidimentionnel
// on va afficher nos variables grâce à l'outil de débogage le plus simple:
// var_dump

var_dump($myInteger,$my_float,$MyString,$bool,$MyBool,$is_null,$arrayIndex,$arrayIndex2,$ArrayAssoc);

?>
