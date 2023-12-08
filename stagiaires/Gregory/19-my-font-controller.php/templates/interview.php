<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/interview.css">
</head>
<body>
    <?php include('navbar.php')?>
    <div id="interview">
        <h1>Interview</h1>
    </div>
    <div id="interviewed">
        <h2 id="name_interviewed">Logan Willaumez</h2>
    </div>
    <div id="questions">
        <h3>Quel est votre boulot et en quoi consiste-t-il?</h3>
        <p class="answer">
            Software engineer. Mais au final, je suis plus dans un rôle de développeur front end, soit dans la création de design web, 
            son application et son bon bon fonctionnement. Développeur web, et mobile car on utilise une technologie permettant de faire 
            des applications mobiles avec de la techno web (typiquement, Angular et Capacitor).
        </p>

        <h3>Quelle est la chose la plus complexe que vous ayez codée?</h3>
        <p class="answer">
            Implémentation complète d'une feature avec interface typescript complexe qui soit modulable et interchangeable 
            avec diverses données. Feature d'ajout de données personnelles.
        </p>

        <h3>Quels langagues et frameworks utilisez-vous?</h3>
        <p class="answer">
            Angular, Capacitor, Typescript, Tailwind, NodeJS(ExpressJS), PostgreSQL, ...
        </p>

        <h3>Lequel est votre préféré?</h3>
        <p class="answer">
            Actuellement Typescript car c'est celui que j'utilise et maîtrise le plus. 
            Je reste au taquet pour continuer à apprendre de nouvelles technologies et langages, 
            Rust par exemple me fait beacoup de l'oeil, mais il faut trouver le temps.
        </p>

        <h3>Quelles sont les différentes étapes qui constituent votre journée?</h3>
        <p class="answer">
            Dissection des tâches journalières dans notion, 
            résolution de bug ou implémentation de nouvelles features en fonction de la tâche demandée.
        </p>

        <h3>Qu'est-ce que vous préférez dans votre métier?</h3>
        <p class="answer">
            Implémentation de feature avec beaucoup de modularité. Un vrai plaisir de voir le final, 
            et avoir un sentiment de satisfaction une fois le travail propre et bien implémenté.
        </p>

        <h3>À l'opposé qu'est-ce que vous aimez le moins?</h3>
        <p class="answer">
            Résolution de bug "chiant", dans le sens ou certaines technos annexes doivent être utilisées 
            (VPN qui bug parfois, sevice tier qui ne fonctionne pas bien, base de donnée du client qui lag ou plante, ...).
        </p>

        <h3>Quelle est la compétence qui vous semble la plus importante en tant que développeur et pourquoi?</h3>
        <p class="answer">
            Si on part vers du front-end, une certaine sensibilité au design et à l'expérience utilisateur est un must-have. 
            Le terminal reste quand même intéressant, et le plus important reste l'envie d'apprendre car on ne fait que ça, 
            tous les jours, tout le temps, et en règle générale être curieux de tout et ne pas avoir peur de plonger dans l'inconnu.
        </p>

        <h3>Comment avez-vous découvert l'univers du code?</h3>
        <p class="answer">
            Recherche de reconversion professionnelle après un passé de graphiste 3D, 
            j'ai cherché un domaine qui me plairait tout autant et en ayant + de débouchés et avec une implication plus grande 
            et plus proche du projet. J'ai alors découvert le dev web, que je kiffe encore plus que la 3D, donc tout bénef.
        </p>

        <h3>Avez-vous un projet code dans un coin de votre tête et si oui lequel?</h3>
        <p class="answer">
            Le souci de tout développeur, énormément ! Actuellement je suis sur une application de suivi d'un jeux vidéo, 
            que je travaille un peu quand j'ai du temps, jusqu'au prochain projet persos qui arrivera sans doute de lui-même bien assez vite !
        </p>
        <h3>Quelle est la chose qui vous a le plus aidé à progresser en code?</h3>
        <p class="answer">
            Ma formation que j'ai faite au début de ma reconversion, O'Clock,
            qui est vraiment super pour se lancer dans ce monde-là. Cela m'a bien aidé pour poser les bases et surtout ne pas me perdre, 
            mais ça reste la motivation. Travailler non-stop, le soir après le travail, 
            ou durant ma formation non-stop également, pour prendre du niveau.
            Et au final, le monde du travail qui fait un énorme coup de boost dans le skill que l'on prend là-dedans.
        </p>
    </div>
    <div class="interview-link">
        <a href="?section=rapport" class="interview-link">Le rapport d'entreprise</a>
    </div>
    <div id="end"></div>
    <button id="up" onclick="window.location.href='#page-nav'"></button>
    <button id="down" onclick="window.location.href='#end'"></button>
</body>
</html>
