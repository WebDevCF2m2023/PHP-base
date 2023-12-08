<?php
/*
 * Front Controller
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
       
        case 'interview':
            include('../templates/entreprise/interview.php');
            break;
        case 'rapport':
            include('../templates/entreprise/rapport.php');
            break;
        case 'texte':
            include('../templates/expo/texte.php');
            break;
        case 'galerie':
            include('../templates/expo/galerie.php');
            break;
        case 'conclusion':
            include('../templates/conclusion.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            include('../templates/page-404.php');
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/accueil.php');
}