<?php
$conexao = mysqli_connect('mysql.hostinger.com.br', 'u657145383_ygor', '010203rogy', 'u657145383_teste');

mysqli_set_charset($conexao, 'utf8');

if ($conexao->connect_error) {
	die ("Falha ao realizar a conexão: " . $conexao->connect_error);
}
?>