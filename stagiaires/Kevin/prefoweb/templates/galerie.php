<?php require("../templates/inc/head.php") ?>    
    <link rel="stylesheet" href="css/galerie.css" />
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="?page=accueil">Accueil</a></li>
          <li id="entreprise">
            <a href="#">Entreprise</a>
            <ul id="menuEntreprise">
              <li><a href="?page=rapport">Rapport</a></li>
              <li><a href="?page=interview">Interview</a></li>
            </ul>
          </li>
          <li><a href="#" class="selected">Galerie</a></li>
          <li>
            <a href="mailto:preformation-kevin@hotmail.com">Me contacter</a>
          </li>
        </ul>
      </nav>
    </header>
    <div id="backgroundViewImage"></div>
    <div id="viewImage">
      <section>
        <img src="images/galerie/arrow_left.svg" alt="" id="leftArrow" />
        <img src="" alt="" id="imgViewImage" />
        <img src="images/galerie/arrow_right.svg" alt="" id="rightArrow" />
      </section>
    </div>
    <main>
      <video
        id="engrenage"
        src="videos/engrenage.mp4"
        muted
        autoplay
        loop
      ></video>
      <div id="content">
        <article id="timeline">
          <h3>TIMELINE</h3>
          <section></section>
        </article>
      </div>
    </main>

    <footer>
      <article>
        <section id="logo">
          <img id="logoImage" src="images/logo2.png" alt="Logo de CF2M" />
          <p>Fait pour devenir meilleur et visons ensemble l'avenir.</p>
        </section>
        <section id="link">
          <h5>Link</h5>
          <ul>
            <li><a href="?page=accueil">Accueil</a></li>
            <li><a href="?page=rapport">Rapport</a></li>
            <li><a href="?page=interview">Interview</a></li>
            <li><a href="#" class="selected">Galerie</a></li>
            <li>
              <a href="mailto:preformation-kevin@hotmail.com">Me contacter</a>
            </li>
          </ul>
        </section>
      </article>
      <div id="skyline"><img src="images/skyline.png" alt="" /></div>
      <section id="copyright">
        <p>
          © [2023] Kevin. Design in collaboration with : Sebastien. Tous droits
          réservés. Le logo de CF2M est une marque déposée de CF2M et est
          utilisé avec permission.
        </p>
      </section>
    </footer>
    <script src="scripts/galerie/photos.js"></script>
  </body>
</html>
