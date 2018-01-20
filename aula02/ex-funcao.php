<?php 

function isParOuImpar($num){
	return ($num % 2 === 0 ) ? 'par' : 'ímpar';
}

function isMaior($num1,$num2){
	// return ($num1 === $num2) ? 'Iguais' : ($num1 > $num2) ? $num1 : $num2;
	if ($num1 === $num2) {
		return "Igual";
	} else if ($num1 > $num2){
		return $num1;
	} else {
		return $num2;
	}
}

function maiorIdade($pessoa){
	return ($pessoa['idade'] >= 18 ) ? 'Maior de Idade' : 'Menor de Idade';
}

function podeDirigir($pessoa){
	return (($pessoa['idade'] >= 18) && $pessoa['temHabilitacao']) ? 'Pode Dirigir' : 'Não pode dirigir';
}

echo isParOuImpar(10);
echo "<br>";
echo isParOuImpar(9);
echo "<br>";
echo isMaior(10,10);
echo "<br>";

$pessoa = [
			'nome' => 'Lucas', 
			'idade' => 24, 
			'temHabilitacao' => true
		];

echo maiorIdade($pessoa);
echo "<br>";
echo podeDirigir($pessoa);