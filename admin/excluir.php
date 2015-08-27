<?php

require "../includes/connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	$tabela = $_POST['tabela'];
	$id = $_POST['id'];

	$conexao = new Connection;

	$resultado = $conexao->excluir($tabela, $id);

	if($resultado)
	{
		echo 1;
	}
	else
	{
		echo $resultado;
	}

}