<?php
	
  session_start();

  $erros = array(); 

  if (isset($_POST['btnCad'])){
    $id = $_POST['inputId'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    $senha2 = $_POST['inputConfSenha'];
    $data = $_POST['inputData'];
    $endereco = $_POST['inputEnd'];
    $nome = $_POST['inputName'];
    
    // Sanitização do nome
    $nomeSanitizado = preg_replace("/[^a-zA-ZÀ-ÿ\s\-]/u", '', $nome);
 
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL);

    $_SESSION['id'] = $id;
    $_SESSION['data'] = $data;
    $_SESSION['endereco'] = $endereco;
      
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

    if($senha != $senha2) {		  
      $erros[] = "Senhas precisam ser iguais!";
    }
    
    //validação de endereco
    if(! filter_var($endereco, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Endereço inválido!";
    }

      
    if (empty($erros)){
      header('Location: ./index.php');

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
      <form action="cadastrar.php" method="POST" class="col-sm-6 col-12 bg-form">
        <div class="form-group p-4">
          <p class="fw-bold fs-3">Cadastro</p>
          <label for="nome">Nome:</label>
          <input type="text" name="inputName" class="form-control-sm form-control" id="nome">

          <label for="email">Email:</label>
          <input type="email" name="inputEmail" class="form-control-sm form-control" id="email">

          <label for="senha">Senha:</label>
          <input type="password" name="inputSenha" class="form-control-sm form-control" id="senha">

          <label for="conf_senha">Confirmar Senha *:</label>
          <input type="password" name="inputConfSenha" class="form-control-sm form-control" id="conf_senha">

          <label for="dataNasc">Data de Nascimento:</label>
          <input type="date" name="inputData" class="form-control-sm form-control" id="dataNasc">

          <label for="endereco">Endereço:</label>
          <input type="text" name="inputEnd" class="form-control-sm form-control" id="endereco">

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
