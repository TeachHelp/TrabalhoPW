<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachHelp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <link href="css/sobre.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    
</head>
<body>
  <script type="text/javascript" src="js/login.js" defer></script>
  <!--Cabecalho do site-->
  <header>
     <!--Barra de navegação -->
      <nav class="navbar navbar-expand-lg bg-corHeader">
        <div class="container-fluid">
          <!--Logo do site-->
          <a class="navbar-brand" href="cadastro.php">
            <img src="img/logoBranca.png" width="50" height="20" class="d-inline-block align-top" alt="">
          </a>
          <!--Itens da Navbar-->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cadastro.php" id="navHome">Home</a>
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

  <!--Conteudo da pagina-->
  <div class="container my-3">
    <div class="d-flex justify-content-center flex-column flex-sm-row ">
      <!--Div com a logo e com um texto de apresentação-->
      <div class="divApresentacao col-sm-12 col-12 bg-txt p-1">
        <p class="tit"> Sobre a Equipe TeachHelp  </p>

        <p class="pTxt"> Somos um grupo apaixonado de estudantes do último período do Instituto Federal do Espírito Santo,
          unidos por um objetivo comum: Tornar o aprendizado e a busca por aprendizado mais completa e prática. 
          Conheça os rostos por trás dessa equipe dedicada: Davi Cardoso Salles, cuja mente criativa e determinação 
          incansável são as forças motrizes por trás de nossa busca por soluções impactantes; Evelyn Otavio Pereira, 
          uma visionária comprometida em transformar experiências pessoais em mudanças positivas, inspirando todos nós a 
          pensar além dos limites convencionais; Harian Adami Chagas Radaelli, cujo compromisso com a excelência e perspicácia 
          estratégica nos guia na jornada para superar obstáculos complexos; 
          e Wilsiman Santos Evangelista Silva, uma catalisadora de inovação e energias incansáveis, 
          sempre desafiando a equipe a atingir novos patamares.</p>
        <br>

        <div class="container">
          <div class="row justify-content-between">

                <img src="img/davi.png" class="imgInsta" onClick="window.open('https://www.instagram.com/davi_cs18/');">
                <p class="">Davi Cardoso Salles </p>

                <img src="img/evelyn.png" class="imgInsta" onClick="window.open('https://www.instagram.com/evelyn.otavio/');">
                <p class="">Evelyn Pereira Otavio </p>


                <img src="img/harian.png" class="imgInsta" onClick="window.open('https://www.instagram.com/harian_cr/');">
                <p class="">Harian Adami Chagas Radaelli </p>


                <img src="img/wil.png" class="imgInsta" onClick="window.open('https://www.instagram.com/wilsiman_evangelista/');">
                <p class="">Wilsiman Santos Evangelista Silva </p>
          </div>
        </div>
  </div>
  
</body>

</html> 