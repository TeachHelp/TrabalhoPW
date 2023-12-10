<?php include_once 'header.php';

$materia = $_GET['materia'];
$consultaProfs = "SELECT alunos.*, instrutores.* FROM alunos INNER JOIN instrutores ON alunos.id = instrutores.fk_id_aluno WHERE instrutores.materia = $materia AND alunos.professor = 'sim' ";
$id=$_SESSION['id'];
$resultado = mysqli_query($connect,$consultaProfs);

// FAVORITAR ou DESFAVORITAR
if (isset($_POST['btnFav'])){
	//pegando o id do instrutor via post
	$id_instrutor = $_POST['id_instrutor'];
	//pegando o id do aluno via post
    $id = $_POST['id_aluno'];
	//sql da consulta para ver ser se aquele professor ja foi favoritado por aquele aluno
	$consultaFav = "SELECT * FROM favoritos WHERE fk_id_aluno = $id AND fk_id_instrutor = $id_instrutor;";
	//executando a consulta sql
	$resultadoConsulta = mysqli_query($connect,$consultaFav);
	//verificando se o resultado da consulta tem algum registro, se tiver registro ele é favorito e o codigo vai desfavoritar, caso nao tenha ele nao é favorito e o código vai favoritar
	if (mysqli_num_rows($resultadoConsulta)>0){
		// É favorito
		//codigo sql para desfavoritar o instrutor
		$deletarFav = "DELETE FROM favoritos WHERE fk_id_aluno = $id AND fk_id_instrutor = $id_instrutor;";
		//executando o codigo sql
		mysqli_query($connect,$deletarFav);
	} else {
		// Não é favorito
		//codigo sql para favoritar o instrutor
		$inserirFav = "INSERT INTO favoritos (fk_id_aluno,fk_id_instrutor) VALUES ($id,$id_instrutor);";
		//executando o codigo sql
		mysqli_query($connect,$inserirFav);
	}
}

?>
<link href="css/pgProf.css" rel="stylesheet">
<script type="text/javascript" src="js/pgProf.js" defer></script>

<!-- Div criada para armazenar as divs de cada professor -->
	<div class="card-container">
		<!-- Div card com as informações do professor individual -->
		<?php 			
			if (mysqli_num_rows($resultado)>0){           
				echo '<div class="card-container col-6 ">';                                    
				while($linha =mysqli_fetch_array($resultado)){
					
						echo '<div class="position-relative card cartaoProf">';
							echo '<a href="perfilProf.php?id=' . $linha['id'] .'">';
							//imagem do professor
							echo '<img src="' . $linha['foto'] . '" alt="Fidelis"  class="card-image">';
							//Div que fica com o nome e fomação do professor
							echo '<div class="card-desc">';

								//executando uma consulta para saber se o professor é favorito ou desfavoritado 
								$id_instrutor = $linha['id_instrutor'];
								$consultaFav = "SELECT * FROM favoritos WHERE fk_id_aluno = $id AND fk_id_instrutor = $id_instrutor;";
								$resultadoConsulta = mysqli_query($connect,$consultaFav);

								// pegando o resultado da consulta e verificando se existe algo ou não para que a opção adequada apareca para o usuario
								if (mysqli_num_rows($resultadoConsulta)>0){
									// se o professor já é favoritado pelo usuario aparece a opção de desfavoritar
									echo '<h4>' . $linha['nome'] . '</h4>' . 
									'<form action="pgProf.php?materia=' . $materia . '" method="POST">
									<input type="hidden" id="id_instrutor" name="id_instrutor" value="' . $linha['id_instrutor'] . '">
									<input type="hidden" id="id_aluno" name="id_aluno" value="' . $id . '">
									<button type="submit" name="btnFav" class="btn btn-danger favoritar">Desfavoritar</button>
									</form>';
								} else {
									// se o professor não foi favoritado pelo usuario aparece a opção de favoritar
									echo '<h4>' . $linha['nome'] . '</h4>' . 
									'<form action="pgProf.php?materia=' . $materia . '" method="POST">
									<input type="hidden" id="id_instrutor" name="id_instrutor" value="' . $linha['id_instrutor'] . '">
									<input type="hidden" id="id_aluno" name="id_aluno" value="' . $id . '">
									<button type="submit" name="btnFav" class="btn btn-danger favoritar">Favoritar</button>
									</form>';
								}
								
								echo '<a href="perfilProf.php?id=' . $linha['id'] .'">' . '<p>' . $linha['descricao'] . '</p>' . '</a>';
							echo '</div>';
							echo '</a>';
						
					echo '</div>';
				}
			} else {
				header("location: ./semProf.php");
			}
			echo '</div>';
		?>
	</div> 
<!-- Puxando pagina js -->
<script src="js/coração.js"></script>

<?php include_once 'footer.php';?>
