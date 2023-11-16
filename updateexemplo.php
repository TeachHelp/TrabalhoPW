<!DOCTYPE html>
<html>
<head>
<title>Variável superglobal _FILES</title>
</head>
<body>


<!--UPLOAD DE ARQUIVO-->
<?php
//verifica se o usuário clicou no botão enviar formulário
if (isset($_POST['enviar-formulario'])):

	$formatosPermitidos= array("png","jpeg","jpg","gif");
	//A variável global $_FILES conterá toda a informação do arquivo enviado. 
	//var_dump($_FILES);
	
	
	//O nome original do arquivo na máquina do cliente.
	//$__FILES - Array associativo multimensional - várias informações sobre o arquivo
	//Em outras linguagens são conhecidos como dictionary , map ou coleção de dados
	//O arquivo é enviado com um nome e pasta temporário no servidor.
	$extensao=pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);
	//echo "<br>". $extensao;
	
	//verificar se é uma extensão é válida
	if (in_array($extensao,$formatosPermitidos)):
		$pasta="arquivos/";
		//O nome temporário com o qual o arquivo enviado foi armazenado no servidor.
		$temporario = $_FILES['arquivo']['tmp_name'];
		$novoNome= uniqid().".$extensao"; //uniqid() retorna um identificador unico prefixado baseado no tempo atual em milionésimos de segundo
		
		if(move_uploaded_file($temporario,$pasta.$novoNome)):
			$mensagem="Upload feito com sucesso!";
		else:
			$mensagem="Não foi possível realizar o upload!";
		endif;
		
	else:
		
		//echo "Formato inválido";
		$mensagem="Formato inválido";
	endif;
	
	echo $mensagem;
	
endif;
?>


<!--
somente enviar arquivo por meio de post
enctype atributo obrigatório para enviar arquivo - informa que o arquivo será codificado antes de ser enviado -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	Nome: <input type="file" name="arquivo"><br>

	<button type="submit" name="enviar-formulario"> Enviar </button>

</form>


</form>

</body>

</html>