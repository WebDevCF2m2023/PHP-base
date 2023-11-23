<?php // Début du code PHP
  // Prenons la date et heure du jour dans une variable
  date_default_timezone_set("Europe/Paris");

  $date = date("Y-m-d H:i:s"); // format datetime MySQL
// Fin du code PHP
?>
<!DOCTYPE html>
<html>
<head>
  <title>05 date <?= date("H:i") // heure et minute?></title>
</head>
<body>
  <h1>05 date <?= $date?></h1>
  <p>Il est <?= date("H:i:s") // heure, minute et seconde?></p>
</body>
</html>
<?php
// on peut même mettre du code PHP après la fermeture de la balise HTML
?>