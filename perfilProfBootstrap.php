<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teach Help</title>
        <link rel="icon" type="image/x-icon" href="img/logo.png">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="css/perfilProfBootstrap.css">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    </head>
<body>
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
                        <a class="nav-link active" aria-current="page" href="#" id="navHome" onclick="alerta()">Sobre</a>
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
    <!--Criação da classe container com display flex para que as próximas divs fiquem lado a lado e justify-content-center para que as divs fiquem centralizadas-->
    <div class="container mt-5 d-flex justify-content-center">
        <!--Criação da div left ocupando colunas variadas da div container de acordo com o dispositivo utilizado, texto centralizado e branco-->
        <div class="left col-11 col-sm-11 col-md-11 col-lg-3 text-center text-white shadow-lg">
            <!--Criação de imagem com classe img-fluid para responsividade, bordas arredondadas, margin automático, display block, margin top 4 e margin botton 4-->
            <img src="img/ImgFidelis.jpg" alt="Fidelis" class="img-fluid col-9 rounded mx-auto d-block mt-4 mb-4">
            <!--Criação de espaço h4 para inserção de nome-->
            <h4 class="px-4">Fidelis Zanetti de Castro</h4>
            <!--Criação de paragrafo para inserção de infromações sobre o instrutor-->
            <p class="px-4">Professor doutor em Matemática Aplicada formado pela Unicamp</p>
        </div>
        <!--Criação da classe right ocupando colunas variadas da div container de acordo com o dispositivo utilizado e com background branco-->
        <div class="right col-11 col-sm-11 col-md-11 col-lg-7 bg-white shadow-lg">
            <!--Criação do local onde ficarão os dados do instrutor-->
            <div class="info" id="info">
                <!-- Criação de título h3 Informações com borda apenas em baixo, margin igual a 3 e texto sempre em Maiúsculo-->
                <h3 class="border border-top-0 border-end-0 border-start-0 m-3 text-uppercase">Informações</h3>
                <!--Criação de div para alocação de informações do usuário com texto no início de cada coluna e margin igual a 3-->
                <div class="info_data row text-start m-3" id="info_data">
                    <!--Criação de divs para cada informação com margin igual a 1 e uma nova coluna dentro da linha-->
                    <div class="data col-sm m-1">
                        <h4>
                            <span class="material-symbols-outlined rounded-circle bg-primary p-1 text-white" id="icon">
                                email
                            </span>
                            <span class="text">Email</span>
                        </h4>
                        <p>fidelis.castro@gmail.com</p>
                    </div>
                    <div class="data col-sm m-1">
                        <h4>
                            <span class="material-symbols-outlined rounded-circle bg-primary p-1 text-white" id="icon">
                                phone
                            </span>
                            <span class="text">Celular</span>
                        </h4>
                        <p>(27)99798-0102</p>
                    </div>
                    <div class="data col-sm m-1">
                        <h4>
                            <span class="material-symbols-outlined rounded-circle bg-primary p-1 text-white" id="icon">
                                home_pin
                            </span>
                            <span class="text">Endereço</span>
                        </h4>
                        <p>Av. dos Sabiás, 330 - Morada de Laranjeiras, Serra - ES</p>
                    </div>
                </div>
            </div>
            <!--Criação do local para inserção de informações do instrutor tanto pessoais como horário disponíveis para aula-->
            <div class="available">
                <!--Criação de título h3 Projetos com borda apenas abaixo, mergin igual a 3 e texto sempre maiúsculo-->
                <h3 class="border border-top-0 border-end-0 border-start-0 m-3 text-uppercase">Projetos</h3>
                <!--Criação do local onde serão adicionadas as informações sobre formação do instrutor, gostos, projetos, medalhas, etc-->
                <div class="project_data" id="project_data">
                    <div class="data m-3">
                        <!--Criação de título h4 Formação-->
                        <h4>Formação</h4>
                        <!--Criação de parágrafo com informações sobre o instrutor-->
                        <p>Fidelis é professor e pesquisador no Instituto Federal de Educação, Ciência e Tecnologia do Espírito Santo (Ifes). Possui graduação em Matemática pela Universidade Federal do Espírito Santo (2004), mestrado em Matemática também pela Universidade Federal do Espírito Santo (2013) e doutorado em Matemática Aplicada pela Universidade Estadual de Campinas (2018). Seus interesses de pesquisa estão voltados para design de redes neurais artificiais constituídas sobre os sistemas de números reais, complexos e hipercomplexos, visão computacional e processamento da linguagem natural.</p>
                    </div>
                </div>
            </div>
            <!--Criação de espaço para inserção de informações sobre horário de aulas-->
            <div class="projects" id="project">
                <!--Título h3 Horários Disponíveis com bordar apenas abaixo, margin igual a 3 e texto sempre em maiúsculo-->
                <h3 class="border border-top-0 border-end-0 border-start-0 m-3 text-uppercase">Horários Disponíveis</h3>
                <div class="available ms-3">
                    <div class="available_data d-flex">
                        <!--Criação de caixas com informações de dias e horários com aulas disponíveis com borda dark, cantos arredondados e texto centralizado-->
                        <div class="data border border-dark rounded m-1 text-center">
                            <!--Criação de Div com título do dia-->
                            <div class="aulaDia bg-secondary p-1 mb-2 px-3 rounded text-white">Segunda-feira</div>
                            <!--Criação de div com horários disponíveis-->
                            <div class="aulaHora">08:00/09:00</div>
                            <div class="aulaHora">14:00/15:30</div>
                        </div>
                        <div class="data border border-dark rounded m-1 text-center">
                            <div class="aulaDia bg-secondary p-1 mb-2 px-3 rounded text-white">Quarta-feira</div>
                            <div class="aulaHora">10:00/12:00</div>
                            <div class="aulaHora">17:00/19:00</div>
                            <div class="aulaHora">20:00/22:00</div>
                        </div>
                        <span class="material-symbols-outlined m-1" id="addDayClass">
                            library_add
                        </span>
                    </div>
                </div>
            </div>
            <!--Criação de botões de edição e para Baixar currículo do instrutor-->
            <div class="buttonsDownloadEdit m-3 mb-4 d-flex" id="buttonsDownloadEdit">       
                <div class="editInformation d-flex border border-dark rounded text-white user-select-none me-2 col-4 justify-content-center text-center" id="editInformation">
                    <span class="material-symbols-outlined mt-2 mb-2 mx-2">edit</span>
                    <p class="textButtonEdit mt-2 mb-2 me-2" id="textButtonEdit">Editar</p>
                </div>
                <div class="downloadResume d-flex border border-dark rounded text-white user-select-none col-6 justify-content-center text-center" id="downloadResume">
                    <span class="material-symbols-outlined mt-2 mb-2 mx-2" id="uploadButton">upload</span>
                    <p class="uploadText mt-2 mb-2 me-2" id="uploadText"><a class="text-decoration-none text-reset" href="https://drive.google.com/file/d/12RHMIeh_IGiFW2hHXc89ZWoeEs_Rch-9/view?usp=sharing">Baixar Currículo</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>