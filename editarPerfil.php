<?php
	
  session_start();

  $erros = array(); 

  if (isset($_POST['btnEntrar'])){
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    $data = $_POST['inputData'];
    $endereco = $_POST['inputEnd'];

    $nome = $_POST['inputName'];
    
    // Sanitização do nome
    $nomeSanitizado = preg_replace("/[^a-zA-ZÀ-ÿ\s\-]/u", '', $nome);

    $_SESSION['id'] = "1";
    $_SESSION['usuario'] = $nomeSanitizado;
    $_SESSION['email'] = $email;
    $_SESSION['data'] = $data;
    $_SESSION['endereco'] = $endereco;
 


    $inputName = $_POST['inputName']; 

    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL);
      
    //validação de nome
    $res_nome = array("options"=>array("regexp"=>"/^[a-zA-Z]/"));
    if(! filter_var($nome, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Nome inválido!";
    }

    //validação de email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){ 
      $erros[] = "Email inválido";
    }

    //validação de senha
    $res_senha = array("options"=>array("regexp"=>"/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/"));
    if(! filter_var($senha, FILTER_VALIDATE_REGEXP, $res_senha)) {		  
      $erros[] = "Senha incorreta!";
    }
    
    //validação de endereco
    if(! filter_var($endereco, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Endereço inválido!";
    }
      
    if (empty($erros)){
      header('Location: ./menuBootstrap.php');
    } 
  }
//inserindo o header  
include_once 'headerLogin.php'; ?>


<?php
//Iniciar  Sessão
session_start();

//Conexão
require_once 'conexao.php';

if(isset($_POST['btnEdit'])):
	$nome=mysqli_escape_string($connect,$_POST['inputName']);
  $descricao=mysqli_escape_string($connect,$_POST['inputDesc'];)
	$email=mysqli_escape_string($connect,$_POST['inputEmail']);
	$endereco=mysqli_escape_string($connect,$_POST['inputEnd']);
  $dt_nasc=mysqli_escape_string($connect,$_POST['inputData']);
	$id=mysqli_escape_string($connect,$_POST['id']);
	
	$sql="UPDATE alunos SET nome='$nome', descricao='$descricao', email='$email', 'endereco=$endereco', dt_nasc='$dt_nasc' WHERE id=$id";
	echo $sql;
	if(mysqli_query($connect,$sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../28crud_index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: ../28crud_index.php');
	endif;
endif;	



?>


<!-- referenciando o css e js -->
<link href="css/login.css" rel="stylesheet">
<script type="text/javascript" src="js/cadastro.js" defer></script>


<!--Conteudo da pagina-->
  <div class="container my-3"> 
    <div class="d-flex justify-content-center flex-column flex-sm-row ">
      <!--Div com um formulário para cadastro-->
      <form action="cadastro.php" method="POST" class="col-sm-6 col-12 bg-form">
        <div class="form-group p-4">
          <p class="fw-bold fs-3">Cadastro</p>
          <label for="nome">Nome:</label>
          <input type="text" name="inputName" class="form-control-sm form-control" id="nome">

          <label for="nome">Descrição (opcional):</label>
          <input type="text" name="inputDesc" class="form-control-sm form-control" id="descricao">

          <label for="email">Email:</label>
          <input type="email" name="inputEmail" class="form-control-sm form-control" id="email">

          <label for="senha">Senha:</label>
          <input type="password" name="inputSenha" class="form-control-sm form-control" id="senha">

          <label for="dataNasc">Data de Nascimento:</label>
          <input type="date" name="inputData" class="form-control-sm form-control" id="dataNasc">

          <label for="endereco">Endereço:</label>
          <input type="text" name="inputEnd" class="form-control-sm form-control" id="endereco">

          <br>
          <button type="submit" name="btnEfit" class="btn btn-info">Realizar Cadastro</button>
          <button type="button" class="btn btn-info" onclick="telaLogin()">Já possuo cadastro</button>

          <?php
          //exibindo os erros do formulario caso existam
            if (!empty($erros)){    
              foreach($erros as $erro):
                echo "<li> $erro </li>";
              endforeach;
            } 
          ?>

        </div>
      </form>
      
      </div>
    </div>
  </div>
</body>

</html>
