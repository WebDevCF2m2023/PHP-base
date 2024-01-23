## Les fonctions, méthodes et constructions du langage en PHP 8


Vous trouverez une liste complète de fonctions, méthodes et constructions du langage en PHP 8 à cette adresse :

https://www.php.net/manual/fr/indexes.functions.php

Il n'est pas nécessaire de toutes les connaître par cœur. Il est plus important de savoir comment les utiliser et de savoir où les trouver.

### Les fonctions natives et constructions du langage

Les fonctions natives sont des fonctions qui sont déjà présentes dans le langage PHP. Elles sont utilisables sans avoir à importer une quelconque bibliothèque. Elles sont utilisables partout dans le code.

Il en va de même pour les constructions du langage.

### Les fonctions utilisateurs

Les fonctions utilisateurs sont des fonctions que vous allez créer vous-même. Elles sont utilisables après avoir importé le fichier dans lequel elles sont définies.

### Les méthodes

Les méthodes sont des fonctions qui sont définies dans une classe (POO). Elles sont utilisables après avoir instancié la classe dans laquelle elles sont définies.

#### Les autres fonctions ou méthodes

- Les fonctions anonymes
- Les fonctions fléchées
- Les fonctions récursives
- Les méthodes magiques
- Les méthodes statiques
- Les méthodes abstraites
- Les méthodes finales
- etc ...



## Liste des fonctions à connaitre

### array()
#### Création d'un tableau

La fonction `array()` permet de créer un tableau, indexé ou associatif.

Un tableau en PHP est en fait une carte ordonnée. Une carte est un type qui associe des valeurs à des clés.
Il peut être multi-dimensionnel. On peut utiliser le raccourci `[]` pour créer ce tableau. La clé est soit un nombre, soit une chaîne de caractères. On peut utiliser les clefs pour accéder aux valeurs du tableau.

```php
$tab = array("un", "deux", "trois"); // tableau indexé : clefs numériques (0, 1, 2)
$tab2 = ["a"=>"un", 2 => "deux", "val"=>"trois"]; // tableau associatif
$tab3 = ["a"=>"un", 2 => "deux", "val"=>["trois", "quatre"]]; // tableau multi-dimensionnel
echo $tab[0]." - ".$tab2["val"]; // affiche "un - trois"
echo $tab3["val"][1]; // affiche "quatre"
```

---

[Retour à la page d'accueil](../../../#menu-de-navigation)

---



ctype_digit

casting de type 

settype 

intval


