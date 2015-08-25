<?php

require('../includes/connection.php');

// Retornar os dados apenas se a request for POST

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Iniciar a conexão

	$conexao = new Connection;

	// Buscar o usuário no banco de dados

	$resultado = $conexao->select('usuarios', array('usuario' => $_POST['username']));

	// Comparar a senha do banco com a senha fornecida pelo usuário

	if($resultado[0]['senha'] == base64_encode($_POST['password']))
	{
		// Retornar uma lista de dados

		$resultados = $conexao->select('contatos');

		echo json_encode($resultados);
		exit;
	}
	else
	{
		return json_encode(false);
	}
	
}