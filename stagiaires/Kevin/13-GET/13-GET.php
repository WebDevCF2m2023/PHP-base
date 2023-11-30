<?php
$content = "accueil.php";
if(!empty($_GET["section"])){
    switch($_GET["section"]){
        case "biographie":
            $content = "biographie.php";
            break;
        case "contact":
            $content = "contact.php";
            break;
        case "actualite":
            $content = "actualite.php";
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>$_GET</h1>
    <nav>
        <a href="?section=accueil">
            Accueil
        </a>
        <a href="?section=biographie">
            Biographie
        </a>
        <a href="?section=contact">
            Contact
        </a>
        <a href="?section=actualite">
            Actualité
        </a>
    </nav>
    <h3>Débogage de $_GET</h3>
    <?php var_dump($_GET); ?>
    <?php require_once($content);?>
</body>
</html>