<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 40px; width: 500px">
	 <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</button></a>
        </div>  
	<h4>Cadastro de Fornecedores</h4>
	<form action ="_inserir_fornecedor.php" method="post">
		<label>Fornecedor</label>
		<div class="form-group">
			<input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do Fornecedor" autocomplete="off">
			 
				</div>
				</div>  
				<div class="container" style="margin-top: 40px; width: 500px">
		<h4>CNPJ / CPF</h4>
	<form action ="_inserir_fornecedor.php" method="post">
		<label>CPF</label>
		<div class="form-group">
			<input type="text" name="CPF/CNPJ" class="form-control" placeholder="Digite o CPF ou CNPJ" autocomplete="off">
			 
				</div>
				<br>
				<div class="d-grid gap-2 col-6 mx-auto">
  			<button class="btn btn-primary btn-sm" type="button">Pessoa Física</button>
  			<button class="btn btn-primary btn-sm" type="button">Pessoa Jurídica</button>
  			<button class="btn btn-primary btn-sm" type="button">Outros</button>
		</div>
				<div style="text-align: right;">
						
				<button type="submit" class="btn btn-warning btn-sm">Cadastrar</button>
			</div>
		</form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>