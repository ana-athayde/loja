<?php

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN - AnaAthayde/loja/";

include_once $dir_path . "controller/ProdutoController.class.php";

print_r($_POST);

$formulario = $_POST;

$campos = [
	"codigo",
	"nome_produto",
	"fornecedor",
	"tipo_produto",
	"telefone_SAC",
	"valor_produto",
	"valor_venda"
];

$formulario = array_intersect_key($formulario, array_flip($campos));

echo nl2br("\n");

print_r($formulario);

$produtoController = new ProdutoController();

$produtoController->cadastrar($formulario);

?>