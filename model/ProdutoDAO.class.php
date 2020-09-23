<?php

class ProdutoDAO{

	private $dbConnection;

	function __construct($dbConnection){

		$this->dbConnection = $dbConnection;
	}

	function cadastrar($produto){

		$campos = [
			"codigo",
			"nome_produto",
			"fornecedor",
			"tipo_produto",
			"telefone_SAC",
			"valor_produto",
			"valor_venda"
		];

		$campos_str = implode($campos,",");

		foreach ($campos as $campo) {
			$valores[] ="'" . $produto->{$campo} ."'";
		}

		$valores_str = implode($valores,",");

		$sql_insert = "INSERT INTO produto ({$campos_str}) VALUES ({$valores_str})";
		print_r($sql_insert);
		
		$connection = $this->dbConnection->getConnection();

		$result = $connection->query($sql_insert);

		if (!$result){
			echo $connection->error;
		}

		return $result;
	}

	function listar(){

		$sql_listar = "SELECT * FROM produto;";

		$connection = $this->dbConnection->getConnection();

		$result = $connection->query($sql_listar);


		if ($result->num_rows >0) {
			
			while ($linha = $result ->fetch_assoc()) {

				$produto = new Produto();

				foreach ($linha as $key => $value) {
					$produto->$key = $value;
				}

				$produtos[] = $produto;
			}
		}


		return $produtos;
	}
}

?>