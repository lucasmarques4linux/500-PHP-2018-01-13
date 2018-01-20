<?php 

echo "<pre>";
$soma = function(){ return 2 + 2; };

$msg = "Olá";

$func = function($a) use ($msg){
	
	$msg = "Hello";

	echo $msg.$a;
};


echo $msg;
$func('Mundo');

// var_dump($soma());

echo "<hr>";

$array = array(6, 7, 8, 9, 10, 11, 12);


print_r(array_filter($array, function($valor){
	if ($valor % 2 != 0) {
		return $valor;
	}
}));