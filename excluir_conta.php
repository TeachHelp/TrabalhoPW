
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
    $sql = "SELECT * FROM alunos WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;

// If form is submitted
if (isset($_POST['btnExcluir'])):
    $senha = $_POST['inputSenha'];
    $id = $_POST['id'];
    $senha_banco = base64_decode($dados['senha']);

    // Check if password is correct
    if ($senha != $senha_banco):
        $erros[] = "Senha incorreta!";
    endif;

    // If there are no errors, redirect to excluirPHP.php
    if (empty($erros)):
        header('Location: ./excluirPHP.php');
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
        <form action="excluir_conta.php" method="POST" class="col-sm-6 col-12 bg-form" enctype="multipart/form-data">
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
