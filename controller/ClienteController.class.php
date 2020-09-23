<?php

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN - AnaAthayde/loja/";

include_once $dir_path . "model/Cliente.class.php";
include_once $dir_path . "model/ClienteBusiness.class.php";

class ClienteController{
	
	function cadastrar($formulario)	{

		$cliente = new Cliente();

		$cliente->setData($formulario);

		// Vamos criar um objeto de negocio
		$clienteBusiness = new ClienteBusiness();
		
		// E pedir para o objeto de negocio cadastrar o cliente
		$resultado = $clienteBusiness->cadastrar($cliente);
		
		// Decidir o que fazer se cadastrou corretamente e o que fazer se nao cadastrou
		if ($resultado){
			echo "Inserido";	
			header('Location: listar.php');	
		} else 
			echo "Nao inserido";

	}

	function listar(){

		$clienteBusiness = new ClienteBusiness();

		$clientes = $clienteBusiness->listar();

		return $clientes;

	}

}


?>