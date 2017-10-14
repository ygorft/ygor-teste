<?php 
	
	$id = $_REQUEST['cod'];
	$strcon = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');
	$sql = "SELECT * FROM motoristas WHERE cpf_motorista = '".$id."'";
	$resultado = mysqli_query($strcon,$sql) or die ("Erro ao tentar cadastrar registro");
	$registro = mysqli_fetch_array($resultado);
	$status_alterar = $registro['status_motorista'];


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Processo de Seleção - Cadastrar Motorista</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

	<div class="container">
		<h2>Cadastrar Motoristas </h2>
		<p>Desenvolvido pelo candidato Ygor Silvino Rocha</p>
		<div class="jumbotron">
			<form id="cadastraMotorista" action="editar_motorista_gravar.php" method="POST">
				<div class="form-group">
					<input type="hidden" name="cpfMotorista" class="form-control" value="<?php echo $id; ?>">
				</div>
				<div class="form-group">
					<label>Status</label>
					<select class="form-control" name="statusMotorista" value="<?php echo $status_alterar ?>">
						<?php
						if ($status_alterar == "Ativo")
						{
							echo "<option selected='true' value='Ativo'> Ativo </option>";
							echo "<option value='Inativo'> Inativo </option>";
						} 
						elseif ($status_alterar == "Inativo") 
						{
							echo "<option selected='true' value='Inativo'> Inativo </option>";
							echo "<option value='Ativo'> Ativo </option>";
						}
						?>
					</select>
				</div>
				<button name="salvaMotorista" type="submit" class="btn btn-primary" value="Enviar">Salvar</button><br><br>
			</form>
			<a href="index.php"><button id="menu" type="submit" class="btn btn-primary">Menu</button></a>
			</form>
		</div>
	</div>


	<script src="js/popper.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>