<!DOCTYPE html> <!-- Déclaration du type de document HTML -->
<html lang="fr"> <!-- Balise racine avec l'attribut "lang" en français -->

<head>
  <link rel="icon" href="image/ghost.png" type="image/x-icon">
  <meta charset="UTF-8"> <!-- Définition du jeu de caractères en UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Configuration de la vue pour les appareils mobiles -->
  <title>Galerie</title> <!-- Titre de la page -->
  <link rel="stylesheet" href="css/style.css"> <!-- Lien vers la feuille de style CSS externe -->
</head>

<body>
  <style>
    .shenron img {
      position: absolute;
      top: 28%;
      left: 80%;

    }

    .gokuanimation img {
      width: 80px;
      height: 80px;
      position: absolute;
      animation: example 5s infinite;
    }

    @keyframes example {

      0%,
      100% {
        left: 0;
      }

      50% {
        left: 800px;
      }
    }

    #buttonGalerie {
      position: absolute;
      top: 200px;
      left: 120px;
    }

    button:active {
      box-shadow: inset -1px -1px #fff, inset 1px 1px #292929, inset -2px -2px #ffffff, inset 2px 2px rgb(158, 158, 158);
    }

    * {
      box-sizing: border-box
    }

    /* Redéfinition du modèle de boîte pour tous les éléments */

    .slider_focus {
      max-width: 600px;
      /* Largeur maximale du conteneur de la gallerie */
      margin: 2rem auto;
      /* Marge extérieure de 2rem en haut et en bas, centrée horizontalement */

    }

    .slider_focus ul {
      margin: 0;
      /* Annulation de la marge par défaut */
      /* Réinitialisation des propriétés de liste non ordonnée (ul) */
      padding: 0;
      list-style-type: none;
      display: flex;
      /* Affichage en tant que flex container */
      position: relative;
      /* Position relative pour les éléments fils */
      justify-content: center;
      /* Centrage horizontal des éléments */
      overflow: hidden;
      /* Masquage du contenu débordant */
      aspect-ratio: 3/2;
      /* Ratio largeur/hauteur de 3:2 */
      gap: .5rem;
      /* Espacement de 0.5rem entre les éléments de la liste */


    }

    .slider_focus ul li {

      align-self: flex-end;
      /* Alignement vertical en bas pour chaque élément */
      display: flex;
      /* Affichage en tant que flex container */
      align-items: center;
      /* Alignement vertical au centre */
      justify-content: center;
      /* Centrage horizontal */
      margin-bottom: .5rem;
      /* Marge inférieure de 0.5rem */
      height: 4rem;
      /* Hauteur de 4rem */
      width: 4rem;
      /* Largeur de 4rem */

    }

    .slider_focus ul li button {
      all: unset;
      /* Annulation de toutes les propriétés par défaut */
      padding: 0;
      /* Annulation du remplissage par défaut */
      border: 0;
      /* Annulation de la bordure par défaut */
      cursor: pointer;
      /* Curseur de type "pointer" au survol */

    }

    .slider_focus ul li button img {

      border-radius: 50%;
      /* Bordure avec un rayon de 50% pour obtenir un cercle */
      border: 2px solid orange;
      /* Bordure de 2px en blanc */
      width: 4rem;
      /* Largeur de 4rem */
      height: 4rem;
      /* Hauteur de 4rem */
      object-fit: cover;
      /* Ajustement de l'image pour couvrir complètement le conteneur */

    }


    .slider_focus ul li span img {

      display: block;
      /* Affichage de type "block" pour remplir l'espace disponible */
      position: absolute;
      /* Position absolue par rapport à l'élément parent */
      top: 0;
      /* Position en haut */
      left: 0;
      /* Position à gauche */
      height: 100%;
      /* Hauteur de 100% pour remplir complètement le conteneur */
      width: 100%;
      /* Largeur de 100% pour remplir complètement le conteneur */
      transform: translateX(-100%);
      /* Décalage horizontal de 100% pour masquer l'image */
      z-index: -1;
      /* Empilement en arrière-plan (en dessous) */
      opacity: 0;
      /* Opacité à 0 (invisible) */
      will-change: transform, opacity;
      /* Précise les propriétés animées */
      transition: transform .6s, opacity .6s;
      /* Animation de 0.6s pour transform et opacity */

    }

    .slider_focus ul:not(:focus-within) li:first-child span img,
    .slider_focus ul li:focus-within span img {

      transform: translateX(0%);
      /* Décalage horizontal de 0% pour afficher l'image */
      opacity: 1;
      /* Opacité à 1 (visible) */

    }


    .slider_focus ul li:focus-within {

      outline: 2px solid black;
      /* Bordure de 2px en noir pour l'élément focus */
      border-radius: 50%
        /* Bordure avec un rayon de 50% pour obtenir un cercle */

    }


    .slider_focus ul:not(:focus-within) li:first-child button img,
    .slider_focus ul li:focus-within button img {

      opacity: .4;
      /* Opacité à 0.4 pour les images non focusées et à 1 pour l'image focusée */

    }
  </style>
  <audio src="SOUND/Dragon Ball GT Theme 8 Bit Remix (1).mp3" loop autoplay></audio>
  <h1>GALERIE PHOTOS</h1> <!-- Intitulé principal de la page -->
  <a href="?section=accueil">
    <button id="buttonGalerie" type="button">RETOUR AU MENU
    </button></a>

  <div class="gokuanimation"><img src="image/gokuGTcloud.png" alt=""></div>

  <div class=slider_focus>

    <ul>

      <li tabindex="0">

        <button tabindex="-1">
          <img src="image/IMG_0879.JPG" alt="TROUVE L'EASTER EGG"> <!-- Image avec un attribut  -->
        </button>
        <span><img src="image/IMG_0879.JPG" alt> <!-- Image avec un attribut  -->
        </span>

      </li>

      <li tabindex="0">

        <button tabindex="-1">
          <img src="image/IMG_0915.JPG" alt> <!-- Image avec un attribut  -->
        </button>
        <span><img src="image/IMG_0915.JPG" alt> <!-- Image avec un attribut  -->
        </span>

      </li>

      <li tabindex="0">
        <button tabindex="-1">
          <img src="image/IMG_0880.JPG" alt> <!-- Image avec un attribut -->
        </button>
        <span><img src="image/IMG_0880.JPG" alt> <!-- Image avec un attribut -->
        </span>

      </li>

      <li tabindex="0">
        <button tabindex="-1">
          <img src="image/IMG_0883.JPG" alt> <!-- Image avec un attribut -->
        </button>
        <span><img src="image/IMG_0883.JPG" alt> <!-- Image avec un attribut -->
        </span>

      </li>

    </ul>

  </div>

  <div class="shenron"><img src="image/shenron.png" alt=""></div>

  <footer> <!-- Pied de page -->
    <p> copyright BSR 2023 <!-- Texte de copyright -->
      <a href="monsite-arcade@alwaysdata.net">ramyledev@webdev.org</a>
    </p> <!-- Lien vers une adresse e-mail -->
  </footer>
</body>

</html>