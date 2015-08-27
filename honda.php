<?php require_once('includes/header_honda.php'); ?>

		<!-- Conteúdo -->

		

		</div>
		</div>
		</nav>
		<!-- ----- fim container e row ----- -->

		<!-- baner estatico -->

		<div class="banner"></div>

		<!-- ---- marcas ---- -->

		<h1 class="titulo-marca">VEJA OFERTAS DE OUTROS FABRICANTES</h1>

		<?php require_once('includes/menu-marcas.php'); ?>

		<div class="honda_banner-oferta_01"><a href="" class="compre chat-zopim btn-chat-honda">Compre agora</a></div>
		<div class="honda_banner-oferta_02"><a href="" class="compre chat-zopim btn-chat-honda">Compre agora</a></div>
		<div class="honda_banner-oferta_03"><a href="" class="compre chat-zopim btn-chat-honda">Compre agora</a></div>



		<div class="container">
			<div class="formulario">
				<h1 class="titulo-form"><span>PROPOSTA DE </span></br>FINANCIAMENTO</h1>
			</div>
		
		<!-- Conteúdo temporário para testar o formulario de contatos -->

			<form action="includes/cadastro.php" method="post" id="form-contato">

				<div class="col-md-12 alertas">
					
				</div>

				<input type="hidden" name="montadora" id="montadora" value="6">

				<div class="col-md-4">
					<span class="name-forms">Nome</span>
					<input type="text" class="form-control" name="nome" id="nome"/>
					<span class="name-forms">Email</span>
					<input type="email" class="form-control" name="email" id="email"/>
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
					<span class="name-forms">Selecione uma moto</span>
					<select class="form-control" id="carro" name="carro">
						<option value="0">Selecione uma moto</option>
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
				<a href="javascript:void(0)" class="chat-zopim">Iniciar Chat</a>
			</div>
		</div>
		<div class="container">	
			<p class="texto-legal">CG 125 Fan KS com taxa de 3,03. Entrada de 30% + saldo em 48 meses. LEAD 110 com taxa de 3,03. Entrada de 30% + saldo em 48 meses. BIZ 125 ES com taxa de 3,03. Entrada de 30% + saldo em 48 meses. XRE 300 STD com taxa de 3,03. Entrada de 30% + saldo em 48 meses. CBR 650F STD com taxa de 2,12. Entrada de 40% + saldo em 48 meses. CB 1000R ABS com taxa de 2,12. Entrada de 40% + saldo em 48 meses. CONDIÇÕES DE PAGAMENTOS: CG 125 Fan KS: 1. Preço à vista R$ 5.990,00 (frete incluso). 2. Condições de financiamento para o prazo de 48 meses: entrada mínima de 30% (R$1.800,00) + 48 parcelas de 189,00; Taxa de juros de 3,03 a.m. (36,36 a.a.). Valor total à prazo no plano de 48 meses: R$ 10.872,00. LEAD 110: 1. Preço à vista R$ 7.290,00 (frete incluso). 2. Condições de financiamento para o prazo de 48 meses: entrada mínima de 30% (R$2.190,00) + 48 parcelas de 189,00; Taxa de juros de 3,03 a.m. (36,36 a.a.). Valor total à prazo no plano de 48 meses: R$ 13.038,00. BIZ 125 ES: 1. Preço à vista R$ 7.290,00 (frete incluso). 2. Condições de financiamento para o prazo de 48 meses: entrada mínima de 30% (R$2.190,00) + 48 parcelas de 226,00; Taxa de juros de 3,03 a.m. (36,36 a.a.). Valor total à prazo no plano de 48 meses: R$ 13.038,00. XRE 300 STD: 1. Preço à vista R$ 14.990,00 (frete incluso). 2. Condições de financiamento para o prazo de 48 meses: entrada mínima de 30% (R$4.500,00) + 48 parcelas de 440,00; Taxa de juros de 3,03 a.m. (36,36 a.a.). Valor total à prazo no plano de 48 meses: R$ 25.620,00. CBR 650F STD: 1. Preço à vista R$ 32.990,00 (frete incluso). 2. Condições de financiamento para o prazo de 48 meses: entrada mínima de 40% (R$13.200,00) + 48 parcelas de 682,00; Taxa de juros de 2,12 a.m. (25,44 a.a.). Valor total à prazo no plano de 48 meses: R$ 45.936,00. CB 1000R ABS: 1. Preço à vista R$ 47.990,00 (frete incluso). 2. Condições de financiamento para o prazo de 48 meses: entrada mínima de 40% (R$19.200,00) + 48 parcelas de 983,00; Taxa de juros de 2,12 a.m. (25,44 a.a.). Valor total à prazo no plano de 48 meses: R$ 66.384,00. (Nos planos acima já estão inseridos IOF, frete e custos com registro do contrato). Condições válidas exclusivamente para financiamento junto ao BANCO HONDA. PARA MAIS INFORMAÇÕES FALE COM UM DE NOSSOS VENDEDORES. CRÉDITO SUJEITO A APROVAÇÃO. Ofertas válidas para venda à vista ou financiada pelos bancos credenciados ao Grupo Recreio. Fotos meramente ilustrativas.</p>
		</div>
		<div class="container">
			<div class="gl"><img src="img/logo_grupolider.jpg" align="center" alt=""></div>
			
			<!-- Menu das montadoras -->
			
			<?php include('includes/menu-marcas.php'); ?>
			
		<div class="desen"><a href="https://3aworldwide.com.br"><img src="img/ass3a.jpg" height="16" width="154" alt=""></a></div>
		</div>

		<!-- Scripts -->

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		
		<!-- Masked Input -->
		<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>		


		<!-- Scripts da Página -->
		<script src="js/scripts.js"></script>

		<script type="text/javascript">

			$(function(){

				////////////////////// Preencher os selects de carros e concessionárias

				preencheCarros('#carro', 6);

				preencheConcessionarias('#concessionaria', 6);

				preencheConcessionarias('#contato-concessionarias', 6);

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
		$.src="//v2.zopim.com/?3G7ch6wPHHckwn3BYpOBHUnfqrAXZEgp";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
		<!--End of Zopim Live Chat Script-->​

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-66878906-1', 'auto');
		  ga('send', 'pageview');

		</script>


<?php require_once('includes/footer.php'); ?>

		