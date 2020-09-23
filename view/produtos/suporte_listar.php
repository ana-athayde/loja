<?php

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN - AnaAthayde/loja/";

include_once $dir_path . "controller/ProdutoController.class.php";

$produtoController = new ProdutoController();

$produtos = $produtoController->listar();

$campos = [
	"codigo",
	"nome_produto",
	"fornecedor",
	"tipo_produto",
	"telefone_SAC",
	"valor_produto",
	"valor_venda"
];


echo "<tr>";
foreach ($campos as $campo) {
	echo "<th>" . $campo . "</th>";
}
echo "</tr>";


foreach ($produtos as $produto) {
	echo "<tr>";

	foreach ($campos as $campo) {
		echo "<td>" . $produto->$campo ."</td>";
	}

	echo "</tr>";
}


?>