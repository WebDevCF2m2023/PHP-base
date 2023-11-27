# PHP-base 2023

## Menu de navigation
- [Présentation](#présentation)
- [Historique de PHP](#historique-de-php)
- [Installation de Apache, PHP et MySQL](#installation-de-apache-php-et-mysql)
  - [Installation de WAMP pour Windows](#installation-de-wamp-pour-windows) 
  - [Installation de XAMPP pour MacOs](#installation-de-xampp-pour-macos)
- [Principe des exercices](#principe-des-exercices)
- [Liste des fonctions à connaitre](../../tree/main/functions#les-fonctions-natives-et-constructions-du-langage-à-connaitre) - Par CŒUR !
- [Les bases de PHP](#les-bases-de-php)
  - [Les fichiers PHP](#les-fichiers-php)
  - [Les balises PHP](#les-balises-php)
  - [Les commentaires](#les-commentaires)
  - [Placement des balises PHP](#placement-des-balises-php)
  - [Les variables](#les-variables)
    - [Déclaration de variables non strictement typées](#déclaration-de-variables-non-strictement-typées)
    

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

### Les variables

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

#### Déclaration de variables non strictement typées

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

### Les conditions

Les conditions sont la deuxième brique fondamentale d'un langage de programmation, elles permettent d'évaluer l'état de propositions, de variables etc...

#### if(condition) { action si condition == true }

Le **if** va permettre de vérifier si une condition est vraie (true)

```php
$a = true;
if($a){
  echo "ok";
}
```

#### else {action si condition d'un if préalable est false}

```php
$a = false;
if($a){
  echo "ok";
}else{
  echo "ko";
}
```

#### elseif(){sinon si true} ou else if(sinon si true){}

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

| 09 | ![Exercice 09](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 09 | Créez un fichier `09-eau.php` qui affiche suvant une température allant de -100 à 200 °, l'état de l'eau (solide en dessous de 0 compris) (liquide entre 1 et 99°) (gazeux à partir de 100°) : L'eau est solide à -7° - L'eau est liquide à 33 ° - L'eau est gazeuse à 105°|
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------:|


https://www.php.net/manual/fr/language.operators.logical.php

| 10 | ![Exercice 10](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 10 | Créez un fichier `10-info.php` qui affiche la configuration complète du serveur Apache, PHP, SQL ... |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:----------------------------------------------------------------------------------------------------:|

```php
<?php
phpinfo();
```


| 11 | ![Exercice 11](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 11 | Créez un fichier `11-conditions.php` qui affiche suivant un chiffre au hasard entre 0 et 10, vous affiche : Si il est de 0 à 3 : EXACTEMENT : "{chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{chiffre} : Peut mieux faire" , Si de 6 à 7 : "{chiffre} : Bien", Sinon "{chiffre} : Très bien" |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|