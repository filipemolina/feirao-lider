<?php

require "connection.php";

// Realizar o cadastro apenas se a request for POST

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	// Obter os dados do Post

	$dados = $_POST;

	// Iniciar a conexão com o banco

	$conexao = new Connection;

	//////////////////////////////////////////////// Gravação

	// Inserir os dados

	$dados_cadastro = array(
		'nome' => $dados['nome'],
		'email' => $dados['email'],
		'tel' => $dados['telefone'],
		'mensagem' => $dados['mensagem'],
		'entrada' => $dados['entrada'],
		'prestacoes' => $dados['prestacoes'],
		'id_carro' => $dados['carro'],
		'id_concessionaria' => $dados['concessionaria'],
		'created' => date('Y-m-d h:i:s'),
		'modified' => date('Y-m-d h:i:s')
	);

	$erros = $conexao->inserir('contatos', $dados_cadastro);

	if(empty($erros))
	{
		// Retornar sem nenhum erro

		echo "";
	}
	else
	{
		echo json_encode($erros);
	}

	
}