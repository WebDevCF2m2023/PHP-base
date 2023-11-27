<?php

$point = mt_rand(0, 10);

if($point <= 3)
{
    echo '$point vaut '.
        "$point : Nul, étudie la prochaine fois.";
}
elseif($point<6)
{
    echo '$point vaut '.
        "$point : peut mieux faire.";
}
elseif ($point<8)
{
    echo '$point vaut '.
        "$point : Bien.";
}
else{
    echo '$point vaut '.
        "$point : Très bien.";
}