<?php 

require_once 'conexao.php';


$usuario = 'José';
$senha	 = '123';


$query = "INSERT INTO usuarios(usuario,senha) 
		  VALUES('{$usuario}','{$senha}');";

// echo $query;

$result = pg_query($query);

var_dump($result);