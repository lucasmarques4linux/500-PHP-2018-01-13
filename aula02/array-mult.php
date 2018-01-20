<?php 
echo "<pre>";

$temperaturas = [
	'2008' => [
			'Janeiro' => 32,
			'Fevereiro' => 31,
		],
	'2009' => [
			'Março' => 30,
			'Abril' => 29,
		],
	'2010' => [
			'Maio' => 32,
			'Junho' => 31,
		],

];

// print_r($temperaturas);

foreach ($temperaturas as $ano => $meses) {

	echo "<strong>$ano</strong>: <br>";

	foreach ($meses as $mes => $temp) {

		echo "$mes: $temp<br>";

	}
}

echo "<hr>";

echo $temperaturas['2010']['Junho'];
