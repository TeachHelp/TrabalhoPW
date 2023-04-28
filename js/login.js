/* funcao que permite a visualzacao da div com as opcoes de perfil e cadastre-se */

function mostraLogin(){
    document.getElementById("perfil_principal").classList.toggle("show");
  }

/* funcao que envia o usuario a tela de cadastro de professor */

function telaProf(){
    window.location.assign("cadastroProf.html");
}

/* funcao que envia o usuario a tela de cadastro de aluno */

function telaAluno(){
    window.location.assign("cadastroAluno.html");
}

/* funcao para alertar o usuario a se cadastrar*/

function alertCadastro(){
    alert("Você precisa se cadastrar primeiro!");
}

/* funcao usada para botoes que ainda nao possuem funcionalidade*/

function alerta(){
    alert("Função Indisponível no momento");
}

/* funcao que permite a visualizacao das opcoes de cadastro */

function divEscolha(){
    let div = document.getElementById("escolha");
    let tela = document.getElementById("divMaster");
    div.style.display = 'block';
    tela.style.filter = 'blur(5px)';

}

/* funcao que autentica se os inputs foram preenchidos e envia o usuario para a pagina principal */

function autentication(){
    let senha = document.getElementById("txtSenha");
    let email = document.getElementById("txtEmail");

    let senhaAviso = document.getElementById("lblSenhaAut");
    let emailAviso = document.getElementById("lblEmailAut");
    let aux = false;

    /* Senha */

    if (senha.value.trim() == ""){
        senha.style.border = "solid 2px";
        senha.style.borderBlockColor = "#ff0000";
        senhaAviso.style.display = "block";
        aux = false;
    }
    else{
        senha.style.border = "solid 1px";
        senha.style.borderBlockColor = "#000000";
        senhaAviso.style.display = "none";
        aux = true;
    }

    /* Email */

    if (email.value.trim() == ""){
        email.style.border = "solid 2px";
        email.style.borderBlockColor = "#ff0000";
        emailAviso.style.display = "block";
        aux = false;
    }
    else{
        email.style.border = "solid 1px";
        email.style.borderBlockColor = "#000000";
        emailAviso.style.display = "none";
    }

    /* se os inputs estiverem preenchidos a aux sera verdadeira e o usuario sera enviado para a tela principal*/    

    if(aux){
        window.location.assign("menu.html");
    }
    
}