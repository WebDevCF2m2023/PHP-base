<?php

$myInteger = 5; // integer en camelCase

$my_float = 12.36; // float en snake_case

$MyString = "je suis du texte et j'en suis fier !" // string en PascalCase

$bool = true; // booléen variable binaire positive

$MyBool = false; // booléen en PascalCase (UpperCamelCase)

$is_null = NULL; //Variable ne contenant... rien (NULL)
// ne pas confondre avec vide

$arrayIndex = array("un","deux","trois"); /* tableau indexé créé avec array(), 
//variable fondamentale permattant de contenir
//un nombre indéfini d'autres variables en camelCase */

$arrayIndex_2 = [1,2,3]; // tableau i,dexé créé ave []

$ArrayAssoc = [
    "key1"=>"du texte",
    "key2"=>5,
    "key3"=>true,
    4=>false,
    "key5"=>[
        1,
        2,
        3,
    ],
];  // tableau associatif multidimentionnel

// on va afficher nos variables grâce â l'outil de debogage le plus somple:
// var dump
var_dump($myInteger,$my_float,$MyString,$bool,$MyBool,
$is_null,$arrayIndex,$arrayIndex_2,$ArrayAssoc);
