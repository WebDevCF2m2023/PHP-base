<?php
$hasard = mt_rand(0,10);
switch($hasard){
    case 0:
    case 1:
    case 2:
    case 3:
        echo '$hasard vaut '.
        "$hasard : Nul, étudie la prochaine fois.";
        break;
    case 4:
    case 5:
        echo '$hasard vaut '.
        "$hasard : peut mieux faire.";
        break;
    case 6:
                echo "6";
                break;
    case 7:
                echo "7";
                break; 
    case 8:
                echo "8";
                break;
    case 9:
                echo "9";
                break;
    case 10:
                echo "10";
                break;
    
    default :
    echo "default" ;

}