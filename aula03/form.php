<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
</head>
<body>
<pre>

	<h2>Meu Formulario</h2>

	<form action="#" method="post">
		<label>Nome:</label>
		<input type="text" name="nome" placeholder="Lucas">
		<label>Email:</label>
		<input type="email" name="email" required>
		<label>Senha:</label>
		<input type="password" name="senha" required>
		<input type="submit" value="Enviar">
	</form>

	
	<?php 

		if (!empty($_POST)) {
			print_r($_POST);
		}

		if (!empty($_GET)) {
			print_r($_GET);
		}

	 ?>
</pre>
</body>
</html>