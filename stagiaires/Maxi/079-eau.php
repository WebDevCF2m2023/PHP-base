
<?php
$eau = mt_rand(-100,200);
if($eau <=0){
    echo "Solide à $eau °C";
}elseif($eau >=1 || $eau <=99){
    echo "Liquide à $eau °C";
}else{
    echo "Gazeuse à $eau °C";
}
?>