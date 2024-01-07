<?php
/*
 * Les opérateurs logiques
 * Les opérateurs logiques sont au nombre de 4: && (ET), || (OU), ^ (OU EXCLUSIF), ! (NON).
 * Ils permettent de combiner plusieurs conditions entre elles
 * Les opérateurs logiques sont souvent utilisés avec les opérateurs de comparaison
 * On les met dans des conditions (if, else, elseif)

and | &&  | ET
or  | ||  | OU
xor	| ^   | OU exclusif - peu utilisé
not	| !   |	Inverse la condition
 */

// Exercice avec l'opérateur ET (AND) &&
$age = 24;
$genre = "F";

// Si l'âge est supérieur ou égal à 18 ET que le genre est F
// Alors, on affiche "1) Bienvenue sur le site<br>"
// Sinon on affiche "1) Désolé, accès réservé aux femmes majeures uniquement<br>"

// Exercice avec l'opérateur OU (OR) ||
$page = mt_rand(5, 25);

// Si la page est plus petite que 10 OU que la page est plus grande que 20
// Alors, on affiche "2) La page $page est soit inférieure à 10, soit supérieure à 20<br>"
// Sinon on affiche "2) La page $page est entre 10 et 20<br>"


// Exercice avec l'opérateur OU exclusif (XOR) ^
$note = mt_rand(5, 15)  ;

// Si la note est plus petite que 10 OU que la note est plus grande que 10
// Alors, on affiche "3) La $note est soit inférieure à 10, soit supérieure à 10<br>"
// Sinon on affiche "3) La $note est 10<br>"

// Exercice avec l'opérateur NON (NOT) !





