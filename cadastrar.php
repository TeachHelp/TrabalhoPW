<?php
//Iniciar  Sessão
session_start();

//Conexão
require_once 'conexao.php';

if(isset($_POST['btnCad'])):
	$nome=mysqli_escape_string($connect,$_POST['inputName']);
	$email=mysqli_escape_string($connect,$_POST['inputEmail']);
	$senha=mysqli_escape_string($connect,$_POST['inputConfSenha']);
	$data=mysqli_escape_string($connect,$_POST['inputData']);
    $endereco=mysqli_escape_string($connect,$_POST['inputEnd']);

	$senha_codificada = base64_encode($senha);

	$url = "https://teachelp2-h4qm33ag.b4a.run/index.php";
	
	
	$sql="INSERT INTO alunos(nome,email,senha,dt_nasc,endereco) VALUES ('$nome', '$email', '$senha_codificada', '$data', '$endereco')";
	echo $sql;
	if(mysqli_query($connect,$sql)):
		header("location: https://teachelp2-h4qm33ag.b4a.run/index.php");
	endif;
endif;	
?>