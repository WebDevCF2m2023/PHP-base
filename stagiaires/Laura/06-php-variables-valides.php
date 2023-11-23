<?php

$myInteger = 5; //inteager en CamelCase

$my_float = 12.36; // float en snake_case

$MyString = "Je suis du texte et j'en suis fier !"; // String en PascalCase

$bool = true; // false : boléen Variable binaire positive

$MyBool = false; // booléen en PascalCase (UpperCamelCase)

$is_null = NULL; // Variable ne contenant... rien (NULL) !
// ne pas confondre avec vide

$arrayIndex = array("un,deux,trois"); //tableau Indexé créé avec array (),
//tableau variable fondamental permettant de contenir un nombre indefini d'autre variable en Camelcase


$arrayIndex_2 = [1,2,3]; // tableau Indexé créé avec []

$ArrayAssoc = [
    "key1" => "du texte",
    "key2" =>5,
    "key3" =>true,
    4=>false,
    "key5"=>[
        1,
        2,
        3,
    ],
]; // tableau assiosiatif multidimentionnel 

// on va afficher nos variable grace à l'outil de débogage la plus simple 
// var_dump
Var_dump ($myInteger,$my_float,$MyString,$bool,$MyBool,$is_null,$arrayIndex,$ArrayAssoc);

it s