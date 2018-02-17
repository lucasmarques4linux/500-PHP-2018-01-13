<?php 

include_once '../../include/data/database-cursos.php'; 

$request = filter_input(INPUT_SERVER, 'REQUEST_METHOD');

	if ($request === 'POST') {
		$id = filter_input(INPUT_POST, 'id',FILTER_VALIDATE_INT);

		deletaCurso($id);

		header('Location:index.php');
	}
