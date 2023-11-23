// Créez un fichier 079-eau.php qui affiche suvant une température allant de -100 à 200 °, 
l'état de l'eau (solide en dessous de 0 compris) (liquide entre 1 et 99°) (gazeux à partir de 100°) : 
L'eau est solide à -7° - L'eau est liquide à 33 ° - L'eau est gazeuse à 105° // 

<?php
$a = mt_rand(-100,200);
if($a>0){
  echo "solide en dessous de 0 compris";
}elseif($a<=1>=99){
  echo "liquide entre 1 et 99°";
}else($a<=100){
  echo "gazeux à partir de 100°";
}
?>