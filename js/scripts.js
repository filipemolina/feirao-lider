// Função para retornar preencher um select com todas as concessionárias de uma montadora

// id_select = Identificador do select (da mesma forma como se fosse usando na função $() do jQuery)
// montadora = ID da montadora de acordo com o cadastro no banco de dados

function preencheConcessionarias(id_select, montadora)
{
	$.get("includes/concessionarias.php", { montadora : montadora }, function(data) 
	{ 

		var dados = JSON.parse(data);

		for(dado in dados)
		{
			// Criar as options dentro do select

			$(id_select).append("<option value='"+dados[dado].id+"'>"+dados[dado].nome+"</option>");
		}

	});
}

// Função para retornar preencher um select com todas as concessionárias de uma montadora

// id_select = Identificador do select (da mesma forma como se fosse usando na função $() do jQuery)
// montadora = ID da montadora de acordo com o cadastro no banco de dados

function preencheCarros(id_select, montadora)
{
	$.get("includes/carros.php", { montadora : montadora }, function(data) 
	{

		var dados = JSON.parse(data);

		for(dado in dados)
		{
			// Criar as options dentro do select

			$(id_select).append("<option value='"+dados[dado].id+"'>"+dados[dado].nome+"</option>");
		}

	});
}

function dadosConcessionarias(id_concessionaria)
{

	$.post('includes/busca.php', { objeto : 'concessionarias', campos : { id : id_concessionaria }}, function(data)
	{ 
		
		var dados = JSON.parse(data);

		console.log("Chamou a ajax");

		$("#nome-concessionaria").html(dados.nome);

		$("#telefone-concessionaria").html(dados.telefone);
		
		return dados;

	});
}

function scrollar(classe)
{
	$('html, body').animate({
        scrollTop: $("."+classe).offset().top
    }, 1000);
}

$(function(){

	///////////////////////////////////// As chamadas de eventos do jQuery devem ser inseridas aqui

	// Submit do form de contato

	$("#form-contato").submit(function(e){

		e.preventDefault();

		var erros = false;
		var msg = [];

		var nome = $("#nome").val();
		var email = $("#email").val();
		var telefone = $("#telefone").val();
		var entrada = $("#entrada").val();
		var prestacoes = $("#prestacoes").val();
		var carro = $("#carro").val();
		var concessionaria = $("#concessionaria").val();
		var mensagem = $("#mensagem").val();
		var montadora = $("#montadora").val();

		if(nome == '')
		{
			erros = true;
			msg.push("Preencha o campo nome.");
		}

		if(email == '')
		{
			erros = true;
			msg.push("Preencha o campo email.");
		}

		if(telefone == '')
		{
			erros = true;
			msg.push("Preencha o campo telefone.");
		}

		if(entrada == '')
		{
			erros = true;
			msg.push("Preencha o campo entrada.");
		}

		if(prestacoes == '')
		{
			erros = true;
			msg.push("Preencha o campo prestações.");
		}

		if(carro == 0)
		{
			erros = true;
			msg.push("Preencha o campo carro.");
		}

		if(concessionaria == 0)
		{
			erros = true;
			msg.push("Preencha o campo concessionária.");
		}

		if(mensagem == '')
		{
			erros = true;
			msg.push("Preencha o campo mensagem.");
		}

		if(erros)
		{
			// Zerar o conteúdo da div de alertas

			$("div.alertas").html('');

			// Adicionar os novos alertas

			for(mensagens in msg)
			{
				$("div.alertas").append('<div class="alert alert-danger" role="alert">'+msg[mensagens]+'</div>');
			}
		}
		else
		{
			$.post("includes/cadastro.php", 
			{
				nome : nome,
				email : email,
				telefone : telefone,
				mensagem : mensagem,
				entrada : entrada,
				prestacoes : prestacoes,
				carro : carro,
				concessionaria : concessionaria,

			}, function(data){

				console.log("Data:");
				console.log(data);

				// Caso não tenha havido nenhum erro
				
				if(data == '')
				{
					// Zerar o conteúdo da div de alertas

					$("div.alertas").html('');

					// Informar que o cadastro foi efetuado com sucesso

					$("div.alertas").append('<div class="alert alert-success" role="alert">Cadastro realizado com sucesso</div>');				}

					// Zerar o formulário

					$("#nome").val('');
					$("#email").val('');
					$("#telefone").val('');
					$("#mensagem").val('');
					$("#entrada").val('');
					$("#prestacoes").val('');
					$("#carro").val(0);
					$("#concessionaria").val(0);

					// Enviar o email

					$.post("includes/mail.php", {
						nome : nome,
						email : email,
						telefone : telefone,
						mensagem : mensagem,
						entrada : entrada,
						prestacoes : prestacoes,
						carro : carro,
						concessionaria : concessionaria,
						montadora : montadora

					}, function(data){

						if(data == 1)
						{
							console.log('Enviou o email');
							console.log(data);
						}
						else
						{
							console.log("Não enviou o email");
							console.log(data);
						}

					});

			})
		}

		return false;

	});

	// Scroll do menu

	$('nav.menu ul a').click(function(){

		var elemento = $(this).data('scroll');

		scrollar(elemento);

	});

	// Abrir o chat

	$(".chat-zopim").click(function(e){

		e.preventDefault();

		$zopim.livechat.window.show();

	});

	// Máscara do telefone

	$("#telefone").mask("(99) 9999-9999?9");

})