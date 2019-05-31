<?php 
	require_once ("conectaBanco.php");

	
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$observacao = $_POST['observacao'];
	$cep = $_POST['cep'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];

	$sql = "INSERT INTO tb_clientes (nome,endereco,numero,observacao,cep,bairro,cidade,estado,telefone,email) VALUES ('$nome','$endereco','$numero','$observacao','$cep','$bairro','$cidade','$estado','$telefone','$email')";

	$statement = $pdo->query($sql);
	$statement->execute();
	$statement->closeCursor();
 ?>