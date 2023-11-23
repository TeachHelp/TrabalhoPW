<?php 

require_once 'conexao.php';

if(isset($_GET['id'])):
	$senhanova=mysqli_escape_string($connect,$_GET['inputConfSenha']);
	$id=mysqli_escape_string($connect,$_GET['id']);
	$senha_nova_crip = base64_encode($senhanova);

	$sql="UPDATE alunos SET senha='$senha_nova_crip' WHERE id='$id'";


	echo $sql;

	if(mysqli_query($connect,$sql)){
		header('Location: ./perfilAluno.php');
	}
endif;	

?>