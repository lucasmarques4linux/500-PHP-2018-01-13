<?php 

echo "<pre>";

var_dump(empty(0));
var_dump(empty(1));

$nome = '4Linux';

if (!empty($nome)) {
	echo $nome;
} else {
	echo "Preencha o nome;";
}

echo "<hr>";

var_dump(isset($idade));

$pessoa = ['nome' => 'Fernando'];

var_dump(isset($pessoa['idade']));

echo "<hr>";

$num = '1';

var_dump(is_int($num));

echo "<hr>";

$selecao = 'Brasil';
var_dump(isset($selecao));
unset($selecao);
var_dump(isset($selecao));

echo "<hr>";
