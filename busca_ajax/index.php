<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Busca sem refresh PHP, MYSQL e AJAX - by Anderson</title>

  </head>
  <body>
		
	<h1>Busca sem refresh PHP, MYSQL e AJAX - by Anderson</h1>	
	
	<form>
		<label>Busca</label>
		<input type="text" id="nome" name="nome">
		
	</form>
	<br>
			
		<?php
		
		include_once('conexao.php');

		//Select para fazer a busca
		$sql = "SELECT * FROM usuarios";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			echo "<table id='tabela' border='1'><tr><th>ID</th><th>Name</th><th>Idade</th></tr>";
				// popular a tabela com dados
				while($row = $result->fetch_assoc()) {
					echo "<tr>
							<td>".$row["id"]."</td>
							<td>".$row["nome"]."</td>
							<td>".$row["idade"]."</td>
						</tr>";
					}
					echo "</table>";
				} else {
					echo "0 results";
				}
			$conn->close();
		?>
		
		<div id="resultado"></div>
			
      
	<!-- CDN JQUERY GOOGLE-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<script>
	
		$(document).ready(function(){
			
			$('#nome').keyup(function(){
				
				$('form').submit(function(){
					
					var dados = $(this).serialize();
					
					$.ajax({
						
						url: 'busca.php',
						type: 'POST',
						dataType: 'html',
						data: dados,
						success: function(data){
							$('#tabela').hide();
							$('#resultado').empty().html(data);
						}
						
					});
					
					return false;
					
				});
				
				$('form').trigger('submit');
				
			});
									
		});
		
		
	</script>
  </body>
</html>