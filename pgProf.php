<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Professores de Matemática</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/pgProf.css">
	<link rel="icon" type="image/x-icon" href="img/logo.png">
	<!--Import Bootstrap 5.0-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <link href="branco.css" rel="stylesheet">
	<!-- Import Bootstrap inferior a 5.0-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php 

?>

<header>
	<script type="text/javascript" src="js/login.js" defer></script>
	<!--Barra de navegação-->
	 <nav class="navbar navbar-expand-lg bg-corHeader">
		<div class="container-fluid">
		<!--Logo do site-->
		<a class="navbar-brand" href="menuBootstrap.php">
			<img src="img/logoBranca.png" width="50" height="20" class="d-inline-block align-top" alt="">
		</a>
		<!--Itens da Navbar-->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="menuBootstrap.php" id="navHome">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="perfilAlunoBootstrap.php" id="navHome">Perfil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="menuBootstrap.php" id="navHome">Matérias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="sobre.php" id="navHome">Sobre</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#" id="navHome" onclick="alerta()">Configurações</a>
				</li>
			</ul>
			<form class="d-flex" role="search">
				<input class="form-control-ss form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
				<button class="btn btn-outline-light" type="submit" onclick="alerta()"><img src="img/lupa.png" class="lupa"></button>
			</form>
		</div>
		</div>
	</nav>
   </header>
<!-- Div criada para armazenar as divs de cada professor -->
	<div class="card-container">
		<!-- Div card com as informações do professor individual -->
		<div class="card">
			<a href="perfilProfBootstrap.php">
			<!-- Imagem do professor -->
			<img class="card-image" src="https://media.licdn.com/dms/image/C5603AQHGPFe_6YqHrQ/profile-displayphoto-shrink_800_800/0/1659888505915?e=1694044800&v=beta&t=W05OFHnSPqmZACl-Mkx3Ocf00uNJ_YlIa3TNtx_3N7c">
			<!-- Div que fica com o nome e fomação do professor -->
			<div class="card-desc">
				<h4>Fidelis Zanetti de Castro <i class="fa fa-heart like-button"></i></h4>
				<p>Professor doutor em Matemática Aplicada formado pela Unicamp</p>
			</div>
			</a>
		<!-- Fechando card --> 
		</div>
		<div class="card">
			<img class="card-image" src="https://www.ofuxico.com.br/img/galeria/2019/10/rafaelprocopio_420173.jpg">
			<div class="card-desc">
				<h4>Rafael Rodrigues Procópio <i class="fa fa-heart like-button"></i></h4>
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
			<img class="card-image" src="https://s2.static.brasilescola.uol.com.br/be/2023/07/professora-ensinando-matematica-com-representacao-da-ideia-do-ensino-da-matematica-e-seu-uso-pratico-no-mundo.jpg">
			<div class="card-desc">
				<h4>Luiza Fraga<i class="fa fa-heart like-button"></i></h4>
				<p>Professora formada em Matemática pela UFRJ</p>
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
		    <img class="card-image" src="https://s2.glbimg.com/vtq78sWXWjRqahoGBDLv3Vx6a_g=/620x345/e.glbimg.com/og/ed/f/original/2018/11/14/ferretto2.png">
			<div class="card-desc">
				<h4>Daniel Ferretto<i class="fa fa-heart like-button"></i></h4>
				<p>Professor formado em Matemática pela UFSC</p>
			</div>
		</div>
	</div>
</body>
<!-- Puxando pagina js -->
<script src="js/coração.js"></script> 
</html>
