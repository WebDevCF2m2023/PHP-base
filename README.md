# PHP-base 2023

## Menu de navigation
- [Présentation](#présentation)
- [Historique de PHP](#historique-de-php)
- Installation de PHP
- Les bases de PHP


### Présentation

**PHP**, acronyme récursif de *Hypertext Preprocessor*, est un langage de script utilisé le plus souvent côté serveur : 
 
Dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (HTML, XHTML, CSS, XML, JSON, Javascript, etc...) et des données (JPEG, GIF, PNG par exemple) pouvant être interprétés et rendus par un navigateur web. PHP peut également générer d'autres formats comme le WML, le SVG et le PDF.

Il a été conçu pour permettre la création d'applications dynamiques, le plus souvent développées pour le Web. 

PHP est le plus souvent couplé à un serveur [Apache](## "Apache est conçu pour prendre en charge de nombreux modules lui donnant des fonctionnalités supplémentaires : interprétation du langage Perl, PHP, Python et Ruby, serveur proxy, Common Gateway Interface, Server Side Includes, réécriture d'URL, négociation de contenu, protocoles de communication additionnels, etc.") bien qu'il puisse être installé sur la plupart des serveurs HTTP tels que IIS ou nginx. Ce couplage permet de récupérer des informations issues d'une base de données, d'un système de fichiers (contenu de fichiers et de l'arborescence) ou plus simplement des données envoyées par le navigateur afin d'être interprétées ou stockées pour une utilisation ultérieure.

C'est un langage peu typé et souple et donc facile à apprendre par un débutant mais, de ce fait, des bugs et des failles de sécurité peuvent rapidement apparaître dans les applications. Pragmatique, PHP ne s'encombre pas de théorie et a tendance à choisir le chemin le plus direct. Néanmoins, le nom des fonctions (ainsi que le passage des arguments) ne respecte pas une logique uniforme, ce qui peut être préjudiciable à l'apprentissage.

Son utilisation commence avec le traitement des formulaires puis par l'accès aux bases de données. L'accès aux bases de données est aisé une fois l'installation des modules correspondants effectuée sur le serveur. La force la plus évidente de ce langage est qu'il a permis au fil du temps la résolution aisée de problèmes autrefois compliqués et est devenu par conséquent un composant incontournable des offres d'hébergements.

Il est multi-plateforme : autant sur Linux qu'avec Windows il permet aisément de reconduire le même code sur un environnement à peu près semblable (quoiqu'il faille prendre en compte les règles d'arborescences de répertoires, qui peuvent changer).

Libre, gratuit, simple d'utilisation et d'installation, ce langage nécessite néanmoins une connaissance aiguë des problèmes de sécurité qui lui sont liés.

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