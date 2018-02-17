<?php include_once '../layout/_topo.php'; ?>

<?php include_once '../../include/data/database-cursos.php'; ?>

<?php $curso = listaCursoPorId($_GET['id']); ?>

<div class="container">
	<div class="page-header">
		<h2>Editando <small>Curso</small></h2>
	</div>
	
	<form action="save.php" method="POST">

	<input type="hidden" name="id" value="<?= $curso['id']?>">

		<div class="form-group">
			<label for="curso">Curso</label>
			<input type="text" value="<?= $curso['nome']?>" name="curso" class="form-control" placeholder="Curso" required>
		</div>

		<div class="form-group">
			<label for="tipo">Tipo do Curso</label>
			<select name="tipo" class="form-control">				
				<?php $tiposCurso = ['EAD' => 'EAD','Presencial' => 'Presencial'] ?>

				<?php foreach ($tiposCurso as $key => $value ) :?>
					
					<?php 
						$selected = '';
						if ($curso['tipo'] === $key) {
							$selected = 'selected';
						}
					 ?>

					 <option value="<?= $key?>" <?= $selected ?>><?= $value?></option>

				<?php endforeach; ?>
			</select>
		</div>

		<div class="form-group">
			<label for="carga_horaria">Carga Horária</label>
			<input type="number" minlength="0" name="carga_horaria" value="<?= $curso['carga_horaria']?>" class="form-control">
		</div>

		<div class="form-group">
			<label for="requisitos">Requisitos</label>
			<textarea name="requisitos" class="form-control" cols="30" rows="5"><?= $curso['requisitos']?>
			</textarea>
		</div>

		<a href="index.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Salvar</button>
	</form>

</div>

<?php include_once '../layout/_rodape.php'; ?>