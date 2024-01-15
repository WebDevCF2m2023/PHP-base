<?php
$i = 0;

while($i<=10){
    echo "$i ";
    $i++;
}
// Affiche : 0 1 2 3 4 5 6 7 8 9 10

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