<?php

$myNum = mt_rand(0, 10);

if($myNum < 4){
    echo "$myNum : Nul, étudie la prochaine fois";
}
elseif($myNum < 6){
    echo "$myNum : Peut faire mieux";
}
elseif($myNum <8){
    echo "$myNum : Bien";
}
else{
    echo "$myNum : Très Bien"; 
}