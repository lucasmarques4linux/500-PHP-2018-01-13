<?php include_once '../layout/_topo.php'; ?>

<?php include_once '../../include/data/database-alunos.php'; ?>


<?php $aluno = listaAlunosPorId($_GET['id']); ?>

<div class="container">
	<div class="page-header">
		<h2>Editar <small>Aluno</small></h2>
	</div>
	
	<form action="save.php" method="POST">
	<input type="hidden" name="id" value="<?= $aluno['id'] ?>">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="form-control" value="<?= $aluno['nome'] ?>" required>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" value="<?= $aluno['email'] ?>" required>
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" name="senha" value="<?= $aluno['senha'] ?>" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" name="cpf" class="form-control" value="<?= $aluno['cpf'] ?>" required>
		</div>
		<div class="form-group">
			<label for="rg">RG</label>
			<input type="text" name="rg" value="<?= $aluno['rg'] ?>"class="form-control">
		</div>
		<div class="form-group">
			<label for="dt_nasc">Data de Nascimento</label>
			<input type="date" value="<?= $aluno['dt_nasc'] ?>" name="dt_nasc" class="form-control">
		</div>
		<a href="index.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Salvar</button>
	</form>

</div>

<?php include_once '../layout/_rodape.php'; ?>