<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Processo de Seleção</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
		<h2>Consultar motoristas </h2>
		<p>Desenvolvido pelo candidato Ygor Silvino Rocha</p>
	
	 
	
	<table class="table">
		<thead class="thead-inverse">
	<?php
	echo "		<tr>";
	echo "			<th>Nome</th>";
	echo "			<th>Data de nascimento</th>";
	echo "			<th>CPF</th>";
	echo "			<th>Carro</th>";
	echo "			<th>Status</th>";
	echo "			<th>Sexo</th>";
	echo "			<th>Ação</th>";
	echo "		</tr>";
	?>
	</thead>

	<?php
	$strcon = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');
	$sql = "SELECT * FROM motoristas";
	$resultado = mysqli_query($strcon,$sql) or die ("Erro ao tentar cadastrar registro");

	while ($registro = mysqli_fetch_array($resultado)) 
	{
		$nome_motorista = $registro['nome_motorista'];
		$nascimento_motorista = $registro['data_nascimento_motorista'];
		$cpf_motorista = $registro['cpf_motorista'];
		$carro_motorista = $registro['carro_motorista'];
		$status_motorista = $registro['status_motorista'];
		$sexo_motorista = $registro['sexo_motorista'];
		$url_edita = "editar_motorista.php?cod=".$registro['cpf_motorista'];
		echo "<tr>";
		echo "<td>".$nome_motorista."</td>";
		echo "<td>".$nascimento_motorista."</td>";
		echo "<td>".$cpf_motorista."</td>";
		echo "<td>".$carro_motorista."</td>";
		echo "<td>".$status_motorista."</td>";
		echo "<td>".$sexo_motorista."</td>";
		echo "<td><a href=".$url_edita.">Editar status</a></td>";
		echo "</tr>";
	}
	?>
	</table>
	<br><br><a href="index.php"><button id="menu" type="submit" class="btn btn-primary">Menu</button></a>
</div>

	<script src="js/popper.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>