<?php
$tempeau= mt_rand(-100,200);

if ($tempeau <= 0){
    echo "$tempeau : eau glace";
}

else if ($tempeau < 100){
    echo "$tempeau : eau liquide";
}
else{
    echo "$tempeau : eau gazeuze";
}