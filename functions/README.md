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

## `array()` ou `[]`
### Créer un tableau

*`array(mixed ...$values): array`*

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

#### Documentation
https://www.php.net/manual/fr/language.types.array.php

## `()` Casting de type
### Convertir une variable dans un autre type

Le casting de type permet de convertir une variable dans un autre type très facilement. Il suffit de mettre le type souhaité entre parenthèses devant la variable à convertir.

Sont disponibles les castings suivants :

- `(int)` ou `(integer)` : conversion en entier
- `(bool)` ou `(boolean)` : conversion en booléen
- `(float)` ou `(double)` ou `(real)` : conversion en nombre à virgule flottante
- `(string)` : conversion en chaîne de caractères
- `(array)` : conversion en tableau
- `(object)` : conversion en objet
- `(unset)` : conversion en NULL

Ce qui se produira exactement lors d'un **transtypage** entre certains types n'est pas forcément évident. 

En cas dont le retour est important ou non prévisible, il est préférable d'utiliser les fonctions de conversion explicites, telles que `intval()`, `floatval()`, `strval()` ou `boolval()`. 

La fonction `settype()` peut également être utilisée pour convertir les variables vers certains types.

```php
$chaine = "123";
$chaine2 = "coucou";
$entier = (int) $chaine; // $entier vaut 123
// $chaine2 ne contient pas que des chiffres, donc la conversion ne peut pas se faire
$entier2 = (int) $chaine2; // $entier2 vaut alors 0

```

#### Documentation
https://www.php.net/manual/fr/language.types.type-juggling.php#language.types.typecasting


## `count()`
### Compter le nombre d'éléments d'un tableau

*`count(Countable|array $value, int $mode = COUNT_NORMAL): int`*

La fonction `count()` permet de compter le nombre d'éléments d'un tableau.

```php
$tab = array("un", "deux", "trois");
echo count($tab); // affiche 3
```

#### Documentation
https://www.php.net/manual/fr/function.count.php

## `ctype_digit()`
### Vérifier si une chaîne de caractères ne contient que des chiffres

*`ctype_digit(mixed $text): bool`*

La fonction `ctype_digit()` permet de vérifier si une chaîne de caractères `string` ne contient que des chiffres.

```php
$chaine = "123";
if (ctype_digit($chaine)) {
    // si true
    echo "La chaîne ne contient que des chiffres";
} else {
    // si false
    echo "La chaîne contient autre chose que des chiffres";
}
```

#### Documentation
https://www.php.net/manual/fr/function.ctype-digit.php


## `date()`
### Formate un horodatage Unix

*`date(string $format, ?int $timestamp = null): string`*

La fonction `date()` permet de formater un horodatage Unix. Elle renvoie une chaîne de caractères formatée suivant le paramètre `format` fourni.

```php
echo date("d/m/Y"); // affiche la date du jour au format jj/mm/aaaa
```

Pour une utilisation plus avancée, il est recommandé d'utiliser la classe `DateTime` ou `DateTimeImmutable` et leurs méthodes.

#### Documentation
https://www.php.net/manual/fr/function.date.php

Les formats de date sont expliqués ici :

https://www.php.net/manual/fr/datetime.format.php

## `define()`
### Définit une constante

*`define(string $name, mixed $value, bool $case_insensitive = false): bool`*

Une constante est un identifiant (nom) qui représente une valeur simple. Comme son nom l'indique, cette valeur ne peut pas changer durant l'exécution du script (excepté les constantes magiques qui changent à chaque ligne).

Les règles de nommage des constantes sont les mêmes que pour les autres identifiants en PHP. Une constante est sensible à la casse par défaut. Par convention, les constantes sont toujours en **majuscules**, et en `snake_case`.

```php
define("CONSTANTE", "valeur");
echo CONSTANTE; // affiche "valeur"
```

On peut également utiliser le mot-clé `const` pour définir une constante.

```php
const MY_CONSTANT = "valeur";
echo MY_CONSTANT; // affiche "valeur"
```


#### Documentation
https://www.php.net/manual/fr/function.define.php et https://www.php.net/manual/fr/language.constants.syntax.php




settype 

intval


