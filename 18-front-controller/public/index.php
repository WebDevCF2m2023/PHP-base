<?php
/*
 * Front Controller
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'contact':
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/contact.php');
            break;
        case 'rgpd':
            include('../templates/mentions-legales.php');
            break;
        case 'actualites':
            include('../templates/actualites.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            include('../templates/404.php');
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/accueil.php');
}
