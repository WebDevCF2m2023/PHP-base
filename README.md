# PHP-base 2023

![PHP - officiel - Par Colin Viebrock — http://php.net/logos, CC BY-SA 4.0, https://commons.wikimedia.org/w/index.php?curid=9632398](https://github.com/mikhawa/PHP-base/blob/main/datas/PHP-logo.svg.png?raw=true)

## Menu de navigation
- [Présentation](#présentation)
- [Historique de PHP](#historique-de-php)
- [Installation de Apache, PHP et MySQL](#installation-de-apache-php-et-mysql)
- Les bases de PHP


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

[Retour au menu](#menu-de-navigation)

### Historique de PHP

#### Les Débuts de PHP (1994-1995) :
- PHP, qui signifie à l'origine "Personal Home Page", a été créé par Rasmus Lerdorf en 1994. À l'époque, il s'agissait d'un simple ensemble de scripts écrits en langage C pour gérer son site web personnel.
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

[Retour au menu](#menu-de-navigation)

### Installation de Apache, PHP et MySQL

Nous allons installer un package qui contient les trois composants nécessaires à la création d'un site web dynamique : Apache, PHP et MySQL (et/ou MariaDB). 

Ce package s'appelle **WAMP** (Windows, Apache, MySQL, PHP). Il existe aussi **LAMP** (Linux, Apache, MySQL, PHP) et **MAMP** (Macintosh, Apache, MySQL, PHP).

Il existe d'autres alternatives comme **XAMPP** ou **EasyPHP**.

On peut également installer les composants séparément.

#### Installation de WAMP pour Windows

- Télécharger WAMP sur le site officiel : 

[https://www.wampserver.com/](https://www.wampserver.com/)

- ou sur le site avec les add-ons : 

[https://wampserver.aviatechno.net/](https://wampserver.aviatechno.net/)

