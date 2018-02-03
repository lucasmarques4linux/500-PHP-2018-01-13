<?php 

require_once 'conexao.php';

function inserirUsuario(array $dados){

	$con = conecta();

	$query = "";

	pg_query($con,$query);

	desconeta($con);
}

function atualizarUsuario(array $dados, int $id){
	
	$con = conecta();

	$query = "";

	pg_query($con,$query);

	desconeta($con);	
}

function deletarUsuario(int $id){
	$con = conecta();

	$query = "";

	pg_query($con,$query);

	desconeta($con);
}

function listarUsuarios(){
	$con = conecta();

	$query = "";

	$result = pg_query($con,$query);
	$found = pg_fetch_all($result);

	desconeta($con);

	return $found;
}

function buscaUsuariio(int $id){
	$con = conecta();

	$query = "";

	$result = pg_query($con,$query);
	$found = pg_fetch_all($result);

	desconeta($con);

	return $found;
}