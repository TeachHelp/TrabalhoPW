<?php
 
/*
 * O codigo seguinte retorna os dados detalhados de um produto.
 * Essa e uma requisicao do tipo GET. Um produto e identificado 
 * pelo campo id.
 */

// conexão com bd
require_once('conexaodb.php');

// autenticação
require_once('autenticacao.php');

// array de resposta
$resposta = array();

// verifica se o usuário conseguiu autenticar
if(autenticar($db_con)) {
 
	// Verifica se o parametro id foi enviado na requisicao
	if (isset($_GET["idAluno"])) {
		
		// Aqui sao obtidos os parametros
		$id_aluno = $_GET['idAluno'];
	 
		// Obtem do BD os detalhes do produto com id especificado na requisicao GET
		$consulta = $db_con->prepare("SELECT * FROM alunos WHERE id = '$id_aluno'");
	 
		if ($consulta->execute()) {
			if ($consulta->rowCount() > 0) {
	 
				// Se o produto existe, os dados completos do produto 
				// sao adicionados no array de resposta. A imagem nao 
				// e entregue agora pois ha um php exclusivo para obter 
				// a imagem do produto.
				$linha = $consulta->fetch(PDO::FETCH_ASSOC);
				$id = $linha["id"];
	 
				$resposta["id"] = $id;
				$resposta["nome"] = $linha["nome"];
				$resposta["email"] = $linha["email"];
				$resposta["dt_nasc"] = $linha["dt_nasc"];
				$resposta["descricao"] = $linha["descricao"];
				$resposta["endereco"] = $linha["endereco"];
                $resposta["foto"] = $linha["foto"];
				$resposta["professor"] = $linha["professor"];
				
				

				if($linha["professor"] === "sim"){
					$consultando = $db_con->prepare("SELECT * FROM instrutores WHERE fk_id_aluno = '$id'");
					if ($consultando->execute()) {
						if ($consultando->rowCount() > 0){
							$linha1 = $consultando->fetch(PDO::FETCH_ASSOC);
							$resposta["curriculo"] = $linha1["curriculo"];
							$resposta["materia"] = $linha1["materia"];
						}

					}
				}

				// Caso o produto exista no BD, o cliente 
				// recebe a chave "sucesso" com valor 1.
				$resposta["sucesso"] = 1;
				
			} else {
				// Caso o produto nao exista no BD, o cliente 
				// recebe a chave "sucesso" com valor 0. A chave "erro" indica o 
				// motivo da falha.
				$resposta["sucesso"] = 0;
				$resposta["erro"] = "Perfil não encontrado";
			}
		} else {
			// Caso ocorra falha no BD, o cliente 
			// recebe a chave "sucesso" com valor 0. A chave "erro" indica o 
			// motivo da falha.
			$resposta["sucesso"] = 0;
			$resposta["erro"] = "Erro no BD: " . $consulta->error;
		}
	} else {
		// Se a requisicao foi feita incorretamente, ou seja, os parametros 
		// nao foram enviados corretamente para o servidor, o cliente 
		// recebe a chave "sucesso" com valor 0. A chave "erro" indica o 
		// motivo da falha.
		$resposta["sucesso"] = 0;
		$resposta["erro"] = "Campo requerido não preenchido";
	}
}
else {
	// senha ou usuario nao confere
	$resposta["sucesso"] = 0;
	$resposta["erro"] = "usuario ou senha não confere";
}
// Fecha a conexao com o BD
$db_con = null;

// Converte a resposta para o formato JSON.
echo json_encode($resposta);
?>
