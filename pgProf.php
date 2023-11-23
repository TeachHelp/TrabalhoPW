<?php include_once 'header.php';?>
<link href="css/pgProf.css" rel="stylesheet">
<script type="text/javascript" src="js/pgProf.js" defer></script>

<!-- Div criada para armazenar as divs de cada professor -->
	<div class="card-container">
		<!-- Div card com as informações do professor individual -->
		<div class="card">
			<a href="perfilProf.php">
			<!-- Imagem do professor -->
			<img src="img/ImgFidelis.jpg" alt="Fidelis"  class="card-image">
			<!-- Div que fica com o nome e fomação do professor -->
			<div class="card-desc">
				<h4>Fidelis Zanetti<i class="fa fa-heart like-button"></i></h4>
				<p>Professor doutor em Matemática Aplicada formado pela Unicamp</p>
			</div>
			</a>
		<!-- Fechando card --> 
		</div>
		<div class="card">
		    <img class="card-image" src="https://pbs.twimg.com/profile_images/1379776286709723136/J8zPfaO1_400x400.jpg">
			<div class="card-desc">
				<h4>Rafael Procópio<i class="fa fa-heart like-button"></i></h4>
				<p>Professor de Matemática formado pela UGF e com especialização no ensino da Matemática pela UFRJ</p>
			</div>
		</div>
		<div class="card">
		    <img class="card-image" src="https://img.r7.com/images/sandro-curio-tiktok-01072021221814525?dimensions=299x417">
			<div class="card-desc">
				<h4>Sandro Curió<i class="fa fa-heart like-button"></i></h4>
				<p>Professor de Matemática formado pela UFF</p>
			</div>
		</div>
	</div>
	<div class="card-container">
		<div class="card">
			<img class="card-image" src="https://media.licdn.com/dms/image/D4D03AQGJCFWCpMoDaA/profile-displayphoto-shrink_800_800/0/1691114540727?e=2147483647&v=beta&t=FNRkVuHbVMBtVoQpBOfhSkNYd4tUTFiC5I54lOQ1WL0">
			<div class="card-desc">
				<h4>Gabriele Gonçalves<i class="fa fa-heart like-button"></i></h4>
				<p>Professora formada em Matématica pelo IFES</p>
			</div>
		</div>
		<div class="card">
			<img class="card-image" src="https://yt3.ggpht.com/TRwG_DfRgoaY2zgt53ws_LJ3s2WvI0jlsOOG4vhKGpNe5Vwi8Gf9Hi45TQOjhIHooGFk2cB0BLCv6YE=s640-c-fcrop64=1,00000000ffffffff-nd-v1">
			<div class="card-desc">
				<h4>Paulo Pereira<i class="fa fa-heart like-button"></i></h4>
				<p>Mestre em Matemática pelo Instituto Nacional de Matemática Pura e Aplicada - IMPA</p>
			</div>
		</div>
		<div class="card">
		    <img class="card-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTVQ7km6Rf05R54qlITOecXx49xRRlsYNNAA&usqp=CAU">
			<div class="card-desc">
				<h4>Daniel Ferretto<i class="fa fa-heart like-button"></i></h4>
				<p>Professor formado em Matemática pela UFSC</p>
			</div>
		</div>
	</div>
<!-- Puxando pagina js -->
<script src="js/coração.js"></script>

<?php include_once 'footer.php';?>
