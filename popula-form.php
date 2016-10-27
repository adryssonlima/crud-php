
<!-- Incluir conexão com a base de dados -->

<!-- Obter os dados do formulário com o método adequado -->

<!-- Criar query de consulta no banco de dados e executá-la -->

<!-- Criar um array associativo com o retorno da consulta. Usar a função mysqli_fetch_assoc() -->

<!-- Se a consulta retornar os dados exibir o formulário e preenchêlo com os dados vindos do banco -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD com PHP</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: #eee;">

	<div id="main" class="container-fluid">

		<div id="top" class="row">

			<div class="col-md-12">
				<!-- Inserir condição para verificar qual ação foi clicada -->
				<!-- Se editar -->
					<h4><span class="glyphicon glyphicon-pencil"></span> Editar Usuário</h4>
				<!-- Se excluir -->
					<h4><span class="glyphicon glyphicon-trash"></span> Tem certeza que deseja excluir este usuário?</h4>
			</div>
		</div> <!-- /#top -->


		<div class="row"> <!-- form -->
			<div class="col-md-6">
			    <form action="" method=""> <!-- Incluir action e method adequados no formulário (action vai depender da ação clicada) -->
			    <!-- Adicionar um name para cada input do fomulário -->
			        <div class="row">
			          <div class="form-group col-md-12">
			              <label for="nome">Nome:</label>
			              <input type="text" class="nome form-control" value="<?= $registro['nome'] ?>" />
			              <input type="hidden" name="id" value="<?= $id ?>" />
			          </div>
			        </div>
			        <div class="row">
			          <div class="form-group col-md-6">
			              <label for="email">Email:</label>
			              <input type="email" class="email form-control" value="<?= $registro['email'] ?>" />
			          </div>
			          <div class="form-group col-md-6">
			              <label for="senha">Senha:</label>
			              <input type="password" class="senha form-control" value="<?= $registro['senha'] ?>" />
			          </div>
			        </div>
			        
			        <div class="text-right">
			        	<a class="btn btn-default" href="index.php">Cancelar</a>
			            <!-- Inserir condição para saber qual ação foi clicada -->
			            <!-- Se Editar -->
			            	<button type="submit" class="alterar btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Alterar</button>
			            <!-- Se Excluir -->
			            	<button type="submit" class="alterar btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Sim</button>
			            
			        </div>
			    </form>

			</div>
		</div> <!-- end form -->

	    <div id="bottom" class="row">

	    </div> <!-- /#bottom -->
	</div>  <!-- /#main -->

</body>
</html>

<!-- Senão retornar erro "Registro não encontrado" -->

<!-- Fechar a conexão com o banco" -->




<?php

if($opcao == 'Excluir'){

?>

<script type="text/javascript">
	$('.nome').attr("disabled", true);
    $('.email').attr("disabled", true);
    $('.senha').attr("disabled", true);
</script>

<?php } ?>