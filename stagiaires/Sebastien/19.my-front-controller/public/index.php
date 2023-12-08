<?php

if(isset($_GET['page'])){
    
    switch($_GET['page']){
        case 'accueil':
            $title = "accueil";
            
            include('../template/accueil.php');
            break;
        case 'interview':
            $title = "interview";
            
            include('../template/interview/interview.php');
            break;
        case 'conclusion':
            $title = "conclusion";
            include('../template/interview/conclusion.php');
            break;
        case 'expo':
            $title = "expo";
            include('../template/expo/expo.php');
            break;
            case 'galerie':
                $title = "galerie";
                include('../template/expo/galerie.php');
                break;
        
                default:
                $title = "Erreur 404";
                include('../template/404.php');
    }

}else{
    $title ="accueil";
    include('../template/accueil.php');
}