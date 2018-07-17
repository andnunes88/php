<?php
	
	include_once('../classes/metas.php');

	
	$dados = array (
		 'nome' => $_POST['nome'],
		 'valor' => $_POST['valor'],
		 'poupanca' => $_POST['poupanca'],
	);
	
	$metas = new metas;	
	$metas->cadastrar($dados);
		
	

?>