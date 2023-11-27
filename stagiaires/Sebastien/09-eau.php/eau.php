<?php

$eau = mt_rand(-100,200);
if($eau<=0){
    echo"L'eau est solide $eau";
}elseif($eau<100){
    echo "L'eau est liquide $eau";
}
else{
    echo "L'eau est gazeuse $eau";
    }
