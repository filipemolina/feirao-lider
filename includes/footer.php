		
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!-- Scripts da Página -->
		<script src="js/scripts.js"></script>

		<script type="text/javascript">

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

	</body>
</html>