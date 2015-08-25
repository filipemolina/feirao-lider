<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin :: Feirão Líder</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- <link href="../css/jquery.bxslider.css" rel="stylesheet" /> -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="css/admin.css">
</head>

<body>

	<!-- <div class="header">
		<div class="content">
			<img src="../image/logo-headerr.jpg" alt="">
			<p>CONCESSIONÁRIAS TOYOTA DO RIO E GRANDE RIO</p>
			<a href="https://www.facebook.com/redetoyotarj?fref=ts" target="_blank" style="display:block;"><div class="fb"></div></a>
		</div>
	</div> -->

	<div class="container">

		<div class="login">
				
			<form id="loginform" class="form-horizontal" role="form">

				<div class="alert"></div>
                                    
		        <div style="margin-bottom: 25px" class="input-group">
		            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                  
		        </div>
	            
		        <div style="margin-bottom: 25px" class="input-group">
		            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
		        </div>

		        <div style="margin-top:10px" class="form-group">
		            <div class="col-sm-12 controls">
		              <input type="submit" id="btn-login" href="#" class="btn" value="Enviar" />
		            </div>
		        </div>

	        </form>

		</div>

		<!-- Resultados -->

		<div class="row resultados">

			<div class="row link">
				<a href="javascript:void(0)" class="logout">Sair</a>
			</div>

			<div class="col-md-4 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Filtrar por Concessionária</h3>
					</div>
					<div class="panel-body">
						<div class="row padding-0">
							<div class="col-md-12">
								<select name="concessionarias" id="concessionarias" class="form-control">
									<option value="0">Selecione uma Concessionária</option>
								</select>
							</div>
						</div>
						<div class="row padding-0">
							<div class="col-md-12 num_total">
								<a href="javascript:void(0)" class="btn btn-default" id="link-filtrar">Filtrar Resultados</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="panel panel-default inscricoes">
					<div class="panel-heading">
						<h3 class="panel-title">Inscrições Gerais</h3>
					</div>
					<div class="panel-body">
						<div class="row padding-0">
							<div class="col-md-12">Total</div>
						</div>
						<div class="row padding-0">
							<div class="col-md-12 num_total"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Opções</h3>
					</div>
					<div class="panel-body">
						<div class="row padding-0">
							<div class="col-md-12">
								Gerar Relatório
							</div>
						</div>
						<div class="row padding-0">
							<div class="col-md-12 num_total">
								<a href="exportar.php" class="btn btn-primary" id="link-exportar">Exportar</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<table class="table table-striped lista" id="lista">
			<tr>
				<th class="centralizar">id:</th>
				<th class="centralizar">Nome:</th>
				<th class="centralizar">E-mail:</th>
				<th class="centralizar">Telefone:</th>
				<th class="centralizar">Entrada</th>
				<th class="centralizar">Prestações</th>
				<th class="centralizar">Carro</th>
				<th class="centralizar">Concessionária</th>
				<th class="centralizar">Mensagem</th>
			</tr>
		</table>

	</div>

	<div class="container">
		<div class="row">
				
		</div>
	</div>

	<!-- Modal de Mensagem -->

	<div class="modal fade" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Mensagem</h4>
	      </div>
	      <div class="modal-body">
	        <p></p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<iframe id="txtArea1" style="display:none"></iframe>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/jquery.cookie.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/script.js" type="text/javascript"></script>

	<script>

	$(function(){

		//Exemplo de como preencher o select de concessionárias

		//preencherConcessionaria("#selecte", '2');

	})

	</script>

</body>