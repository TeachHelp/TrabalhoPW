<?php 

require_once 'conexao.php';

if(isset($_POST['btnEdit'])):
	$nome=mysqli_escape_string($connect,$_POST['inputName']);
 	$descricao=mysqli_escape_string($connect,$_POST['inputDesc']);
	$email=mysqli_escape_string($connect,$_POST['inputEmail']);
	$endereco=mysqli_escape_string($connect,$_POST['inputEnd']);
  	$dt_nasc=mysqli_escape_string($connect,$_POST['inputData']);
	$id=mysqli_escape_string($connect,$_POST['id']);
	
	$sql="UPDATE alunos SET nome='$nome', descricao='$descricao', email='$email', endereco='$endereco', dt_nasc='$dt_nasc' WHERE id=$id";
	echo $sql;
	if(mysqli_query($connect,$sql)){
		header('Location: ./perfilAlunoBootstrap.php');
	}
endif;	

?>