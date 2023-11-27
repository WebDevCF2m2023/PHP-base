<?php

$chfs = mt_rand(0,10); 
if($chfs <= 3) {
    echo "Nul,étudie la prochaine fois";
}
elseif($chfs >= 4){
    echo "Peut mieux faire";
}
elseif ($chfs >= 6){
    echo "Bien";
}
else{
    echo "Très bien";
}

switch($chfs){
case 0:
    case 1:
    case 2:
    case 3:
        echo " $chfs:  Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        echo " $chfs:  Peut mieux faire";
        break;
    case 6:
    case 7:
        echo " $chfs:  Bien";
        break;
    default:
        echo " $chfs :  Très bien";
        break;
}