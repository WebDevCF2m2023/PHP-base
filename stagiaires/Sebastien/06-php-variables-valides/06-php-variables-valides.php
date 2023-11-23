<?php

$myInteger = 5; // integer en camelcase 

$my_Float = 12.36; // snake case

$MyString = "je suis du text et j'en suis fier !"; // string en pascalcase

$bool = true; // ou fals : variable 

$is_null = NULL; // variable ne contrenant ...... rien (NULL)
// ne pas  confondre avec vide

$arrayIndex = array("un","deux","trois"); // tableau , variable fondamental 
// permettant de contenir un nombre indefini d autre variable en camelCase

$arrayIndex_2 = [1,2,3]; // tableau indexe cree avec []

$arrayAssoc = [
    "key1"=> "du text",
    "key2"=> 5,
    "key3"=>true,
    4=>false,
    "key5"=>[
    1,
    2,
    3
    ],
]; // tableau associatif multidimensionnel

// on va afficher nos variable grace a l outil  de debogage le plus simple:
//var_dump

var_dump($myInteger,$my_Float,$MyString,$bool,$is_null,$arrayIndex,$arrayIndex_2,$arrayAssoc);

