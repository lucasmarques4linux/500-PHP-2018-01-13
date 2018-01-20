<?php 

$i = 0;
while ($i < 10) {
	echo "O valor é : $i";
	echo "<hr>";

	$i++;
}

echo "<hr>";

$j = 10;

do {
	echo $j;
	echo "<hr>";
	$j++;
} while ($j === 10);

echo "<hr>";

for ($i= 0; $i < 10 ; $i++) { 
	echo $i;
	echo "<hr>";
}