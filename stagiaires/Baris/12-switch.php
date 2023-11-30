<?php
$point = mt_rand(0, 10);

switch($point){
    case 0:
    case 1:
    case 2:
    case 3:
        echo "$point :  Nul, étudie la prochaine fois.";
        break;

    case 4:
    case 5:
        echo "$point : peut mieux faire.";
    break;

    case 6:
    case 7:
        echo "$point : bien ";
        break;

    default:
        echo "$point : très bien";
        break;



}

