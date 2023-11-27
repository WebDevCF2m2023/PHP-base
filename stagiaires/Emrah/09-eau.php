<?php

$temp = mt_rand(-100,200);

 echo "$temp °C<br>"; 

if($temp <= 0){
    echo "L'eau est solide à $temp °C";
}
elseif($temp >= 1 && $temp <= 99){
    echo "L'eau est liquide à $temp °C";
}
elseif($temp > 100){
    echo "L'eau est gazeuse à $temp °C";
}