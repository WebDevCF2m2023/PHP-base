<?php

if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'interview':
            include('../templates/entreprise/interview.php');
            break;
        case 'rapport':
            include('../templates/entreprise/rapport.php');
            break;
        case 'expo':
            include('../templates/exposition/expo.php');
            break;
        case 'galerie':
            include('../templates/exposition/galerie.php');
            break;
        default:
            $title = "Erreur 404";
            include('../templates/page-404.php');
    }
}else{
    include('../templates/accueil.php');
}
