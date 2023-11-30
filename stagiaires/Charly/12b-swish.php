<?php

$point = mt_rand(0, 10);

switch($point <= 3)
{
    echo '$point vaut '.
        "$point : Nul, étudie la prochaine fois.";
        break;
case $point<6 :
    echo '$point vaut '.
        "$point : peut mieux faire.";
        break
case $point<8
    echo '$point vaut '.
        "$point : Bien.";
        break
default:
    echo '$point vaut '.
        "$point : Très bien.";
}