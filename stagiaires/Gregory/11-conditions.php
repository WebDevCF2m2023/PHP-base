<?php
$random = rand(0,10);
if ($random<=3){
    echo "{$random} : Nul, étudie la prochaine fois";
}
elseif ($random<=5){
    echo "{$random} : Peut mieux faire";
}
elseif ($random<=7){
    echo "{$random} : Bien";
}
else{
    echo "{$random} : Très bien";
}