<!DOCTYPE html>
<html>
<head>
	<title>clientes</title>
	<?php require_once "menu.php"; ?>
</head>
<body>

	<br><br><br>
	
	<div class="container">
	
		<div class="col-md-12">
			
			<div id="tabelaClientesLoad"></div>
		
		</div>
		
	</div>
	
	
<script>

	$(document).ready(function(){
		
		$('#tabelaClientesLoad').load("clientes/tabelaClientes.php");
		
		//alert('bla');
		
	});

</script>

</body>
</html>
		
		
		
		
		
		
		