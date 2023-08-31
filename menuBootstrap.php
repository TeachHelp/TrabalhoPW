<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />"
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menuBootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <link rel="icon" type="image/png" href="img/logo.png"
    
</head>
<body>
  <script src="js/menuBootstrap.js" defer></script>
  <!--Cabecalho do site-->
  <header>
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
    <body>
        <!--criando div centralizada com a logo-->
        <div class="text-center my-3">
          <img src="img/logoBranca.png" class="rounded" width="250" height="100"alt="">
        </div>
<!--criando um container que possuirá as divs das matérias-->
<div class="container">
  <!--primeira linha, com os elementos espalhados igualmente dos cantos ao centro do container-->
  <div class="row justify-content-between">
  
      <div class="card" id="card-custom-portugues" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/port.jpg" class=" img card-img-top" alt="portugues foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Português</h3>
        </div>
      <!--div de matemática, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-matematica" style="width: 15rem;" onclick="telaProf()" type="button">
        <img src="img/mat.jpg" class="img card-img-top" alt="Matematica foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Matemática</h3>
        </div>
      <!--div de música, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-musica" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/music.jpg" class=" img card-img-top " alt="musica foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Música</h3>
        </div>
      <!--div de esportes, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-esportes" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/esport.jpg" class="img card-img-top" alt="Esportes foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Esportes</h3>
        </div>
      </div>
  </div>
  <!--linha de quebra para gerar espaçamento-->
  <div class="row">.</div>
  <!--segunda linha, com os elementos igualmente distribuídos das pontas ao meio-->
  <div class="row justify-content-between">
      <!--div de história, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-historia" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/hist.jpg" class="img card-img-top" alt="Historia foto">
        <div class="card-title titulo fs-5">
          <h3 class="">História</h3>
        </div>
      <!--div de inglês, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-ingles" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/ing.jpg" class="img card-img-top" alt="Ingles foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Inglês</h3>
        </div>
      <!--div de idiomas, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-idiomas" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/idiom.jpg" class="img card-img-top" alt="Idiomas foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Idiomas</h3>
        </div>
      <!--div de informática, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-informatica" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/info.jpeg" class="img card-img-top" alt="Informatica foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Informática</h3>
        </div>
      </div>


      
      <div class="row">.</div>
      <!--segunda linha, com os elementos igualmente distribuídos das pontas ao meio-->
      <div class="row justify-content-between">
      <!--div de história, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      <div class="card" id="card-custom-historia" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/hist.jpg" class="img card-img-top" alt="Historia foto">
        <div class="card-title titulo fs-5">
          <h3 class="">História</h3>
        </div>
      <!--div de inglês, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-ingles" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/ing.jpg" class="img card-img-top" alt="Ingles foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Inglês</h3>
        </div>
      <!--div de idiomas, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-idiomas" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/idiom.jpg" class="img card-img-top" alt="Idiomas foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Idiomas</h3>
        </div>
      <!--div de informática, que contém um card estilizado, uma imagem e uma escrita em h3 do nome da matéria-->
      </div>
      <div class="card" id="card-custom-informatica" style="width: 15rem;" onclick="alerta()" type="button">
        <img src="img/info.jpeg" class="img card-img-top" alt="Informatica foto">
        <div class="card-title titulo fs-5">
          <h3 class="">Informática</h3>
        </div>
      </div>
  </div>
  <div id="espacamento"></div>
  <main></main>
  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <h1>
          <a class="navbar-brand" href="menuBootstrap.php">
           <img src="img/logoBranca.png" width="50" height="20" class="d-inline-block align-top" alt="">
          </a>
        </h1>
        <p>apenas um teste</p>
        <div id="footer_social_media">
          <a href="#" class="footer_link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="#" class="footer_link" id="facebook">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a href="#" class="footer_link" id="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
        </div>
      </div>
      <ul class="footer-list">
        <li>
          <h3>Blog</h3
        </li>
        <li>
          <a href="#" class="footer-link">Item1</a>
        </li>
        <li>
          <a href="#" class="footer-link">Item2</a>
        </li>
        <li>
          <a href="#" class="footer-link">Item3</a>
        </li>

      </ul>
      <ul class="footer-list">
        <li>
          <h3>Products</h3
        </li>
        <li>
          <a href="#" class="footer-link">Item4</a>
        </li>
        <li>
          <a href="#" class="footer-link">Item5</a>
        </li>
        <li>
          <a href="#" class="footer-link">Item6</a>
        </li>

      </ul>
      <div id="footer_subscribe">
        <h3>Teste</h3>
        <p>
          Olá teste teste teste teste teste 
        </p>
        <div id="input_group">
          <input type="email" id="email">
          <button>
            <i class="fa-regular fa-envelope"></i>
          </button>

        </div>

      </div>
      <div id="footer_copyright">
        &#169
        2023 all rights reserved
      </div>
    </div>
  </footer>

</body>

</html>