<?php 

require_once 'conexao.php';


$usuario = 'José Aldo';
$id = '6';

$query = "UPDATE usuarios SET usuario = '{$usuario}'
			WHERE id = {$id}; ";

// echo $query;

$result = pg_query($query);

var_dump($result);