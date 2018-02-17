<?php include_once '../layout/_topo.php'; ?>

<div class="container">
	<div class="page-header">
		<h2>Novo <small>Aluno</small></h2>
	</div>
	
	<form action="save.php" method="POST">
	<input type="hidden" name="novo" value="true">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="form-control" placeholder="Aluno" required>
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" placeholder="email@email.com" required>
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" name="senha" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" name="cpf" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="rg">RG</label>
			<input type="text" name="rg" class="form-control">
		</div>
		<div class="form-group">
			<label for="dt_nasc">Data de Nascimento</label>
			<input type="date" name="dt_nasc" class="form-control">
		</div>
		<a href="index.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Cadastrar</button>
	</form>

</div>

<?php include_once '../layout/_rodape.php'; ?>