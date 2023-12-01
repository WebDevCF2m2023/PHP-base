<?php

$temperatureEau = mt_rand(-100,200);
if($temperatureEau <= 0){
    echo "L'eau est dans l'état solide car sa température est de ".$temperatureEau ."°.";
}else if($temperatureEau < 100){
    echo "L'eau est dans l'état liquide car sa température est de ".$temperatureEau ."°.";
}else{
    echo "L'eau est dans l'état gazeux car sa température est de ".$temperatureEau."°.";
}