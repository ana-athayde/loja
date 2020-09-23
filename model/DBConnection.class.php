<?php  

class DBConnection{

	private $host;

	private $data_base;

	private $user;

	private $pass;

	private $port;

	private $mysqli;

	function __construct(){

		$this->host = "localhost";
		
		$this->data_base = "aluno18";

		$this->user = "aluno18";

		$this->pass = "aluno";

		$this->port = "3306";

	}

	function getConnection(){

		if ($this->mysqli == NULL){

			$mysqli = new mysqli($this->host, $this->user, $this->pass, $this->data_base, $this->port);

			if ($mysqli->connect_errno){
				echo "Falha ao conectar na BD do MySQL (".$mysqli->$connect_errno . ")" . $mysqli->$connect_error;		
			}

			$this->mysqli = $mysqli;
		}

		return $this->mysqli;

	}


}



?>