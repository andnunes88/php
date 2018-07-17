<!DOCTYPE html>
<html>
<head>
<title>O_O</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

	
	<form id="form">
		
		<label>Nome</label>
		<input type="text" name="nome">
		<label>Valor</label>
		<input type="text" name="valor">
		<label>Poupanca</label>
		<input type="text" name="poupanca">
		
		<button id="cadastrar" type="button">Cadastrar</button>
		
	</form>
	

<script>

	$().ready(function(){
		
				
		$("#cadastrar").click(function(){
			
			var dados = $("#form").serialize();
			
			$.ajax({
							
				url: 'processa/cadastrar.php',
				type: 'POST',
				dataType: 'html',
				data: dados,
				success: function(data){
					
					alert(data);
					
				}
				
			});
					
			return false;			
			
		});
		
	});

</script>

</body>
</html>