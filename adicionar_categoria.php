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
	<h4>Cadastro de Categoria</h4>
	<form action ="_inserir_categoria.php" method="post">
		<label>Categoria</label>
		<div class="form-group">
			<input type="text" name="categoria" class="form-control" placeholder="Digite o nome da categoria" autocomplete="off">
			 
				</div>
				<br>
				<div style="text-align: right;">
						
				<button type="submit" class="btn btn-warning btn-sm">Cadastrar</button>
			</div>
		</form>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>