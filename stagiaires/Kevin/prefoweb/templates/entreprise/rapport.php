<?php require("../templates/inc/head.php"); ?>
    <link rel="stylesheet" href="css/rapport.css" />
    <link rel="stylesheet" href="css/organigramme.css" />
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li><a href="?page=accueil">Accueil</a></li>
          <li id="entreprise">
            <a href="#" class="selected">Entreprise</a>
            <ul id="menuEntreprise">
              <li><a href="#" class="selected">Rapport</a></li>
              <li><a href="?page=interview">Interview</a></li>
            </ul>
          </li>
          <li><a href="?page=galerie">Galerie</a></li>
          <li>
            <a href="mailto:preformation-kevin@hotmail.com">Me contacter</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
      <div id="content">
        <h1>BUSINESS & DÉCISION</h1>
        <article id="demarche">
          <img src="images/rapport/demarche.jpeg" alt="" />
          <p>
            Pour trouver cette entreprise j’ai contacté une connaissance qui y
            travaillait tout simplement et je lui ai posé mes questions sur
            l’application discord.
          </p>
        </article>

        <article id="description">
          <section>
            <div>
              <h2>Adresse :</h2>
              <p>
                Coeur Défense A 110, Esplanade du Général de Gaulle 92931 Paris
                La Défense Cedex
              </p>
            </div>
            <div>
              <h2>Description :</h2>
              <p>
                Depuis sa création, Business & Decision est spécialisé dans le
                recueil, l’analyse, l’exploitation et la valorisation des
                données. Ses équipes conçoivent et déploient les solutions et
                les services les plus innovants pour accompagner les directions
                métier à relever les défis majeurs de transformation de leurs
                organisations par l’adoption des technologies de pointe.
              </p>
            </div>
            <div>
              <h2>Objectifs :</h2>
              <p>
                Ses équipes, réparties dans plusieurs pays et dans 14 villes en
                France, conçoivent et déploient les solutions et les services
                les plus innovants pour accompagner les directions métier à
                relever les défis majeurs de transformation de leurs
                organisations par l’adoption des technologies de pointe. Data
                Intelligence, Big Data et Data Gouvernance, véritables socles de
                l’intelligence artificielle et de l’expérience digitale, sont
                les domaines de spécialisation des équipes d’experts engagées
                dans les projets d’envergure des clients et dans les pratiques
                éthiques et responsables.
              </p>
            </div>
          </section>

          <img src="images/rapport/description.webp" alt="" />
        </article>

        <article id="organigramme">
          <h2>Organigramme :</h2>
          <div id="centre">Centre</div>
          <div id="secteur">Amiens</div>
          <div id="poleCRM" class="pole">CRM</div>
          <div id="polePHP" class="pole">PHP</div>
          <div id="poleDOTNET" class="pole">.NET</div>
          <div id="chefPoleCRM" class="chefPole">Chef Pole</div>
          <div id="chefPolePHP" class="chefPole">Chef Pole</div>
          <div id="chefPoleDOTNET" class="chefPole">Chef Pole</div>
          <div id="chefProjetCRM" class="chefProjet">Chef Projet</div>
          <div id="chefProjetPHP" class="chefProjet">Chef Projet</div>
          <div id="chefProjetDOTNET" class="chefProjet">Chef Projet</div>
          <div id="employeeCRM" class="employee">Employee</div>
          <div id="employeePHP" class="employee">Employee</div>
          <div id="employeeDOTNET" class="employee">Employee</div>
        </article>
      </div>
    </main>

    <footer>
      <div id="cloud">
        <img src="images/clouds/cloud1.png" alt="" />
      </div>
      <article>
        <section id="logo">
          <img id="logoImage" src="images/logo2.png" alt="Logo de CF2M" />
          <p>Fait pour devenir meilleur et visons ensemble l'avenir.</p>
        </section>
        <section id="link">
          <h5>Link</h5>
          <ul>
            <li><a href="?page=accueil">Accueil</a></li>
            <li><a href="#" class="selected">Rapport</a></li>
            <li><a href="?page=interview">Interview</a></li>
            <li><a href="?page=galerie">Galerie</a></li>
            <li>
              <a href="mailto:preformation-kevin@hotmail.com">Me contacter</a>
            </li>
          </ul>
        </section>
      </article>
      <div id="skyline"><img src="images/skylineParis.png" alt="" /></div>
      <section id="copyright">
        <p>
          © [2023] Kevin. Design in collaboration with : Sebastien. Tous droits
          réservés. Le logo de CF2M est une marque déposée de CF2M et est
          utilisé avec permission.
        </p>
      </section>
    </footer>
    <script src="scripts/entreprise/scrollEffect.js"></script>
    <script src="scripts/index/clouds.js"></script>
    <script>
      activateClouds(30, "images/clouds/cloud");
    </script>
  </body>
</html>
