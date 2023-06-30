<?php

 include 'conexao.php';

 $fornecedor = $_POST['fornecedor'];

 $sql = "INSERT INTO  fornecedor (nome_forn) values ('$fornecedor')";
 $inserir = mysqli_query($conexao, $sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="container" style="width: 400px">
<center>
	<h3>Adicionado com Sucesso</h3>
	<div style="margin-top: 10px">
		<a href="adicionar_fornecedor.php" class="btn btn-sm btn-warning">Voltar</a>
    </div>
</center>
	
</div>