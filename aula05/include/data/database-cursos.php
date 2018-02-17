<?php 

include_once 'conexao.php';

function insereCurso(array $curso){

	$con = conecta();

	$sql = <<< SQL
	INSERT INTO tb_cursos(nome,tipo,carga_horaria,requisitos) 
	VALUES (
		'{$curso['nome']}',
		'{$curso['tipo']}',
		'{$curso['carga_horaria']}',
		'{$curso['requisitos']}')
SQL;

	pg_query($sql);

	desconecta($con);
}


function listaCursos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_cursos ORDER BY id;";

	$result = pg_query($sql);
	$cursos = pg_fetch_all($result);

	desconecta($con);

	return $cursos;
}

function listaCursoPorId($id){

	$con = conecta();

	$sql = "SELECT * FROM tb_cursos WHERE id = {$id};";

	$result = pg_query($sql);
	$curso = pg_fetch_assoc($result);

	desconecta($con);

	return $curso;
}

function atualizaCurso(int $id, array $curso){

	$con = conecta();

	$sql = <<< SQL
	UPDATE tb_cursos SET 
		nome = '{$curso['nome']}',
		tipo = '{$curso['tipo']}',
		carga_horaria = '{$curso['carga_horaria']}',
		requisitos = '{$curso['requisitos']}'
		WHERE id = {$id}
SQL;

	pg_query($sql);

	desconecta($con);
}

function deletaCurso(int $id){

	$con = conecta();

	$sql = "DELETE FROM tb_cursos WHERE id = {$id}";

	pg_query($sql);

	desconecta($con);
}
