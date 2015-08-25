<?php

	// Tratamento de Erros
	error_reporting(E_ALL);
	ini_set('display_errors', TRUE);
	ini_set('display_startup_errors', TRUE);
	date_default_timezone_set('Europe/London');

	define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

	// Incluir o PHPExcel 
	require_once '../includes/PHPExcel/PHPExcel.php';

	//Incluir a conexão com o banco
	require_once '../includes/connection.php';

	//Incluir as funções Helper
	require_once 'includes/helpers.php';

	if($_SERVER['REQUEST_METHOD'] == 'GET' )
	{
		//////////////////////////////////////////////////////////////////////////// Instanciar objetos

		// Instanciar um objeto PHPExcel

		$phpExcel = new PHPExcel();

		// Iniciar a conexão

		$conexao = new Connection;

		// Helpers

		$helpers = new Helpers;

		//////////////////////////////////////////////////////////////////////////// Fim

		//////////////////////////////////////////////////////////////////////////// Definir Informações da Tabela

		// Definir as propriedades do documento

		$phpExcel->getProperties()->setCreator('Feirao Lider')
								  ->setTitle('Relatorio de Cadastros')
								  ->setSubject('Relatorio de Cadastros')
								  ->setDescription('Relatorio de Cadastros do Feirão Líder, gerado utilizando o painel administrativo do site.');

		// Escrever o cabeçalho da tabela

		$phpExcel->setActiveSheetIndex(0)
		         ->setCellValue('A1', 'Nome')
		         ->setCellValue('B1', 'Email')
		         ->setCellValue('C1', 'Telefone')
		         ->setCellValue('D1', 'Mensagem')
		         ->setCellValue('E1', 'Entrada')
		         ->setCellValue('F1', 'Prestações')
		         ->setCellValue('G1', 'Carro')
		         ->setCellValue('H1', 'Concessionária')
		         ->setCellValue('I1', 'Horário');

		//////////////////////////////////////////////////////////////////////////// Fim

		//////////////////////////////////////////////////////////////////////////// Variáveis de GET

		// Obter as variáveis do GET

		$montadora = isset($_GET['montadora']) && $_GET['montadora'] != '' ? $_GET['montadora'] : null;
		$concessionaria = isset($_GET['concessionaria']) && $_GET['concessionaria'] != '' ? $_GET['concessionaria'] : null;
		
		$nome = isset($_GET['nome']) && $_GET['nome'] != '' ? $_GET['nome'] : '';
		$nome = $helpers->clean($nome);

		$data_hora = date('d-m-Y-h-i-s');

		//////////////////////////////////////////////////////////////////////////// Fim

		if(!is_null($concessionaria))
		{
			//////////////////////////////////////////////////////////////////////////// Consultar contatos de uma concessionária específica

			// Obter todos os contatos feitos para uma montadora

			$resultados = $conexao->select('contatos', array('id_concessionaria' => $concessionaria));

			// Contador de linhas da tabela
			// Inicia a gravar os dados pela segunda linha pois a primeira já foi preenchida com o cabeçalho

			$i = 2;

			foreach ($resultados as $resultado) 
			{
				// Preencher os dados na Planilha

				$helpers->criarLinha($phpExcel, $resultado, $i);

		        // Incrementar o contador de linhas da tabela

		        $i++;
			}

			$nome_arquivo = "relatorios/Relatorio-".$nome."-".$data_hora.".xlsx";

			$objWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel2007');
			$objWriter->save($nome_arquivo);

			header('Location: ' . $nome_arquivo);

			//////////////////////////////////////////////////////////////////////////// Fim
		}
		else
		{
			//////////////////////////////////////////////////////////////////////////// Consultar todos contatos

			// Caso nenhuma concessionária seja especificada

			$resultados = $conexao->select('contatos');

			// Contador de linhas da tabela
			// Inicia a gravar os dados pela segunda linha pois a primeira já foi preenchida com o cabeçalho

			$i = 2;

			foreach ($resultados as $resultado) 
			{
				// Preencher os dados na Planilha

				$helpers->criarLinha($phpExcel, $resultado, $i);

		        // Incrementar o contador de linhas da tabela

		        $i++;
			}

			$nome_arquivo = "relatorios/Relatorio-".$nome."-".$data_hora.".xlsx";

			$objWriter = PHPExcel_IOFactory::createWriter($phpExcel, 'Excel2007');
			$objWriter->save($nome_arquivo);

			header('Location: ' . $nome_arquivo);

			//////////////////////////////////////////////////////////////////////////// Fim
		}
	}