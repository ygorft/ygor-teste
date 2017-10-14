<?php 
	$strcon = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');

	$status = $_REQUEST['statusMotorista'];
	$id = $_REQUEST['cpfMotorista'];

	$query = "UPDATE motoristas SET status_motorista='$status' WHERE cpf_motorista = '$id'";
	mysqli_query($strcon, $query) or die ($query."<br>".mysqli_error());
	header("Location: consultaMotorista.php");
?>