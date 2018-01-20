<?php 

echo "<pre>";
$carro = "Fusca";


echo "Meu carro é um : $carro";
echo "<br>";
echo 'Meu carro é um : ' . $carro;

echo "<hr>";

$nome = "Lucas";
echo '"Lucas"';
echo "<br>";
echo "'Lucas'";
echo "<br>";
echo '"$nome"';
echo "<br>";
echo "'$nome'";

echo "<hr>";

echo "\"$carro\"";
echo "<br>";
echo "\t Tabulação \n";
echo "Aspas Duplas \"a\"\n";
echo "Barra \\";

echo "<hr>";

$nome = "Lucas";
$sobrenome = "Marques";

echo "Meu nome é: $nome $sobrenome\n";
echo 'Meu nome é: ' . $nome . ' ' . $sobrenome;