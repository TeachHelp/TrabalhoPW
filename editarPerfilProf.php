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
            $curriculo=mysqli_escape_string($connect,$_POST['inputCurriculo']);     
            $materia=mysqli_escape_string($connect,$_POST['selectMateria']);  

            $nome=mysqli_escape_string($connect,$_POST['inputName']);
            $descricao=mysqli_escape_string($connect,$_POST['inputDesc']);
            $email=mysqli_escape_string($connect,$_POST['inputEmail']);
            $endereco=mysqli_escape_string($connect,$_POST['inputEnd']);
            $dt_nasc=mysqli_escape_string($connect,$_POST['inputData']);
            $id=mysqli_escape_string($connect,$_POST['id']);
            
            $formatosPermitidos= array("png","jpeg","jpg");
            $extensao=pathinfo($_FILES['inputFoto']['name'],PATHINFO_EXTENSION);

            if (in_array($extensao,$formatosPermitidos)){
                $pasta="arquivos/";
                //O nome temporário com o qual o arquivo enviado foi armazenado no servidor.
                $temporario = $_FILES['inputFoto']['tmp_name'];
                $novoNome= uniqid().".$extensao"; //uniqid() retorna um identificador unico prefixado baseado no tempo atual em milionésimos de segundo

                if(move_uploaded_file($temporario,$pasta.$novoNome)){
                    $foto = $pasta . $novoNome;
                    $sql="UPDATE alunos SET nome='$nome', descricao='$descricao', email='$email', foto='$foto', endereco='$endereco', dt_nasc='$dt_nasc' WHERE id=$id";
                    $sql2="UPDATE instrutores SET curriculo='$curriculo', materia='$materia'";
                    if(mysqli_query($connect,$sql)){
                      if(mysqli_query($connect,$sql2)){
                        header('Location: ./perfilAlunoProf.php');
                      }
                    }			       
                }
            }
        } 
    }

//Select com o id que veio da URL
if(isset($_GET['id'])):
	$id =mysqli_escape_string($connect, $_GET['id']);
	$sql="SELECT * FROM alunos WHERE id =  '$id'";
    $sqlProf="SELECT * FROM instrutores WHERE fk_id_aluno =  '$id'";
	$resultado = mysqli_query($connect, $sql);
    $resultadoProf = mysqli_query($connect, $sqlProf);
	$dados = mysqli_fetch_array($resultado);
    $dadosProf = mysqli_fetch_array($resultadoProf);
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
          <p class="fw-bold fs-3">Editar Perfil</p>
          <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

          <div class="field">
            <label for="nome" id="nomeLabel">Nome:</label>
            <input type="text" name="inputName" class="form-control-sm form-control" id="nome" value="<?php echo $dados['nome']; ?>" placeholder="..."/>
          </div><br>

          <div class="field">
            <label for="nome" id="descricaoLabel">Descrição (opcional):</label>
            <input type="text" name="inputDesc" class="form-control-sm form-control" id="descricao" value="<?php echo $dados['descricao']; ?>">
          </div><br>

          <div class="field">
            <label for="email" id="emailLabel" >Email:</label>
            <input type="email" name="inputEmail" class="form-control-sm form-control" id="email" value="<?php echo $dados['email']; ?>">
          </div><br>

          <div class="field">
            <label for="dataNasc" id="dtNascLabel">Data de Nascimento:</label>
            <input type="date" name="inputData" class="form-control-sm form-control" id="dataNasc" value="<?php echo $dados['dt_nasc']; ?>">
          </div><br>

          <div class="field">
            <label for="endereco" id="enderecoLabel">Endereço:</label>
            <input type="text" name="inputEnd" class="form-control-sm form-control" id="endereco" value="<?php echo $dados['endereco']; ?>">
          </div><br>

          <div class="field">
            <label for="foto" id="fotoLabel">Foto:</label>
            <input type="file" name="inputFoto" class="form-control-sm form-control" id="foto" value="<?php echo $dados['foto']?>">
          </div><br>

          <div class="field">
            <label for="curriculo" id="curriculoLabel">Foto:</label>
            <input type="text" name="inputCurriculo" class="form-control-sm form-control" id="curriculo" value="<?php echo $dadosProf['curriculo']?>">
          </div><br>

          <div class="field">
            <label for="materias"id="materiaLabel">Matéria:</label>
            <select id="selectMateria" name="selectMateria" class="form-control-sm form-control"placeholder="...">
              <option value="Matemática">Matemática</option>
              <option value="Português">Português</option>
              <option value="Música">Música</option>
              <option value="Esportes">Esportes</option>
              <option value="História">História</option>
              <option value="Inglês">Inglês</option>
              <option value="Idiomas">Idiomas</option>
              <option value="Geografia">Geografia</option>
              <option value="Química">Química</option>
              <option value="Biologia">Biologia</option>
              <option value="Física">Física</option>
            </select>
          <div>

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
