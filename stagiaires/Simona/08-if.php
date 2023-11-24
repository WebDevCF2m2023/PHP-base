<?php
 $temp = mt_rand(-100,200);
 
 if ($temp < 1 ) {
    echo "etat solide";
 } elseif ( $temp <= 99 ){
    echo "etat liquide";
 }else{
    echo "etat gazeux";
 }
 ?>