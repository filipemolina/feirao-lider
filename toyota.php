<?php require_once('includes/header_toyota.php'); ?>

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

		<div class="toyota_banner-oferta_01"><a href="" class="compre chat-zopim btn-chat-toyota">Compre agora</a></div>
		<div class="toyota_banner-oferta_02"><a href="" class="compre chat-zopim btn-chat-toyota">Compre agora</a></div>
		<div class="toyota_banner-oferta_03"><a href="" class="compre chat-zopim btn-chat-toyota">Compre agora</a></div>



		<div class="container">
			<div class="formulario">
				<h1 class="titulo-form"><span>PROPOSTA DE </span></br>FINANCIAMENTO</h1>
			</div>
		
		<!-- Conteúdo temporário para testar o formulario de contatos -->

			<form action="includes/cadastro.php" method="post" id="form-contato">

				<div class="col-md-12 alertas">
					
				</div>

				<input type="hidden" name="montadora" id="montadora" value="4">

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
			<p class="texto-legal">ETIOS HB X 1.3 FLEX 16V 5P MEC. Ano/modelo 2015/2016 à vista R$39.990,00 ou financiado com o Banco Toyota nas seguintes condições: CDC (Crédito Direto ao Consumidor), pessoa física, com entrada de R$23.994,00(60%) e 36 prestações fixas de R$489,08 Taxa de juros pré-fixada de 0,00 % ao mês, equivalente a 0,00 % ao ano + IOF (Imposto sobre Operações Financeiras) no valor de R$510,28. Valor total a ser financiado de R$17.606,90(IOF + Registro de contrato base Estado RJ no valor de R$25,62 e Cesta de Serviços no valor de R$525,00 e Tarifa de Confecção de Cadastro para início de Relacionamento no valor de R$550,00 inclusos no Total Financiado). Primeira parcela com vencimento para 30 dias. Custo Efetivo Total (CET) de 6,51% ao ano. Valor total a prazo de R$41.599,80. HILUX CD SRV 4X2 2.7 FLEX 16V AUT. Ano/modelo 2015/2015 à vista R$106.567,00 ou financiado com o Banco Toyota nas seguintes condições: CDC (Crédito Direto ao Consumidor), pessoa física, com entrada de R$63.940,20(60%) e 36 prestações fixas de R$1.250,90. Taxa de juros pré-fixada de 0,00 % ao mês, equivalente a 0,00 % ao ano + IOF (Imposto sobre Operações Financeiras) no valor de R$1.305,13 Valor Total a ser financiado de R$45.032,55 (IOF + Registro de contrato base Estado RJ no valor de R$25,62 e Cesta de Serviços no valor de R$525,00 e Tarifa de Confecção de Cadastro para início de Relacionamento no valor de R$550,00 inclusos no Total Financiado). Primeira parcela com vencimento para 30 dias. Custo Efetivo Total (CET) de 3,65% ao ano. Valor Total a prazo de R$108.972,60. HILUX SW4 SR 4X2 2.7 FLEX 5L 16V AUT. Ano/modelo 2015/2015 à vista R$127.850,00 ou financiado com o Banco Toyota nas seguintes condições: CDC (Crédito Direto ao Consumidor), pessoa física, com entrada de R$76.710,00 (60%) e 36 prestações fixas de R$1.494,43. Taxa de juros pré-fixada de 0,00 % ao mês, equivalente a 0,00 % ao ano + IOF (Imposto sobre Operações Financeiras) no valor de R$1.559,23. Valor Total a ser financiado de R$53.799,85 (IOF + Registro de contrato base Estado RJ no valor de R$25,62 e Cesta de Serviços no valor de R$525,00 e Tarifa de Confecção de Cadastro para início de Relacionamento no valor de R$550,00 inclusos no Total Financiado). Primeira parcela com vencimento para 30 dias. Custo Efetivo Total (CET) de 3,36% ao ano. Valor Total a prazo de R$130.509,48. Crédito sujeito à análise e aprovação. O CET apresentado é aplicável ao exemplo acima com prestações fixas sem intermediárias. A alteração de qualquer das condições do financiamento acarretará novo cálculo do CET. ERC Banco Toyota (Equipe de Relacionamento com o Cliente) 0800 016 4155 ou envie um e-mail para erc@bancotoyota.com.br. Ouvidoria Banco Toyota (somente após atendimento pelo ERC): 0800-772-5877. Na categoria de veículos compactos e médios, o Etios nas versões hatch 1.3 (16V DOHC T-Flex) e 1.5 (16V DOHC T-Flex) possui nota A no Programa Brasileiro de Etiquetagem entre os veículos com o menor consumo de combustível da categoria em 2015. O Etios hatch 1.3 apresentou o seguinte consumo – etanol/urbano: 8,3 km/l; gasolina/urbano: 12,2 km/l; etanol/estrada: 9,1 km/l; gasolina/estrada: 13,3 km/l. O Etios hatch 1.5 apresentou o seguinte consumo – etanol/urbano: 8,5 km/l; gasolina/urbano: 12,2 km/l; etanol/estrada: 9,5 km/l; gasolina/estrada: 13,8 km/l. Valores de referência medidos em laboratório, conforme NBR 7024, com ciclos de condução e combustível-padrão podendo não corresponder ao consumo verificado com o uso do veículo, que depende das condições do trânsito, do combustível, do veículo e dos hábitos do motorista. O Etios sedã 1.5 (16V DOHC T-Flex) possui nota A no Programa Brasileiro de Etiquetagem entre os veículos com o menor consumo de combustível da categoria em 2015. Para saber mais, consulte sempre o manual do proprietário e os sites: www.inmetro.gov.br e www.conpet.gov.br. A Toyota oferece três anos de garantia de fábrica para toda a linha, sem limite de quilometragem para uso particular e, para uso comercial, três anos de garantia de fábrica ou 100.000 km, prevalecendo o que ocorrer primeiro. Consulte o livrete de garantia, o manual do proprietário ou o site www.toyota.com.br para obter mais informações. Esta oferta não abrange os veículos adquiridos através da modalidade de vendas diretas ao consumidor. Para outros modelos e condições consulte a concessionária. Avaliação do veiculo usado pela tabela FIPE somente na compra de um veiculo Etios 0km, SW4 ou HILUX 0km pelo preço público sugerido da Toyota, sendo os veículos usados  (Exceto táxi, carros importados, veículos comerciais ou modificados) devem ter as seguintes condições: veículos a partir do ano de fabricação 2012 até 2015 com no máximo 12.000 Km rodados por ano (considerando-se a média da quilometragem atual do veiculo usado), com as todas revisões feitas em concessionária, sujeito a avaliação física e aprovado por empresa homologada de vistoria contratada pela concessionária. Todos os componentes internos do veículo serão verificados, sendo: banco, painéis de instrumentos, interruptores, revestimento das portas etc. Rasgos, cortes, dano, furos ou queimaduras nos bancos, tapetes, forro ou painel de instrumentos não serão aceitos exceto se houver condições de serem reparados e se o cliente concordar que os reparos sejam cobrados pelo concessionário. Ar-condicionado, Direção Hidráulica, Vidros e Travas elétricas originais, sem avarias (externas ou mecânicas tais como ruídos no motor, problemas no câmbio, escapamento, etc.), Os comandos do veículo deverão estar em pleno funcionamento, sem qualquer dano ou avaria. Pneus e rodas: todos os pneus devem ser da mesma marca, além de estarem em boas condições. Serão aceitos na troca por ETIOS os veículos das marcas TOYOTA, HONDA, HYUNDAI, FIAT, VW, FORD e GM com motores de 1.0l a 1.6l, com câmbio mecânico e na troca por SW4 ou HILUX: veículos apenas da marca TOYOTA. Imagens meramente ilustrativas.</p>
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

				preencheCarros('#carro', 4);

				preencheConcessionarias('#concessionaria', 4);

				preencheConcessionarias('#contato-concessionarias', 4);

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
		$.src="//v2.zopim.com/?3G7cJKCMIfjXYBDIob1BqPoyKqJzUvbY";z.t=+new Date;$.
		type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
		</script>
		<!--End of Zopim Live Chat Script-->


<?php require_once('includes/footer.php'); ?>

		