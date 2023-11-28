

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
    $descricao = $_POST['inputDesc'];
    $curriculo = $_POST['inputCurriculo'];

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

    if(empty($descricao)){
      $erros[] = "Descrição deve ser preenchida!";
    }

    if(empty($curriculo)){
      $erros[] = "Link do currículo deve ser informado!";
    }

    $formatosPermitidos= array("png","jpeg","jpg");
    $extensao=pathinfo($_FILES['inputFoto']['name'],PATHINFO_EXTENSION);

    if (in_array($extensao,$formatosPermitidos)){
      $pasta="arquivos/";
      //O nome temporário com o qual o arquivo enviado foi armazenado no servidor.
      $temporario = $_FILES['inputFoto']['tmp_name'];
      $novoNome= uniqid().".$extensao"; //uniqid() retorna um identificador unico prefixado baseado no tempo atual em milionésimos de segundo
    }else{
      $erros[] = "Imagem inválida"
    }  
   
    if (empty($erros)){

      $nome=mysqli_escape_string($connect,$_POST['inputName']);
      $descricao=mysqli_escape_string($connect,$_POST['inputDesc']);
      $email=mysqli_escape_string($connect,$_POST['inputEmail']);
      $endereco=mysqli_escape_string($connect,$_POST['inputEnd']);
  	  $dt_nasc=mysqli_escape_string($connect,$_POST['inputData']);
	    $id=mysqli_escape_string($connect,$_POST['id']);
      $descricao=mysqli_escape_string($connect,$_POST['inputDesc']);
      $curriculo=mysqli_escape_string($connect,$_POST['inputCurriculo']);      

        if(move_uploaded_file($temporario,$pasta.$novoNome)){
          $foto = $pasta . $novoNome;
          $sql="UPDATE alunos SET nome='$nome', descricao='$descricao', email='$email', foto='$foto', endereco='$endereco', dt_nasc='$dt_nasc' WHERE id=$id";
          $sql2="INSERT INTO instrutores (fk_id_aluno,curriculo) VALUES ('$id','$curriculo')";
          echo $sql;
          echo $sql2;
          if(mysqli_query($connect,$sql)){
            header('Location: ./perfilAluno.php');
          }			
		    } else {
        $sqlnophoto="UPDATE alunos SET nome='$nome', descricao='$descricao', email='$email', endereco='$endereco', dt_nasc='$dt_nasc' WHERE id=$id";
        echo $sqlnophoto;
        
        if(mysqli_query($connect,$sqlnophoto)){
          header('Location: ./perfilAluno.php');
        }
	    }
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
      <form action="editarPerfil.php" method="POST" class="col-sm-6 col-12 bg-form" enctype="multipart/form-data">
        <div class="form-group p-4">
          <p class="fw-bold fs-3">Cadastro de Professor</p>
          <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

          <label for="nome">Nome:</label>
          <input type="text" name="inputName" class="form-control-sm form-control" id="nome" value="<?php echo $dados['nome']; ?>">

          <label for="nome">Descrição:</label>
          <input type="text" name="inputDesc" class="form-control-sm form-control" id="descricao" placeholder="Exemplo: Olá me chamo Davi, sou formado em Letras pela Ufes, comecei a dar aulas...">

          <label for="email">Email:</label>
          <input type="email" name="inputEmail" class="form-control-sm form-control" id="email" value="<?php echo $dados['email']; ?>">

          <label for="dataNasc">Data de Nascimento:</label>
          <input type="date" name="inputData" class="form-control-sm form-control" id="dataNasc" value="<?php echo $dados['dt_nasc']; ?>">

          <label for="endereco">Endereço:</label>
          <input type="text" name="inputEnd" class="form-control-sm form-control" id="endereco" value="<?php echo $dados['endereco']; ?>">

          <label for="curriculo">Link do currículo Lattes:</label>
          <input type="text" name="inputCurriculo" class="form-control-sm form-control" id="curriculo">

          <label for="foto">Foto:</label>
          <input type="file" name="inputFoto" class="form-control-sm form-control" id="foto" value="<?php echo $foto?>">

          <label for="materias">Matéria:</label>
          <select id="selectMateria" name="selectMateria" class="form-control-sm form-control">
            <option value="math">Matemática</option>
            <option value="port">Português</option>
            <option value="music">Música</option>
            <option value="sport">Esportes</option>
            <option value="history">História</option>
            <option value="english">Inglês</option>
            <option value="idiom">Idiomas</option>
            <option value="geo">Geografia</option>
            <option value="chemical">Química</option>
            <option value="biology">Biologia</option>
            <option value="physics">Física</option>
          </select>
        
          <br>
          <button type="submit" name="btnEdit" class="btn btn-info">Atualizar</button>
          
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
