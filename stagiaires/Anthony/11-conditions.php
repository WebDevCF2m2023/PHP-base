<?php

$a = mt_rand(0,10);

if($a < 4){
    echo "$a : Nul étudie la prochaine fois";
}

elseif($a <= 5){
    echo "$a : Peut mieux faire";
}
elseif($a <= 7){
    echo "$a : Bien";
}
else{
    echo "$a : Tres bien";
}