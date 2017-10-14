<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Processo de Seleção</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
		<h2>Consultar corridas </h2>
		<p>Desenvolvido pelo candidato Ygor Silvino Rocha</p>
	
	 
	
	<table class="table">
		<thead class="thead-inverse">
	<?php
	echo "		<tr>";
	echo "			<th>Passageiro</th>";
	echo "			<th>Motorista</th>";
	echo "			<th>Valor</th>";
	echo "		</tr>";
	?>
	</thead>

	<?php
	$strcon = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');
	$sql = "SELECT * FROM corridas";
	$resultado = mysqli_query($strcon,$sql) or die ("Erro ao tentar cadastrar registro");

	while ($registro = mysqli_fetch_array($resultado)) 
	{
		$passageiro_corrida = $registro['passageiro_corrida'];
		$motorista_corrida = $registro['motorista_corrida'];
		$valor_corrida = $registro['valor_corrida'];
		echo "<tr>";
		echo "<td>".$passageiro_corrida."</td>";
		echo "<td>".$motorista_corrida."</td>";
		echo "<td>".$valor_corrida."</td>";
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