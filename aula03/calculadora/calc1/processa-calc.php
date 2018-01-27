<?php 
/*
cada função vai receber dois números como parametros;
deve ser número inteiro;
não permita número em branco;

exibir cada resultado na tela;

*/
echo "<pre>";


$num1 = (int) $_POST['num1'];
$num2 = (int) $_POST['num2'];

if (empty($num1) || empty($num2)) {
	echo "Número em branco";
	die();
}

if (!is_int($num1) || !is_int($num2)) {
	echo "Digite um número válido";
	die();
}


// funcao que soma e exiba o resultado na tela;
function soma (int $num1,int $num2){
	return $num1+$num2;
}

// funcao que subtraia e exiba o resultado na tela;
function subtrai (int $num1,int $num2){
	return $num1-$num2;
}

// funcao que divida e exiba o resultado na tela;
// proibido divisao por 0;
function divide (int $num1,int $num2){
	if ($num1 === 0) {
		return "Proibido divisão por 0";
	}
	return $num1/$num2;
}

// funcao que multiplique e exiba o resultado na tela;
function multiplica (int $num1,int $num2){
	return $num1*$num2;
}

echo soma($num1,$num2) . "<br>";
echo subtrai($num1,$num2) . "<br>";
echo divide($num1,$num2) . "<br>";
echo multiplica($num1,$num2) . "<br>";


