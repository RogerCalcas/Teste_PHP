<?php 

include 'conexao.php';

$id = $_GET['id'];


 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Edição</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<style type="text/css">
	
	#tamanhocontainer {

		width: 500px;
	}

	#botao {
		background-color: #F1601D; 
		color: #ffffff;

	}
</style>


</head>
<body>

<div class="container" id="tamanhocontainer" style="margin-top: 40px">
	<h4>Formulario de Edição</h4>
     <form action="_atualizar_categoria.php" method="post" style="margin-top: 20px">
     	<?php


     	$sql = "SELECT * FROM `categoria` WHERE  id_categoria = $id";
     	$buscar = mysqli_query($conexao,$sql);
     	while ($array = mysqli_fetch_array($buscar)){


      $id_categoria = $array['id_categoria'];
      $nomecategoria = $array['nome_categoria'];
      
     	 ?>
	     
    	 <div class="form-group">
            <label>Nome Categoria</label>
     		<input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria ?>">
            <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display:none">
   
    	 </div>

    <br>
     <div style="text-align: right;">
     	<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>	

     </div>
     <?php } ?>
 	</form>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>