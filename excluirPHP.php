<?php 

require_once 'conexao.php';

if(isset($_POST['btnExcluir'])){
	$id=mysqli_escape_string($connect,$_POST['id']);
	
	$sql="DELETE FROM alunos WHERE id = '$id'";
	echo $sql;
	if(mysqli_query($connect,$sql)){
	    header('Location: ./index.php');
	}
}
else{
    echo '<script>console.log("nao foi")</script>';
}

?>