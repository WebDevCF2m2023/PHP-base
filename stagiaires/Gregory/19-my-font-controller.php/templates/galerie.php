<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Photos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/galerie.css">
</head>
<body>
    <?php include('navbar.php')?>
    <div id="title_galerie">
        <h1 id="Galerie">Galerie</h1>
        <button id="vertical" class="clicked" onclick="vertical_click()"><img src="img/vertical.svg"></button>
        <button id="horizontal" onclick="horizontal_click()"><img src="img/horizontal.svg"></button>
    </div>
    <div id="images">
        <button id="previous" onclick="previous_photos()"></button>
        <div id="photos">
        </div>
        <button id="next" onclick="next_photos()"></button>
    <script src="js/galerie.js" type="text/javascript"></script>
    </div>
</body>
</html>

