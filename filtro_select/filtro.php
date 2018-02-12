<?php

include_once('conexao.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
	<form>
	
		<select id="ordenar_preco" name="ordenar">
			<option selected disabled>Ordenar</option>
			<option value="c">Menor ID</option>
			<option value="d">Maior ID</option>
		</select>
		
	</form>	
	
	<br>
	<?php
	
	//Select para fazer a busca
	$sql = "SELECT * FROM usuarios ORDER BY id ASC";
		
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table id='tabela' border='1'><tr><th>ID</th><th>NOME</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>
						<td>".$row["id"]."</td>
						<td>".$row["nome"]."</td>
											
					</tr>";
				}
				echo "</table>";
			} else {
				echo "0 results";
			}
		$conn->close();
	
	?>

	<div id="resultado"></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
	<script>
		
		$(document).ready(function(){
			
			$('#ordenar_preco').change(function(){
								
				$('form').submit(function(){
					
					var dados = $(this).serialize();
					
					$.ajax({
							
							url: 'busca.php',
							type: 'GET',
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