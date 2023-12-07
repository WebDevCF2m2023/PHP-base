<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tableau</title>
    <style>
      table,
      th,
      td {
        border: 3px solid whitesmoke;
        border-collapse: collapse;
      }

      tr {
        height: 40px;
      }

      td {
        width: 100px;
        text-align: center;
      }

      caption {
        caption-side: bottom; /* pour placer la légende en dessous du tableau */
        text-align: left;
      }

      tr:nth-child(even) {
        background-color: lightgray;
      }
      tr:nth-child(odd) {
        background-color: darkgrey;
      }

      /* :nth-child() est un sélecteur qui permet de choisir le n-ième enfant */
    </style>
  </head>
  <body>
    <h1>Tableau en HTML</h1>
    <table>
      <caption>
        Premier tableau
      </caption>
      <!-- Titre/Légende du tableau -->
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
      </tr>
      <tr>
        <td>Martin</td>
        <td>Jean</td>
        <td>46</td>
      </tr>
      <tr>
        <td>Smith</td>
        <td>John</td>
        <td>23</td>
      </tr>
      <tr>
        <td>Ingals</td>
        <td>Mary</td>
        <td>32</td>
      </tr>
      <tr>
        <td>Baillieux</td>
        <td>Guillaume</td>
        <td>34</td>
      </tr>
      <tr>
        <td>Sawyer</td>
        <td>Tom</td>
        <td>42</td>
      </tr>
      <tfoot>
        <!-- Pour qu'un contenu s'étale sur plusieurs cases, on utilise
        l'attribut colspan avec comme valeur le nmbre de cases occupées -->
        <tr>
          <td colspan="3">Copyright &copy; 2023</td>
        </tr>
      </tfoot>
    </table>
  </body>
</html>
