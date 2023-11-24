<?php

$myInteger = 5;

$my_float = -12.36;

$MyString = "Je suis du texte et j'en suis fier !";

$bool = true;

$is_null = NULL;

$arrayIndex = array("un","deux","trois");

$arrayIndex_2 = [1,2,3];

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
];

var_dump($myInteger, $my_float, $MyString, $bool, $is_null, $arrayIndex, $arrayIndex_2, $ArrayAssoc);

?>