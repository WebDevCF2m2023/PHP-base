<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="image/ghost.png" type="image/x-icon">
</head>
<style>
    #fusee {
        position: fixed;
        bottom: 0%;
        right: 0%;
    }

    #fusee::before {
        content: "Click me ! ;)";
        position: fixed;
        bottom: 0%;
        right: 0%;
        color: yellow;
        text-shadow: 4px 4px 8px orangered;
    }
    #NexC{
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin-top: 0.5rem;
        
    }
</style>

<body>
    <audio src="SOUND/alexisinterviewMARIO.mp3" id="bgAudio" loop autoplay ></audio>
    <audio src="SOUND/mariolose.mp3" id="loserAudio"></audio>
    <h1>INTERVIEW</h1>
    <main>
      <div id="NexC"><a href="#"><button type="button" onclick="playLoserAudioAndRedirect('?section=accueil')">RETOUR AU MENU</button></a>
        <a href="index2ARCADE/conclusion&orientation.html"><button type="button">NEXT: CONCLUSION</button></a></div>
            

        <p><strong>Voici quelques question que j'ai pu faire à <a href="?section=presentationInterview">Alexis: </a></strong></p>

        <h4>1. Quels langages de programmation connaissez-vous et dans quels projets les avez-vous utilisés ?</h4>

        <p><strong>Je travaille quotidiennement avec JavaScript, HTML, CSS, XML, Python, et Groovy. J'ai également une expérience en Java, scripting bash pour Linux, et j'ai contribué à des projets d'entreprise, personnels, ainsi que des projets scolaires dans le passé avec Symfony.</strong></p>

        <h4>2. Pouvez-vous décrire le concept de "responsive design" et comment le mettez-vous en œuvre dans vos projets
            ?</h4>

        <p><strong>Le "responsive design" est une approche de conception web visant à garantir qu'un site web soit
                accessible et bien affiché sur une variété de dispositifs et de tailles d'écran. Pour le mettre en
                œuvre, j'utilise des requêtes média en CSS pour adapter le style et la disposition du contenu en
                fonction de la taille de l'écran du dispositif. De plus, j'utilise la "conception mobile d'abord" pour
                commencer la conception à partir des dispositifs mobiles, puis l'adapter aux versions de
                bureau.</strong></p>


        <h4>3. Comment gérez-vous la compatibilité entre les navigateurs dans vos projets web ?</h4>

        <p><strong>Pour gérer la compatibilité entre les navigateurs, je teste mon code sur une série de navigateurs
                populaires tels que Chrome, Firefox, Safari et Edge, et je résous tout problème d'affichage ou de
                fonctionnalité qui pourrait survenir. De plus, j'utilise des préfixes CSS spécifiques aux fournisseurs
                lorsque cela est nécessaire, et je m'assure que mon code JavaScript est conforme aux normes et utilise
                des fonctionnalités prises en charge par tous les navigateurs cibles.</strong></p>

        <h4>4. Quelles sont les principales différences entre HTTP et HTTPS, et pourquoi est-il important d'utiliser
            HTTPS ?</h4>

        <p><strong>La principale différence entre HTTP et HTTPS est la sécurité. HTTP transmet des données en clair,
                tandis que HTTPS utilise SSL/TLS pour chiffrer les données échangées entre le navigateur et le serveur
                web. Il est important d'utiliser HTTPS pour protéger les données sensibles des utilisateurs et garantir
                la confidentialité et l'intégrité des informations échangées entre le navigateur et le serveur.
            </strong></p>

        <h4>5. Pouvez-vous expliquer la différence entre le scripting côté serveur et le scripting côté client, et dans
            quels cas les utiliseriez-vous dans un projet ?</h4>

        <p><strong>Le scripting côté serveur fait référence à l'exécution de code côté serveur, par exemple avec PHP ou
                Python, pour générer dynamiquement le contenu de la page avant de l'envoyer au navigateur. Le scripting
                côté client fait référence à l'exécution de code côté client, par exemple avec JavaScript, directement
                dans le navigateur du client. J'utiliserais le scripting côté serveur pour traiter des données sensibles
                ou accéder à la base de données, tandis que le scripting côté client est idéal pour améliorer
                l'expérience utilisateur en temps réel, comme la validation des formulaires ou les mises à jour
                dynamiques.
            </strong></p>

        <h4>6. Qu'est-ce que les API RESTful et comment les avez-vous utilisées dans le passé ?</h4>

        <p><strong> Les API RESTful sont une architecture pour la création de services web utilisant le protocole HTTP
                pour le transfert de données. Je les ai utilisées dans divers projets pour permettre la communication
                entre différentes applications ou services. Les API RESTful suivent les principes du CRUD (Create, Read,
                Update, Delete) pour opérer sur des ressources en utilisant des méthodes HTTP telles que GET, POST, PUT
                et DELETE.
            </strong></p>

        <h4>7. Quels outils et frameworks de développement web connaissez-vous et préférez-vous utiliser, et pourquoi ?
        </h4>

        <p><strong>Je connais plusieurs outils et frameworks pour le développement web, tels qu'Angular, React, Vue.js
                pour le développement frontal, et Django et Ruby on Rails pour le développement côté serveur. Mon choix
                dépend des besoins du projet, des compétences de l'équipe et de l'évolutivité requise. Par exemple,
                React est excellent pour les applications web interactives, tandis que Django offre une base solide pour
                des projets complexes.</strong></p>

        <h4>8. Comment abordez-vous et résolvez-vous les problèmes de sécurité web, tels que les injections SQL ou les
            attaques de type cross-site scripting (XSS) ?</h4>

        <p><strong>Pour faire face et résoudre les problèmes de sécurité web, je suis les meilleures pratiques de
                développement sécurisé, j'utilise des bibliothèques et des frameworks de sécurité, je filtre et valide
                rigoureusement les données en entrée pour prévenir les injections SQL, et j'utilise l'échappement des
                variables dans les pages web pour éviter les attaques de type cross-site scripting (XSS). J'effectue
                également des tests de sécurité réguliers et je fais des revues de code pour repérer d'éventuelles
                vulnérabilités.
            </strong></p>

        <h4>9. Quelles sont les meilleures pratiques pour optimiser les performances d'un site web ?</h4>

        <p><strong>Les meilleures pratiques pour l'optimisation des performances d'un site web comprennent la réduction
                de la taille des images et des fichiers CSS/JavaScript, l'utilisation de la mise en cache des contenus,
                la minimisation des requêtes réseau et l'optimisation du chargement de la page. De plus, il est
                important d'utiliser des outils de suivi des performances pour identifier et résoudre les points
                critiques.</strong></p>

        <h4>10. Pouvez-vous décrire un projet web complexe sur lequel vous avez travaillé, en mettant en évidence les
            défis auxquels vous avez été confronté et comment vous les avez surmontés ?</h4>

        <p><strong>J'ai travaillé sur un projet de commerce électronique qui impliquait des milliers de produits et des
                utilisateurs simultanés. L'un des principaux défis était de garantir un bon temps de chargement des
                pages. Nous avons mis en place la mise en cache des pages, réduit le nombre de requêtes réseau, optimisé
                les images et mis en place le chargement différé (lazy loading). De plus, nous avons utilisé un système
                de base de données extensible pour gérer la charge élevée. Au final, nous avons réussi à améliorer
                significativement les performances du site et à offrir une expérience utilisateur fluide.</strong></p>

    </main>
    <div id="fusee">

        <a href="#"><img src="image/topUp.png" alt="" width="160"></a>
    </div>

    <footer> <!-- Pied de page -->
        <p> copyright BSR 2023 <!-- Texte de copyright -->
            <a href="mailto:monsite-arcade@alwaysdata.net">ramyledev@webdev.org</a>
        </p> <!-- Lien vers une adresse e-mail -->
    </footer>
    <script src="JS/audio.js"></script>
</body>

</html>