<?php 


$pessoas = [
	[
		'nome' 		=> 'Lucas',
		'sobrenome'	=> 'Marques',
		'idade'		=> 24,
		'peso'		=> 82,
	],
	[
		'nome' 		=> 'João',
		'sobrenome'	=> 'da Silva',
		'idade'		=> 86,
		'peso'		=> 66,
	],
	[
		'nome' 		=> 'Maria',
		'sobrenome'	=> 'José',
		'idade'		=> 55,
		'peso'		=> 45,
	],
	[
		'nome' 		=> 'José',
		'sobrenome'	=> 'João',
		'idade'		=> 8,
		'peso'		=> 65,
	],
	[	
		'nome' 		=> 'Gustavo',
		'sobrenome'	=> 'Conceição',
		'idade'		=> 17,
		'peso'		=> 75,
	]
];

echo "<pre>";

foreach ($pessoas as $pessoa) {

	echo "$pessoa[nome] $pessoa[sobrenome]";

	echo "<hr>";
}

foreach ($pessoas as $pessoa) {

	echo "$pessoa[idade]";

	echo "<hr>";
}

foreach ($pessoas as $pessoa) {

	if ($pessoa['idade'] >= 18) {
		echo "$pessoa[nome] $pessoa[sobrenome]";
		echo "<hr>";
	}	
}

foreach ($pessoas as $pessoa) {

	if ($pessoa['peso'] > 80) {
		echo "$pessoa[nome] $pessoa[sobrenome] - $pessoa[idade] anos";
		echo "<hr>";
	}	
}