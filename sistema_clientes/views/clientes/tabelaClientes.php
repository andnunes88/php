<?php
	
require_once "../../classes/conexao.php";
$c = new conectar();
$conexao=$c->conexao();

$sql = "SELECT c.cli_nome, c.cli_email, c.cli_cargo, c.cli_empresa, t.tel_numero FROM acl_clientes AS c ";
$sql .= "JOIN acl_telefones AS t ON t.tel_cliente_id = c.cli_id ";


$result = mysqli_query($conexao, $sql);

?>


<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
	<caption><label>Clientes</label></caption>
	<tr>
		<td>Nome</td>
		<td>Email</td>
		<td>Cargo</td>
		<td>Empresa</td>
		<td>Telefone</td>
		<td>Editar</td>
		<td>Excluir</td>
		
	</tr>

	<?php while($mostrar = mysqli_fetch_assoc($result)): ?>

	<tr>
		<td><?php echo $mostrar["cli_nome"]; ?></td>
		<td><?php echo $mostrar["cli_email"]; ?></td>
		<td><?php echo $mostrar["cli_cargo"]; ?></td>
		<td><?php echo $mostrar["cli_empresa"]; ?></td>
		<td><?php echo $mostrar["tel_numero"]; ?></td>
		
		<td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalClientesUpdate" onclick="adicionarDado('<?php echo $mostrar[0]; ?>')">
				<span class="glyphicon glyphicon-pencil"></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminarCliente('<?php echo $mostrar[0]; ?>')">
				<span class="glyphicon glyphicon-remove"></span>
			</span>
		</td>
	</tr>


<?php endWhile; ?>
</table>



