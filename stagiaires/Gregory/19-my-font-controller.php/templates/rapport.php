<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rapport.css">
    <!--for the map-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.2.2/ol.css">
    <script src="https://cdn.jsdelivr.net/npm/ol@v7.2.2/dist/ol.js"></script>
</head>
<body>
    <?php include('navbar.php')?>
	<h1>Rapport</h1>
    <div id="rapport">
        <h2>Recherche</h2>
        <p>Pour trouver un développeur web à interviewer, j'ai demandé à mes proches s’ils connaissaient quelqu'un qui travaille dans le développement web. J'ai un peu galéré mais j'ai fini par trouver quelqu'un (une connaissance d'une connaissance) qui a accepté de se faire interviewer, je lui ai donc envoyé un email avec les questions et une fois les réponses reçues, je les ai mises en page en partie ici et en partie dans la page <a href="<?php echo $interview_link ?>">Interview.</a></p>
        <h2>Entreprise</h2>
        <h3>Nom</h3>
        <p>Satoris</p>
        <h3>Coordonnées</h3>
        <p>
            Avenue Winston Churchill 228, bt 1
            1180 BRUXELLES Belgique
        </p>
        <div id="map"></div>
        <script type="text/javascript" src="js/map.js"></script>
        <h3>Activité principale</h3>
        <p>Création d'applications web et mobiles</p>
        <h3>Nombre de membres du personnel</h3>
        <p>Une dizaine dont 5 au Luxembourg</p>
        <h3>Organigramme</h3>
        <p>CTO, font lead</p>
        <h2>Interview</h2>
        <p>Voir <a href="<?php echo $interview_link ?>">interview.</a></p>
        <h2>Confirmation du choix d'orientation</h2>
        <h3>Éléments positifs</h3>
        <p><a href="<?php echo $interview_link ?>">Logan Willaumez</a> ayant décrit la curiosité et l'envie d'apprendre comme qualités dans le secteur du développement et comme je considère avoir ces traits de caractère, je me sens conforté dans l'idée de devenir développeur.</p>
        <h3>Éléments négatifs</h3>
        <p>En revanche, la sensibilité au design et à l'expérience utilisateur, qu'il a également mis en avant, ne me semble pas faire actuellement partie de mes compétences et semble être une partie importante ou à minima intéressante à avoir.</p>
        <h2>Conclusion</h2>
        <p>L'interview m'a montré que j'avais une personnalité et des compétences correspondant bien au métier de développeur web, cependant elle m'a aussi permis de me rendre compte qu'il y avait des éléments dans ce métier que je ne connaissais pas tels que le design dans lequel je ne me sens pas spécialement compétent pour le moment, mais ayant pu expérimenter avec la création du site, je me rends compte que j'aime également bien cette partie et ça m'encourage dans mon choix de devenir développeur web.</p>
    </div>
</body>
</html>
