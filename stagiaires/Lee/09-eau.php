<?php

$temp = mt_rand(-100,100);

 echo "$temp °C<br>"; 

if($temp <= 0){
    echo "L'eau est solide à $temp °C";
}
elseif($temp >= 1){
    echo "L'eau est liquide à $temp °C";
}
elseif($temp > 100){
    echo "L'eau est gazeuse à $temp °C";
}
