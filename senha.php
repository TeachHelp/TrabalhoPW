<?php 

require_once 'conexao.php';

if(isset($_GET['id'])):
	$senhanova=mysqli_escape_string($connect,$_GET['inputConfSenha']);
	$id=mysqli_escape_string($connect,$_GET['id']);

	$sql="UPDATE alunos SET senha='$senhanova' WHERE id='$id'";


	echo $sql;

	if(mysqli_query($connect,$sql)){
		header('Location: ./perfilAlunoBootstrap.php');
	}
endif;	

?>