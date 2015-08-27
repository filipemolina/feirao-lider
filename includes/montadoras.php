<?php

require_once 'connection.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	// Iniciar a conexão

	$conexao = new Connection;

	$id_concessionaria = $_POST['id_concessionaria'];

	$montadora = $conexao->montadoraPorConcessionaria($id_concessionaria);

	echo $montadora;

}