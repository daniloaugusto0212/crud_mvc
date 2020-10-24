<?php
	include_once 'model/Conexao.class.php';
	include_once 'model/Manager.class.php';
	
	$manager = new Manager();
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once 'view/dependencias.php'; ?>
</head>
<body>
<br>
<div class="container">
	
	<h2 class="text-center"> Lista de Clientes <i class="fa fa-list"></i></h2>

	<h5 class="text-right">
		<a href="view/page_register.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<!-- Iniciando a tabela -->

	<div class="table-responsive">
		
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>E-MAIL</th>
					<th>CPF</th>
					<th>NASCIMENTO</th>
					<th>ENDEREÇO</th>
					<th>TELEFONE</th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($manager->listClient("registros") as $client): ?>
				<tr>
					<td><?= $client['id'] ?></td>
					<td><?= $client['name'] ?></td>
					<td><?= $client['email'] ?></td>
					<td><?= $client['cpf'] ?></td>
					<td><?= date("d/m/Y", strtotime($client['birth'])) ?></td>
					<td><?= $client['address'] ?></td>
					<td><?= $client['phone'] ?></td>
					<td>
						<form method="POST" action="view/page_update.php">

							<input type="hidden" name="id" value="<?= $client['id'] ?>">
							
							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="controller/delete_client.php" onclick="return confirm('Tem certeza que deseja excluir ?');">

							<input type="hidden" name="id" value="<?= $client['id'] ?>">

							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>
						</form>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

	</div>

	<!-- Fim da Tabela -->

</div>

</body>
</html>