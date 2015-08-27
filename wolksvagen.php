<?php require_once('includes/header_volswagen.php'); ?>

		<!-- Conteúdo -->

		

		</div>
		</div>
		<!-- ----- fim container e row ----- -->

		<!-- baner estatico -->

		<div class="banner"></div>

		<!-- ---- marcas ---- -->

		<h1 class="titulo-marca">VEJA OFERTAS DE OUTROS FABRICANTES</h1>

		<?php require_once('includes/menu-marcas.php'); ?>

		<div class="vw_banner-oferta_01"><a href="" class="compre chat-zopim btn-chat-vw">Compre agora</a></div>
		<div class="vw_banner-oferta_02"><a href="" class="compre chat-zopim btn-chat-vw">Compre agora</a></div>
		<div class="vw_banner-oferta_03"><a href="" class="compre chat-zopim btn-chat-vw">Compre agora</a></div>



		<div class="container">
			<div class="formulario">
				<h1 class="titulo-form"><span>PROPOSTA DE </span></br>FINANCIAMENTO</h1>
			</div>
		
		<!-- Conteúdo temporário para testar o formulario de contatos -->

			<form action="includes/cadastro.php" method="post" id="form-contato">

				<div class="col-md-12 alertas">
					
				</div>

				<div class="col-md-4">
					<span class="name-forms">Nome</span>
					<input type="text" class="form-control" name="nome" id="nome"/>
					<span class="name-forms">Email</span>
					<input type="text" class="form-control" name="email" id="email"/>
					<span class="name-forms">Telefone</span>
					<input type="text" class="form-control" name="telefone" id="telefone"/>
				</div>
			
				<div class="col-md-4">
					<div class="ent-prest">
						<div class="ent">
						<span class="name-forms">Entrada</span>
						<select class="form-entrada form-control" name="entrada" id="entrada">
						<option value="10%">10%</option>
						<option value="20%">20%</option>
						<option value="30%">30%</option>
						<option value="10%">40%</option>
						<option value="20%">50%</option>
						<option value="30%">60%</option>
						<option value="10%">70%</option>
						<option value="20%">80%</option>
						<option value="30%">90%</option>
						</select>
						</div>
						<div class="prest">
						<span class="name-forms ">Prestações</span>
						<select class="form-prestacao form-control" name="prestacoes" id="prestacoes">
						<option value="12x">12x</option>
						<option value="24x">24x</option>
						<option value="36x">36x</option>
						<option value="48x">48x</option>
						<option value="60x">60x	</option>
						</select>
						</div>
					</div>
					<span class="name-forms">Selecione um carro</span>
					<select class="form-control" id="carro" name="carro">
						<option value="0">Selecione um carro</option>
					</select>
					<span class="name-forms">Selecione uma concessionária</span>
					<select class="form-control" id="concessionaria" name="concessionaria">
						<option value="0">Selecione uma concessionária</option>
					</select>
				</div>

				<div class="col-md-4">
				<span class="name-forms">Mensagem</span>
					<input type="text" class="msg form-control" name="mensagem" id="mensagem"/>
				</div>
				<input type="submit" class="enviar" value="Enviar">

			</form>
		</div>
		<div class="container">
			<h1 class="titulo-form duvidas"><span>TIRE SUAS </span></br>DÚVIDAS</h1>
			<div class="tel col-md-6">
				<h2>Telefone<img src="img/tel.jpg" style="margin-top:-20px;"></h2>
				<p>Encontre a concessionária mais perto de você</p>
				<select name="" class="form-control" id="contato-concessionarias">
					<option value="">Selecione uma concessionária</option>
				</select>
				<h3 id="nome-concessionaria"></h3>
				<h4 id="telefone-concessionaria"></h4>
			</div>
			<div class="chat col-md-6">
				<h2>Chat<img src="img/chat.jpg" style="margin-top:-20px;"></h2>
				<p>Fale com os nossos vendedores online</p>
				<a href="" class="chat-zopim">Iniciar Chat</a>
			</div>
		</div>
		<div class="container">	
			<p class="texto-legal">JETTA à partir de $ 69.900,00*Veículo com Pintura Sólida, Foto meramente ilustrativa. UP! à partir de $ 29.900,00 com juro à partir de ZERO. * Veículo com pintura sólida, Foto meramente ilustrativa e Juro à partir de Zero com 60% de entrada e saldo em 24 vezes pelo Banco Volkswagen. FOX 1.0 com juro à partir de  ZERO * Foto meramente ilustrativa e Juro à partir de Zero com 62% de entrada e saldo em 25 vezes pelo Banco Volkswagen.</p>
		</div>
		<div class="container">
			<div class="gl"><img src="img/logo_grupolider.jpg" align="center" alt=""></div>
			<div class="marcas-logos2">
			<ul>
				<li><a href="chevrolet.php"><img src="img/logo-chevrolet.png" alt=""></a></li>
				<li><a href="fiat.php"><img src="img/logo-fiat.png" alt=""></a></li>
				<li><a href="ford.php"><img src="img/logo-ford.png" alt=""></a></li>
				<li><a href="toyota.php"><img src="img/logo-toyota.png" alt=""></a></li>
				<li><a href="wolksvagen.php"><img src="img/logo-vw.png" alt=""></a></li>
				<li><a href="honda.php"><img src="img/logo_honda.png" alt=""></a></li>
			</ul>
		</div>
		<div class="desen"><a href="https://3aworldwide.com.br"><img src="img/ass3a.jpg" height="16" width="154" alt=""></a></div>
		</div>

		<!-- Scripts -->

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!-- Scripts da Página -->
		<script src="js/scripts.js"></script>

		<script type="text/javascript">

			$(function(){

				////////////////////// Preencher os selects de carros e concessionárias

				preencheCarros('#carro', 1);

				preencheConcessionarias('#concessionaria', 1);

				preencheConcessionarias('#contato-concessionarias', 1);

				////////////////////// Obter todos os dados das concessionárias para mostrar na seção contatos

				$("#contato-concessionarias").change(function(){

					var valor = $(this).val();

					if(valor != 0)
					{

						dadosConcessionarias(valor);

					}

				});

			});

		</script>

		<!--Start of Zopim Live Chat Script-->
		<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
		$.src="//v2.zopim.com/?3G7P5Q85b688tdZx9a1VwEOjVIBT6KF4";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
		<!--End of Zopim Live Chat Script-->


<?php require_once('includes/footer.php'); ?>

		