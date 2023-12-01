<?php
// donne un int (integer) de 1 à 4
$hasard1 = mt_rand(1,4);

// si $hasard vaut string "1" non strictement (on ne vérifie pas le type)
if($hasard1=="1"){
    echo "$hasard1 - Première place, bravo";
}elseif($hasard1=="2"){
    echo "$hasard1 - Deuxième place, bravo";
}elseif($hasard1=="3"){
    echo "$hasard1 - Troisième place, courage";
}else{
    echo "$hasard1 - Quatrième place, courage";
}
?>
<hr>
<?php

// idem en switch

switch($hasard1){
    case "1": // si
        echo "$hasard1 - Première place, bravo";
        break;
    case "2": // sinon si
        echo "$hasard1 - Deuxième place, bravo";
        break;
    case "3": // sinon si
        echo "$hasard1 - Troisième place, courage";
        break;
    default: // sinon
        echo "$hasard1 - Quatrième place, courage";
}

?>
    <hr>
<?php

// switch avec valeur par défaults

switch($hasard1){
    case "1":
    case "2":
    case "3":
        echo "$hasard1 - Chiffre entre 1 et 3";
        break;
    default: // sinon
        echo "$hasard1 - Chiffre 4";
}
