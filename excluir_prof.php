
<?php
// Include header
include_once 'header.php';

// Database connection
include_once 'conexao.php';

// Error array
$erros = array();

// If id is set in the URL
if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sqlConsulta = "SELECT * FROM alunos WHERE id = '$id'";
    $sqlConsulta2 = "SELECT * FROM instrutores WHERE fk_id_aluno = '$id'";
    $resultado1 = mysqli_query($connect, $sqlConsulta);
    $resultado2 = mysqli_query($connect, $sqlConsulta2);
    $dados = mysqli_fetch_array($resultado1);
    $dadosProf = mysqli_fetch_array($resultado2);
endif;

// If form is submitted
if (isset($_POST['btnExcluir'])):
    $senha = $_POST['inputSenha'];
    $id = $_POST['id'];

    $senha_hash_banco = $dados['senha']; 

    if(!(password_verify($senha, $senha_hash_banco))){
        $erros[] = "Senha incorreta!";
    }

    if (empty($erros)):
        $id=mysqli_escape_string($connect,$_POST['id']);
        $sql="DELETE FROM instrutores WHERE fk_id_aluno = '$id'";
        echo $sql;
        if(mysqli_query($connect,$sql)){
            $sql2="DELETE FROM alunos WHERE id = '$id'";
            echo $sql2;
            if(mysqli_query($connect,$sql2)){
                header('Location: ./index.php');
            }
        }
    endif;
endif;

?>

<!-- Referencing CSS and JS -->
<link href="css/editar.css" rel="stylesheet">
<script type="text/javascript" src="js/cadastro.js" defer></script>

<!-- Page content -->
<div class="container my-3">
    <div class="d-flex justify-content-center flex-column flex-sm-row">
        <!-- Form for account deletion -->
        <form action="excluir_prof.php" method="POST" class="col-sm-6 col-12 bg-form" enctype="multipart/form-data">
            <div class="form-group p-4">
                <p class="fw-bold fs-3">Tem certeza que deseja excluir sua conta?</p>
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                <label for="nome">Senha:</label>
                <input type="password" name="inputSenha" class="form-control-sm form-control" id="senha">

                <!-- Display errors if any -->
                <?php
                if (!empty($erros)):
                    foreach ($erros as $erro):
                        echo "<li> $erro </li>";
                    endforeach;
                endif;
                ?>

                <br>
                <button type="submit" name="btnExcluir" class="btn btn-info">Sim</button>
                <button type="button" name="btnCancelar" onclick="telaPerfil()" class="btn btn-info">Não</button>

            </div>
        </form>
    </div>
</div>
</body>

</html>
