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

---

[Retour à la page d'accueil](../../../#menu-de-navigation)

---

### Les fonctions natives et constructions du langage à connaitre

- Les balises d'ouverture et fermeture du script php

Lorsque PHP traite un fichier, il cherche les balises d'ouverture et de fermeture () qui délimitent le code qu'il doit interpréter.

De cette manière, cela permet à PHP d'être intégré dans toutes sortes de documents, car tout ce qui se trouve en dehors des balises ouvrantes / fermantes de PHP est ignoré.

```php
<?php
// code PHP
?>
```

- Les commentaires

Les commentaires permettent d'ajouter des informations dans le code source. Ils sont ignorés par l'interpréteur PHP.

```php
// Ceci est un commentaire sur une ligne

# Ceci est un autre commentaire sur une ligne

/*
Ceci est un commentaire
sur plusieurs lignes
*/
```

- echo *(structure du langage)*

Affiche toutes les chaînes de caractères qui lui sont passées en paramètres.

```php
<?php
echo "bonjour à tous";
?>
```

Version courte avec balise courte : `<?= "bonjour à tous"; ?>`

- print *(structure du langage)*

Affiche toutes les chaînes de caractères qui lui sont passées en paramètres.

```php
<?php
print "bonjour à tous";
?>
```

ctype_digit

casting de type 

settype 

intval


