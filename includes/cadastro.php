<?php

require "connection.php";

// Realizar o cadastro apenas se a request for POST

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	// Obter os dados do Post

	$dados = $_POST;

	// Iniciar a conexão com o banco

	$conexao = new Connection;

	$resultado = $conexao->select('cadastros', array('email' => $dados['email']));

	// Testar se o cadastro já existe

	if(count($resultado) > 0)
	{
		echo "Este e-mail já está cadastrado no nosso sistema.";
		exit;
	}

	//////////////////////////////////////////////// Validação básica

	// Nome

	if($dados['nome'] == '' || !$dados)
	{
		echo "Preencha o campo nome.";
		exit;
	}

	// Email

	if($dados['email'] == '' || !$dados)
	{
		echo "Preencha o campo email.";
		exit;
	}

	// Telefone

	if($dados['telefone'] == '' || !$dados)
	{
		echo "Preencha o campo telefone.";
		exit;
	}

	// Mensagem

	if($dados['mensagem'] == '' || !$dados)
	{
		echo "Preencha o campo mensagem.";
		exit;
	}


	//////////////////////////////////////////////// Gravação

	// Inserir os dados

	$conexao->inserir('contatos', array(
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
	));

	// Retornar sem nenhum erro

	echo "";
}