<?php 
$temp=mt_rand(-100,200);
echo$temp."<br>";
if ($temp >= 100){echo"L’eau s'évapore!\n";
}
elseif($temp<0){echo"l'eau est solide\n";}
else ($temp<= 99){echo"l'eau boue\n";}
