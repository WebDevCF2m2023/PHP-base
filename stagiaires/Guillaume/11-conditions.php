<?php

//Créez un fichier 11-conditions.php qui affiche suivant un chiffre au hasard entre 0 et 10, vous affiche : Si il est de 0 à 3 : EXACTEMENT : "{chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{chiffre} : Peut mieux faire" , Si de 6 à 7 : "{chiffre} : Bien", Sinon "{chiffre} : Très bien"

$a = mt_rand(0,10);

if($a>=3){
  echo "$a Nul, étudie la prochaine fois";

}elseif($a=4 & =5){
  echo "$a: Peut mieux faire";

}elseif($a=6 & =7){
    echo "$a : Bien";

}else{
  echo "$a: Très bien";
}

?>
