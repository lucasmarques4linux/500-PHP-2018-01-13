<?php 

include_once 'conexao.php';


function listaAlunos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_alunos ORDER BY id;";

	$result = pg_query($sql);
	$alunos = pg_fetch_all($result);

	desconecta($con);

	return $alunos;
}

function listaAlunosPorId(int $id){

	$con = conecta();

	$sql = "SELECT * FROM tb_alunos WHERE id = {$id};";

	$result = pg_query($sql);
	$aluno = pg_fetch_assoc($result);

	desconecta($con);

	return $aluno;
}

function insereAluno(array $aluno){

	$con = conecta();

	$sql = <<< SQL
	INSERT INTO tb_alunos(nome,email,senha,cpf,rg,dt_nasc) 
	VALUES (
		'{$aluno['nome']}',
		'{$aluno['email']}',
		'{$aluno['senha']}',
		'{$aluno['cpf']}',
		'{$aluno['rg']}',
		'{$aluno['dt_nasc']}'
		)
SQL;
	
	pg_query($sql);

	desconecta($con);
}

function atualizaAluno(int $id,array $aluno){

	$con = conecta();

	$sql = <<< SQL
	UPDATE tb_alunos SET
		nome = '{$aluno['nome']}',
		email = '{$aluno['email']}',
		senha = '{$aluno['senha']}',
		cpf = '{$aluno['cpf']}',
		rg = '{$aluno['rg']}',
		dt_nasc = '{$aluno['dt_nasc']}'
	WHERE id = {$id}
SQL;
	
	pg_query($sql);

	desconecta($con);
}

function deletaAluno(int $id){

	$con = conecta();

	$sql = "DELETE FROM tb_alunos WHERE id = {$id}";

	pg_query($sql);

	desconecta($con);
}