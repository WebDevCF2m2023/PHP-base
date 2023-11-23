<?php
$badVar1 = "$''Nom de Variable = 5;	// comporte des espaces";
$badVar2 = "$123Nom_De_Variable	= 3;// commence par un chiffre";
$badVar3 = "'$'toto@mailcity.com = [];	//caractère spécial @";
$badVar4 = "'$'Nom-de-variable = "coucou";	// signe - interdit (en kebab-case)";
$badVar5 = "nom_de_variable	= "Yes";     // ne commence pas par $";


var_dump($badVar1, $badVar2, $badVar3, $badVar4, $badVar5);

// Ce fois, je n'ai pas fermer the php