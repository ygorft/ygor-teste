<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Processo de Seleção - Cadastrar Motorista</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/popper.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script></body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cpfMotorista').mask('000.000.000-00', {reverse: true});
			$('#nascimentoMotorista').mask('00/00/0000');
		})
	</script>
</head>
<body>
	<?php  
	$conn = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');
	require 'conecta_mysql.inc';
	?>
	<div class="container">
		<h2>Cadastrar Motoristas </h2>
		<p>Desenvolvido pelo candidato Ygor Silvino Rocha</p>
		<div class="jumbotron">
			<form id="cadastraMotorista" action="insere.php" method="POST">
				<div class="form-group">
					<label>Nome</label>
					<input type="text" id="nomeMotorista" name="nomeMotorista" class="form-control" placeholder="Nome do motorista">
					<span class="msg-erro msg-nomeMotorista"></span>
				</div>
				<div class="form-group">
					<label>Data de Nascimento</label>
					<input type="text" id="nascimentoMotorista" name="nascimentoMotorista" class="form-control" placeholder="Data de nascimento do motorista">
					<span class="msg-erro msg-nascimentoMotorista"></span>
				</div>
				<div class="form-group">
					<label>CPF</label>
					<input type="text" id="cpfMotorista" name="cpfMotorista" class="form-control" placeholder="CPF do motorista">
					<span class="msg-erro msg-cpfMotorista"></span>
				</div>
				<div class="form-group">
					<label>Modelo do carro</label>
					<input type="text" id="modeloCarro" name="modeloCarro" class="form-control" placeholder="Modelo do veículo usado pelo motorista">
					<span class="msg-erro msg-modeloCarro"></span>
				</div>
				<div class="form-group">
					<label>Status</label>
					<select class="form-control" name="statusMotorista">
						<option>Ativo</option>
						<option>Inativo</option>
					</select>
				</div>
				<div class="form-group">
					<label>Sexo</label>
					<select class="form-control" name="sexoMotorista">
						<option>Masculino</option>
						<option>Feminino</option>
					</select>
				</div>
				<button name="salvaMotorista" type="submit" class="btn btn-primary">Salvar</button><br><br>
			</form>
			<a href="index.php"><button id="menu" type="submit" class="btn btn-primary">Menu</button></a>
			<form name="consultaMotorista" action="consultaMotorista.php" method="POST">
				<br><br><label>Consultar Motoristas:</label><br>
				<input type="submit" name="consulta_motorista" value="Consultar">
			</form>
		</div>
	</div>
	<script src="js/valid-motoristas.js"></script>
</body>
</html>