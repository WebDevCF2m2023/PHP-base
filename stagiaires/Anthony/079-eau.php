<?php

$eau = mt_rand(-100,200);
if($eau <= 0){
    echo "L'eau est solide à $eau °C";

}elseif($eau >= 1 && $eau <= 99){
    echo "L'eau est liquide à $eau °C";

}elseif($eau>100){
    echo "L'eau est gazeuse à $eau °C";
}
?>