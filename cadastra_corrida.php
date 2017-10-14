<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Processo de Seleção - Cadastrar Corrida</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/popper.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#valorCorrida').mask('000.000.000.000.000,00', {reverse: true});
		})
	</script>
</head>
<body>
	<?php  
	$conn = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');
	require 'conecta_mysql.inc';
	?>
<div class="container">
		<h2>Cadastrar Corrida </h2>
		<p>Desenvolvido pelo candidato Ygor Silvino Rocha</p>
		<div class="jumbotron">
			<form id="cadastraCorrida" action="insere_corrida.php" method="POST">
				<div class="form-group">
					<label>Selecione o Motorista</label>
					<select class="form-control" id="qualMotorista" name="qualMotorista">
						<option value="">Selecione...</option>
						<?php
							$result_motoristas = "SELECT * FROM motoristas WHERE status_motorista = 'Ativo'";
							$resultado_motoristas = mysqli_query($conn, $result_motoristas);
							while($row_motoristas = mysqli_fetch_assoc($resultado_motoristas)) { ?>
								<option value="<?php echo $row_motoristas['nome_motorista']; ?>"><?php echo $row_motoristas['nome_motorista']; ?>
									
								</option> <?php } ?>
					</select>
					<span class="msg-erro msg-qualMotorista"></span>
				</div>
				<div class="form-group">
					<label>Selecione o passageiro</label>
					<select class="form-control" id="qualPassageiro" name="qualPassageiro">
						<option value="">Selecione...</option>
						<?php
							$result_passageiros = "SELECT * FROM passageiros";
							$resultado_passageiros = mysqli_query($conn, $result_passageiros);
							while($row_passageiros = mysqli_fetch_assoc($resultado_passageiros)) { ?>
								<option value="<?php echo $row_passageiros['nome_passageiro']; ?>"><?php echo $row_passageiros['nome_passageiro']; ?>
									
								</option> <?php } ?>
					</select>
					<span class="msg-erro msg-qualPassageiro"></span>
				</div>
				<div class="form-group">
					<label>Valor</label>
					<input type="text" id="valorCorrida" name="valorCorrida" class="form-control" placeholder="Insira o valor da corrida">
					<span class="msg-erro msg-valorCorrida"></span>
				</div>
				<button name="salvaCorrida" type="submit" class="btn btn-primary">Salvar</button><br><br>
			</form>
			<a href="index.php"><button id="menu" type="submit" class="btn btn-primary">Menu</button></a>
			<form name="consultaCorrida" action="consultaCorrida.php" method="POST">
				<br><br><label>Consultar corridas: </label><br>
				<input type="submit" name="consulta_corrida" value="Consultar">
			</form>
		</div>
	</div>
<script src="js/valid-corrida.js"></script>
</body>
</html>