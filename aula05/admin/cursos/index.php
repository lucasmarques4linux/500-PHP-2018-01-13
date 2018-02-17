<?php include_once '../layout/_topo.php'; ?>

<?php include_once '../../include/data/database-cursos.php'; ?>

<div class="container">
	<div class="page-header">
		<h2>Gerenciar <small>Cursos</small></h2>
	</div>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Curso</th>
				<th>Tipo</th>
				<th>Carga Horária</th>
				<th>Requisitos</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			
			<?php if(listaCursos()) :  ?>
			<?php foreach (listaCursos() as $curso) : ?>

				<tr>
					<th><?= $curso['id'] ?> </th>
					<td><?= $curso['nome'] ?></td>
					<td><?= $curso['tipo'] ?></td>
					<td><?= $curso['carga_horaria'] ?></td>
					<td><?= $curso['requisitos'] ?></td>
					<td>
						<a href="edit.php?id=<?= $curso['id']?>" class="btn btn-info">Alterar</a>
						<form action="delete.php" method="POST">
							<input type="hidden" name="id" value="<?= $curso['id']; ?>">
							<button type="submit" class="btn btn-danger">Excluir</button>
						</form>
					</td>
				</tr>


			<?php endforeach; ?>	
			<?php endif; ?>
		</tbody>
	</table>

	<div class="pull-right">
		<a href="new.php" class="btn btn-primary">Novo Curso</a>
	</div>

</div>


<?php include_once '../layout/_rodape.php'; ?>