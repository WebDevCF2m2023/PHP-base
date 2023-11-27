<?php
$cifre = mt_rand(0,10);
switch($cifre){
    case 1:
    case 2:
    case 3:
    case 4:
        echo"{$cifre} : Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        echo"{$cifre} : Peut mieux faire";
        break;
    case 6:
    case 7:
        echo"{$cifre} : Bien";
        break;
    default:
       echo "Très bien";
    



}
?>