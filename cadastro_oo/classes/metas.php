<?php

require_once('conexao.php');

class metas{
	
	private $nome;
	private $valor;
	private $poupanca;
	
	public function cadastrar($dados){
		
		$obj = new db;
		$link = $obj->conecta_mysql();
		
		$this->nome = $dados['nome'];
		$this->valor = $dados['valor'];
		$this->poupanca = $dados['poupanca'];
				
		$sql = "INSERT INTO metas (nome, valor, poupanca)
			VALUES ('$this->nome', '$this->valor', '$this->poupanca')";
		
		$resposta = mysqli_query($link, $sql);
		
		if($resposta){
			echo "Registro gravado com sucesso!";
		}else{
			echo "Não foi possível gravar o registro!";
		}
		
		
	}
	
}




?>