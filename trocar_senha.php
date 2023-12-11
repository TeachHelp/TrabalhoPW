<?php
	//inserindo o header  
  include_once 'header.php'; 
 
  //Conexão
  include_once 'conexao.php';

  //Select com o id que veio da URL
if(isset($_GET['id'])):
	$id =mysqli_escape_string($connect, $_GET['id']);
	$sql="SELECT * FROM alunos WHERE id =  '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
 
  $erros = array(); 
  
  if(isset($_POST['btnTrocar'])){
    $senha_velha = $_POST['inputSenha'];
    $senha_nova = $_POST['inputNovaSenha'];
    $senha_nova_conf = $_POST['inputConfSenha'];
    $id = $_POST['id'];

    $senha_hash_banco = $dados['senha']; 
    
    //validação de senha
    $res_senha = array("options"=>array("regexp"=>"/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/"));
    if(!filter_var($senha_nova, FILTER_VALIDATE_REGEXP, $res_senha)) {		  
      $erros[] = "Senha nova inválida!";
    }

    //validação de senha
    if((password_verify($senha_velha, $senha_hash_banco))){
      if($senha_nova == $senha_nova_conf){
        $senha_nova_codificada = password_hash($senha_nova, PASSWORD_DEFAULT);
      }else{
        $erros[] = "As novas senhas precisam ser iguais!";
      }
    }else{
      $erros[] = "Senha atual errada!";
    }
    
    if (empty($erros)){
      $id=mysqli_escape_string($connect,$_GET['id']);
	    $sql="UPDATE alunos SET senha='$senha_nova_codificada' WHERE id='$id'";
	    echo $sql;
      if(mysqli_query($connect,$sql)){
        header('Location: ./perfilAluno.php');
      }
    } 
  }
  
 
?>


<!-- referenciando o css e js -->
<link href="css/editar.css" rel="stylesheet">
<script type="text/javascript" src="js/cadastro.js" defer></script>


<!--Conteudo da pagina-->
  <div class="container my-3"> 
    <div class="d-flex justify-content-center flex-column flex-sm-row ">
      <!--Div com um formulário para cadastro-->
      <form action="trocar_senha.php" method="POST" class="col-sm-6 col-12 bg-form">
        <div class="form-group p-4">
          <p class="fw-bold fs-3">Trocar Senha</p>
          <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

          <label for="senha">Senha:</label>
          <input type="password" name="inputSenha" class="form-control-sm form-control" id="senha_atual">

          <label for="nova_senha">Nova Senha:</label>
          <input type="password" name="inputNovaSenha" class="form-control-sm form-control" id="senha_nova">

          <label for="conf_senha">Confirmar Nova Senha:</label>
          <input type="password" name="inputConfSenha" class="form-control-sm form-control" id="confirmar_senha">
          
          <br>
          <button type="submit" name="btnTrocar" class="btn btn-info notao">Trocar Senha</button>
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
