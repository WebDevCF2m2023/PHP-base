<?php 

$Yii = mt_rand (0,10);
if ($Yii < 4) {
    echo "You didn't study at all, did you?";
}

elseif ($Yii < 5) {
    echo "Could've done better";
}

else {
    echo "Great";
}

?>
