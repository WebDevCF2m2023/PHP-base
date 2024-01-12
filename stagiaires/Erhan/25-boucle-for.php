<?php

for($i=10; $i>0; $i--){
	echo "$i ";
}

for($i=0; $i<=20; $i+=2){
	echo "<br>$i ";
}

$somme = 0;
for($i=1; $i<=20; $i++){
	echo "\n$i \n";
	$somme = $somme+$i;
}
echo "La somme des nombres est : $somme";


for($i=1; $i<=20; $i++){
	if($i % 2 === 0){
	echo "\n<br>$i - pair |";
}else {
	echo "<br>$i - impair |";
}
}

$somme = 0;
for($i=1; $i<=20; $i++){
	$somme = $somme + $i;
	if($somme % 2 === 0){
		echo "-La somme est : $somme - pair |<br>";
	}else {
		echo "-La somme est : $somme - impair |<br>";
	}
}

for($i=1; $i<=5; $i++){
	for($j=1; $j<=5; $j++){
	echo "<br>$j x $i = ".($j*$i)." |";
}}
