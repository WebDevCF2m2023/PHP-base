<?php

if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'accueil':
            $title = "Accueil";
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/accueil.php');
            break;
        case 'conclusion':
            $title = "Conclusion";
            include('../templates/conclusion.php');
            break;
        case 'interview1':
            $title = "Interview";
            include('../templates/interview1.php');
            break;
        case 'expo':
            $title = "Expo";
            include('../templates/expo.php');
            break;
        case 'galerie':
            $title = "Galerie";
            include('../templates/galerie.php');
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
