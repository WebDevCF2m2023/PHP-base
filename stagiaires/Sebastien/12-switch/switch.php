<?php
$hasard1 = mt_rand(1,3);
if($hasard1 == "1"){
    echo "$hasard1 - premiere place , bravo";
}elseif($hasard1== "2"){
    echo "$hasard1 - deuxieme place, bravo";
}elseif ($hasard1=="3"){
    echo "$hasard1 - troisieme place,bravo";
}else{
    echo "$hasard1 - quatrieme place ,bravo ";
}

?>
<hr>
<?php
   
switch($hasard1){
    case "1":
        echo "$hasard1 - premiere place , bravo";
        break;
    case "2":
        echo "$hasard1 - deuxieme place , bravo";
        break;
    case "3";
        echo "$hasard1 - troisieme place , bravo";
        break; 
    case "4":
        echo "$hasard1 - quatrieme place , bravo"; 
}

?>
<hr>
<?php
   
   $hasard1 = mt_rand(0,10);

switch($hasard1){
    case 0:
    case 1:
    case 2:
    case 3:
        echo "$hasard1 - nul, etudie la prochaine fois ";
        break; 
    case 4:
    case 5:
    echo "$hasard1 - peut mieux faire "; 
    break;
    case 6:
    case 7:
    echo "$hasard1 - bien";   
    break;
    default:
    echo "$hasard1 - top du top ";
    break;
}

