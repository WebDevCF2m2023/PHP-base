<?php
$temp = rand(-100,200);
echo "la température est de {$temp}°\n";
if ($temp<=-100 || $temp>200){
    echo "nombre invalide\n";
}
if ($temp<=0){
    echo "solide\n";
}
elseif ($temp<100){
    echo "liquide\n";
}
else {
    echo "gazeux\n";
}