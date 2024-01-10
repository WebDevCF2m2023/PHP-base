<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title><?=$title?></title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
    <h1>18-front-controller</h1>
    </header>
        <?php include 'inc/menu.php'; ?>
    <section>
        <h2><?=$title?></h2>
        <p>La page demandée n'existe pas.</p>
    </section>
    <div id="nuage"></div>
<?php include 'inc/footer.php'; ?>
<script  src="js/script.js"></script>
</body>
</html>
