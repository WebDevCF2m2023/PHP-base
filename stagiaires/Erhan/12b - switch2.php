<?php

$chiffre = mt_rand(0,10);

switch($chiffre){
    case "0": 
    case "1": 
    case "2":  
    case "3":    
        echo "$chiffre : Nul, étudie la prochaine fois";
        break;
    case "4":
    case "5": 
        echo "$chiffre :Peut mieux faire";
        break;
    case "6":
    case "7": 
        echo "$chiffre :Bien";
        break;
    default:
        echo "$chiffre :Très bien";
}