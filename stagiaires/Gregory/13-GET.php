<?php
if (isset($_GET["loc"])){
    switch ($_GET["loc"]):
        case "contact":
            $title = "<h1>Contact</h1>";
            $text = "<p>ceci est la page contact</p>";
            break;
        case "livre":
            $title = "<h1>Livre d'or</h1>";
            $text = "<p>ceci est la page du livre d'or</p>";
            break;
        case "actu":
            $title = "<h1>actu</h1>";
            $text = "<p>ceci est la page d'actualitées</p>";
            break;
        default:
            $title = "<h1>404</h1>";
            $text = "<p>page non trouvé</p>";
    endswitch;
}
else{
    $title = "<h1>Accueil</h1>";
    $text = "<p>page d'Accueil</p>";
}
?>
<nav>
    <a href="?">Accueil</a>
    <a href="?loc=contact">contact</a>
    <a href="?loc=livre">Livre d'or</a>
    <a href="?loc=actu">Actualitées</a>
</nav>
<?=$title?>
<?=$text?>