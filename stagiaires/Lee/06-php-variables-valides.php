<?php

$varVal = "valeur de la variable";  // String

$varInt = 123;                      // Integer

$varDec = 123.456;                  // 

$varBigNum = 645464654;

$varBoo = true;                     // boolean  

$varArrayInd = [1, 2, 3];           // array

$varArrayAss = [$varInt => $varDec, $varBigNum => $varInt*$varDec];  //

$varNul = null;     // null

var_dump($varVal, $varInt, $varDec, $varBoo, $varArrayInd, $varArrayAss, $varNul); // prints everythin

?>