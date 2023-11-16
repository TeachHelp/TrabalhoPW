<?php 

require_once 'conexao.php';

if(isset($_POST['btnEdit'])){
	$nome=mysqli_escape_string($connect,$_POST['inputName']);
 	$descricao=mysqli_escape_string($connect,$_POST['inputDesc']);
	$email=mysqli_escape_string($connect,$_POST['inputEmail']);
	$endereco=mysqli_escape_string($connect,$_POST['inputEnd']);
  	$dt_nasc=mysqli_escape_string($connect,$_POST['inputData']);
	$id=mysqli_escape_string($connect,$_POST['id']);
	
	$formatosPermitidos= array("png","jpeg","jpg");
    $extensao=pathinfo($_FILES['inputFoto']['name'],PATHINFO_EXTENSION);

	if (in_array($extensao,$formatosPermitidos)){
		$pasta="arquivos/";
		//O nome temporário com o qual o arquivo enviado foi armazenado no servidor.
		$temporario = $_FILES['inputFoto']['tmp_name'];
		$novoNome= uniqid().".$extensao"; //uniqid() retorna um identificador unico prefixado baseado no tempo atual em milionésimos de segundo
		
		if(move_uploaded_file($temporario,$pasta.$novoNome)){
			$foto = $pasta . $novoNome;
			$sql="UPDATE alunos SET nome='$nome', descricao='$descricao', email='$email', foto='$foto', endereco='$endereco', dt_nasc='$dt_nasc' WHERE id=$id";
			echo $sql;
			if(mysqli_query($connect,$sql)){
				header('Location: ./perfilAlunoBootstrap.php');
			}			
		}
	} else {
		$sqlnophoto="UPDATE alunos SET nome='$nome', descricao='$descricao', email='$email', endereco='$endereco', dt_nasc='$dt_nasc' WHERE id=$id";
		echo $sqlnophoto;
		if(mysqli_query($connect,$sqlnophoto)){
			header('Location: ./perfilAlunoBootstrap.php');
		}
	}
}


?>