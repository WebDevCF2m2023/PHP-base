<?php
/*
 * Front Controller
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'catchat':
            include('../templates/catchat.php');
            break;
        case 'home':
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/home.php');
            break;
        case 'expo':
            include('../templates/expo.php');
            break;
        case 'galerie':
            include('../templates/galerie.php');
            break;
        case 'interview':
            include('../templates/interview.php');
            break;
        case 'rapport':
            $interview_link = "?section=interview";
            include('../templates/rapport.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            include('../templates/catchat.php');
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/catchat.php');
}
