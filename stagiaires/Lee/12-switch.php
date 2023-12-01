<?php

$myNum = mt_rand(0, 10);

switch($myNum){
    case 0:
    case 1:
    case 2:
    case 3:
        echo "$myNum : Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        echo "$myNum : Peut faire mieux";
        break;
    case 6:
    case 7:
        echo "$myNum : Bien";
        break;
    default:
        echo "$myNum : Très Bien"; 
    
}

