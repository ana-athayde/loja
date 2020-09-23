<?php

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN - AnaAthayde/loja/";

include_once $dir_path . "model/Produto.class.php";
include_once $dir_path . "model/ProdutoDAO.class.php";
include_once $dir_path . "model/DBConnection.class.php";

class ProdutoBusiness{

	function __construct(){
	
	}

	function cadastrar($produto){

		$dbConnection = new DBConnection();

		$produtoDAO = new ProdutoDAO($dbConnection);

		return $produtoDAO->cadastrar($produto);
	}

	function listar(){

		$produtoDAO = new ProdutoDAO(new DBConnection());

		return $produtoDAO->listar();
	}
}

?>