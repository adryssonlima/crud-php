<?php

require 'connection.php';

$id = $_GET['id'];
$opcao = $_GET['opcao'];

$sql = "SELECT * FROM user WHERE id = $id";

if($dados = mysqli_query($link, $sql)){

    $registro = mysqli_fetch_assoc($dados);
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD com PHP</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="css/style.css" rel="stylesheet">-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: #eee;">

	<div id="main" class="container-fluid">

		<div id="top" class="row">

			<div class="col-md-12">
				<?php if($opcao == 'Editar') { ?>
					<h4><span class="glyphicon glyphicon-pencil"></span> Editar Usuário</h4>
				<?php }else if($opcao == 'Excluir') { ?>
					<h4><span class="glyphicon glyphicon-trash"></span> Tem certeza que deseja excluir este usuário?</h4>
				<?php } ?>
			</div>
		</div> <!-- /#top -->


		<div class="row"> <!-- form -->
			<div class="col-md-6">
			    <form action="<?php if($opcao == 'Editar') echo "update.php"; else if($opcao == 'Excluir') echo "delete.php"; ?>" method="post">
			        <div class="row">
			          <div class="form-group col-md-12">
			              <label for="nome">Nome:</label>
			              <input type="text" class="nome form-control" name="nome" value="<?= $registro['nome'] ?>" />
			              <input type="hidden" name="id" value="<?= $id ?>" />
			          </div>
			        </div>
			        <div class="row">
			          <div class="form-group col-md-6">
			              <label for="email">Email:</label>
			              <input type="email" class="email form-control" name="email" value="<?= $registro['email'] ?>" />
			          </div>
			          <div class="form-group col-md-6">
			              <label for="senha">Senha:</label>
			              <input type="password" class="senha form-control" name="senha" value="<?= $registro['senha'] ?>" />
			          </div>
			        </div>
			        
			        <div class="text-right">
			        	<a class="btn btn-default" href="index.php">Cancelar</a>
			            <?php if($opcao == 'Editar'){ ?>
			            	<button type="submit" class="alterar btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Alterar</button>
			            <?php }else if ($opcao == 'Excluir'){ ?>
			            	<button type="submit" class="alterar btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Sim</button>
			            <?php } ?>
			        </div>
			    </form>

			</div>
		</div> <!-- end form -->

	    <div id="bottom" class="row">

	    </div> <!-- /#bottom -->
	</div>  <!-- /#main -->

</body>
</html>

<?php

}else{

	mysqli_error();
	echo "Registro não encontrado. :( ";

}

mysqli_close($link);


if($opcao == 'Excluir'){

?>

<script type="text/javascript">
	$('.nome').attr("disabled", true);
    $('.email').attr("disabled", true);
    $('.senha').attr("disabled", true);
</script>

<?php } ?>