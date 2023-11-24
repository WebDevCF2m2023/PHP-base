<?php

$number = mt_rand(0,10);

if($number <= 3){
    echo "{$number} : Nul, étudie la prochaine fois";
}
elseif($number <= 5){
    echo "{$number} : Peut mieux faire";
}
elseif($number <=7 ){
    echo "{$number} : Bien";
}
else{
    echo "{$number} : Très bien";
}
