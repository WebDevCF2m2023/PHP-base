<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style.css">
    <title>projet2m</title>
    <link rel="icon" href="image/EE.svg.png">
</head>


   
</head>
<body>
    <header id="header">
        
        <ul>
            <li><a href="?section=proj2m" class="active">Accueil</a></li>
            <li><a href="?section=projetfr">Projet Fr</a></li>
            <li><a href="?section=interview">Interview</a></li>
            <li><a href="?section=galerie">Galerie</a></li>
        </ul>
    </header>
    
    <section>
        <h2 id="text"><span>Emrah Arpaci</h2>
        
        <img src="https://user-images.githubusercontent.com/65358991/170092504-132fa547-5ced-40e5-ab64-ded61518fac2.png" id="bird1">
        <img src="https://user-images.githubusercontent.com/65358991/170092542-9747edcc-fb51-4e21-aaf5-a61119393618.png" id="bird2">
        <img src="https://user-images.githubusercontent.com/65358991/170092559-883fe071-eb4f-4610-8c8b-a037d061c617.png" id="forest">
        
        
        
        <img src="https://user-images.githubusercontent.com/65358991/170092605-eada6510-d556-45cc-b7fa-9e4d1d258d26.png" id="rocks">
        <img src="https://user-images.githubusercontent.com/65358991/170092616-5a70c4af-2eed-496f-bde9-b5fcc7142a31.png" id="water">
    </section>
    
    <div class="sec">
        <h1>Conclusion</h1>
        <p>Ma formation chez CF2000 a été une expérience extrêmement satisfaisante, notamment en ce qui concerne les cours de HTML, CSS et algorithmes. Ces cours sont essentielles pour le développement web.

            Le cours de HTML me permet de comprendre la structure d'une base d'un site web, ainsi que les différentes balises utilisées pour organiser et former le contenu. J'ai pu apprendre à créer des formulaires interactifs et à utiliser des listes et des tableaux pour organiser efficacement les données
<br><br>
Le cours de CSS m'a ensuite permis de prendre en charge le design et l'apparence de mes pages web. J'ai pu apprendre à utiliser les sélecteurs, les propriétés et les valeurs CSS pour manipuler les éléments HTML et créer des mises en page visuellement attrayantes.

En ce qui concerne le cours d'algorithme, il me permet d'améliorer ma capacité de résolution de problèmes et ma logique de programmation. J'apprend à résoudre des problèmes complexes et à trouver des solutions efficaces en utilisant des modèles algorithmiques tels que les boucles, les conditions et les fonctions.
<br><br>
Je suis particulièrement satisfait de la qualité des cours dispensés chez CF2000. Les formateurs ont su transmettre leurs connaissances de manière claire et concise, en fournissant des exemples pratiques et des exercices pertinents pour renforcer ma compréhension. De plus, j'ai apprécié l'approche pédagogique interactive, qui encourageait les échanges et la participation active des étudiants.
<br><br>

Dans l'ensemble, ma formation chez CF2000 m'a permis d'acquérir des compétences solides en HTML, CSS et algorithmes, ce qui me positionne avantageusement pour poursuivre ma carrière dans le développement web. Je suis satisfait des cours que j'ai suivis et je recommanderais certainement CF2000 à ceux qui souhaitent apporter des compétences techniques dans le domaine de la programmation.
<br><br>
</p>
    </div>
    
    <footer class="footerind">
        <a href="#">&copy; Copyright 2023 | Projet2M - Tous droits réservés.</a>
    </footer>
    
    <script>
        let text = document.getElementById('text');
        let bird1 = document.getElementById('bird1');
        let bird2 = document.getElementById('bird2');
        let btn = document.getElementById('btn');
        let rocks = document.getElementById('rocks');
        let forest = document.getElementById('forest');
        let water = document.getElementById('water');
        let header = document.getElementById('header');
        
        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            
            text.style.top = 50 + value * -.1 + '%';
            bird2.style.top = value * -1.5 + 'px';
            bird2.style.left = value * 2 + 'px';
            bird1.style.top = value * -1.5 + 'px';
            bird1.style.left = value * -5 + 'px';
            btn.style.marginTop = value * 1.5 + 'px';
            rocks.style.top = value * -.12 + 'px';
            forest.style.top = value * .25 + 'px';
            header.style.top = value * .5 + 'px';
        })
    </script>
    
</body>