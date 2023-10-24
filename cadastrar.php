<?php
//Iniciar  Sessão
session_start();

//Conexão
require_once 'conexao.php';

if(isset($_POST['btnEntrar'])):
	$nome=mysqli_escape_string($connect,$_POST['inputName']);
	$email=mysqli_escape_string($connect,$_POST['inputEmail']);
	$senha=mysqli_escape_string($connect,$_POST['inputSenha']);
	$data=mysqli_escape_string($connect,$_POST['inputData']);
    $endereco=mysqli_escape_string($connect,$_POST['inputEnd']);
	
	$sql="INSERT INTO clientes(nome,email,senha,dt_nasc,endereco) VALUES ('$nome', '$email', '$senha', '$data', '$endereco')";
	echo $sql;
	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem'] = "Cadastro com sucesso!";
		header('Location: ./index.php?sucesso');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar!";		
		header('Location: ./index.php?erro');
	endif;
endif;	



?>