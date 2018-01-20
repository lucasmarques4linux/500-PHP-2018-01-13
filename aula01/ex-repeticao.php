<?php 

$a = 0;

while ($a <= 10) {

	echo ($a % 2 === 0) ? "$a par<br>" :'';
	echo ($a % 2 !== 0) ? "$a impar<br>" :'';
	echo ($a % 5 === 0) ? "$a multiplo de 5<br>" :'';
	$a++;
}

echo "<hr>";

$b = 0;

do {
	if ($b % 2 == 0) {
		echo "$b par<br>";
	}
	if ($b % 2 != 0) {
		echo "$b impar<br>";
	}
	if ($b % 5 == 0) {
		echo "$b multiplo de 5<br>";
	}
	$b++;
} while ($b <= 10);

echo "<hr>";

for ($i=0; $i < 100; $i++) {

	if ($i % 3 == 0) {
		continue;
	}

	if ($i === 77) {
		break;
	}

	if ($i % 2 == 0) {
		echo "$i par<br>";
	}
	if ($i % 2 != 0) {
		echo "$i impar<br>";
	}
	if ($i % 5 == 0) {
		echo "$i multiplo de 5<br>";
	}
}