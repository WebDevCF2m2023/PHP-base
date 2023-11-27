<?php

$myNum = mt_rand(0, 10);

if($myNum < 4){
    echo "$myNum : Nul, étudie la prochaine fois";
}
else if($myNum < 6){
    echo "$myNum : Peut faire mieux";
}
else if($myNum <8){
    echo "$myNum : Bien";
}
else{
    echo "$myNum : Très Bien"; 
}