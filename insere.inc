<?php 
	include 'conecta_mysql.inc';

	$nome_motorista = $_POST['nomeMotorista'];
	$data_nascimento_motorista = $_POST['nascimentoMotorista'];
	$cpf_motorista = $_POST['cpfMotorista'];
	$carro_motorista = $_POST['modeloCarro'];
	$status = $_POST['statusMotorista'];
	$sexo = $_POST['sexoMotorista'];

	$sql = "INSERT INTO motoristas VALUES ";
	$sql .= "('$nome_motorista', '$data_nascimento_motorista', '$cpf_motorista', '$carro_motorista', '$status', '$sexo')";

	if ($conexao->query($sql) === TRUE) {
		# code...
		echo "Usuário inserido com sucesso!";
		header("Location: consultaMotorista.php");
	} else {
		echo "Erro: " . $sql . "<br>" . $conexao->error;
	}

	$conexao->close();

 ?>