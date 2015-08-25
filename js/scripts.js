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

$(function(){

	///////////////////////////////////// As chamadas de eventos do jQuery devem ser inseridas aqui

	

})