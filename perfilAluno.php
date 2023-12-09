<?php 


//inserindo o header
include_once 'header.php'; 

?>

<!-- Importações necessarias exclusivas da pagina-->
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link href="css/perfilAluno.css" rel="stylesheet">

    <!--Criação da classe container com display flex para que as próximas divs fiquem lado a lado e justify-content-center para que as divs fiquem centralizadas-->
    <div class="container mt-5 d-flex justify-content-center">
        <!--Criação da div left ocupando colunas variadas da div container de acordo com o dispositivo utilizado, texto centralizado e branco-->
        <div class="position-relative left col-11 col-sm-11 col-md-11 col-lg-3 text-center text-white shadow-lg">
            <!--Criação de imagem com classe img-fluid para responsividade, bordas arredondadas, margin automático, display block, margin top 4 e margin botton 4-->
            <?php echo '<img class="imgPerfil" src= " '.$dados['foto'].' "/>';?> 
            <!--Texto h4 com padding horinzontal igual a 4-->
            <h4 class="px-4"><?php echo $dados['nome'];?></h4>
            <!--Paragrafo com padding horizontal igual a 4-->
            <p class="px-4"> <?php echo $dados['descricao'];?></p>

            <div class="btn btn-danger excluir" id="trocar_senha">
                <a class="text-decoration-none text-reset" href='excluir_conta.php?id=<?php echo $dados['id'];?>'>Excluir Conta</a>
            </div>
            
        </div>
        <!--Criação da classe right ocupando colunas variadas da div container de acordo com o dispositivo utilizado e com background branco-->
        <div class="right col-11 col-sm-11 col-md-11 col-lg-7 bg-white shadow-lg">
            <!--Criação da div info onde ficarão os dados dos alunos-->
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
                        <p><?php echo $dados['email']?></p>
                    </div>
                    <div class="data col-sm m-1">
                        <h4>
                            <span class="material-symbols-outlined rounded-circle bg-primary p-1 text-white" id="icon">
                                home_pin
                            </span>
                            <span class="text">Endereço</span>
                        </h4>
                        <p><?php echo $dados['endereco']?></p>
                    </div>
                </div>
            </div>        
            <!--Criação de div para inserir instrutores favoritados-->
            <div class="projects" id="project">
                <!--Criação de título h3 Instrutores favoritos com borda apenas abaixo, margin igual a 3 e texto sempre em maiúsculo-->
                <h3 class="border border-top-0 border-end-0 border-start-0 m-3 text-uppercase">Instrutores favoritos</h3>
                <!--Criação de local onde ficarão os instrutores favoritados pelos alunos-->
                <!--Criação de carrosel em Bootstrap-->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!--Criação de primeiro slide-->
                        <div class="carousel-item active">
                            <!--Criação de div com classe row para alinhas as fotos e textos que serão inseridos e margin horizontal igual a 2-->
                            <div class="row mx-2">
                                <!--Inserção de fotos com classe img-fluid para responsividade e col-sm-4 para alinhamento vertical ocupando 4 colunas da linha-->
                                <div class="col-sm-4"><img src="img/Wilsiman.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Wilsiman Evangelista</div></div>
                                <div class="col-sm-4"><img src="img/Moises.jpeg" class="img-fluid" alt="..."><div class="col-sm-10">Moises Omena</div></div>
                                <div class="col-sm-4"><img src="img/Douglas.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Douglas Alkimin</div></div>
                            </div>                            
                        </div>
                        <!--Criação de segundo slide e repetição do processo-->
                        <div class="carousel-item">
                            <div class="row mx-2">
                                <div class="col-sm-4"><img src="img/Felipe.jpeg" class="img-fluid" alt="..."><div class="col-sm-10">Felipe Frechiani</div></div>
                                <div class="col-sm-4"><img src="img/Fabiano.jpeg" class="img-fluid" alt="..."><div class="col-sm-10">Fabiano Ruy</div></div>
                                <div class="col-sm-4"><img src="img/Bermudes.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Alessandro Bermudes</div></div>
                            </div>  
                        </div>
                        <!--Criação de terceiro slide e repetição do processo-->
                        <div class="carousel-item">
                            <div class="row mx-2">
                                <div class="col-sm-4"><img src="img/Scopel.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Wagner Scopel</div></div>
                                <div class="col-sm-4"><img src="img/Renata.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Renata Imaculada</div></div>
                                <div class="col-sm-4"><img src="img/Victorio.jpg" class="img-fluid" alt="..."><div class="col-sm-10">Victorio Albani</div></div>
                            </div>
                        </div>
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
            <!--Criação de botões de edição e para tornar-se instrutor-->
            <div class="buttonsDownloadEdit m-3 mb-4 d-flex" id="buttonsDownloadEdit">        
                <div class="editInformation d-flex border border-dark rounded text-white user-select-none me-2 col-4 justify-content-center text-center" id="editInformation">
                    <span class="material-symbols-outlined mt-2 mb-2 mx-2">edit</span>
                    <p class="textButtonEdit mt-2 mb-2 me-2" id="textButtonEdit"><a class="text-decoration-none text-reset" href='editarPerfil.php?id=<?php echo $dados['id'];?>'>Editar</a></p>
                </div>
                <div class="editInformation d-flex border border-dark rounded text-white user-select-none col-7 justify-content-center text-center" id="editInformation">
                    <span class="material-symbols-outlined mt-2 mb-2 mx-2">groups_2</span>
                    <p class="textButtonEdit mt-2 mb-2 me-2" id="textButtonEdit"><a class="text-decoration-none text-reset" href="cadastroProf.php">Quero me tornar um instrutor</a></p>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'footer.php';?>