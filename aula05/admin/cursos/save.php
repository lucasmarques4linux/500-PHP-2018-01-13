<?php 

include_once '../../include/data/database-cursos.php'; 

$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

	if ($request === 'POST') {

		$nome = filter_input(INPUT_POST, 'curso',FILTER_SANITIZE_STRIPPED);
		$tipo = filter_input(INPUT_POST, 'tipo',FILTER_SANITIZE_STRIPPED);
		$carga_horaria = filter_input(INPUT_POST, 'carga_horaria',FILTER_VALIDATE_INT);
		$requisitos = filter_input(INPUT_POST, 'requisitos',FILTER_SANITIZE_STRIPPED);
		$novo = filter_input(INPUT_POST, 'novo',FILTER_VALIDATE_BOOLEAN);
		$id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);

		$curso = [
			'nome' 			=> $nome,
			'tipo' 			=> $tipo,
			'carga_horaria' => $carga_horaria,
			'requisitos' 	=> $requisitos,
		];

		if ($novo) {
			insereCurso($curso);
		} else {
			atualizaCurso($id,$curso);	
		}
		
		header('Location:index.php');
	}

 ?>