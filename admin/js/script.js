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

function preencheTabela(dados)
{
	var checkbox;
	var carteirinha;

	// Esvaziar a tabela

	$(".table").find("tr:gt(0)").remove();

	// Zerar o número de inscritor

	App.inscritos = 0;

	for(dado in dados)
	{
		//Obter o nome do carro

		$.ajax({
		  type: 'POST',
		  url: "busca.php",
		  data: {'objeto' : 'carros', campos : { 'id' : dados[dado].id_carro } },
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
		  data: {'objeto' : 'concessionarias', campos : { 'id' : dados[dado].id_carro } },
		  success: function(data)
			{ 
				var resultado = JSON.parse(data);
				App.concessionaria = resultado.nome;
			},
		  async:false
		});

		// Incrementar a quantidade de inscritos

		App.inscritos++;

		$(".table").append("<tr><td>"+dados[dado].id+"</td><td>"+dados[dado].nome+"</td><td>"+dados[dado].email+"</td><td>"+dados[dado].tel+"</td><td>"+dados[dado].entrada+"</td><td class='centralizar'>"+dados[dado].prestacoes+"</td><td class='centralizar'>"+App.carro+"</td><td class='centralizar'>"+App.concessionaria+"</td><td><a class='abre-modal' href='javascript:void(0)' onclick='trocaConteudo(\""+dados[dado].mensagem+"\")' data-toggle='modal' data-target='#myModal'>Mensagem</a></td></tr>");
	}

	// Mostrar os valores nos boxes de resultados

	// Totais

	$(".inscricoes .panel-body .num_total").html(App.inscritos);

	$(".table, .resultados").addClass("fadeInUp animated");
}

// Função que obtém todas as concessionárias cadastradas e preenche o select de relatórios

function preencheSelect()
{
	$.get('../includes/concessionarias.php', { 1 : 1 }, function(data){

		dados = JSON.parse(data);

		for(dado in dados)
		{
			// Criar os options dentro do select

			$("select#concessionarias").append("<option value='"+dados[dado].id+"'>"+dados[dado].nome+"</option>");
		}

	});
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

	preencheSelect();

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

	////////////////////////////////////////////////////// Mudar a Concessionária

	$("a#link-filtrar").click(function(){

		// Id Selecionado

		var id = $('select#concessionarias').val();

		var nome = $('select#concessionarias option:selected').text();

		if(id == 0)
		{
			// Buscar os dados filtrados e preencher novamente a tabela

			$.post('busca.php', { objeto : 'contatos' }, function(data){

				var dados = JSON.parse(data);

				preencheTabela(dados);

			});
		}
		else
		{
			// Buscar os dados filtrados e preencher novamente a tabela

			$.post('busca.php', { objeto : 'contatos', campos : { id_concessionaria : id } }, function(data){

				var dados = JSON.parse(data);

				preencheTabela(dados);

			});
		}

		// Mudar o link de exportação do formulário

		if(id != 0)
		{
			$("a#link-exportar").attr('href', 'exportar.php?concessionaria=' + id + "&nome=" + nome);
		}
		else
		{
			$("a#link-exportar").attr('href', 'exportar.php');
		}

	});

	////////////////////////////////////////////////////// Logout

	$(".logout").click(function(){

		$.removeCookie('usuario');
		$.removeCookie('senha');

		location.reload();

	});

});