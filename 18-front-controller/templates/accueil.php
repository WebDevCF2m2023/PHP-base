<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil de 18-front-controller</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
    <h1>18-front-controller</h1>
    </header>
        <?php include 'inc/menu.php'; ?>
    <section>
        <h2>Accueil</h2>
        <p>Bienvenue sur <span class="txtBold">18-front-controller</span>.<br><br>Cet exemple montre une architecture séparant : <ul><li>Le <span class="txtBold">contrôleur frontal</span> <span class="txtItalic">public/index.php</span> ainsi que les autres fichiers disponibles au visiteur du site (dossier <span class="txtItalic">public</span>)</li><li>De la partie template (dossier <span class="txtItalic">templates</span>), qui fait donc partie backend du site car non visible pour le visiteur.</li></ul></p>
        <p>Seul le dossier <span class="txtItalic">public</span> et les fichiers/dossiers contenus ne devraient être accessibles à l'utilisateur du site.</p>
        <p>Cette séparation sera la première étape (et la seule demandée pour le <span class="txtBold">TI1 de Pierre et moi</span>) vers un modèle <span class="txtBold">MVC</span> (<a href="https://developer.mozilla.org/fr/docs/Glossary/MVC" target="_blank">Lien</a>) :<br><br>
        Ici, nous avons juste séparé le contrôleur frontal des vues, ce qui nous donne un design pattern (Patron de conception - <a href="https://developer.mozilla.org/fr/docs/Glossary/MVC" target="_blank">Lien</a>) M<span class="txtBold">VC</span></p>
        <h3>Arborescence</h3>
        <pre>
        .
        ├── index.php           -> redirige vers le dossier "public"
        ├── /public             -> fichiers accessibles au visiteur du site
        │   ├── index.php       -> contrôleur frontal
        │   ├── /css
        │   │   └── style.css
        │   ├── /js
        │   │   └── script.js
        │   └── /img
        │       └── logo.png
        ├── /templates          -> fichiers inclus par le contrôleur frontal
        │   ├── /inc            -> fichiers inclus par les fichiers du dossier "templates"
        │   │   ├── menu.php
        │   │   └── footer.php
        │   ├── accueil.php
        │   ├── actualites.php
        │   ├── contact.php
        │   ├── mentions-legales.php
        │   └── page-404.php
        </pre>
    </section>
<?php include 'inc/footer.php'; ?>
</body>
</html>
