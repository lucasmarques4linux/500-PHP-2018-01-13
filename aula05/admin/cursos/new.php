<?php include_once '../layout/_topo.php'; ?>

<div class="container">
	<div class="page-header">
		<h2>Novo <small>Curso</small></h2>
	</div>
	
	<form action="save.php" method="POST">
	<input type="hidden" name="novo" value="true">
		<div class="form-group">
			<label for="curso">Curso</label>
			<input type="text" name="curso" class="form-control" placeholder="Curso" required>
		</div>
		<div class="form-group">
			<label for="tipo">Tipo do Curso</label>
			<select name="tipo" class="form-control">
				<option value="EAD">EAD</option>
				<option value="Presencial" selected>Presencial</option>
			</select>
		</div>
		<div class="form-group">
			<label for="carga_horaria">Carga Horária</label>
			<input type="number" minlength="0" name="carga_horaria" value="0" class="form-control">
		</div>
		<div class="form-group">
			<label for="requisitos">Requisitos</label>
			<textarea name="requisitos" class="form-control" cols="30" rows="5"></textarea>
		</div>

		<a href="index.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Cadastrar</button>
	</form>

</div>

<?php include_once '../layout/_rodape.php'; ?>