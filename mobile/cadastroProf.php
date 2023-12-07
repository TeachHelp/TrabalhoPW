<?php
 
/*
 * O código abaixo registra um novo usuário.
 * Método do tipo POST.
 */

require_once('conexaodb.php');

// array de resposta
$resposta = array();
 
// verifica se todos os campos necessários foram enviados ao servidor
if ((isset($_POST['email']) && isset($_POST['nova_materia']) && isset($_POST['novo_curriculo']) && isset($_POST['nova_descricao'])) {
 
    // o método trim elimina caracteres especiais/ocultos da string
	$nova_materia = trim($_POST['nova_materia']);
	$novo_curriculo = trim($_POST['novo_curriculo']);
  	$nova_descricao = trim($_POST['nova_descricao']);
    $email = trim($_POST['email']);

	// antes de registrar o novo usuário, verificamos se ele já
	// não existe.
	$consulta_usuario_existe = $db_con->prepare("SELECT id FROM alunos WHERE email='$email'");
	$consulta_usuario_existe->execute();
	if ($consulta_usuario_existe->rowCount() > 0) {
        $linha_usuario_existe = $consulta->fetch(PDO::FETCH_ASSOC);
        $id = $linha_usuario_existe["id"];

        $prof = "sim";

        // se o usuário ainda não existe, inserimos ele no bd.
		$consulta_aluno_update = $db_con->prepare("UPDATE alunos SET professor='$prof', descricao='$nova_descricao' WHERE email='$email'";
        $consulta_insert_instrutor = $db_con->prepare("INSERT INTO instrutores (fk_id_aluno, materia, curriculo) VALUES ('$id','$nova_materia','$novo_curriculo')";
	 
		if ($consulta_aluno_update->execute()) {
            if ($consulta_insert_instrutor->execute()) {
			// se a consulta deu certo, indicamos sucesso na operação. 
			    $resposta["sucesso"] = 1;
            }
            else{
                $resposta["sucesso"] = 0;
			    $resposta["erro"] = "erro BD: " . $consulta_insert_instrutor->error;
            }
		}
		else {
			// se houve erro na consulta, indicamos que não houve sucesso
			// na operação e o motivo no campo de erro.
			$resposta["sucesso"] = 0;
			$resposta["erro"] = "erro BD: " . $consulta_aluno_update->error;
		}

		// se já existe um usuario para login
		// indicamos que a operação não teve sucesso e o motivo
		// no campo de erro.
		$resposta["sucesso"] = 0;
		$resposta["erro"] = "aluno não cadastrado";
	}
	else {
		
	}
}
else {
	// se não foram enviados todos os parâmetros para o servidor, 
	// indicamos que não houve sucesso
	// na operação e o motivo no campo de erro.
    $resposta["sucesso"] = 0;
	$resposta["erro"] = "faltam parametros";
}

// A conexão com o bd sempre tem que ser fechada
$db_con = null;

// converte o array de resposta em uma string no formato JSON e 
// imprime na tela.
echo json_encode($resposta);
?>
