<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
        case 'geo':
            $title = "Geographie";
            include ("../templates/geographie.php");
            break;
        case 'hist':
            $title = "Histoire";
            include ("../templates/histoire.php");
            break;
        case 'cult':
            $title = "Culture";
            include ("../templates/culture.php");
            break;
        case 'gal':
            $title = "Galerie";
            include ('../templates/galerie.php');
            break;
        case 'form':
            $title = "Contact";
            include ('../templates/contact.php');
            break;
        case 'liens':
            $title = "Lien";
            include ('../templates/liens.php');
            break;
        default:
            include_once ("../templates/erreur404.php");
    }
   
}else{

    include_once ("../templates/acceuil.php");
}