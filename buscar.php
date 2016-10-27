
<!-- Incluir conexão com a base de dados -->

<!-- Obter os dados do formulário com o método adequado -->

<!-- Criar query de busca no banco de dados e executá-la -->

<!-- Fechar conexão com o banco de dados. Usar mysqli_close() -->


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
<body style="background-color: #eee;"> 

	<div id="main" class="container-fluid">

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
				    	<!-- Inserir condição para verificar se a consulta retornou o registro. Usar a função mysqli_num_rows() -->

				    	<!-- Se não retornado -->
						<h3>Usuário não encontrado! :(</h3>
						<!-- Senão -->
						<h3>Usuário encontrado! :)</h3>
						<!-- Inserir laço para exibir os dados do registro encontrado. Usar a função mysqli_fetch_assoc() -->
					        <tr>
					            <td><!-- id --></td>
					            <td><!-- nome --></td>
					            <td><!-- email --></td>
					            <td><!-- senha --></td>
					        </tr>
				   		<!-- Fim do laço -->

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