<?php

	// Retorna os carros por montadora

	//Incluir o arquivo de conexão
	require_once "connection.php";

	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		//Obter os dados
		$montadora = isset($_GET['montadora']) ? $_GET['montadora'] : "";

		//Obter os carros da montadora

		if($montadora != "")
		{
			//Iniciar a conexão com o banco
			$conexao = new Connection;

			$resultado = $conexao->select('carros', array('id_montadora' => $montadora));

			if(count($resultado) > 0)
			{
				echo json_encode($resultado);
			}
			else
			{
				echo "Nenhum carro";
			}
		}
		else
		{
			return "Forneça um ID de montadora";
		}
	}

