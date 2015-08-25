App = {};

App.inscritos = 0;
App.carro = "";
App.concessionaria = "";

function trocaConteudo(mensagem)
{
	$("div.modal-body p").html(mensagem);
}

function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('lista'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}

// Função que obtém os dados do banco e preenche a tabela

function preencheTabela()
{
	var checkbox;
	var carteirinha;

	for(dado in dados)
	{
		//Obter o nome do carro

		$.ajax({
		  type: 'POST',
		  url: "busca.php",
		  data: {'objeto' : 'carros', 'id' : dados[dado].id_carro},
		  success: function(data)
			{ 
				var resultado = JSON.parse(data); 
				App.carro = resultado.nome;
			},
		  async:false
		});

		//Obter o nome da concessionaria

		$.ajax({
		  type: 'POST',
		  url: "busca.php",
		  data: {'objeto' : 'concessionarias', 'id' : dados[dado].id_carro},
		  success: function(data)
			{ 
				var resultado = JSON.parse(data); 
				App.concessionaria = resultado.nome;
			},
		  async:false
		});

		// Incrementar a quantidade de inscritos

		App.inscritos++;

		$(".table").append("<tr><td>"+dados[dado].nome+"</td><td>"+dados[dado].email+"</td><td>"+dados[dado].tel+"</td><td>"+dados[dado].entrada+"</td><td class='centralizar'>"+dados[dado].prestacoes+"</td><td class='centralizar'>"+App.carro+"</td><td class='centralizar'>"+App.concessionaria+"</td><td><a class='abre-modal' href='javascript:void(0)' onclick='trocaConteudo(\""+dados[dado].mensagem+"\")' data-toggle='modal' data-target='#myModal'>Mensagem</a></td></tr>");
	}

	// Mostrar os valores nos boxes de resultados

	// Totais

	$(".inscricoes .panel-body .num_total").html(App.inscritos);
	$(".carteirinhas .panel-body .num_total").html(App.inscritos_carteirinha);
	$(".participantes .panel-body .num_total").html(App.total_participantes);

	// Confirmados

	$(".inscricoes .num_confirmados").html(App.confirmados);
	$(".carteirinhas .num_confirmados").html(App.confirmados_carteirinha);
	$(".participantes .num_confirmados").html(App.confirmados_participantes);

	$(".table, .resultados").addClass("fadeInUp animated");
}

$(function(){

	////////////////////////////////////////////////////// Veririficar o Cookie

	if($.cookie('usuario'))
	{
		$("#loginform").hide();

		$.post("list.php", { username : $.cookie('usuario'), password : $.cookie('senha') }, function(data){

			if(data)
			{
				// Esconder o formulário de login e preencher a tabela

				dados = JSON.parse(data);

				$(".login").hide();

				preencheTabela(dados);

			}
			else
			{
				$("div.alert").addClass('alert-danger').html('Dados incorretos, tente novamente');
			}

		});
	}
	else
	{
		$("#loginform").addClass('fadeInLeft animated');
	}

	////////////////////////////////////////////////////// Submit do Formulário de Login

	$("form#loginform").submit(function(event){

		event.preventDefault();

		var username = $("#login-username").val();
		var password = $("#login-password").val();

		$.post("list.php", { username : username, password : password }, function(data){

			if(data)
			{
				// Gravar o cookie de autorização

				$.cookie('usuario', username);
				$.cookie('senha', password);

				// Esconder o formulário de login e preencher a tabela

				dados = JSON.parse(data);

				$("#loginform").removeClass('fadeInLeft animated').addClass('fadeOutLeft animated');

				setTimeout(function(){

					$("#loginform").hide();
					$(".login").hide();

					preencheTabela(dados);

				}, 1000);
			}
			else
			{
				$("div.alert").addClass('alert-danger').html('Dados incorretos, tente novamente');
			}

		});

		return false;

	});

	////////////////////////////////////////////////////// Click do Checkbox de confirmar presença

	$(".table").on('click', 'input[type=checkbox]', function(){

		var elemento = $(this);

		$.post("confirmar.php", { id : $(this).val(), confirmado : $(this).prop('checked') }, function(data){

			// Obter o número da carteirinha do usuário confirmado

			var numero_carteirinha = $(elemento).parent('td').prev('td').html();

			// Obter o número de pessoas

			var numero_pessoas = parseFloat($(elemento).parent('td').prev('td').prev('td').html());

			// Caso o checkbox tenha sido clicado para confirmar mais um usuário, aumentar em 1 o número nos boxes,
			// caso contrário diminuir.
			
			if(data == "true")
			{
				App.confirmados++;
				App.confirmados_participantes += numero_pessoas;

				// Caso o usuário tenha carteirinha, alterar o número lá também

				if(numero_carteirinha != "-")
				{
					App.confirmados_carteirinha++;
				}
			}
			else
			{
				App.confirmados--;
				App.confirmados_participantes -= numero_pessoas;

				// Caso o usuário tenha carteirinha, alterar o número lá também

				if(numero_carteirinha != "-")
				{
					App.confirmados_carteirinha--;
				}
			}

			// Atualizar os dados nos boxes

			$(".inscricoes .num_confirmados").html(App.confirmados);
			$(".carteirinhas .num_confirmados").html(App.confirmados_carteirinha);
			$(".participantes .num_confirmados").html(App.confirmados_participantes);

			

		});

	});

	////////////////////////////////////////////////////// Logout

	$(".logout").click(function(){

		$.removeCookie('usuario');
		$.removeCookie('senha');

		location.reload();

	});

});