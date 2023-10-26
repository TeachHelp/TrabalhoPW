<?php
	//inserindo o header  
  include_once 'header.php'; 
 
  //Conexão
  include_once 'conexao.php';

  $erros = array(); 

  if (isset($_POST['btnEdit'])){
    $email = $_POST['inputEmail'];
    $data = $_POST['inputData'];
    $endereco = $_POST['inputEnd'];
    $nome = $_POST['inputName'];
    //$foto = $FILES["$_POST['inputFoto']"];

    // Sanitização do nome
    $nomeSanitizado = preg_replace("/[^a-zA-ZÀ-ÿ\s\-]/u", '', $nome);

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
  
    //validação de endereco
    if(! filter_var($endereco, FILTER_VALIDATE_REGEXP, $res_nome)){
      $erros[] = "Endereço inválido!";
    }

    if (empty($erros)){
      header('Location: ./editar.php');
    } 
  }

//Select com o id que veio da URL
if(isset($_GET['id'])):
	$id =mysqli_escape_string($connect, $_GET['id']);
	$sql="SELECT * FROM alunos WHERE id =  '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
 
 ?>

<!-- referenciando o css e js -->
<link href="css/editar.css" rel="stylesheet">
<script type="text/javascript" src="js/cadastro.js" defer></script>


<!--Conteudo da pagina-->
  <div class="container my-3"> 
    <div class="d-flex justify-content-center flex-column flex-sm-row ">
      <!--Div com um formulário para cadastro-->
      <form action="editar.php" method="POST" class="col-sm-6 col-12 bg-form">
        <div class="form-group p-4">
          <p class="fw-bold fs-3">Editar Perfil</p>
          <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

          <label for="nome">Nome:</label>
          <input type="text" name="inputName" class="form-control-sm form-control" id="nome" value="<?php echo $dados['nome']; ?>">

          <label for="nome">Descrição (opcional):</label>
          <input type="text" name="inputDesc" class="form-control-sm form-control" id="descricao" value="<?php echo $dados['descricao']; ?>">

          <label for="email">Email:</label>
          <input type="email" name="inputEmail" class="form-control-sm form-control" id="email" value="<?php echo $dados['email']; ?>">

          <label for="dataNasc">Data de Nascimento:</label>
          <input type="date" name="inputData" class="form-control-sm form-control" id="dataNasc" value="<?php echo $dados['dt_nasc']; ?>">

          <label for="endereco">Endereço:</label>
          <input type="text" name="inputEnd" class="form-control-sm form-control" id="endereco" value="<?php echo $dados['endereco']; ?>">

          <!--
          <label for="foto">Foto:</label>
          <input type="file" name="inputFoto" class="form-control-sm form-control" id="foto">
          -->

          <br>
          <button type="submit" name="btnEdit" class="btn btn-info">Atualizar</button>

          <div class="btn btn-info botao" id="trocar_senha">
            <a class="text-decoration-none text-reset" href='trocar_senha.php?id=<?php echo $dados['id'];?>'>Trocar Senha</a>
          </div>


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
