<?php

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN - AnaAthayde/loja/";

include_once $dir_path . "model/Produto.class.php";
include_once $dir_path . "model/ProdutoBusiness.class.php";

class ProdutoController{

	function cadastrar($formulario){

		$produto = new Produto();

		$produto->setData($formulario);

		$produtoBusiness = new ProdutoBusiness();

		$resultado = $produtoBusiness->cadastrar($produto);

		if ($resultado) {
			echo "Inserido";
			header('Location:listar.php');
		}else 
			echo "Não inserido";
	}

	function listar(){

		$produtoBusiness = new ProdutoBusiness();

		$produtos = $produtoBusiness->listar();

		return $produtos;
	}

}

?>