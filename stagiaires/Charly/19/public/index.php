<?php
 
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'Index':
            $title = "Accueil";
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/Index.php');
            break;
        case 'Conclusion':
            $title = "Conclusion";
            include('../templates/Conclusion.php');
            break;
        case 'Interview':
            $title = "Interview";
            include('../templates/Interview.php');
            break;
        case 'Entreprise':
            $title = "Expo";
            include('../templates/Entreprise.php');
            break;
        case 'Galerie':
            $title = "Galerie";
            include('../templates/Galerie.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            $title = "Erreur 404";
            include('../templates/page-404.php');
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    $title ="Index";
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/Index.php');
}