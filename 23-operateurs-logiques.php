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
!	|  |	Inverse la condition
 */

// Exercice avec l'opérateur ET (AND) &&
$age = 24;
$genre = "F";

// Si l'âge est supérieur ou égal à 18 ET que le genre est F
// Alors, on affiche "Bienvenue sur le site"
// Sinon on affiche "Désolé, accès réservé aux femmes majeures uniquement"


