<?php include_once 'header.php';
//$consultaProfs = "SELECT * FROM alunos WHERE professor = 'sim';";

$materia = $_GET['materia'];
//$consultaProfs = "SELECT instrutores.* FROM instrutores INNER JOIN alunos ON instrutores.fk_id_aluno = alunos.id WHERE instrutores.materia = $materia AND alunos.professor = 'sim';";
$consultaProfs = "SELECT alunos.*, instrutores.* FROM alunos INNER JOIN instrutores ON alunos.id = instrutores.fk_id_aluno WHERE instrutores.materia = $materia AND alunos.professor = 'sim' ";

echo $consultaProfs;
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
					echo '<div class="card cartaoProf">';
						echo '<a href="perfilProf.php?id=' . $linha['id'] .'">';
						//imagem do professor
						echo '<img src="' . $linha['foto'] . '" alt="Fidelis"  class="card-image">';
						//Div que fica com o nome e fomação do professor
						echo '<div class="card-desc">';
							echo '<h4>' . $linha['nome'] . '<i class="fa fa-heart like-button"></i></h4>';
							echo '<p>' . $linha['descricao'] . '</p>';
						echo '</div>';
						echo '</a>';
					echo '</div>';
				}
			}
		?>
	</div> 
<!-- Puxando pagina js -->
<script src="js/coração.js"></script>

<?php include_once 'footer.php';?>
