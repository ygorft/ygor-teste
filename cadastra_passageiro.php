<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Processo de Seleção - Cadastrar Passageiro</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/popper.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script></body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cpfPassageiro').mask('000.000.000-00', {reverse: true});
			$('#nascimentoPassageiro').mask('00/00/0000');
		})
	</script>
</head>
<body>
	<?php  
	$conn = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');
	require 'conecta_mysql.inc';
	?>
<div class="container">
		<h2>Cadastrar Passageiros </h2>
		<p>Desenvolvido pelo candidato Ygor Silvino Rocha</p>
		<div class="jumbotron">
			<form id="cadastraPassageiro" action="insere_passageiro.php" method="POST">
				<div class="form-group">
					<label>Nome</label>
					<input type="text" id="nomePassageiro" name="nomePassageiro" class="form-control" placeholder="Nome do passageiro">
					<span class="msg-erro msg-nomePassageiro"></span>
				</div>
				<div class="form-group">
					<label>Data de Nascimento</label>
					<input type="text" id="nascimentoPassageiro" name="nascimentoPassageiro" class="form-control" placeholder="Data de nascimento do passageiro">
					<span class="msg-erro msg-nascimentoPassageiro"></span>
				</div>
				<div class="form-group">
					<label>CPF</label>
					<input type="text" id="cpfPassageiro" name="cpfPassageiro" class="form-control" placeholder="CPF do passageiro">
					<span class="msg-erro msg-cpfPassageiro"></span>
				</div>
				<div class="form-group">
					<label>Sexo</label>
					<select class="form-control" name="sexoPassageiro">
						<option>Masculino</option>
						<option>Feminino</option>
					</select>
				</div>
				<button name="salvaPassageiro" type="submit" class="btn btn-primary">Salvar</button><br><br>
			</form>
			<a href="index.php"><button id="menu" type="submit" class="btn btn-primary">Menu</button></a>
			<form name="consultaPassageiro" action="consultaPassageiro.php" method="POST">
				<br><br><label>Consultar passageiro: </label><br>
				<input type="submit" name="consulta_passageiro" value="Consultar">
			</form>
		</div>
	</div>
	<script src="js/valid-passageiro.js"></script>
</body>
</html>