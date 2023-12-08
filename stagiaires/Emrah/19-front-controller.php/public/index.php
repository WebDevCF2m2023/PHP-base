<?php
/*
 * Front Controller
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'proj2m':
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/proj2m.php');
            break;
        case 'interview':
            include('../templates/interview.php');
            break;
        case 'galerie':
            include('../templates/galerie.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            include('../templates/page-404.php');
        case 'projetfr':
            include('../templates/projetfr.php');
                break;
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/accueil.php');
}