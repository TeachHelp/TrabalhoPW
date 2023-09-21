<?php
$erros = array(); 

  if (isset($_POST['btnLogin'])){
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];
      
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
	  
    if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){ 
      $erros[] = "Email inválido";
    } else {
      $email = preg_replace('/[^a-zA-Z0-9@.\-_]/', '', $email);
    }

    $res = array("options"=>array("regexp"=>"/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/"));
    if(! filter_var($senha, FILTER_VALIDATE_REGEXP, $res)) {		  
      $erros[] = "Senha incorreta!";
    }
      
    if (empty($erros)){
      header('Location: ./menuBootstrap.php');
    } 
  }
  ?>

<?php include_once 'headerLogin.php';?>
<link href="css/login.css" rel="stylesheet">

  <script type="text/javascript" src="js/login.js" defer></script>
  <!--Cabecalho do site-->
  <header>
     <!--Barra de navegação -->
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

      <!--Div com um formulário para login-->
        <form action="index.php" method="POST" class="col-sm-6 col-12 bg-form">
          <div class="form-group p-4">
            <p class="fw-bold fs-3">Login</p>

            <label for="email">Email:</label>
            <input type="email" name="inputEmail" class="form-control-sm form-control" id="email">

            <label for="senha">Senha:</label>
            <input type="password" name="inputSenha" class="form-control-sm form-control" id="senha">

            <br>
            <button type="submit" name="btnLogin" class="btn btn-info" >Entrar</button>
            <button type="button" name="btnCad" onclick="telaCadastro()" class="btn btn-info" >Não possuo cadastro</button>
            
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
