<?php

$eau = mt_rand(-100,200);
if($eau<=0){
    echo"L'eau est solide";
}elseif($eau<100){
    echo "L'eau est liquide ";
}
else{
    echo "L'eau est gazeuse";
    }
