
<?php

$rand1 = mt_rand(1,10);

  switch ($rand1){
    case "1" :
    case "2" :
    case "3" :
     echo "$rand1 : nul";
        break;
     case "4" :
     case "5" :
     echo "$rand1 : mieux";
        break;
     case "6" :
     case "7" :
     case "8" : 
     echo "$rand1 : bien";
     break;
     default :
     echo " tres bien";


  }