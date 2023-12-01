<?php
// on va verifier si une variable GET dont la clef est 'section' existe (initialisé et not null)
if(isset($_GET['section'])){
    switch($_GET["section"]):
        case "biographie":
            $title = "Biographie";
            $text = "Here's a biography.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus quae est quis saepe dignissimos ducimus beatae quo quia corrupti eligendi iusto recusandae ea natus blanditiis doloribus necessitatibus nihil, tempora suscipit?
            Eum esse consectetur illo sed earum dolore sit natus consequatur fugit quasi labore praesentium perspiciatis repellendus enim odit temporibus, illum eveniet quas minima ratione libero reiciendis maiores. In, nam sequi.
            Amet laborum hic, maiores quam dolorem similique nam omnis obcaecati. Doloribus quia, accusantium hic quo corrupti earum consectetur assumenda sapiente sit! Perferendis quod illo vero fuga omnis aut quae libero.
            Laboriosam, voluptatem sapiente! Incidunt error ipsa corporis at. Quos, perferendis nisi. Culpa quibusdam vitae dolor! Vel doloremque sequi consectetur odit modi tempora hic dolore aperiam placeat sapiente. Excepturi, incidunt ut?
            Quisquam facilis rerum architecto saepe ex excepturi mollitia repellendus molestiae magni sunt. Facere recusandae consequuntur corporis minima iure nisi, ullam harum quod vero omnis mollitia necessitatibus! Vel cumque facere saepe. ";
            break;
        case "contact":
            $title = "Contact";
            $text = "leerlandais@gmail.com";
            break;
        case "livredor":
            $title  = "Livre D'Or";
            $text = "Qu'est ce que on mettre dans un livre d'or? Je n'ai aucune idée personnellement";
            break;
        case "actual":
            $title = "Suivre un peu d'actualités ici";
            $text = "";
            break;
        default:
            $title = "Error 404";
            $text = "File not Found, sucker!";
    endswitch;
}else{
    $title = "Accueil";
    $text = "Bienvenue sur notre page d'accueil";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <h1>$_GET</h1>
    <p>
        <a href="?">Accueil</a>
        <a href="?section=biographie">Biographie</a>
        <a href="?section=contact">Contact</a>
        <a href="?section=livredor">Livre D'Or</a>
        <a href="?section=actual">Actualités</a>
    </p>
    <h2><?=$title?></h2>
    <p><?=nl2br($text)?></p>
    <h3>Débogage de $_GET</h3>
    <p><?php
    var_dump($_GET);
    ?></p>
</body>
</html>



