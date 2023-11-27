<?php

$temperatureEau = mt_rand(-100,200);
$state = $temperatureEau <= 0 ? "solide" : ($temperatureEau < 100 ? "liquide" : "gazeux");
echo "L'eau est dans l'état $state car sa température est de ".$temperatureEau."°.";
