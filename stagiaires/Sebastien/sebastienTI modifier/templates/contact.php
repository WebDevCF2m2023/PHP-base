<?php include('inc/banniere.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$title</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
 <main>
<h1>Pour nous contacter</h1>
<p class="image"><img src="img/Dublin.png" width=400></p>
 <h3>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</h3>

     <form id="formulaire" name="formulaire" method="post" action="contact.php" class="contact">
    <div><label for="nom">NOM : </label><input name="nom" type="text" id="nom" size="50" placeholder="votre nom" /></div>
    <div><label for="prenom">PRENOM : </label><input name="prenom" type="text" id="prenom" size="50" maxlength="50" placeholder="votre prenom" /></div>
    <div><label for="ville">VILLE : </label><input name="ville" type="text" id="ville" size="50" placeholder="votre ville" /></div>
    <div><label for="email">E-MAIL : </label><input name="email" type="email" id="email" size="50" placeholder="votre email" /></div>
     <div><label for="message">COMMENTAIRES : </label><textarea name="message" id="message" cols="50" rows="10" placeholder="votre commentaire"></textarea></div>
 <div><input type="submit" id="submit" value="Envoyer" /></div>

</form>
  </main>
   </div>
    </body>
</html>
</body>
</html>