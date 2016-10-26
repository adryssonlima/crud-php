<?php

require 'connection.php';

$nome = $_GET['nome'];

$sql = "SELECT * FROM user WHERE nome LIKE '%$nome%'";

$lista = mysqli_query($link, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CRUD com Bootstrap 3</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body> 

	<div id="main" class="container-fluid">

	    <div id="top" class="row">

			<div class="col-md-3">
				<h2>Usuários</h2>
			</div>

			<div class="col-md-6">
				<form action="buscar.php" method="post">
					<div class="input-group h2">
						<input type="text" class="form-control" name="nome" placeholder="Persquisar Usuário">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form>
			</div>
	 
	    </div> <!-- /#top -->
	 
	    <hr />
	    <div id="list" class="row">
	     
			<div class="table-responsive col-md-12">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
				    <thead>
				        <tr>
				            <th>ID</th>
				            <th>Nome</th>
				            <th>Email</th>
				            <th>Senha</th>
				         </tr>
				    </thead>
				    <tbody>

				    <?php 
				   	if(mysqli_num_rows($lista) == 0){

						echo "<h3>Usuário não encontrado! :(</h3>";

					}else{
						echo "<h3>Usuário encontrado! :)</h3>";
				    	while($dados = mysqli_fetch_assoc($lista)): ?>
					        <tr>
					            <td><?= $dados["id"] ?></td>
					            <td><?= $dados["nome"] ?></td>
					            <td><?= $dados["email"] ?></td>
					            <td><?= $dados["senha"] ?></td>
					        </tr>
				    <?php endwhile; } ?>

				    </tbody>
				</table>
			</div>

	    </div> <!-- /#list -->
	 
	    <div id="bottom" class="row">
	     
	    </div> <!-- /#bottom -->
		</div>  <!-- /#main -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>