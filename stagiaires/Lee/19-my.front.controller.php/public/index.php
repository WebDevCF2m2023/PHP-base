<?php
if(isset($_GET['section'])){

    switch($_GET['section']){
        case 'home':
            include("../template/index.php");
            break;
        case 'rapport':
            include("../template/rapport.php");
            break;
        case 'interview':
            include("../template/interview.php");
            break;
            case 'museum':
            include("../template/museum.php");
            break;
            case 'galerie1':
            include("../template/galerie1.php");
            break;
            case 'conclusion':
            include("../template/conclusion.php");
            break;                                        
        default:
            include("../template/page-404.php");
    }   
}else{
    include("../template/index.php");
}
