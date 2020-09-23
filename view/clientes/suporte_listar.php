<?php

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN - AnaAthayde/loja/";

include_once $dir_path . "controller/ClienteController.class.php";

$clienteController = new ClienteController();

$clientes = $clienteController->listar();

$campos = [
	"nome_completo",
	"email",
	"cpf",
	"data_nascimento",
	"endereco_cep"
];

echo "<tr>";
foreach ($campos as $campo) {
	echo "<th>" . $campo . "</th>";
}
echo "</tr>";

// Conteúdo da tabela
foreach ($clientes as $cliente){
	echo "<tr>";

	foreach ($campos as $campo){
		echo "<td>" . $cliente->$campo . "</td>";
	}

	echo "</tr>";
}

?>