<?php 
	include 'conecta_mysql.inc';

	$qual_motorista = $_POST['qualMotorista'];
	$qual_passageiro = $_POST['qualPassageiro'];
	$valor_corrida = $_POST['valorCorrida'];
	

	$sql = "INSERT INTO corridas VALUES ";
	$sql .= "('$qual_motorista', '$qual_passageiro', '$valor_corrida')";

	if ($conexao->query($sql) === TRUE) {
		# code...
		echo "Usuário inserido com sucesso!";
		header("Location: consultaCorrida.php");
	} else {
		echo "Erro: " . $sql . "<br>" . $conexao->error;
	}

	$conexao->close();

?>