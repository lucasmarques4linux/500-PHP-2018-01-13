<?php include_once '_header.php'; ?>

<div class="cointainer">

	<div class="page-header">
		<h2>Novo <small>Usuário</small></h2>		
	</div>

	<form action="#" method="POST">
	  <div class="form-group">
	    <label>Usuário</label>
	    <input type="text" name="usuario" class="form-control" required>
	  </div>
	  <div class="form-group">
	    <label>Senha</label>
	    <input type="password" name="senha" class="form-control" required>
	  </div>
	  <div class="form-group">
	    <label>Confirmar Senha</label>
	    <input type="password" name="confirmar-senha" class="form-control" required>
	  </div>
	  <a class="btn btn-warning" href="" role="button">Voltar</a>
	  <button type="submit" class="btn btn-default">Cadastrar</button>
	</form>

</div>

<?php include_once '_footer.php'; ?>