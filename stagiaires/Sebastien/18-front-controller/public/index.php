<?php
/*
 * Front Controller
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'contact':
            $title = "Contactez-moi";
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/contact.php');
            break;
        case 'rgpd':
            $title = "Mentions légales";
            include('../templates/mentions-legales.php');
            break;
        case 'actualites':
            $title = "Actualités";
            include('../templates/actualites.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            $title = "Erreur 404";
            include('../templates/page-404.php');
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    $title ="Accueil";
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/accueil.php');
}
