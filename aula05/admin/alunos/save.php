<?php 

include_once '../../include/data/database-alunos.php'; 

$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

	if ($request === 'POST') {

		$nome = filter_input(INPUT_POST, 'nome');
		$email = filter_input(INPUT_POST, 'email');
		$senha = filter_input(INPUT_POST, 'senha');
		$cpf = filter_input(INPUT_POST, 'cpf');
		$rg = filter_input(INPUT_POST, 'rg');
		$dt_nasc = filter_input(INPUT_POST, 'dt_nasc');

		$novo = filter_input(INPUT_POST, 'novo',FILTER_VALIDATE_BOOLEAN);
		$id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);

		$aluno = [
			'nome' => $nome,
			'email' => $email,
			'senha' => $senha,
			'cpf' => $cpf,
			'rg' => $rg,
			'dt_nasc' => $dt_nasc,
		];

		if ($novo) {
			insereAluno($aluno);
		} else {
			atualizaAluno($id,$aluno);	
		}
		
		header('Location:index.php');
	}