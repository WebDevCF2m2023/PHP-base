# PHP-base 2023

## Menu de navigation
- [Présentation](#présentation)
- [Historique de PHP](#historique-de-php)
- [Installation de Apache, PHP et MySQL](#installation-de-apache-php-et-mysql)
  - [Installation de WAMP pour Windows](#installation-de-wamp-pour-windows) 
  - [Installation de XAMPP pour MacOs](#installation-de-xampp-pour-macos)
- [Les fichiers du formateur](#les-fichiers-du-formateur)
- [Principe des exercices](#principe-des-exercices)
- [Liste des fonctions à connaitre](../../tree/main/functions#les-fonctions-natives-et-constructions-du-langage-à-connaitre) - Par CŒUR !
- [Les bases de PHP](#les-bases-de-php)
  - [Les fichiers PHP](#les-fichiers-php)
  - [Les balises PHP](#les-balises-php)
  - [Les commentaires](#les-commentaires)
  - [Placement des balises PHP](#placement-des-balises-php)
- [Les variables](#les-variables)
  - [Déclaration de variables non strictement typées](#déclaration-de-variables-non-strictement-typées)
  - [Les tableaux](#les-tableaux)
    - [Les tableaux indexés](#les-tableaux-indexés)
    - [Les tableaux associatifs](#les-tableaux-associatifs)
    - [Les tableaux multidimensionnels](#les-tableaux-multidimensionnels)
- [Les variables superglobales](#les-variables-superglobales)
  - [$_GET](#_get)
- [Les constantes](#les-constantes)
- [Les conditions](#les-conditions)
  - [if](#if)
  - [else](#else)
  - [elseif() ou else if()](#elseif-ou-else-if)
  - [Les opérateurs de comparaison](#les-opérateurs-de-comparaison)
  - [Les opérateurs logiques](#les-opérateurs-logiques)
  - [Les opérateurs d'affectation](#les-opérateurs-daffectation)
  - [Les opérateurs d'incrémentation et décrémentation](#les-opérateurs-dincrémentation-et-décrémentation)
  - [Exercices et exemples if - elseif - else](#exercices-et-exemples-if---elseif---else)
  - [Autre manière de faire des conditions](#autre-manière-de-faire-des-conditions)
  - [switch](#switch)
- [Les inclusions](#les-inclusions)
  - [include](#include)
  - [require](#require)
  - [include_once](#include_once)
  - [require_once](#require_once)
- [Principe du contrôleur frontal](#principe-du-contrôleur-frontal)
  - [L'index de la racine 18-front-controller](#lindex-de-la-racine-18-front-controller)
  - [L'index du dossier public 18-front-controller/public](#lindex-du-dossier-public-18-front-controllerpublic)
    - [Le fichier accueil.php 18-front-controller/templates/accueil.php](#le-fichier-accueilphp-18-front-controllertemplatesaccueilphp)
  - [Préparation PHP du TI de fin de mois](#préparation-php-du-ti-de-fin-de-mois)
- [Les boucles](#les-boucles)
  - [for](#for)
  - [foreach](#foreach)
  - [while](#while)
  - [do while](#do-while)
- [Les fonctions](#les-fonctions)


---

### Présentation

![PHP - Par El Roubio — http://www.elroubio.net/?p=adopt_an_elephpant. Transféré de en.wikibooks à Commons par Adrignola utilisant CommonsHelper., GPL, https://commons.wikimedia.org/w/index.php?curid=11165880](https://github.com/mikhawa/PHP-base/blob/main/datas/Elephpant.png?raw=true)

**PHP**, acronyme récursif de *Hypertext Preprocessor*, est un langage de script utilisé le plus souvent côté serveur : 
 
Dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (Tous les formats de type texte : HTML, XHTML, CSS, XML, JSON, Javascript, etc...) et/ou des données (JPEG, GIF, PNG, SVG, PDF par exemple) pouvant être interprétés et rendus par un navigateur web. 

Il a été conçu pour permettre la création d'applications dynamiques, le plus souvent développées pour le Web. Etant un langage de type **script**, il n'est pas obligatoirement [compilé](## "Transformation d'un code lisible par un humain vers un code machine") pour être exécuté. Il est donc interprété à chaque appel de page par le serveur (sauf pour la compilation à la volée [JIT](## "compilation Just-in-Time") ou par gestion des caches).

PHP est le plus souvent couplé à un serveur [Apache](## "Apache est un serveur HTTP conçu pour prendre en charge de nombreux modules : interprétation des langages Perl, PHP, Python et Ruby, serveur proxy, CGI, réécriture d'URL, négociation de contenu, protocoles de communication additionnels, etc...") bien qu'il puisse être installé sur la plupart des [serveurs HTTP](## "Un serveur HTTP est un serveur informatique qui répond à des requêtes du World Wide Web sur un réseau public (Internet) ou privé (intranet) en utilisant principalement le protocole HTTP.") tels que [IIS](## "Internet Information Services (IIS) de Microsoft") ou [nginx](## "NGINX est un système HTTP asynchrone par opposition aux serveurs synchrones où chaque requête est traitée par un processus dédié"). Ce couplage permet de récupérer des informations issues d'une base de données, d'un système de fichiers (contenu de fichiers et de l'arborescence) ou plus simplement des données envoyées par le navigateur afin d'être interprétées ou stockées pour une utilisation ultérieure.

C'est un langage qui peut, comme au début de ce cours, être [peu typé](## "Typage faible :  Propriété d’un langage de programmation d’autoriser l’affectation de variable avec des valeurs ne correspondant pas à son type déclaré.") et souple, donc facile à apprendre par un débutant, mais de fait moins sécurisé et plus difficile à maintenir. 

Un typage fort est donc conseillé par la suite avec l'adoption de la [Programmation Orientée Objet](## "La programmation orientée objet est un paradigme de programmation informatique. Elle consiste en la définition et l'interaction de briques logicielles appelées objets.") (POO).

Son utilisation commence avec le traitement des formulaires puis par l'accès aux bases de données. L'accès aux bases de données est aisé une fois l'installation des modules correspondants effectuée sur le serveur. La force la plus évidente de ce langage est qu'il a permis au fil du temps la résolution aisée de problèmes autrefois compliqués, qu'il a une grande stabilité, et est devenu par conséquent un composant incontournable des offres d'hébergements.

Il est multi-plateforme : autant sur Linux qu'avec Windows (et Macintosh), il permet aisément de reconduire le même code sur un environnement à peu près semblable (quoiqu'il faille prendre en compte les règles d'arborescences de répertoires, qui peuvent changer).

Libre, gratuit, simple d'utilisation et d'installation, ce langage nécessite néanmoins une connaissance aiguë des problèmes de sécurité.

---

[Retour au menu](#menu-de-navigation)

---

### Historique de PHP

#### Les Débuts de PHP (1994-1995) :
- PHP, qui signifie à l'origine "Personal Home Page", a été créé par Rasmus Lerdorf en 1994. À l'époque, il s'agissait d'un simple ensemble de scripts écrits en [langage C](## "C est un langage de programmation impératif, généraliste et de bas niveau. Inventé au début des années 1970 pour réécrire Unix, C est devenu un des langages les plus utilisés, encore de nos jours. De nombreux langages plus modernes comme C++, C#, Java et PHP ou JavaScript ont repris une syntaxe similaire au C et reprennent en partie sa logique.") pour gérer son site web personnel.
- En 1995, PHP a été officiellement annoncé en tant que langage de script côté serveur, permettant d'ajouter des fonctionnalités dynamiques aux pages web.

#### PHP/FI (1996-1997) :
- La version 2 de PHP a introduit le support des formulaires web, des bases de données et des sessions, faisant du langage un outil plus puissant pour le développement web.
- PHP/FI (Forms Interpreter) a marqué cette époque, mais il était encore relativement simple par rapport aux versions ultérieures.

#### PHP 3 (1998) :
- PHP 3, sorti en 1998, a apporté un moteur de script remanié, supportant les modules, et a permis à PHP de fonctionner comme un module Apache.
- L'introduction de la programmation orientée objet (POO) dans PHP 3 a été une étape clé vers la modernisation du langage.

#### PHP 4 (2000) :
- PHP 4, publié en 2000, a apporté des améliorations significatives, notamment la gestion des objets améliorée, des performances accrues et une architecture de modules plus souple.
- À ce stade, PHP était déjà largement utilisé dans le monde du développement web.

#### PHP 5 (2004) :
- PHP 5, lancé en 2004, a introduit des fonctionnalités majeures telles que le support natif de la POO, la gestion des exceptions, les espaces de noms, et l'amélioration des performances grâce à la refonte du moteur Zend Engine.
- Ces changements ont permis aux développeurs de créer des applications web plus complexes et structurées.

#### PHP 7 (2015) :
- PHP 7, sorti en 2015, a apporté d'importantes améliorations de performance avec le Zend Engine 3, ainsi que de nouvelles fonctionnalités telles que le support des types de retour scalaires et la gestion améliorée des erreurs.
- PHP 7 a marqué un grand pas en avant en termes de vitesse d'exécution, faisant du langage un choix encore plus attrayant pour les développeurs.

#### PHP 8 (2020) :
- PHP 8, lancé en 2020, a introduit des fonctionnalités telles que les attributs, les arguments nommés, le JIT (Just-In-Time Compiler) pour des performances encore meilleures, et d'autres améliorations.
- Cette version a renforcé la modernité de PHP et continué à le positionner comme l'un des langages de script web les plus utilisés.

#### Aujourd'hui :
- PHP est toujours largement utilisé pour le développement web, propulsant de nombreux sites et applications.
- La communauté PHP continue de contribuer à l'évolution du langage, avec des mises à jour régulières et l'ajout de nouvelles fonctionnalités.
- PHP coexiste avec d'autres technologies web et reste un choix populaire pour sa simplicité, sa polyvalence et son support communautaire.

---

[Retour au menu](#menu-de-navigation)

---

### Installation de Apache, PHP et MySQL

Nous allons installer un package qui contient les trois composants nécessaires à la création d'un site web dynamique : Apache, PHP et MySQL (et/ou MariaDB). 

Ce package s'appelle **WAMP** (Windows, Apache, MySQL, PHP). Il existe aussi **LAMP** (Linux, Apache, MySQL, PHP) et **MAMP** (Macintosh, Apache, MySQL, PHP).

Il existe d'autres alternatives comme **XAMPP** ou **EasyPHP**.

On peut également installer les composants séparément.

---

[Retour au menu](#menu-de-navigation)

---

#### Installation de WAMP pour Windows

- Télécharger WAMP sur le site officiel : 

[https://www.wampserver.com/](https://www.wampserver.com/)

- ou sur le site avec les add-ons : 

[https://wampserver.aviatechno.net/](https://wampserver.aviatechno.net/)

Voici un petit tutoriel pour installer WAMP chez vous :

https://espritweb.fr/installer-wamp-sur-windows-10-etape-par-etape-et-sans-erreur/

---

[Retour au menu](#menu-de-navigation)

---

#### Installation de XAMPP pour MacOs

Nous préférerons l'installation de XAMPP pour MacOs, car avec Mamp, il y a des problèmes de droits d'accès, sauf en version payante.

- Télécharger XAMPP sur le site officiel :
https://www.apachefriends.org/fr/index.html pour OS X.

Voici un petit tutoriel pour installer XAMPP chez vous :

https://www.ionos.fr/digitalguide/serveur/outils/tutoriel-xampp-creer-un-serveur-de-test-local/

---

[Retour au menu](#menu-de-navigation)

---

## Les fichiers du formateur

Vous trouverez les fichiers du formateur dans le dossier `formateur/` de ce git.

---

[Retour au menu](#menu-de-navigation)

---

## Principe des exercices

**N'oubliez pas de faire un `git pull upstream main` dès le début du cours !**

Pour chaque exercice, vous devrez créer vos fichiers avec le nom demandé dans le dossier `stagiaires/{votre_prénom}/`.

Vous pouvez également utiliser ce dossier pour stocker vos fichiers de travail de `PHP-base`. 

**Ne modifiez pas les fichiers de travail de `PHP-base` qui se trouvent en dehors de votre dossier !**

N'oubliez pas de faire un `commit` et un `push` à chaque fin d'exercice.

Et si vous souhaitez que je le vois, n'oubliez pas de faire un `pull request` ! Il ne faudra pas le faire à chaque fois.

Les exercices seront reconnaissables par le logo :

| 00 | ![Exercice 00](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 00 | Énoncé de l'exercice |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------:|


---

[Retour au menu](#menu-de-navigation)

---

## Les bases de PHP

### Les fichiers PHP

Les fichiers PHP sont des fichiers texte qui contiennent du code PHP. Ils sont généralement enregistrés avec l'extension `.php`.

Le code PHP est exécuté sur le serveur, et le résultat est renvoyé au navigateur sous forme de code HTML.

---

[Retour au menu](#menu-de-navigation)

---

### Les balises PHP

Le code PHP est écrit entre les balises `<?php ?>`.

Ici, nous allons afficher le texte "Hello World" dans le navigateur :

```php
<?php
echo "Hello World";
?>
```

| 01 | ![Exercice 01](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 01 | Créez un fichier `01-hello-world.php` qui affiche "Hello World" dans le navigateur. |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------:|

---

Nous pouvons également utiliser les balises `<?= ?>`, celles-ci sont équivalentes à `<?php echo ?>` :

```php
<?="Hello World"?>
```

| 02 | ![Exercice 02](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 02 | Créez un fichier `02-hello-world-short.php` qui affiche "Hello World" dans le navigateur. |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------:|

---

Vous remarquerez que nous n'avons pas besoin du `;` lorsque nous sommes devant la fermeture de PHP `?>`.

Le `;` est nécessaire pour dire à PHP que la ligne d'instruction est terminée. C'est la première cause d'erreur d'inattention.

Il en va de même dès que nous sommes dans un fichier PHP, et nous n'avons pas besoin de fermer la balise PHP, sauf si nous avons du code HTML après. Ceci est une bonne pratique.

```php
<?php
echo "Hello World";
echo "<br>Hello friends"
?>
```

| 03 | ![Exercice 03](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 03 | Créez un fichier `03-hello-friends.php` qui affiche "Hello World<br>Hello friends" dans le navigateur. |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

### Les commentaires

Les commentaires sont des lignes de texte qui ne sont pas exécutées par le serveur.

Ils sont utilisés pour rendre le code plus lisible et pour empêcher l'exécution de certaines parties du code.

Les commentaires commencent par `//` ou `#` pour une ligne de commentaire, et `/*` et `*/` pour un bloc de commentaire.

```php
<?php
// Ceci est un commentaire sur une ligne

# Ceci est un commentaire sur une ligne

/*
Ceci est un commentaire
sur plusieurs lignes
*/

// Les bonnes pratiques :
# Ne fermez pas la balise PHP si vous êtes en fin de fichier
```

| 04 | ![Exercice 04](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 04 | Créez un fichier `04-commentaires.php` qui n'affiche rien dans le navigateur ! |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

### Placement des balises PHP

Les balises PHP peuvent être placées n'importe où dans le document HTML.

Voici un exemple de code PHP dans lequel nous plaçons les balises PHP dans différentes parties du document HTML :

```php
<?php // Début du code PHP
  // Prenons la date et heure du jour dans une variable
  // Les arguments se trouvent :
  // https://www.php.net/manual/fr/datetime.format.php
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
```

Nous avons utilisé la fonction native `date()` pour afficher la date et l'heure et nous avons stocké le résultat dans la variable `$date`.

Nous verrons plus tard comment fonctionnent les fonctions et variables.

| 05 | ![Exercice 05](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 05 | Créez un fichier `05-php-placement.php` qui affiche le temps du serveur dans une page html ! |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

## Les variables

Une variable est un **conteneur pour stocker des informations**. 

Elles sont la première brique d'un langage de programmation.

Les variables sont créées en PHP avec le signe `$` suivi du nom de la variable. 

Le nom de la variable doit **commencer** par une lettre ou un tiret bas `_` et ne peut **contenir que des lettres, des chiffres et des tirets bas `_`**. 

Les noms de variables sont sensibles à la casse (les majuscules et les minuscules sont différentes).

Les variables peuvent être de **n'importe quel type** de données, et peuvent changer de type de données après leur création (en cas de typage non strict).

Voici une liste des variables prédéfinies en PHP : [Variables prédéfinies](https://www.php.net/manual/fr/reserved.variables.php)

---

[Retour au menu](#menu-de-navigation)

---

### Déclaration de variables non strictement typées

En PHP, une variable commence par le signe `$`, suivi du nom de la variable :

```php
<?php
/*
  Déclaration de variables au nom valide non strictement typées.
  Le type de la variable est déterminé par la valeur qu'elle contient
*/

// variable valide de type string (en snake_case)
$nom_de_variable_1 = "valeur de la variable";
// variable valide de type integer (en camelCase)
$nomDeVariable2 = 123;
// variable valide de type float (en Upper CamelCase - PascalCase)
$NomDeVariable3 = 123.456;
// variable valide de type boolean
$nom_de_variable_4 = true; // ou false
// variable valide de type array (indexé)
$nom_de_variable_5 = [1, 2, 3];
// variable valide de type array (associatif)
$nomDeVariable6 = ["clef1" => "valeur1", "clef2" => "valeur2"];
// variable valide de type null
$nomDeVariable7 = null;

// affichage des variables via le débugueur var_dump()
var_dump($nom_de_variable_1, $nomDeVariable2, $NomDeVariable3, 
$nom_de_variable_4, $nom_de_variable_5, $nomDeVariable6, $nomDeVariable7);
?>
```

| 06 | ![Exercice 06](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 06 | Créez un fichier `06-php-variables-valides.php` qui affiche uniquement les variables valides |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------------------------------------------------------------------------------:|

```php
<?php
/*
  Les variables suivantes sont donc non valides !!!
*/

$Nom de Variable = 5;	// comporte des espaces
$123Nom_De_Variable	= 3;// commence par un chiffre
$toto@mailcity.com = [];	//caractère spécial @
$Nom-de-variable = "coucou";	// signe - interdit (en kebab-case)
nom_de_variable	= "Yes";   // ne commence pas par $

?>
```
| 07 | ![Exercice 07](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 07 | Créez un fichier `07-php-variables-non-valides.php` qui affiche également les variables non valides ! |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------:|

Il existe d'autres types de variables, mais nous les verrons plus tard.

---

[Retour au menu](#menu-de-navigation)

---

### Les tableaux

Un tableau est une variable qui peut contenir plusieurs valeurs.

Nommés également `array`, ce sont des structures de données fondamentales en PHP, et ils jouent un rôle crucial dans le développement de programmes dynamiques et flexibles.

Les tableaux peuvent contenir des valeurs de type string, integer, float, boolean, array, object, null, etc...

Les tableaux peuvent être indexés numériquement, ou associativement. Ils peuvent être multidimensionnels, en utilisant des tableaux dans des tableaux :

https://www.php.net/manual/fr/language.types.array.php

Ils permettent de stocker des données de manière structurée, et peuvent être manipulés facilement, grâce notamment aux fonctions dédiées à la manipulation des tableaux :

https://www.php.net/manual/fr/ref.array.php

Il existe plusieurs manières de créer un tableau :

```php
<?php
// tableau indexé numériquement
$tab1 = [1, 2, 3];
// tableau indexé numériquement
$tab2 = array(1, 2, 3);
// tableau associatif
$tab3 = ["clef1" => "valeur1", "clef2" => "valeur2"];
// tableau associatif
$tab4 = array("clef1" => "valeur1", "clef2" => "valeur2");
// tableau mixte
$tab5 = ["valeur1", "clef2" => "valeur2"];
// tableau multidimensionnel
$tab6 = ["clef1" => ["clef1.1" => "valeur1.1"], "clef2" => "valeur2"];

// affichage des tableaux via le débugueur var_dump()
var_dump($tab1, $tab2, $tab3, $tab4, $tab5, $tab6);
?>
```

---

[Retour au menu](#menu-de-navigation)

---

#### Les tableaux indexés

Les tableaux indexés numériquement sont des tableaux dont les clés sont des entiers attribués automatiquement à partir de 0. Ce sont les tableaux les plus simples, nommés également `liste`.

```php
<?php
// tableau indexé numériquement
$tab1 = [1, 2, 3];

// affichage du tableau via le débugueur var_dump()
var_dump($tab1);
// affichera :
// array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
?>
```

Pour afficher une valeur d'un tableau indexé, nous utilisons la clé de la valeur :

```php
<?php
// tableau indexé numériquement
$tab1 = [1, 2, 3];

// affichage de la valeur du tableau indexé numériquement
echo $tab1[0]; // affichera 1
?>
```

| 20 | ![Exercice 20](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 20 | Créez un fichier nommé `20-exe-array-index.php` et affichez avec des `echo` les données de la variable `$monTab = ['un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix'];` séparées par un `<hr>` à chaque ligne |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

#### Les tableaux associatifs

Les tableaux associatifs sont des tableaux dont les clés sont des chaînes de caractères.

```php
<?php
// tableau associatif
$tab3 = ["clef1" => "valeur1", "clef2" => "valeur2"];

// affichage du tableau via le débugueur var_dump()
var_dump($tab3);
// affichera :
// array(2) { ["clef1"]=> string(7) "valeur1" ["clef2"]=> string(7) "valeur2" }
?>
```

| 21 | ![Exercice 21](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 21 | Créez un fichier nommé `21-exe-array-assoc.php` et affichez avec des `echo` les données de la variable `$monTabAssoc =  ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique","dateDeNaissance" => "1951-03-02"];` séparées par un `<hr>` à chaque ligne |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| 


---

[Retour au menu](#menu-de-navigation)

---

#### Les tableaux multidimensionnels

Les tableaux multidimensionnels sont des tableaux qui contiennent des tableaux. Ils sont souvent utilisés pour représenter des données complexes.

```php
<?php
// tableau multidimensionnel représentant des données de stagiaires web2023

$webdev_2023_2024 = [
    "WEBDEV01" => [
        "Nom" => "Tekfi",
        "Prenom" => "Laura",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Laura/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Laura/prefo/",
            "github" => "https://github.com/LauraTcf2",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Eliya Bofana",
        "Prenom" => "Tevin",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Tevin/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Tevin/prefo/",
            "github" => "https://github.com/Tevin01",
        ],
    ],
    "WEBDEV03" => [
        "Nom" => "Hoater",
        "Prenom" => "Simona",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Simona/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Simona/",
            "github" => "https://github.com/simonaiuliana",
        ],
    ],
    "WEBDEV04" => [
        "Nom" => "Arpaci",
        "Prenom" => "Emrah",
        "Sites" => [
            "SitePerso" => "https://2023.webdev-cf2m.be/Emrah/",
            "SitePreformation" => "https://2023.webdev-cf2m.be/Emrah/prefowebsite/",
            "github" => "https://github.com/hack86bx",
        ],
    ],
    // ... etc
];

var_dump($webdev_2023_2024);

```

| 22 | ![Exercice 22](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 22 | Créez un fichier nommé `22-exe-array-multi.php` et affichez avec un `echo` les données de la variable `$webdev_2023_2024` ci dessus pour nous afficher le Github de Laura |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| 

---

[Retour au menu](#menu-de-navigation)

---

## Les variables superglobales

Les variables superglobales sont des variables prédéfinies qui sont toujours accessibles, quel que soit le contexte.

En PHP, les variables superglobales sont des tableaux associatifs.

https://www.php.net/manual/fr/language.variables.superglobals.php

### $_GET

`$_GET` est une variable superglobale qui est utilisée pour collecter des données de formulaires, après avoir envoyé un formulaire avec la méthode "get".

**On l'utilise surtout pour récupérer des données dans l'URL.**

La manière d'écrire des variables get dans l'URL est la suivante : `?section=contact&page=3&nom=dupont`

```php
<?php
// affiche le contenu de la variable superglobale $_GET
var_dump($_GET);
?>
```

| 13 | ![Exercice 13](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 13 | Créez un fichier `13-GET.php` et modifiez le switch pour afficher votre contenu pour les rubriques : Contact - Livre d'or - Actualités.  |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:----------------------------------------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

## Les constantes

Une constante est un identifiant (un nom) qui représente une valeur simple. Comme son nom l'indique, cette valeur ne peut pas changer durant l'exécution du script (sauf pour les constantes magiques qui changent à chaque fois).

Une constante est définie avec la fonction `define()` ou avec l'opérateur `const`.

Une fois qu'une constante est définie, elle ne peut pas être modifiée ou supprimée !

Les constantes sont utiles pour stocker des informations qui ne changent pas tout au long de l'exécution du script, comme la version du script ou le nom d'un auteur.

**Les paramètres de configuration sont souvent stockés dans des constantes !**

Les constantes sont **globales**. Elles peuvent être utilisées dans toute la page. Attention en orienté objet, les constantes de classe sont définies dans la classe et sont donc accessibles autrement.

Les bonnes pratiques principales de nommage des constantes sont les suivantes :

- Les constantes sont écrites en majuscules.
- Les constantes sont écrites en snake_case.


Avec define() :

```php  
<?php
// Définition de la constante avec define()
define("NOM_DE_LA_CONSTANTE", "valeur de la constante");

// Affichage de la constante
echo NOM_DE_LA_CONSTANTE;
?>
```

Avec const :

```php
<?php
// Définition de la constante avec const
const NOM_DE_LA_CONSTANTE = "valeur de la constante";

// Affichage de la constante
echo NOM_DE_LA_CONSTANTE;
?>
```

---

[Retour au menu](#menu-de-navigation)

---

### Les conditions

Les conditions sont la deuxième brique fondamentale d'un langage de programmation, elles permettent d'évaluer l'état de propositions, de variables, etc.

#### if

`if(condition) { action si condition == true }`

Le **if** va permettre de vérifier si une condition est vraie (true)

```php
$a = true;
if($a){
  echo "ok";
}
```

---

[Retour au menu](#menu-de-navigation)

---


#### else

`else { action si condition d'un if préalable est false}`

```php
$a = false;
if($a){
  echo "ok";
}else{
  echo "ko";
}
```

---

[Retour au menu](#menu-de-navigation)

---

#### elseif() ou else if()

`elseif(){sinon si true} ou else if(sinon si true){}`

```php
$a = mt_rand(0,2);
if($a==0){
  echo "Pas de chance, tu perds un point";
// sinon si
}elseif($a==1){
  echo "Super, un point gagné !";
}else{
  echo "Magnifique, tu gagnes encore 2 points";
}
```

---

[Retour au menu](#menu-de-navigation)

---

#### Les opérateurs de comparaison

Les opérateurs de comparaison permettent de comparer deux valeurs.

| Opérateur | Description                                                |
|-----------|------------------------------------------------------------|
| ==        | Égal à                                                     |
| ===       | Égal à et du même type ou strictement égal                 |
| != ou <>  | Différent de                                               |
| !==       | Différent de ou de type différent ou strictement différent |
| <         | Inférieur à                                                |
| >         | Supérieur à                                                |
| <=        | Inférieur ou égal à                                        |
| >=        | Supérieur ou égal à                                        |

---

[Retour au menu](#menu-de-navigation)

---

#### Les opérateurs logiques

Les opérateurs logiques permettent de combiner plusieurs conditions.

| Opérateur | Description | Détails                                                                                                   |
|-----------|-------------|-----------------------------------------------------------------------------------------------------------|
| and       | ET          | toutes les conditions doivent être vraies                                                                 |
| or        | OU          | Une des conditions doit être vraie                                                                        |
| xor       | OU exclusif | Une des conditions doit être vraie, mais pas les deux, peu utilisé sans () car peut provoquer des erreurs |
| !         | NON         | Inverse la condition (true devient false - false devient true)                                            |


Lien vers les opérateurs logiques :

https://www.php.net/manual/fr/language.operators.logical.php

---

[Retour au menu](#menu-de-navigation)

---



#### Les opérateurs d'affectation

Les opérateurs d'affectation permettent d'affecter une valeur à une variable.

| Opérateur | Description | Détails                                                                                                   |
|-----------|-------------|-----------------------------------------------------------------------------------------------------------|
| =         | Affectation | Affecte une valeur à une variable                                                                          |
| +=        | Affectation et addition | Ajoute la valeur à la variable et affecte le résultat à la variable |
| -=        | Affectation et soustraction | Soustrait la valeur à la variable et affecte le résultat à la variable |
| *=        | Affectation et multiplication | Multiplie la valeur à la variable et affecte le résultat à la variable |
| /=        | Affectation et division | Divise la valeur à la variable et affecte le résultat à la variable |
| %=        | Affectation et modulo | Divise la valeur à la variable et affecte le reste à la variable |
| .=        | Affectation et concaténation | Concatène la valeur à la variable et affecte le résultat à la variable |

##### +=

équivaut à "ajouter à la valeur de"

```php
$a=1;
// manière longue
$a= $a+2;
// manière courte
$a+=2;
```

##### -=

équivaut à "retirer à la valeur de"

```php
$a=1;
// manière longue
$a= $a-2;
// manière courte
$a-=2;
```

##### .=

Signe de concaténation

```php
.= concaténation
$a ="coucou";
$a .=" les amis";
```


Lien vers les opérateurs d'affectation :

https://www.php.net/manual/fr/language.operators.assignment.php

---

[Retour au menu](#menu-de-navigation)

---

#### Les Opérateurs d'incrémentation et décrémentation

Les opérateurs d'incrémentation et décrémentation permettent d'augmenter ou diminuer la valeur d'une variable. Ce sont donc des opérateurs d'affectation également.

| Opérateur | Description | Détails                                                                                                   | Exemple | Résultat |  
|-----------|-------------|-----------------------------------------------------------------------------------------------------------|---------|----------|
| ++        | Incrémentation | Incrémente la valeur de 1 | $a = 1; $a++; | 2 |        
| --        | Décrémentation | Décrémente la valeur de 1 | $a = 1; $a--; | 0 |
| +=        | Incrémentation | Incrémente la valeur de la variable | $a = 1; $a+=2; | 3 |
| -=        | Décrémentation | Décrémente la valeur de la variable | $a = 1; $a-=2; | -1 |
| *=        | Incrémentation | Multiplie la valeur de la variable | $a = 1; $a*=2; | 2 |
| /=        | Décrémentation | Divise la valeur de la variable | $a = 1; $a/=2; | 0.5 |
| %=        | Incrémentation | Divise la valeur de la variable et affecte le reste à la variable | $a = 1; $a%=2; | 1 |
| .=        | Concaténation | Concatène la valeur de la variable | $a = 1; $a.=2; | 12 |

Attention à l'ordre des opérateurs, car il peut y avoir des erreurs d'interprétation :

```php
<?php
$a = 1;
echo $a++; // affichera 1
echo $a; // affichera 2
echo ++$a; // affichera 3
echo $a; // affichera 3
echo $a--; // affichera 3
echo $a; // affichera 2
echo --$a; // affichera 1
echo $a; // affichera 1
?>
```

Lien vers les opérateurs d'incrémentation et décrémentation :

https://www.php.net/manual/fr/language.operators.increment.php

---

[Retour au menu](#menu-de-navigation)

---


#### Exercices et exemples if - elseif - else

| 09 | ![Exercice 09](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 09 | Créez un fichier `09-eau.php` qui affiche suvant une température allant de -100 à 200 °, l'état de l'eau (solide en dessous de 0 compris) (liquide entre 1 et 99°) (gazeux à partir de 100°) : L'eau est solide à -7° - L'eau est liquide à 33 ° - L'eau est gazeuse à 105°|
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------:|


| 10 | ![Exercice 10](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 10 | Créez un fichier `10-info.php` qui affiche la configuration complète du serveur Apache, PHP, SQL ... |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:----------------------------------------------------------------------------------------------------:|

```php
<?php
phpinfo();
```


| 11 | ![Exercice 11](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 11 | Créez un fichier `11-conditions.php` qui affiche suivant un chiffre au hasard entre 0 et 10, vous affiche : Si il est de 0 à 3 : EXACTEMENT : "{chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{chiffre} : Peut mieux faire" , Si de 6 à 7 : "{chiffre} : Bien", Sinon "{chiffre} : Très bien" |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|

```php
// $point vaut un entier au hasard entre 0 et 10
$point = mt_rand(0, 10);

if($point <= 3)
{
    // AVEC echo, les variables entre "" sont interprétées, pas celles entre simple ',
    // pour mettre des chaînes de caractères à la suite les unes des autres, on utilise le "."
    // Cela se nomme la concaténation
    // la virgule fonctionne également, mais n'est pas recommandée
    echo '$point vaut '.
        "$point : Nul, étudie la prochaine fois.";
}
// 4 ou 5, pourrait être $point <= 5
elseif($point<6)
{
    echo '$point vaut '.
        "$point : peut mieux faire.";
}
// 6 ou 7, pourrait être <=7
elseif ($point<8)
{
    echo '$point vaut '.
        "$point : Bien.";
}
// sinon => 8,9,10
else{
    echo '$point vaut '.
        "$point : Très bien.";
}
```

| 23 | ![Exercice 23](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 23 | Créez une copie du fichier `23-operateurs-logiques.php` dans votre espace stagiaire, puis vérifiez les variables telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:----------------------------------------------------------------------------------------------------------------------------------------------------------:|


| 24 | ![Exercice 24](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 24 | Créez une copie du fichier `24-operateurs-comparaison.php` dans votre espace stagiaire, puis vérifiez les variables telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-------------------------------------------------------------------------------------------------------------------------------------------------------------:|



---

[Retour au menu](#menu-de-navigation)

---



#### Autre manière de faire des conditions

```php
// $point vaut un entier au hasard entre 0 et 10
$point = mt_rand(0, 10);

// mode fermeture de balises if
if($point <= 3):
    echo '$point vaut '.
        "$point : Nul, étudie la prochaine fois.";
// mode fermeture de balises elseif
elseif($point<6):
    echo '$point vaut '.
        "$point : peut mieux faire.";
// mode fermeture de balises elseif
elseif ($point<8):
    echo '$point vaut '.
        "$point : Bien.";
// mode fermeture de balises else
else:
    echo '$point vaut '.
        "$point : Très bien.";
// mode fermeture de balises endif
endif;
```

Un exemple de l'utilisation des balises plutôt que les accolades :

```php
<?php
for($i=0;$i<10;$i++){
  if($i%2==0){
    echo "Pair :$i";
  }else{
    echo "Impair :$i";
  }
}
echo "<br>";
for($i=0;$i<10;$i++):
  if($i%2==0):
    echo "Pair :$i";
  else:
    echo "Impair :$i";
  endif;
endfor;
?>
```

---

[Retour au menu](#menu-de-navigation)

---

#### switch

Le switch est une autre manière de faire des conditions, il est plus rapide que les if/elseif/else. Mais il ne permet que de vérifier une seule variable, de manière non stricte et seulement son égalité.

*! le switch de JavaScript est stricte contrairement à celui de PHP !*

Pour utiliser un équivalent du switch fortement typé, on peut utiliser match() à partir de PHP 8 : 

https://www.php.net/manual/fr/control-structures.match.php

Ou simplement nos bons vieux if/elseif/else.


```php
$variable = 3;

// vérifie la variable $variable
switch($variable){
  // si $variable == 1
  case 1:
    echo "1";
    // équivalent à la fermeture d'accolade ou endif
    break;
  case 2:
    echo "2";
    break;
  case 3:
    echo "3";
    break;
    // SINON = else
  default:
    echo "default";
    // inutile car dernière action : break;
}
```

Exemple avec des chaînes de caractères :

```php
<?php
// donne un int (integer) de 1 à 4
$hasard1 = mt_rand(1,4);

// si $hasard vaut string "1" non strictement (on ne vérifie pas le type)
if($hasard1=="1"){
    echo "$hasard1 - Première place, bravo";
}elseif($hasard1=="2"){
    echo "$hasard1 - Deuxième place, bravo";
}elseif($hasard1=="3"){
    echo "$hasard1 - Troisième place, courage";
}else{
    echo "$hasard1 - Quatrième place, courage";
}
?>
<hr>
<?php

// idem en switch

switch($hasard1){
    case "1": // si
        echo "$hasard1 - Première place, bravo";
        break;
    case "2": // sinon si
        echo "$hasard1 - Deuxième place, bravo";
        break;
    case "3": // sinon si
        echo "$hasard1 - Troisième place, courage";
        break;
    default: // sinon
        echo "$hasard1 - Quatrième place, courage";
}

?>
    <hr>
<?php

// switch avec valeur par défaults

switch($hasard1){
    case "1":
    case "2":
    case "3":
        echo "$hasard1 - Chiffre entre 1 et 3";
        break;
    default: // sinon
        echo "$hasard1 - Chiffre 4";
}

```

| 12b | ![Exercice 12b](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 12 | Créez un fichier `12b-switch.php` qui affiche EXACTEMENT l'exercice 11 en utilisant un switch |
|-----|:-----------------------------------------------------------------------------------------------------------:|:-----------:|:---------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---



## Les inclusions

Les expressions de langage _include | include_once | require | require_once_ permettent d'inclure et d'exécuter le fichier spécifié en argument.

---

[Retour au menu](#menu-de-navigation)

---

### include

`include` inclut et exécute le fichier spécifié en argument. Si le fichier n'existe pas, il affiche une erreur et continue l'exécution du script. On peut inclure plusieurs fois le même fichier.

```php
<?php
// inclut et exécute le fichier "menu.php"
include("menu.php");
?>
<p>ma page html, affichée même en cas d'erreur</p>
<?php   
// inclut et exécute le fichier "menu.php"
include("menu.php");
?>
```

---

[Retour au menu](#menu-de-navigation)

---

### include_once

`include_once` inclut et exécute le fichier spécifié en argument. Si le fichier n'existe pas, il affiche une erreur et continue l'exécution du script. On ne peut inclure **qu'une seule fois** le même fichier.

```php
<?php
// inclut et exécute le fichier "menu.php"
include_once("menu.php");
?>
<p>ma page html, affichée même en cas d'erreur</p>
<?php   
// n'affiche rien, le fichier "menu.php" a déjà été inclus
include_once("menu.php");
?>
```

---

[Retour au menu](#menu-de-navigation)

---

### require

`require` inclut et exécute le fichier spécifié en argument. Si le fichier n'existe pas, il affiche une erreur et **stoppe** l'exécution du script. On peut inclure plusieurs fois le même fichier.

```php
<?php
// inclut et exécute le fichier "menu.php"
require("menu.php");
?>
<p>ma page html, non affichée en cas d'erreur du require</p>
<?php   
// inclut et exécute le fichier "menu.php"
require("menu.php");
?>
```

---

[Retour au menu](#menu-de-navigation)

---

### require_once

`require_once` inclut et exécute le fichier spécifié en argument. Si le fichier n'existe pas, il affiche une erreur et **stoppe** l'exécution du script. On ne peut inclure **qu'une seule fois** le même fichier.

```php
<?php
// inclut et exécute le fichier "menu.php"
require_once("menu.php");
?>
<p>ma page html, non affichée en cas d'erreur du require</p>
<?php   
// n'affiche rien, le fichier "menu.php" a déjà été inclus
require_once("menu.php");
?>
```

---

[Retour au menu](#menu-de-navigation)

---

## Principe du contrôleur frontal

Le principe du contrôleur frontal est de centraliser toutes les requêtes vers un seul et même fichier, qui va ensuite rediriger vers les bons fichiers.

En général, on utilise un fichier `index.php` qui va rediriger vers les bons fichiers en fonction des paramètres GET.

Dans le dossier `18-front-controller`, On aura une architecture de fichiers comme celle-ci :

```
.
├── index.php       -> redirige vers le dossier "public"
│
├── /public
│   ├── index.php   -> contrôleur frontal
│   ├── /css
│   │   └── style.css
│   ├── /js
│   │   └── script.js
│   └── /img
│       └── favicon-32x32.png
│
├── /templates      -> fichiers inclus par le contrôleur frontal
│   ├── /inc        -> fichiers inclus par les fichiers du dossier "templates"
│   │   ├── menu.php
│   │   └── footer.php
│   ├── accueil.php
│   ├── actualites.php
│   ├── contact.php
│   ├── mentions-legales.php
│   └── page-404.php

```

Le fichier `index.php` à la racine du site va uniquement nous rediriger vers le fichier `index.php` du dossier `public`.

Le dossier `public` contient tous les fichiers accessibles par le navigateur. C'est le dossier racine du site. C'est là que l'on va inclure les fichiers `css`, `js`, `img` et le contrôleur frontal `index.php`.

Le dossier `templates` contient tous les fichiers qui seront inclus dans le fichier `index.php`.

Le dossier `inc` contient tous les fichiers qui seront inclus dans les fichiers du dossier `templates`.

La racine d'un site, par exemple `https://www.cf2m.be`, est en réalité pointé vers un dossier `public`, qui est le seul dossier accessible par le navigateur. C'est ce qu'on appelle le `DocumentRoot`. On utilise cette technique pour éviter que les utilisateurs puissent accéder aux fichiers sensibles du site.

---

[Retour au menu](#menu-de-navigation)

---

### L'index de la racine 18-front-controller

C'est un fichier `index.php` qui va rediriger vers le dossier `public`.
Il est non obligatoire et pourrait être remplacé par un fichier `.htaccess` qui redirigerait directement vers le dossier `public`.

```php
<?php
// on redirige vers le dossier "public" en envoyant un header "Location"
header("Location: public");
// on arrête l'exécution du script (bonne pratique)
exit;
```

documentation : https://www.php.net/manual/fr/function.header.php

---

[Retour au menu](#menu-de-navigation)

---

### L'index du dossier public 18-front-controller/public

Nommé **Contrôleur Frontal**, ce fichier nommé `index.php` va rediriger les visiteurs vers les bons fichiers en fonction des paramètres GET.

```php
<?php
/*
 * Front Controller
 */

// si le paramètre "section" est défini dans l'URL
if(isset($_GET['section'])){
    // on va utiliser un switch pour rediriger vers le bon fichier
    switch($_GET['section']){
        case 'contact':
            # on inclut le fichier contact.php en suivant l'arborescence de fichiers
            include('../templates/contact.php');
            break;
        case 'rgpd':
            include('../templates/mentions-legales.php');
            break;
        case 'actualites':
            include('../templates/actualites.php');
            break;
        # Si aucune des sections n'est valide, on affiche la page 404
        default:
            include('../templates/page-404.php');
    }
// si le paramètre "section" n'est pas défini dans l'URL
}else{
    // on inclut le fichier accueil.php en suivant l'arborescence de fichiers
    include('../templates/accueil.php');
}

```

---

[Retour au menu](#menu-de-navigation)

---

#### Le fichier accueil.php 18-front-controller/templates/accueil.php

C'est la partie du template qui représente notre page d'accueil.

On y inclut avec `include` (ou n'importe quelle des 4 fonctions d'importation de fichier en `PHP`), les fichiers `menu.php` et `footer.php` qui se trouvent dans le dossier `inc` __en utilisant les chemins relatifs depuis le fichier dans lequel l'appel est fait__ (On peut aussi utiliser des chemins absolus, ou des chemins relatifs venant d'un parent, mais ne nous compliquons pas la vie pour le moment !).

__!!! Les chemins vers les fichiers front-end, images, css, javascript, etc... partent TOUS du CONTRÔLEUR FRONTAL, donc du dossier `public/` !__

```php
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, 
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <title>Bienvenue sur 18-front-controller</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <h1>Bienvenue sur 18-front-controller</h1>
<?php include 'inc/menu.php'; ?>
    <p>Vous êtes sur la page d'accueil</p>
<?php include 'inc/footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>
```

Tous les autres fichiers du dossier `templates` sont construits de la même manière. Ils incluent le menu et le footer.

Pour le moment le site n'est pas réellement fonctionnel, car il n'y a pas de contenu dynamique.

Il est un exemple de structure de site pour le TI de fin du mois.

---

[Retour au menu](#menu-de-navigation)

---

### Préparation PHP du TI de fin de mois

| 19 | ![Exercice 19](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 19 | Créez un dossier nommé `19-my-front-controller.php` et recréez votre __site de préformation__  en utilisant une technique proche du `18-front-controller`, contenant un dossier `public` avec un contrôleur frontal et un dossier `templates`. Utilisez un .css externe au minimum, et quelques images (libres et gratuites !) |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---



## Les boucles

Les boucles permettent de répéter des instructions un certain nombre de fois. Il existe plusieurs types de boucles en PHP.

Un grand principe des boucles est de répéter des instructions tant qu'une condition est vraie. Elles ne doivent pas être infinies, sinon le serveur finira par planter.

Les boucles sont très utiles pour parcourir des tableaux, des objets, des fichiers, des dossiers, des bases de données, etc...

Les fonctions natives (ou structure de langage) en PHP pour faire des boucles sont :

- `while`
- `do while`
- `for`
- `foreach`

Les fonctions récursives sont également des boucles, mais nous les verrons plus tard.

---

[Retour au menu](#menu-de-navigation)

---


### for

La boucle `for` est la plus structurée, elle permet de répéter des instructions un certain nombre de fois. Elle est composée de 3 parties :

- l'initialisation de la variable de boucle
- la condition de sortie de boucle liée à la variable de boucle
- l'incrémentation (ou décrémentation) de la variable de boucle

On exécute les instructions entre les accolades tant que la condition de sortie de boucle est vraie.

```php
for(initialisation; condition de sortie de boucle; incrémentation){
  // instructions
}
```



```php
<?php

for(
    // on initialise la variable $i à 0 (premier tour de boucle)
    $i=0;
    // on définit la condition de sortie de boucle (vérifiée à chaque tour de boucle)
    $i<=10;
    // on incrémente $i de 1 à chaque tour de boucle (dernière action du tour de boucle)
    $i++
){
    echo "$i ";
}
// Affiche : 0 1 2 3 4 5 6 7 8 9 10
?>
```

| 25 | ![Exercice 25](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 25 | Créez une copie du fichier `25-boucle-for.php` dans votre espace stagiaire, puis créez les boucles for telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:------------------------------------------------------------------------------------------------------------------------------------------------:|

Le résultat de l'exercice 25 devrait ressembler à ceci :

![exercice 25](https://raw.githubusercontent.com/WebDevCF2m2023/PHP-base/main/datas/screenshot-php-base_8080-2024.01.09-15_54_20.png)

--- 

[Retour au menu](#menu-de-navigation)

---

### foreach

La boucle `foreach` est la plus utilisée, elle permet de parcourir un tableau ou un objet. 

Elle est composée de 2 parties minimum :

- la variable qui contient le tableau ou l'objet à parcourir
- la variable qui contient la valeur de l'élément du tableau ou de l'objet à chaque tour de boucle

```php
foreach($tableau as $element){
  // instructions
}
```

```php
<?php

$fruits = ['pomme', 'poire', 'banane', 'fraise', 'cerise'];

foreach($fruits as $fruit){
    echo "$fruit ";
}
// Affiche : pomme poire banane fraise cerise
?>
```

On peut également récupérer la clé de chaque élément du tableau ou de l'objet à chaque tour de boucle.

```php
foreach($tableau as $clef => $element){
  // instructions
}
```

```php
<?php

$fruits = ['pomme', 'poire', 'banane', 'fraise', 'cerise'];

foreach($fruits as $clef => $fruit){
    echo "$clef : $fruit ";
}
// Affiche : 0 : pomme 1 : poire 2 : banane 3 : fraise 4 : cerise
?>
```

| 26 | ![Exercice 26](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 26 | Créez une copie du fichier `26-boucle-foreach.php` et `array.php` dans votre espace stagiaire, puis créez les boucles foreach telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------------------------------------------------------------------------:|

Le résultat de l'exercice 26 devrait ressembler à ceci :

![exercice 26](https://raw.githubusercontent.com/WebDevCF2m2023/PHP-base/main/datas/screenshot-php-base-2023-2024-2024.01.11-20_24_37.png)

---

[Retour au menu](#menu-de-navigation)

--- 

### while

La boucle `while` permet de répéter des instructions tant qu'une condition est vraie. C'est la boucle la plus simple et la plus souple.

Attention, si la condition est toujours `true`, la boucle sera infinie et le serveur finira par planter.

```php
while(condition){
  // instructions
}
```

```php
<?php

$i = 0;

while($i<=10){
    echo "$i ";
    $i++;
}
// Affiche : 0 1 2 3 4 5 6 7 8 9 10
?>
```

| 27 | ![Exercice 27](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 27 | Créez une copie du fichier `27-boucle-while.php`  dans votre espace stagiaire, puis créez les boucles while telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------------------------------------------------------:|  


---

[Retour au menu](#menu-de-navigation)

--- 

### do while

La boucle `do while` est similaire à la boucle `while`, mais elle exécute les instructions au moins une fois, même si la condition est fausse.

Attention, si la condition est toujours `true`, la boucle sera infinie et le serveur finira par planter.

```php
do{
  // instructions
}while(condition);
```

```php

$i = 0;

do{
    echo "$i ";
    $i++;
}while($i<=10);
// Affiche : 0 1 2 3 4 5 6 7 8 9 10

// même si la condition est fausse, les instructions sont exécutées au moins une fois
$page = 1;
$pageNb = 1;
echo "Page";
do{
    echo " $page";
    $page++;
}while($page<=$pageNb);
// Affiche : Page 1

echo "<br>";

// si on a plus de pages :
$page = 1;
$pageNb = 4;
echo "Page";
do{
    echo " $page";
    $page++;
}while($page<=$pageNb);
// Affiche : Page 1 2 3 4

?>
```


| 28 | ![Exercice 28](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 28 | Créez une copie du fichier `28-boucle-do-while.php`  dans votre espace stagiaire, puis créez les boucles while telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------------------------------------------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

--- 

## Les fonctions

Une fonction est un bloc de code qui peut être réutilisé à plusieurs endroits dans un script.

Une fonction peut être appelée plusieurs fois, elle peut prendre des paramètres et renvoyer une valeur.

Il existe des fonctions prédéfinies en PHP, comme `echo()` ou `print()`, qu'on nomme aussi fonctions natives ou même structures de langage pour les plus courantes.

Il existe aussi des fonctions définies par l'utilisateur, qu'on nomme fonctions personnalisées.

https://www.php.net/manual/fr/language.functions.php

A continuer...

--- 

[Retour au menu](#menu-de-navigation)

---


