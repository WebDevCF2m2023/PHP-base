<?php
$chfs = mt_rand(0,10); 
if($chfs <= 3) {
    echo "Nul,étudie la prochaine fois";
}
elseif($chfs >= 4){
    echo "Peut mieux faire";
}
elseif ($chfs >= 6){
    echo "Bien";
}
else{
    echo "Très bien";
}
