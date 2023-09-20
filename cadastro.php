<?php
	$erros = array(); 

  if (isset($_POST['btnCad'])){
    $nome = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
    $data = $_POST['inputData'];
    $endereco = $_POST['inputEnd'];

    $nome = filter_input(INPUT_POST, 'inputName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'inputEmail', FILTER_SANITIZE_EMAIL);
    $endereco = filter_input(INPUT_POST, 'inputEnd', FILTER_SANITIZE_STRING);
      
    $res_nome = array("options"=>array("regexp"=>"/^[a-zA-Z]/"));
    if(! filter_var($nome, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Nome inválido!";
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){ 
      $erros[] = "Email inválido";
    }

    $res_senha = array("options"=>array("regexp"=>"/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/"));
    if(! filter_var($senha, FILTER_VALIDATE_REGEXP, $res_senha)) {		  
      $erros[] = "Senha incorreta!";
    }
    /*
    $res_date = array("options"=>array("regexp"=>"/^(?=.*[}{,.^?~=+\-_\/*\-+.\|])(?=.*[0-9])$/"));
    if(! filter_var($data, FILTER_VALIDATE_INT, $res_date)){ 
      $erros[] = "Data inválida";
    }
    */
    if(! filter_var($endereco, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Endereço inválido!";
    }
      
    if (empty($erros)){
      header('Location: ./index.php');
    } 
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachHelp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <link href="css/cadastro.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    
</head>
<body>
  <script type="text/javascript" src="js/cadastro.js" defer></script>
  <!--Cabeçalho do Site-->
  <header>
    <!--Barra de navegação-->
     <nav class="navbar navbar-expand-lg bg-corHeader">
       <div class="container-fluid">
         <!--Logo do site-->
         <a class="navbar-brand" href="cadastro.php">
           <img src="img/logoBranca.png" width="50" height="20" class="d-inline-block align-top" alt="">
         </a>
         <!--Itens da Navbar-->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="cadastro.php" id="navHome">Home</a>
             </li>
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="sobre.php" id="navHome">Sobre</a>
             </li>
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#" id="navHome" onclick="alerta()">Configurações</a>
             </li>
           </ul>
           <form class="d-flex" role="search">
             <input class="form-control-ss form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
             <button class="btn btn-outline-light" type="submit" onclick="alerta()"><img src="img/lupa.png" class="lupa"></button>
           </form>
         </div>
       </div>
     </nav>
   
 </header>

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
          <label for="nome">Nome:</label>
          <input type="text" name="inputName" class="form-control-sm form-control" id="nome">

          <label for="email">Email:</label>
          <input type="email" name="inputEmail" class="form-control-sm form-control" id="email">

          <label for="senha">Senha:</label>
          <input type="password" name="inputSenha" class="form-control-sm form-control" id="senha">

          <label for="dataNasc">Data de Nascimento:</label>
          <input type="date" name="inputData" class="form-control-sm form-control" id="dataNasc">

          <label for="endereco">Endereço:</label>
          <input type="text" name="inputEnd" class="form-control-sm form-control" id="endereco">

          <br>
          <button type="submit" name="btnCad" class="btn btn-info">Realizar Cadastro</button>
          <button type="button" class="btn btn-info" onclick="telaLogin()">Já possuo cadastro</button>

          <?php
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
