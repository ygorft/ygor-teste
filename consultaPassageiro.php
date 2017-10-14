<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Processo de Seleção</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
		<h2>Consultar passageiros </h2>
		<p>Desenvolvido pelo candidato Ygor Silvino Rocha</p>
	
	 
	
	<table class="table">
		<thead class="thead-inverse">
	<?php
	echo "		<tr>";
	echo "			<th>Nome</th>";
	echo "			<th>Data de nascimento</th>";
	echo "			<th>CPF</th>";
	echo "			<th>Sexo</th>";
	echo "		</tr>";
	?>
	</thead>

	<?php
	$strcon = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');
	$sql = "SELECT * FROM passageiros";
	$resultado = mysqli_query($strcon,$sql) or die ("Erro ao tentar cadastrar registro");

	while ($registro = mysqli_fetch_array($resultado)) 
	{
		$nome_passageiro = $registro['nome_passageiro'];
		$nascimento_passageiro = $registro['nascimento_passageiro'];
		$cpf_passageiro = $registro['cpf_passageiro'];
		$sexo_passageiro = $registro['sexo_passageiro'];
		echo "<tr>";
		echo "<td>".$nome_passageiro."</td>";
		echo "<td>".$nascimento_passageiro."</td>";
		echo "<td>".$cpf_passageiro."</td>";
		echo "<td>".$sexo_passageiro."</td>";
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