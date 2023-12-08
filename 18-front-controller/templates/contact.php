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
        <h3>Formulaire de contact</h3>

        <form name="contact" action="" method="post">
            <label for="email">Adresse E-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
<pre>
        <?php
        // si on a du contenu de type POST
        if(!empty($_POST)){
            var_dump($_POST);
        }
        ?>
</pre>
    </section>
    <div id="nuage"></div>
<?php include 'inc/footer.php'; ?>
<script  src="js/script.js"></script>
</body>
</html>
