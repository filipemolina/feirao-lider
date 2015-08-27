<?php require_once('includes/header_ford.php'); ?>

		<!-- Conteúdo -->

		

		</div>
		</div>
		<!-- ----- fim container e row ----- -->

		<!-- baner estatico -->

		<div class="banner"></div>

		<!-- ---- marcas ---- -->

		<h1 class="titulo-marca">VEJA OFERTAS DE OUTROS FABRICANTES</h1>

		<?php require_once('includes/menu-marcas.php'); ?>
		<div class="ford_banner-oferta_01"><a href="" class="compre chat-zopim btn-chat-ford">Compre agora</a></div>
		<div class="ford_banner-oferta_02"><a href="" class="compre chat-zopim btn-chat-ford">Compre agora</a></div>
		<div class="ford_banner-oferta_03"><a href="" class="compre chat-zopim btn-chat-ford">Compre agora</a></div>
		<div class="ford_banner-oferta_04"><a href="" class="compre chat-zopim btn-chat-ford">Compre agora</a></div>



		<div class="container">
			<div class="formulario">
				<h1 class="titulo-form"><span>PROPOSTA DE </span></br>FINANCIAMENTO</h1>
			</div>
		
		<!-- Conteúdo temporário para testar o formulario de contatos -->

			<form action="includes/cadastro.php" method="post" id="form-contato">

				<div class="col-md-12 alertas">
					
				</div>

				<input type="hidden" name="montadora" id="montadora" value="5">

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
			<p class="texto-legal">Preços e condições de financiamento válidas de 26/08/2015 a 28/08/2015 ou enquanto durarem os estoques. Taxa Zero para Toda Linha, Exceto New Fiesta SD e Focus 2016. New Fiesta Hatch  S 1.5L 2016 (cat RBB6) a partir de R$ 46.790,00 à vista ou financiado com taxa de 0,0% a.m. e 00,00% a.a, 80% de entrada (R$ 37.432,00) e saldo em 48 parcelas de R$ 212,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 47.608,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,35% a.m. e 4,25% a.a., por meio do Programa Ford Credit. Ecosport SE 1.6L  2015 (cat ECG5) a partir de R$ 67.700,00 à vista ou financiado com taxa de 0,0% a.m. e 00,00% a.a, 72% de entrada (R$ 48.744,00) e saldo em 48 parcelas de R$ 418,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 68.808,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,23% a.m. e 2,85% a.a., por meio do Programa Ford Credit. Focus Hatch S 1.6L 2015 (cat QAN5) a partir de R$ 69.900,00 à vista ou financiado com taxa de 0,0% a.m. e 00,00% a.a, 60% de entrada (R$ 41.940,00) e saldo em 48 parcelas de R$ 612,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 71.316,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,20% a.m. e 2,47% a.a., por meio do Programa Ford Credit.Focus Sedan S 2.0L 2015 (cat RCM5) a partir de R$ 77.900,00 à vista ou financiado com taxa de 0,0% a.m. e 00,00% a.a, 60% de entrada (R$ 46.740,00) e saldo em 48 parcelas de R$ 680,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 79.380,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,19% a.m. e 2,32% a.a., por meio do Programa Ford Credit. Ranger XLS 2.5 Flex Cabine Dupla 4x2 2015 (cat JRC5)  a partir de R$ 90.700,00 à vista ou financiamento com taxa de 0,00% a.m. e 0,00% a.a, 67% de entrada (R$ 60.769,00) e saldo em 48 parcelas de R$ 654,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 92.161,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,20% a.m. e 2,38% a.a., por meio do Programa Ford Credit. Ranger XLT Diesel 4x4 AT 2015 (cat JMO5)  a partir de R$ 149.700,00 à vista ou financiamento com taxa de 0,00% a.m. e 0,00% a.a, 60% de entrada (R$ 89.820,00) e saldo em 48 parcelas de R$ 1.297,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 152.076,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,16% a.m. e 1,94% a.a., por meio do Programa Ford Credit. Ranger XLT Diesel 4x4 AT (cat JMO5)  a partir de R$ 149.700,00 à vista ou financiamento com taxa de 0,49% a.m. e 6,04% a.a, 54% de entrada (R$ 80.838,00) e saldo em 06 parcelas de R$ 13.203,00 na modalidade CDC com 180 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 160.056,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 4,16% a.m. e 63,01% a.a., por meio do Programa Ford Credit. Ford Fusion 2015 (cat UCC5)  a partir de R$ 110.000,00 à vista ou financiamento com taxa de 0,00% a.m. e 0,00% a.a, 66% de entrada (R$ 72.600,00) e saldo em 48 parcelas de R$ 814,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 111.672,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,18% a.m. e 2,18% a.a., por meio do Programa Ford Credit. Ford Fusion Titanium 2.0 Ecoboost 2015 (cat UNA5)  a partir de R$ 121.000,00 à vista ou financiamento com taxa de 0,00% a.m. e 0,00% a.a, 66% de entrada (R$ 79.860,00) e saldo em 48 parcelas de R$ 895,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 122.820,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,18% a.m. e 2,16% a.a., por meio do Programa Ford Credit. Edge 2014 (cat JEF4)  a partir de R$ 150.000,00 à vista ou financiamento com taxa de 0,00% a.m. e 0,00% a.a, 80% de entrada (R$ 120.000,00) e saldo em 48 parcelas de R$ 656,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 151.488,00. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,20% a.m. e 2,42% a.a., por meio do Programa Ford Credit. Novo Ford Ka SE 1.0L 2015 (cat KCC5) a partir de R$ 39.390,00 à vista ou financiado com taxa de 0,0% a.m. e 00,00% a.a, 75% de entrada (R$ 29.542,50) e saldo em 48 parcelas de R$ 223,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 40.246,50. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,35% a.m. e 4,23% a.a., por meio do Programa Ford Credit. Novo Ford Ka + SE 1.5L 2015 (cat ZFC5) a partir de R$ 46.090,00 à vista ou financiado com taxa de 0,0% a.m. e 00,00% a.a, 75% de entrada (R$ 34.567,50) e saldo em 48 parcelas de R$ 259,00 na modalidade CDC com 30 dias de carência para pagamento da 1ª parcela, incluindo tarifas, custos e impostos (IOF). Valor total a prazo de R$ 46.999,50. Custo Efetivo Total (CET) calculado na data de 29/06/2015 a partir de 0,31% a.m. e 3,84% a.a., por meio do Programa Ford Credit. Não abrange seguro, acessórios, documentação e serviços de despachante, manutenção ou qualquer outro serviço prestado pelo Distribuidor. Sujeito à aprovação de crédito. O valor de composição do CET poderá sofrer alteração, quando da data efetiva da contratação, considerando o valor do bem adquirido, as despesas contratadas pelo cliente, custos de Registros de Cartórios variáveis de acordo com a UF (não incluso no valor das parcelas e no cálculo da CET) na data da contratação. Contratos de Financiamento e Arrendamento Ford Credit são operacionalizados pelo Banco Bradesco Financiamentos S.A. Valores válidos para cores sólidas. Frete incluso.</p>
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

				preencheCarros('#carro', 5);

				preencheConcessionarias('#concessionaria', 5);

				preencheConcessionarias('#contato-concessionarias', 5);

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
		$.src="//v2.zopim.com/?3G8Gd569c7FceXPFoD4xCfay0AuzmTOA";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
		<!--End of Zopim Live Chat Script-->


<?php require_once('includes/footer.php'); ?>

		