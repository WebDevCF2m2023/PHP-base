<?php
$chiffre = mt_rand(0,10);
if($chiffre<=3){
    echo "$chiffre: Nul, étudie la prochaine fois";
}
elseif($chiffre<=5){
    echo "$chiffre: Peut mieux faire";
}elseif($chiffre<=7){
    echo "$chiffre: Bien";
}else{
    echo "$chiffre: Très bien";
}
