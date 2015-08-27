<?php require_once('includes/header_chevrolet.php'); ?>

		<!-- Conteúdo -->

		

		</div>
		</div>
		<!-- ----- fim container e row ----- -->

		<!-- baner estatico -->

		<div class="banner"></div>

		<!-- ---- marcas ---- -->

		<h1 class="titulo-marca">VEJA OFERTAS DE OUTROS FABRICANTES</h1>

		<?php require_once('includes/menu-marcas.php'); ?>
		

		<div class="chevrolet_banner-oferta_01"><a href="" class="compre chat-zopim btn-chat-chevrolet">Compre agora</a></div>
		<div class="chevrolet_banner-oferta_02"><a href="" class="compre chat-zopim btn-chat-chevrolet">Compre agora</a></div>
		<div class="chevrolet_banner-oferta_03"><a href="" class="compre chat-zopim btn-chat-chevrolet">Compre agora</a></div>
		<div class="chevrolet_banner-oferta_04"><a href="" class="compre chat-zopim btn-chat-chevrolet">Compre agora</a></div>



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
				<a href="javascript:void(0)" class="chat-zopim">Iniciar Chat</a>
			</div>
		</div>
		<div class="container">	
			<p class="texto-legal">Onix, eleito o carro com melhor valor de revenda do Brasil segundo a Revista Autoinforme (Nov/14). Onix LT 1.0 (conf. R7H) ano/modelo 2015/2015, com preço promocional à vista a partir de R$ 38.990,00 ou através do Plano de Financiamento Direto ao Usuário (FDU), com 67,37% de entrada (R$ 26.680,00) e 36 prestações mensais de R$ 369,79 com taxa de juros de 0,00% a.m. (CET: 5,28% a.a.). Preço total do veículo a prazo: R$ 39.992,44. Onix LT 1.4 (conf. R7M) ano/modelo 2015/2015, com preço promocional à vista a partir de R$ 43.990,00 ou através do Plano de Financiamento Direto ao Usuário (FDU), com 73,87% de entrada (R$ 32.948,00) e 24 prestações mensais de R$ 498,96 com taxa de juros de 0,00% a.m. (CET: 8,22% a.a.). Preço total do veículo a prazo: R$ 44.923,04. Spin LTZ 1.8 (conf. R9D) ano/modelo 2015/2016, com preço promocional à vista a partir de R$ 61.990,00 Tracker LTZ 1.8 (conf. 1SD) ano/modelo 2015/2015, com preço promocional à vista a partir de R$ 83.990,00 ou através do Plano de Financiamento Direto ao Usuário (FDU), com 68,79% de entrada (R$ 58.200,00) e 24 prestações mensais de R$ 1.130,74 com taxa de juros de 0,00% a.m. (CET: 5,06% a.a.). Preço total do veículo a prazo: R$ 85.337,76. Ofertas válidas até 29/08/2015, para veículos Chevrolet 0 km adquiridos nas Concessionárias Chevrolet, no Estado do Rio de Janeiro. Preços calculados com base no preço público sem o acréscimo dos valores de cor. Tarifa de confecção de cadastro no valor de R$ 560,00 e custo do registro de contrato de R$ 50,58 inclusos no cálculo financeiro. Consulte condições em sua Concessionária Chevrolet. Imagens meramente ilustrativas. Os veículos Chevrolet estão em conformidade com o Programa de Controle da Poluição do Ar por Veículos Automotores - Proconve. www.chevrolet.com.br SAC: 0800 702 4200. Ouvidoria GMAC 0800.722.6022.</p>
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

		<!-- Scripts da Página -->
		<script src="js/scripts.js"></script>

		<script type="text/javascript">

			$(function(){

				////////////////////// Preencher os selects de carros e concessionárias

				preencheCarros('#carro', 2);

				preencheConcessionarias('#concessionaria', 2);

				preencheConcessionarias('#contato-concessionarias', 2);

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
		$.src="//v2.zopim.com/?3G7hW313NUgaahWBU3gDU0KoRxIPNrjy";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
		<!--End of Zopim Live Chat Script-->


<?php require_once('includes/footer.php'); ?>

		