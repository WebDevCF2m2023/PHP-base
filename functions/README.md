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

### `array()` ou `[]`
#### Créer d'un tableau

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

##### Documentation
https://www.php.net/manual/fr/language.types.array.php

### `count()`
#### Compter le nombre d'éléments d'un tableau

La fonction `count()` permet de compter le nombre d'éléments d'un tableau.

```php
$tab = array("un", "deux", "trois");
echo count($tab); // affiche 3
```

##### Documentation
https://www.php.net/manual/fr/function.count.php

### `ctype_digit()`
#### Vérifier si une chaîne de caractères ne contient que des chiffres

La fonction `ctype_digit()` permet de vérifier si une chaîne de caractères `string` ne contient que des chiffres.

```php
$chaine = "123";
if (ctype_digit($chaine)) {
    echo "La chaîne ne contient que des chiffres";
} else {
    echo "La chaîne contient autre chose que des chiffres";
}
```

##### Documentation
https://www.php.net/manual/fr/function.ctype-digit.php

---

[Retour à la page d'accueil](../../../#menu-de-navigation)

---




casting de type 

settype 

intval


