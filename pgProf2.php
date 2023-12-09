<?php include_once 'header.php';

$materia = $_GET['materia'];
$consultaProfs = "SELECT alunos.*, instrutores.* FROM alunos INNER JOIN instrutores ON alunos.id = instrutores.fk_id_aluno WHERE instrutores.materia = $materia AND alunos.professor = 'sim' ";
$id=$_SESSION['id'];
$resultado = mysqli_query($connect,$consultaProfs);

?>
<link href="css/pgProf.css" rel="stylesheet">
<script type="text/javascript" src="js/pgProf.js" defer></script>

<!-- Div criada para armazenar as divs de cada professor -->
	<div class="card-container">
		<!-- Div card com as informações do professor individual -->
		<?php 			
			if (mysqli_num_rows($resultado)>0){                                               
				while($linha =mysqli_fetch_array($resultado)){
					echo '<div class="position-relative card cartaoProf">';
						echo '<a href="perfilProf.php?id=' . $linha['id'] .'">';
						//imagem do professor
						echo '<img src="' . $linha['foto'] . '" alt="Fidelis"  class="card-image">';
						//Div que fica com o nome e fomação do professor
						echo '<div class="card-desc">';
							echo '<h4>' . $linha['nome'] . '</h4>' . 
							'<form action="favoritar.php" method="POST">
							<input type="hidden" id="id_instrutor" name="id_instrutor" value="' . $linha['id_instrutor'] . '">
							<input type="hidden" id="id_aluno" name="id_aluno" value="' . $id . '">
							<button type="submit" name="btnFav" class="btn btn-danger favoritar">Favoritar</button>
							</form>';
							echo '<a href="perfilProf.php?id=' . $linha['id'] .'">' . '<p>' . $linha['descricao'] . '</p>' . '</a>';
						echo '</div>';
						echo '</a>';
					echo '</div>';
				}
			} else {
				header("location: ./semProf.php");
			}
		?>
	</div> 
<!-- Puxando pagina js -->
<script src="js/coração.js"></script>

<?php include_once 'footer.php';?>
