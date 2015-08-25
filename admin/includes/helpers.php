<?php

	class Helpers
	{
	
		public $conexao;
		public $carros;
		public $concessionarias;

		function __construct()
		{
			// Instanciar a conexão

			require_once "../includes/connection.php";

			$this->conexao = new Connection;

			// Criar os vetores de carros e concessionárias

			$this->carros = [];
			$this->concessionarias = [];

			// Rodar as consultas

			$consulta_carros = $this->conexao->select('carros');
			$consulta_concessionarias = $this->conexao->select('concessionarias');

			// Preencher os vetores

			foreach($consulta_carros as $carro)
			{
				$this->carros[$carro['id']] = $carro['nome'];
			}

			foreach($consulta_concessionarias as $concessionaria)
			{
				$this->concessionarias[$concessionaria['id']] = $concessionaria['nome'];
			}

		}

		//////////////////////////////////////////////////////////////////////////// Funções

		public function criarLinha ($phpExcel, $resultado, $i)
		{
			//Carro

			$nome_do_carro = $this->carros[$resultado['id_carro']];

			//Concessionaria

			$nome_da_concessionaria = $this->concessionarias[$resultado['id_concessionaria']];

			// Preencher uma linha da tabela com os dados fornecidos

			$phpExcel->setActiveSheetIndex(0)
			         ->setCellValue('A' . $i, $resultado['nome'])
			         ->setCellValue('B' . $i, $resultado['email'])
			         ->setCellValue('C' . $i, $resultado['tel'])
			         ->setCellValue('D' . $i, $resultado['mensagem'])
			         ->setCellValue('E' . $i, $resultado['entrada'])
			         ->setCellValue('F' . $i, $resultado['prestacoes'])
			         ->setCellValue('G' . $i, $nome_do_carro)
			         ->setCellValue('H' . $i, $nome_da_concessionaria)
			         ->setCellValue('I' . $i, $resultado['created']);
		}

		public function clean($string) 
		{
		   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
		   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

		   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
		}
		
	}

	//////////////////////////////////////////////////////////////////////////// Fim