<?php
$note= mt_rand(0,10);
switch($note){
    case 1:
      echo "$note : pas ouf";
      break;
    case 2:
      echo "$note : mouai";
      break;
    case 3:
      echo "$note : nul";
      break;
    case 4:
        echo "$note : un peu mieux";
      break;
    case 5:
        echo "$note : moitié plein, moitié vide";
        break;
    case 6:
        echo "$note : un petit effort";
        break;
    case 7:
        echo "$note : super";
        break;
    case 8:
        echo "$note : très bien";
            break;
    case 9:
            echo "$note : très très très bien";
            break;
    case 10: 
        echo "$note : parfait!";
        break;

    default:
      echo "$note : default";
      
  }
  
