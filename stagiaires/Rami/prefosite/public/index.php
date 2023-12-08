<?php
/*
 * Front Controller
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'contact':
            $title = "presentation";
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../template/index2ARCADE/presentation.php');
            break;
            case 'galerie':
                $title = "galerie";
                # on inclut le fichier contact.php en suivant l'arborescence de fichiers
                include('../template/exposition/galerie.php');
                break;
                case 'entreprise':
                    $title = "entreprise";
                    # on inclut le fichier contact.php en suivant l'arborescence de fichiers
                    include('../template/entreprise/entreprise.php');
                    break;  
                    case 'interview':
                        $title = "interview";
                        # on inclut le fichier contact.php en suivant l'arborescence de fichiers
                        include('../template/index2ARCADE/interview.php');
                        break;
                        case 'presentationEntreprise':
                            $title = "presentation";
                            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
                            include('../template/entreprise/presentation.php');
                            break;

        case 'conclusion':
            $title = "conclusion et orientation";
            include('../template/index2ARCADE/conclusion&orientation.php');
            break;
        case 'presentationInterview':
            $title = "présentation";
            include('../template/index2ARCADE/presentation.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            $title = "Erreur 404";
            include('../template/page-404.php');
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    $title ="Accueil";
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../template/accueil.php');
}
