<?php
$content = "index.php";

if(isset($_GET["section"])){

    switch($_GET["section"]){
        case "index":
            break;
        case "hair":
            $content = "Hair.php";
            break;
        case "marco":
            $content = "Marco.php";
            break;
        case "musee":
            $content = "Musee.php";
            break;
        case "exposition":
            $content = "Exposition.php";
            break;
        case "closure":
            $content = "Closure.php";
            break;
        default:
            $content = "404.php";
    }


}

require("../templates/$content");