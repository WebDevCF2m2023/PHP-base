<?php
$random = rand(0,10);
switch ($random){
    case 0:
    case 1:
    case 2:
    case 3:
        echo "{$random} : Nul, étudie la prochaine fois";
        break;
    case 4:
    case 5:
        echo "{$random} : Peut mieux faire";
        break;
    case 6:
    case 7:
        echo "{$random} : Bien";
        break;
    default:
        echo "{$random} : Très bien";
}