<?php
 
$chiffre = mt_rand(0,10);
 
if($chiffre<4){
    echo "$chiffre : Nul, étudie la prochaine fois";
  }elseif($chiffre<6){
    echo "$chiffre : Peut mieux faire";
  }elseif($chiffre<8){
    echo "$chiffre : Bien";
  }else{
    echo "$chiffre : Très bien";
  }