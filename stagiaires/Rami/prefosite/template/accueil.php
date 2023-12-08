<!DOCTYPE html> <!-- Déclaration du type de document en HTML5 -->
<html>
<head> <!-- En-tête de la page -->
  <title>MENU</title> <!-- Titre de la page qui apparaît dans l'onglet du navigateur -->
  <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- Inclure une feuille de style CSS externe -->
   
   
    <link rel="icon" href="image/ghost.png" type="image/x-icon">
    <style>
      img {
        height: 200px;
        /* Hauteur des images */
        width: 900px;
        /* Largeur des images */
        text-align: center;
        /* Alignement du texte au centre */
        margin: auto;
        /* Centrer les éléments horizontalement */
      }

      .cherry img{
        width: 70px;
        height: auto;
        position: absolute;
        left: 35%;
      }
      .ghostwhite2 img{
        width: auto;
        height: 30px;
        position: absolute;
        right: 10px;
      }
      .mariobox img{
        width: 50px;
        height: auto;
        position: absolute;
        left: 20px;
      }
    </style>
</head>

<body> <!-- Corps de la page -->
  <!-- Balise audio pour la lecture audio -->
  <audio src="SOUND/Y2meta.app - Pac-Man Theme 8-bit (128 kbps).mp3" loop autoplay>
  </audio>
    <div class="frame1"> <!-- Conteneur avec la classe CSS "frame1" -->
    <img src="image/PressStart.gif"> <!-- Insérer une image depuis un emplacement spécifié -->
  </div>
  <div class="cherry"><img src="image/cherry.png" alt="cherry"></div>
  <div class="frame"> <!-- Autre conteneur avec la classe CSS "frame" -->
    <div class="btn-group"> <!-- Groupe de boutons  -->
      <a href="?section=presentationEntreprise"> <!-- Lien hypertexte vers une page "presentation.html" -->
        <button class="button" type="button">
          <h2>START</h2>
        </button> <!-- Bouton "START" avec la classe CSS "button" -->
      </a>
      <a href="exposition/galerie.html">
        <!-- Lien hypertexte vers une page "galerie.html" dans un dossier "exposition" -->
        <button class="button" type="button">
          <h2>GALERIE PHOTO</h2>
        </button> <!-- Bouton "GALLERIE PHOTO" -->
      </a>
      <div class="ghostwhite2"><img src="image/ghost.png" alt="ghostwhite"></div>
     <a href="entreprise/interview.html">
      <button class="button" type="button">
        <h2>INTERVIEW</h2>
      </button> <!-- Bouton "INTERVIEW" -->
      <div class="mariobox"><img src="image/mariobox.png" alt="mariobox"></div>
    </div>
  </div>
  <script>
    /* Commentaire JavaScript :
    window.addEventListener("load", function(){
        const audio = document.createElement("audio");
        document.body.appendChild(audio);
        audio.src = "sounds/FINISHIM.mp3";
        window.addEventListener("click", ()=>audio.play());
    })
    */
  </script>
</body>

</html>