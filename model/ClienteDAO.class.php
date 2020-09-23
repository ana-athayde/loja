<?php 

	
class ClienteDAO{

	private $dbConnection;

	function __construct($dbConnection){

		$this->dbConnection = $dbConnection;
	}

	function cadastrar($cliente){

		$campos = [
			"nome_completo",
			 "email",
			 "cpf",
			 "data_nascimento",
			 "endereco_cep",
			 "endereco_logradouro",
			 "endereco_complemento",
			 "endereco_cidade",
			 "endereco_estado",
			 "endereco_numero"];

		
		$campos_str = implode($campos,",");

		foreach ($campos as $campo){
			$valores[] = "'" . $cliente->{$campo} . "'";			
		}

		$valores_str = implode($valores,",");

		$sql_insert = "INSERT INTO cliente ({$campos_str}) VALUES ({$valores_str})";

		$connection = $this->dbConnection->getConnection();

		$result = $connection->query($sql_insert);

		if (!$result){
			echo $connection->error;
		}

		return $result;

	}


	function listar(){

		$sql_listar = "SELECT * FROM cliente;";

		$connection = $this->dbConnection->getConnection();

		$result = $connection->query($sql_listar);

		/* Atividade: implementar o código que transforma o resultado
		da query armazenado em $result para um array de objetos.

		Pseudocódigo:

		SE o número de resultados é maior que 0 ENTÃO

			ENQUANTO houver linhas de resultado em $result FAÇA

				- criar um objeto "$cliente"

				PARA CADA coluna na linha de resultado FAÇA

					- preencher o atributo correpondente de "$cliente$
				
				- adicionar o "$cliente" com os dados preenchidos num 
				  vetor "$clientes"		
		*/

		if ($result->num_rows > 0){

			while( $linha = $result->fetch_assoc() ){

				$cliente = new Cliente();
								
				foreach ($linha as $atributo => $value) {
					$cliente->$atributo = $value;
				}

				$clientes[] = $cliente;				

			}

		}
				
		return $clientes;
		


	}

}




?>