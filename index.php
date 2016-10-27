
<!--
	Incluir a conexão com a base de dados.
	Criar query de consulta para pegar todos os registros da base de dados.
	Usar a função mysqli_query() do PHP para retornar os dados do banco.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD com PHP</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color: #eee;">

	<div id="main" class="container-fluid">

	    <div id="top" class="row">

			<div class="col-md-3">
				<h2><span class="glyphicon glyphicon-user"></span> Usuários</h2>
			</div>

			<div class="col-md-1" style="padding-top: 25px;">
				<a href="https://www.facebook.com/adryssonlima"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
         		<a href="https://www.linkedin.com/in/adryssonlima"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
          		<a href="https://github.com/adryssonlima"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
			</div>

			<div class="col-md-5">
				<form action="" method=""> <!-- Incluir action e method adequados no formulário -->
					<!-- Adicionar um name para cada input do fomulário -->
					<div class="input-group h2">
						<input type="text" class="form-control" placeholder="Persquisar Usuário">
						<span class="input-group-btn">
							<button class="btn btn-info" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form>
			</div>

			<div class="col-md-3">
				<a href="#" class="btn btn-primary pull-right h2" data-toggle="modal" data-target="#novo-usuario-modal"><span class="glyphicon glyphicon-user"></span> Novo Usuário</a>
			</div>

	    </div> <!-- /#top -->

	    <hr />

	    <div id="list" class="row">

			<div class="table-responsive col-md-12" id="table-data">
				<table class="table table-striped" cellspacing="0" cellpadding="0">
				    <thead>
				        <tr>
				            <th>ID</th>
				            <th>Nome</th>
				            <th>Email</th>
				            <th>Senha</th>
				            <th class="actions">Ações</th>
				         </tr>
				    </thead>
				    <tbody>

				    <!-- Laço de repetição para exibir a lista de registros do banco (Usar a função mysqli_fetch_assoc()) -->
				        <tr>
				            <td><!-- id --></td>
				            <td><!-- nome --></td>
				            <td><!-- email--></td>
				            <td><!-- senha --></td>
				            <td class="actions">
				            	<!-- Fazer a chamada do arquivo que irá preencher o formulário para edição ou exclusão (Deve-se passar 2 parâmetros pela URL, id e opcao) -->
				                <a class="btn btn-success btn-xs" href="#"><span class="glyphicon glyphicon-pencil"></span></a>
				                <a class="btn btn-danger btn-xs"  href="#"><span class="glyphicon glyphicon-trash"></span></a>
				            </td>
				        </tr>
				    <!-- Fim do laço -->

				    </tbody>
				</table>
			</div>

	    </div> <!-- /#list -->

      <!-- MODAL NOVO USUÁRIO -->
      <div class="modal fade" id="novo-usuario-modal" role="dialog">
          <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><span class="glyphicon glyphicon-user"></span> Novo Usuário</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method=""> <!-- Incluir action e method adequados no formulário -->
                        	<!-- Adicionar um name para cada input do fomulário -->
                            <div class="row">
                              <div class="form-group col-md-12">
                                  <label for="nome">Nome:</label>
                                  <input type="text" class="form-control" placeholder="Nome">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="email">Email:</label>
                                  <input type="email" class="form-control" placeholder="exemplo@email.com">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="senha">Senha:</label>
                                  <input type="password" class="form-control" placeholder="Máximo 10 caracteres">
                              </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> Cadastrar</button>
                            </div>
                        </form>

              </div>
          </div>
      </div>

	    <div id="bottom" class="row">
          
	    </div> <!-- /#bottom -->
		</div>  <!-- /#main -->

</body>
</html>
