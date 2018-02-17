<?php 

include_once '../../include/data/database-alunos.php'; 

$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

	if ($request === 'POST') {
		$id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);

		deletaAluno($id);

		header('Location:index.php');
	}
