<?php

require "../includes/connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$objeto = $_POST['objeto'];
	$id = $_POST['id'];

	$conexao = new Connection;

	// Retornar o nome do objeto selecionado à partir do ID (Carro ou concessionária)

	$resultado = $conexao->select($objeto, array('id' => $id));

	echo json_encode($resultado[0]);
}