<?php

$busca = $_GET['ordenar'];

include_once('conexao.php');

if($busca == 'd'){
	$ordenar = 'DESC';
}else if($busca == 'c'){
	$ordenar = 'ASC';
}

//Select para fazer a busca
$sql = "SELECT * FROM usuarios ORDER BY id $ordenar";
	
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