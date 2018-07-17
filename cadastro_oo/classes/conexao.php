<?php

class db {
	
	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $database = 'meta';
	
	public function conecta_mysql(){
		
		//cria a conexao
		$conn = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
		
		//ajusta o charset de comunicão entre a aplicação e o banco
		mysqli_set_charset($conn, 'utf8');
		
		//verifica se houve erro de conexão
		if(mysqli_connect_errno()){
			echo "Erro ao tentar se conectar com o BD MySQL: " . mysqli_connect_error();
		}
		
		return $conn;
	}
	
}

?>