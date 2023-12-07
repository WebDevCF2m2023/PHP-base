<?php

if(isset($_GET['page'])){
    
    switch($_GET['page']){
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
                include('../templates/page-404.php');
    }

}else{
    $title ="accueil";
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('accueil.php');
}