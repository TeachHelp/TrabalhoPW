<?php
require_once 'conexao.php';

if (isset($_POST['btnFav'])){
	$id_instrutor = $_POST['id_instrutor'];
    $id = $_POST['id_aluno'];
    $favoritar = "INSERT INTO favoritos (fk_id_aluno,fk_id_instrutor) VALUES ($id,$id_instrutor)";
	if(mysqli_query($connect,$favoritar)){
		header('Location: ./menuBootstrap.php');
	} else {
		echo "Deu RUIM";
	}
}
?>