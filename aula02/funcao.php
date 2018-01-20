<?php 

echo "<pre>";

function ola(){
	return "Olá Função<br>";
}

function soma(){
	$soma = 2 + 3;
	return $soma;
}

function soma2($a,$b){
	$soma = $a + $b;
	return $soma;
}

echo ola();

$var = ola();
echo $var;

for ($i=0; $i < 5; $i++) { 
	ola();
}

echo soma();
echo "<hr>";

echo soma2(1,2);
echo "<br>";
$num1 = 3;
$num2 = 5;
echo soma2($num1,$num2);

//teste