<?php 

require_once 'conexao.php';

if(isset($_POST['btnTrocar'])):
	$senha=mysqli_escape_string($connect,$_POST['inputNovaSenha']);
	$id=mysqli_escape_string($connect,$_POST['id']);
	
	$sql="UPDATE alunos SET senha='$senha' WHERE id=$id";
	echo $sql;
	if(mysqli_query($connect,$sql)){
		header('Location: ./perfilAlunoBootstrap.php');
	}
endif;	

?>