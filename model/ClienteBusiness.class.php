<?php  

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN - AnaAthayde/loja/";

include_once $dir_path . "model/Cliente.class.php";
include_once $dir_path . "model/ClienteDAO.class.php";
include_once $dir_path . "model/DBConnection.class.php";

/**
 * 
 */
class ClienteBusiness{
	
	function __construct(){
	
	}

	// Esta função vai receber um cliente do controller
	function cadastrar($cliente){

		$dbConnection = new DBConnection();

		$clienteDAO = new ClienteDAO($dbConnection);

		return $clienteDAO->cadastrar($cliente);

	}

	function listar(){

		$clienteDAO = new ClienteDAO( new DBConnection() );

		return $clienteDAO->listar();

	}
}


?>