<?php 

require_once 'conexao.php';

var_dump($_POST);
var_dump($_FILES);

//if(isset($_POST(['btnEdit']) $_POST['inputName']) && isset($_POST['id']) && isset($_POST['inputDesc']) && isset($_POST['inputEmail']) && isset($_POST['inputEnd']) && isset($_POST['inputData']) && isset($_FILES['inputFoto'])) {
if(true){
	error_log("entrou aqui",0);
	$nome=mysqli_escape_string($connect,$_POST['inputName']);
 	$descricao=mysqli_escape_string($connect,$_POST['inputDesc']);
	$email=mysqli_escape_string($connect,$_POST['inputEmail']);
	$endereco=mysqli_escape_string($connect,$_POST['inputEnd']);
  	$dt_nasc=mysqli_escape_string($connect,$_POST['inputData']);
	$id=mysqli_escape_string($connect,$_POST['id']);
	
	$filename = $_FILES['inputFoto']['tmp_name'];
	$handle = fopen($filename, "r");
	$data = fread($handle, filesize($filename));
	
	$client_id="af4cad204c2a0ed";
	$pvars   = array('image' => base64_encode($data));
	$timeout = 30;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
	curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
	$out = curl_exec($curl);
	curl_close ($curl);
	$pms = json_decode($out,true);
	$img_url=$pms['data']['link'];
	
	
	$sql="UPDATE alunos SET nome='$nome', descricao='$descricao', email='$email', endereco='$endereco', foto='$img_url', dt_nasc='$dt_nasc' WHERE id=$id";
	echo $sql;
	if(mysqli_query($connect,$sql)){
		header('Location: ./perfilAlunoBootstrap.php');
	}
	else{
		header('Location: ./menuBootstrap.php');
	}
}


?>