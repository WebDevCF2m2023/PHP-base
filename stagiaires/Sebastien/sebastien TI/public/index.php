<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
        case 'geo':
            $title = "geographie";
            include ("../templates/geographie.php");
            break;
        case 'hist':
            $title = "histoire";
            include ("../templates/histoire.php");
            break;
        case 'cult':
            $title = "culture";
            include ("../templates/culture.php");
            break;
        case 'gal':
            $title = "galerie";
            include ('../templates/galerie.php');
            break;
        case 'form':
            $title = "contact";
            include ('../templates/contact.php');
            break;
        case 'liens':
            $title = "lien";
            include ('../templates/liens.php');
            break;
        default:
            include_once ("../templates/erreur404.php");
    }
   
}else{

    include_once ("../templates/acceuil.php");
}