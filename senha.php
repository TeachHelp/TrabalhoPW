<?php 

require_once 'conexao.php';

if(isset($_POST['btnTrocar'])):
	$senhanova=mysqli_escape_string($connect,$_POST['inputConfSenha']);
	$id=mysqli_escape_string($connect,$_POST['id']);
	$sql="UPDATE alunos SET senha='$senhanova' WHERE id=$id";
	echo $sql;
	if(mysqli_query($connect,$sql)){
		header('Location: ./perfilAlunoBootstrap.php');
	}
endif;	

?>