<?php
/*
 * Front Controller
 */
// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'rapport':
            $title = "Rapport";
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/entreprise/rapport.php');
            break;
        case 'interview':
            $title = "Interview";
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/entreprise/interview.php');
            break;
        case 'expo':
            $title = "Expo";
            include('../templates/expo/expo.php');
            break;
        case 'galerie':
            $title = "Galerie";
            include('../templates/expo/galerie.php');
            break;
        case 'accueil':
            $title = "Accueil";
            include('../templates/accueil.php');
            break;
        case 'conclusion':
            $title = "Galerie";
            include('../templates/conclusion.php');
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
