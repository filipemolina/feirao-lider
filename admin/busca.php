<?php

require "../includes/connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$objeto = $_POST['objeto'];

	$conexao = new Connection;

	// Retornar o nome do objeto selecionado à partir do ID (Carro ou concessionária)

	if(isset($_POST['campos']))
	{

		if(isset($_POST['campos']['id']))
		{
			// Caso o usuário esteja procurando pelo ID, retornar apenas 1 resultado

			$resultado = $conexao->select($objeto, $_POST['campos']);
			echo json_encode($resultado[0]);
		}
		else
		{
			// Caso contrário, retornar todos os resultados

			$resultado = $conexao->select($objeto, $_POST['campos']);
			echo json_encode($resultado);
		}

	}
	else
	{
		// Caso o usuário não tenha fornecido campos para pesquisar, retornar todos os resultados da tabela

		$resultado = $conexao->select($objeto);
		echo json_encode($resultado);
	}
}