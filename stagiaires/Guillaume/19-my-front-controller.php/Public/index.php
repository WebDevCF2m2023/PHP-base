<?php

if(isset($_GET['section'])){
    
    switch($_GET['section']){
        case 'Accueil':
           
            include('../Template/accueil.php');
            break;
        case 'Conclusion':
            include('../Template/Conclusion.php');
            break;
        case 'entreprise':
            include('../Template/entreprise.php');
            break;
        case 'Expo':
            include('../Template/expo.php');
            break;
        case 'Expo1erversion':
            include('../Template/expo1erversion.php');
            break;
        case 'Galerie':
            include('../Template/Galerie.php');
            break;
        case 'galerieentreprise':
            include('../Template/galerieentreprise.php');
            break;
        case 'galerietommy':
            include('../Template/galerietommy.php');
            break;
        case 'interview':
            include('../Template/interview.php');
            break;
        case 'Moodboard':
            include('../Template/moodboard.php');
            break;
                                   
       
        default:
            include('../Template/page404.php');
    }

}else{
    
    include('../Template/accueil.php');

}