<?php 
	include 'conecta_mysql.inc';

	$nome_passageiro = $_POST['nomePassageiro'];
	$data_nascimento_passageiro = $_POST['nascimentoPassageiro'];
	$cpf_passageiro = $_POST['cpfPassageiro'];
	$sexo_passageiro = $_POST['sexoPassageiro'];

	$sql = "INSERT INTO passageiros VALUES ";
	$sql .= "('$nome_passageiro', '$data_nascimento_passageiro', '$cpf_passageiro', '$sexo_passageiro')";

	if ($conexao->query($sql) === TRUE) {
		# code...
		echo "Usuário inserido com sucesso!";
		header("Location: consultaPassageiro.php");
	} else {
		echo "Erro: " . $sql . "<br>" . $conexao->error;
	}

	$conexao->close();

?>