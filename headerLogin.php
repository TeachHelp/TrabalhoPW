<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachHelp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
    <link rel="icon" type="image/png" href="img/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>
    <link href="css/header.css" rel="stylesheet">
    
</head>
<body>
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