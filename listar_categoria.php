<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Produtos</title>
  <script src="https://kit.fontawesome.com/7c73482f07.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>


<div class="container" style="margin-top: 40px; width: 500px">
  <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</button></a>
        </div>  
<h3> Lista de Produtos</h3>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Categoria</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
       
<?php
include 'conexao.php';
 $sql = "SELECT * FROM `categoria`";
 $busca = mysqli_query($conexao,$sql);
 
  while ($array = mysqli_fetch_array($busca)) {

      $id_categoria = $array['id_categoria'];
      $nomecategoria = $array['nome_categoria'];
      
      ?>
    <tr>
       <td><?php echo $nomecategoria ?></td>
     

      <td><a class="btn btn-warning btn-sm" href="editar_categoria.php?id= <?php echo $id_categoria ?>"role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

        <a class="btn btn-danger btn-sm" href="deletar_categoria.php?id= <?php echo $id_categoria ?>"role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>

      </td>
      </tr>

     <?php } ?>
    




</table>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</body>
</html>
