<?php
$page = "accueil.php";
$title = "Accueil";
if(!empty($_GET["page"])){
    switch($_GET["page"]){
        case "galerie":
            $title = "Galerie";
            $page = "galerie.php";
            break;
        case "rapport":
            $title = "Rapport";
            $page = "entreprise/rapport.php";
            break;
        case "interview":
            $title = "interview";
            $page = "entreprise/interview.php";
            break;
        case "accueil":
            break;
        default:
            $title = "Error 404";
            $page = "page-404.php";
            break;
    }
}

require("../templates/$page");