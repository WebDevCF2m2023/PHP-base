<?php 

$Temperature = true;
if($Temperature === 36) {
    echo "Alright."
}

$Temperature = false;
if($Temperature === -36) {
    echo "Come out, Holy sun! Please!"
}

$Temperature = mt_rand(-100,200);
if($Temperature === -190) {
    echo "Freeze to death.";
}

// Thank you, Lee.

elseif($Temperature === 28) {
    echo "A fine weather it is."

}else{
    echo "One will always complain, no matter the weather."
}

?>