<?php 

echo "<pre>";

$nome = "Lucas";
$sobrenome = "Marques";
$idade = 24;
$email = "lucas.marques@4linux.com.br";

$pessoa = array(
	'Lucas',
	'Marques',
	24,
	'lucas.marques@4linux.com.br',
);

$pessoa[] = 1.80;

$pessoa2 = [
	'João',
	'da Silva',
	86,
	'joao.silva@uol.com.br',
];

print_r($pessoa);
echo "<hr>";
echo $pessoa[0]."<br>";
echo $pessoa[1]."<br>";
echo $pessoa[2]."<br>";
echo $pessoa[3]."<br>";
echo "<hr>";

for ($i=0; $i <= 4; $i++) { 
	echo $pessoa[$i]."<br>";
}