<?php 

$dir_path = $_SERVER['DOCUMENT_ROOT'] . "/aluno18/Ana Athayde/PIN - AnaAthayde/loja/";

include_once $dir_path . "model/DBConnection.class.php";

$dbConnection = new DBConnection();

$connection = $dbConnection->getConnection();


?>