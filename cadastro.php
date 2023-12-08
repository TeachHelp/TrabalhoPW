<?php
	
  session_start();

  //Conexão
  require_once 'conexao.php';

  $erros = array(); 

  if (isset($_POST['btnCad'])){
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    $senha2 = $_POST['inputConfSenha'];
    $data = $_POST['inputData'];
    $endereco = $_POST['inputEnd'];
    $nome = $_POST['inputName'];
    $sobrenome = $_POST['inputSurname'];
    
    // Sanitização do nome
    $nomeSanitizado = preg_replace("/[^a-zA-ZÀ-ÿ\s\-]/u", '', $nome);
    $sobrenomeSanitizado = preg_replace("/[^a-zA-ZÀ-ÿ\s\-]/u", '', $sobrenome);
 
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL);

    // $_SESSION['data'] = $data;
    // $_SESSION['endereco'] = $endereco;
      
    //validação de nome
    $res_nome = array("options"=>array("regexp"=>"/^[a-zA-Z]/"));
    if(! filter_var($nome, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Nome inválido!";
    }

    if(! filter_var($sobrenome, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Sobrenome inválido!";
    }

    //validação de email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){ 
      $erros[] = "Email inválido";
    }

    //validação de senha
    $res_senha = array("options"=>array("regexp"=>"/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[$*&@#])[0-9a-zA-Z$*&@#]{8,}$/"));
    if( filter_var($senha, FILTER_VALIDATE_REGEXP, $res_senha)) {		  
      $erros[] = "Senha deve conter mínimo de  8 caracteres, letra maiuscula e minuscula e um caracter especial";
    }

    if($senha != $senha2) {		  
      $erros[] = "Senhas precisam ser iguais!";
    }
    
    //validação de endereco
    if(! filter_var($endereco, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Endereço inválido!";
    }

    if (empty($erros)){

      $nomeSanitizado=mysqli_escape_string($connect,$_POST['inputName']);
      $sobrenomeSanitizado=mysqli_escape_string($connect,$_POST['inputSurname']);
      $email=mysqli_escape_string($connect,$_POST['inputEmail']);
      $senha=mysqli_escape_string($connect,$_POST['inputConfSenha']);
      $data=mysqli_escape_string($connect,$_POST['inputData']);
      $endereco=mysqli_escape_string($connect,$_POST['inputEnd']);

	    $nomecompleto = $nomeSanitizado . " " .  $sobrenomeSanitizado;

	    $senha_codificada = password_hash($senha, PASSWORD_DEFAULT);

	    $sql="INSERT INTO alunos(nome,email,senha,dt_nasc,endereco) VALUES ('$nomecompleto', '$email', '$senha_codificada', '$data', '$endereco')";
	    echo $sql;
	    if(mysqli_query($connect,$sql)):
		    header("location: ./index.php");
	    endif;
    } 
  }
//inserindo o header  
include_once 'headerLogin.php'; ?>

<!-- referenciando o css e js -->
<link href="css/login.css" rel="stylesheet">
<script type="text/javascript" src="js/cadastro.js" defer></script>


<!--Conteudo da pagina-->
  <div class="container my-3"> 
    <div class="d-flex justify-content-center flex-column flex-sm-row ">
      <!--Div com a logo e com um texto de apresentação-->
      <div class="divApresentacao col-sm-6 col-12 bg-txt p-1">
        <img src="img/logoBranca.png" class="img-logo"> <br>

        <p class="pTxt"> Bem-vindo(a) ao TeachHelp! Aqui, você encontra uma ampla seleção de professores de todas as áreas para ajudá-lo a 
            alcançar seus objetivos acadêmicos e profissionais. <br> <br>
            Todos os nossos professores são verificados e avaliados pelos próprios alunos, 
            garantindo que você tenha acesso a uma educação de qualidade. <br> <br>
            Não perca mais tempo pesquisando por aí. Com a TeachHelp,
            você pode encontrar o professor perfeito com facilidade e praticidade. 
            Comece hoje mesmo a melhorar seu aprendizado e desfrute de todos os benefícios que a educação pode oferecer!</p>
        <br>
      </div>

      <!--Div com um formulário para cadastro-->
      <form action="cadastro.php" method="POST" class="col-sm-6 col-12 bg-form">
        <div class="form-group p-4">
          <p class="fw-bold fs-3">Cadastro</p>

          <div class="field">
            <label for="nome" id="nomeLabel">Nome:</label>
            <input type="text" name="inputName" class="form-control-sm form-control" id="nome" placeholder="..."/>
          </div><br>

          <div class="field">
            <label for="nome" id="sobrenomeLabel">Sobrenome:</label>
            <input type="text" name="inputSurname" class="form-control-sm form-control" id="sobrenome" placeholder="..."/>
          </div><br>

          <div class="field">
            <label for="email" id="emailLabel">Email:</label>
            <input type="email" name="inputEmail" class="form-control-sm form-control" id="email" placeholder="..."/>
          </div><br>

          <div class="field">
            <label for="senha" id="senhaLabel">Senha:</label>
            <input type="password" name="inputSenha" class="form-control-sm form-control" id="senha" placeholder="..."/>
          </div><br>

          <div class="field">
            <label for="conf_senha" id="confirmSenhaLabel">Confirmar Senha *:</label>
            <input type="password" name="inputConfSenha" class="form-control-sm form-control" id="conf_senha" placeholder="..."/>
          </div><br>

          <div class="field">
            <label for="dataNasc" id="dtNascLabel">Data de Nascimento:</label>
            <input type="date" name="inputData" class="form-control-sm form-control" id="dataNasc" placeholder="..."/>
          </div><br>

          <div class="field">
            <label for="endereco" id="enderecoLabel">Endereço:</label>
            <input type="text" name="inputEnd" class="form-control-sm form-control" id="endereco" placeholder="..."/>
          </div>

          <br>
          <button type="submit" name="btnCad" class="btn btn-info">Realizar Cadastro</button>
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
