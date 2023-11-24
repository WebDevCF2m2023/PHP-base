<?php

$degree = mt_rand(-100,200);
if($degree<1){
  echo "L'eau est solide";
// sinon si
}elseif($degree<100){
  echo "L'eau est liquide";
}else{
  echo "L'eau est gazeuse";
}

?>