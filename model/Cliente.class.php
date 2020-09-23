<?php 

class Cliente{

	private $id;
	private $nome_completo;
	private $email;
	private $cpf;
	private $data_nascimento;
	private $endereco_cep;
	private $endereco_logradouro;
	private $endereco_numero;
	private $endereco_complemento;
	private $endereco_cidade;
	private $endereco_estado;

	function __construct(){

 	}


 	function setData($dados){

		//Passa por todos os dados pedidos e passa como propriedades que acessa valor dos dados passados
 		foreach ($dados as $propriedade => $valor) {
			 
			//Acessa as propriedades da classe e lhe da o valor recebido pela função
 			$this->{$propriedade} = $valor;

 		}

 	}

 	function __get($propriedade){
		
		return $this->{$propriedade}; 		
 	
 	}

 	function __set($propriedade, $valor){

 		$this->{$propriedade} = $valor;

 	}


}


?>