<?php

$busca = $_POST['nome'];

include_once('conexao.php');

//Select para fazer a busca
$sql = "SELECT * FROM usuarios WHERE nome LIKE '%$busca%' OR idade LIKE '%$busca%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table id='tabela' border='1'><tr><th>ID</th><th>Name</th><th>Idade</th></tr>";
		// output data of each row
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