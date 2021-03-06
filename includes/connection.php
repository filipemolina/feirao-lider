<?php

class Connection
{

	// Desenvolvimento

	// private $host = 'localhost';
	// private $dbname = 'etioscomvoce';
	// private $usuario = 'root';
	// private $senha = '';

	// Produção

	private $host = 'localhost';
	private $dbname = 'feirao-lider';
	private $usuario = 'root';
	private $senha = '';

	// private $host = 'localhost';
	// private $dbname = 'feirao-lider';
	// private $usuario = 'grupolider';
	// private $senha = 'grupolider2015';

	// Variável para guardar os erros que podem ocorrer

	private $erros = array();
	private $pdo;

	/*---------------------------------------------------------------------------------------------
	| Construtor da classe - Inicia a conexão com o banco e retorna algum erro que tenha ocorrido
	----------------------------------------------------------------------------------------------*/

	public function __construct()
	{
		$this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->usuario, $this->senha);
		
		if(!$this->pdo){
		    $this->erros[] = 'Erro ao criar a conexão';
		}
	}

	/*---------------------------------------------------------------------------------------------
	| getErrors
	----------------------------------------------------------------------------------------------*/

	// Retorna os erros que ocorreram na última execução e limpa a variável de erros
	// Essa função deve ser chamada após cada operação executada com essa classe para
	// verificar se tudo correu bem.

	public function getErrors()
	{
		$ultimos_erros = $this->erros;

		$this->erros = array();

		return $ultimos_erros;
	}

	/*---------------------------------------------------------------------------------------------
	| Inserir
	----------------------------------------------------------------------------------------------*/

	// Cadastrar informações no banco de dados.

	public function inserir($tabela, $dados)
	{
		// Obter todos os campos da tabela para serem gravados

		$campos = array_keys($dados);
		$campos_implode = implode(", ", $campos);
		$campos_param = implode(", :", $campos);

		// Obter os valores para os campos da tabela

		$valores = array_values($dados);

		// Montar a query com os wildcards dos parâmetros

		$query = "INSERT INTO $tabela(";

		$query .= $campos_implode . ") values(:";
		$query .= $campos_param . ");";

		// Preparar a query

		$statement = $this->pdo->prepare($query);

		$i = 0;

		// Passar o parâmetro $valor por referência (&). Caso contrário, todos os campos
		// da tabela assumiriam o último valor enviado

		$teste = '';

		foreach($valores as &$valor)
		{
			$tipo = (is_numeric($valor)) ? PDO::PARAM_INT : PDO::PARAM_STR;

			$statement->bindParam(":".$campos[$i], $valor, $tipo);

			$i++;
		}

		// Executar o a query

		$executa = $statement->execute();

		// Testar a execução da query

		if($executa)
		{
	   		$this->erros = array();
	   		$this->erros[] = $this->pdo->errorInfo();

	   		return "";
		}
		else
		{
	   		$this->erros[] = $this->pdo->errorInfo();

	   		return "False ".$this->pdo->errorInfo();
		}
	}

	/*---------------------------------------------------------------------------------------------
	| Select
	----------------------------------------------------------------------------------------------*/

	// Obter os dados do banco

	public function select($tabela, $campos = "", $ordem = "ASC")
	{
		// Iniciar a query

		$query = "SELECT * from $tabela WHERE ";

		if($campos == "")
		{
			$resultado = $this->pdo->query("SELECT * FROM $tabela ORDER BY id $ordem;");

			if(!$resultado)
			{
				return $this->pdo->errorInfo();
			}
			else
			{
				$resultado = $resultado->fetchAll();
				return $resultado;
			}
		}
		else
		{
			// Contador e variável usada para deteminar a quantidade de itens no array

			$i = 0;
			$tamanho = count($campos);

			// Iterar pelos itens do array para terminar de montar a query

			foreach($campos as $key => $value)
			{
				// Inserir as condições

				$query .= "$key = :$key";

				// Caso este não seja o último item do array, adicionar um " AND "

				if($i != $tamanho -1)
				{
					$query .= " AND ";
				}
				else
				{
					$query .= " ORDER BY id $ordem;";
				}

				// Incrementar o contador

				$i++;
			}

			$statement = $this->pdo->prepare($query);

			// Adicionar os parâmetros

			foreach($campos as $key => &$value)
			{
				// Testar o tipo de parâmetro

				$tipo = (is_numeric($value)) ? PDO::PARAM_INT : PDO::PARAM_STR;

				// Adicionar o parâmetro

				$statement->bindParam(":".$key, $value, $tipo);
			}

			// Executar a query

			$executa = $statement->execute();

			if($executa)
			{
		   		$this->erros = array();
		   		return $statement->fetchAll();
			}
			else
			{
		   		$this->erros[] = $this->pdo->errorInfo();
			}
		}
	}

	public function excluir($tabela, $id)
	{
		$query = "DELETE FROM $tabela WHERE id = $id;";

		$executa = $this->pdo->query($query);

		if($executa)
		{
			echo 1;
		}
		else
		{
			echo $this->pdo->errorInfo();
		}

	}

	public function montadoraPorConcessionaria($id)
	{
		$resultado = $this->select("concessionarias", array( 'id' => $id));

		if(count($resultado) > 0)
		{
			$montadora = $this->select("montadoras", array('id' => $resultado[0]['id_montadora']));

			if(count($montadora) > 0)
			{
				return $montadora[0]['nome'];
			}
		}
	}


	public function confirmar($id, $confirmado)
	{
		$query = "UPDATE cadastros SET confirmado = $confirmado where id = $id";

		$executa = $this->pdo->query($query);

		if(!$executa)
		{
			return json_encode($this->pdo->errorInfo());
		}
		else
		{
			return $confirmado;
		}
	}

	// Converter todas as strings de um array para utf8

	public function utf8ize($d) {
	    if (is_array($d)) {
	        foreach ($d as $k => $v) {
	            $d[$k] = $this->utf8ize($v);
	        }
	    } else if (is_string ($d)) {
	        return utf8_encode($d);
	    }
	    return $d;
	}

}