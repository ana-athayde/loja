<?php


class Produto{

	private $codigo;
	private $nome_produto;
	private $fornecedor;
	private $tipo_produto;
	private $telefone_SAC;
	private $valor_produto;
	private $valor_venda;

	function __construct(){

 	}

 	function setData($dados){

 		foreach ($dados as $propriedade => $valor) {
 			
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