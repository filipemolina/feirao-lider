<?php require_once('includes/header.php'); ?>

		<!-- Conteúdo -->
		
		<!-- Conteúdo temporário para testar o formulario de contatos -->

		<form action="includes/cadastro.php" method="post">
			
			<input type="text" name="nome" placeholder="nome"/>
			<input type="text" name="email" placeholder="email"/>
			<input type="text" name="telefone" placeholder="telefone"/>
			<input type="text" name="mensagem" placeholder="mensagem"/>
			<input type="text" name="entrada" placeholder="entrada"/>
			<input type="text" name="prestacoes" placeholder="prestacoes"/>
			<input type="text" name="carro" placeholder="carro"/>
			<input type="text" name="concessionaria" placeholder="concessionaria"/>

			<input type="submit" value="Enviar">

		</form>

		<!-- Conteúdo temporário para testar o formulario de contatos -->

		<script>

		$(function(){

			//////////////////////////////////////////////////// Exemplo de como preencher o select de concessionárias e carros:

			//preencheConcessionarias("#select", '2');
			//preencheCarros("#select", '2');

			// Substituir o 2 pelo id da montadora de acordo com o banco de dados

			//////////////////////////////////////////////////// Como obter todas as concessionárias:

			// 	$.get('includes/concessionarias.php', function(data){ 
			//		var dados = JSON.parse(data);
			//	});

			// A variavel dados será um vetor de objetos com as propriedades de acordo com o banco de dados (nome, endereco, telefone...)

			//////////////////////////////////////////////////// Como obter as concessionárias de uma montadora específica

			// 	$.get('includes/concessionarias.php', { montadora : id_montadora }, function(data){ 
			//		var dados = JSON.parse(data);
			//	});

			// Substituir 'id_montadora' por um integer que é o id da montadora no banco de dados.
			// O resultado será o mesmo da função anterior

		})

		</script>


<?php require_once('includes/footer.php'); ?>

		