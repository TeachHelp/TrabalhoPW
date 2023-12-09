<?php include_once 'header.php'; 

if(isset($_GET['id'])):
	$id_prof =mysqli_escape_string($connect, $_GET['id']);
	$sql="SELECT * FROM alunos WHERE id =  '$id_prof'";
	$resultado = mysqli_query($connect, $sql);
	$dados_prof = mysqli_fetch_array($resultado);
endif;

?>
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link href="css/perfilProf.css" rel="stylesheet">
    <!--Criação da classe container com display flex para que as próximas divs fiquem lado a lado e justify-content-center para que as divs fiquem centralizadas-->
    <div class="container mt-5 d-flex justify-content-center">
        <!--Criação da div left ocupando colunas variadas da div container de acordo com o dispositivo utilizado, texto centralizado e branco-->
        <div class="left col-11 col-sm-11 col-md-11 col-lg-3 text-center text-white shadow-lg">
            <!--Criação de imagem com classe img-fluid para responsividade, bordas arredondadas, margin automático, display block, margin top 4 e margin botton 4-->
            <?php echo '<img class="imgPerfil" src= " '.$dados_prof['foto'].' "/>';?> 
            <!--Criação de espaço h4 para inserção de nome-->
            <h4 class="px-4"><?php echo $dados_prof['nome'];?></h4>
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
                        <p><?php echo $dados_prof['email'];?></p>
                    </div>
                    <div class="data col-sm m-1">
                        <h4>
                            <span class="material-symbols-outlined rounded-circle bg-primary p-1 text-white" id="icon">
                                home_pin
                            </span>
                            <span class="text">Endereço</span>
                        </h4>
                        <p><?php echo $dados_prof['endereco'];?></p>
                    </div>
                </div>
            </div>
            <!--Criação do local para inserção de informações do instrutor tanto pessoais como horário disponíveis para aula-->
            <div class="available">
                <!--Criação de título h3 Projetos com borda apenas abaixo, mergin igual a 3 e texto sempre maiúsculo-->
                <h3 class="border border-top-0 border-end-0 border-start-0 m-3 text-uppercase"></h3>
                <!--Criação do local onde serão adicionadas as informações sobre formação do instrutor, gostos, projetos, medalhas, etc-->
                <div class="project_data" id="project_data">
                    <div class="data m-3">
                        <!--Criação de título h4 Formação-->
                        <h4>Formação</h4>
                        <!--Criação de parágrafo com informações sobre o instrutor-->
                        <p><?php echo $dados_prof['descricao'];?></p>
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
                <div class="downloadResume d-flex border border-dark rounded text-white user-select-none col-6 justify-content-center text-center" id="downloadResume">
                    <span class="material-symbols-outlined mt-2 mb-2 mx-2" id="uploadButton">upload</span>
                    <p class="uploadText mt-2 mb-2 me-2" id="uploadText"><a class="text-decoration-none text-reset" href="<?php echo $dadosProf['curriculo'];?>">Visualizar Currículo</a></p>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'footer.php';?>