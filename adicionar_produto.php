<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
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

    <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</button></a>
        </div>  
	<h4>Formulario de Cadastro</h4>
     <form action="_inserir_produto.php" method="post" style="margin-top: 20px">
	     <div class="mb-3">
            <label>Numero do Produto</label>
     		<input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do Produto" autocomplete="off" required>
   
    	 </div>
    	 <div class="mb-3">
            <label>Nome Produto</label>
     		<input type="na" class="form-control" name="nomeproduto" placeholder="Insira o nome do Produto" autocomplete="off" required>
   
    	 </div>
    	 <div class="form-group">
    	 		<label >Categoria</label>
    	 		<select class="form-control" name="categoria">

                    <?php 
    	 			include 'conexao.php';
                    $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                    $buscar = mysqli_query($conexao,$sql);

                    while ($array = mysqli_fetch_array($buscar)) {

                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];

                    ?>
                    <option><?php echo $nome_categoria ?></option>  
                    
                    <?php   } ?>                 
    	</select>
    </div>
    	 <div class="mb-3">
            <label>Quantidade</label>
     		<input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do Produto" autocomplete="off" required>
   
    	 </div>
    	 <div class="form-group">
    	 		<label >Fornecedor</label>
    	 		<select class="form-control" name="fornecedor">
                    <?php
                    include 'conexao.php';
                    $sql2 = "SELECT * FROM fornecedor";
                    $buscar2 = mysqli_query($conexao,$sql2);
                    while ($array2 = mysqli_fetch_array($buscar2)) {
                        $id_fornecedor = $array2['id_forn'];
                        $nome_fornecedor = $array2['nome_forn'];

                   ?>
    	 			
    	 			<option><?php echo $nome_fornecedor ?></option>
        
              
              <?php  } ?>
    	 			
    	</select>
     </div>
     <br>
     <div style="text-align: right;">

     	<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>	
     </div>
 	</form>

        
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>