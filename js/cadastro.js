/* funcao para alertar o usuario a se cadastrar*/

function alertCadastro(){
    alert("Você precisa se cadastrar primeiro!");
}

/* funcao usada para botoes que ainda nao possuem funcionalidade*/

function alerta(){
    alert("Função Indisponível no momento");
}

/* funcao usada para enviar o usuario para a tela de login */

function telaLogin(){
    window.location.assign("login.html");
}

/* funcao que autentica se os inputs foram preenchidos e envia o usuario para a pagina principal */

function autentication(){
    let senha = document.getElementById("senha");
    let email = document.getElementById("email");
    let nome = document.getElementById("nome");
    let endereco = document.getElementById("endereco");
    let dataNasc = document.getElementById("dataNasc");

    let autSenha = document.getElementById("autSenha");
    let autEmail = document.getElementById("autEmail");
    let autNome = document.getElementById("autNome");
    let autEndereco = document.getElementById("autEndereco");
    let autDataNasc = document.getElementById("autDtNasc");
    let aux = false;

    /* Senha */

    if (senha.value.trim() == ""){
        autSenha.style.display = "block";
        aux = false;
    }
    else{
        autSenha.style.display = "none";
        aux = true;
    }

    /* Email */

    if (email.value.trim() == ""){
        autEmail.style.display = "block";
        aux = false;
    }
    else{
        autEmail.style.display = "none";
        aux = true;
    }

    /* Nome */

    if(nome.value.trim() == ""){
        autNome.style.display = "block";
        aux = false
    }
    else{
        autNome.style.display = "none";
        aux = true;
    }

    /* Endereco */

    if(endereco.value.trim() == ""){
        autEndereco.style.display = "block";
        aux = false
    }
    else{
        autEndereco.style.display = "none";
        aux = true;
    }

    /* Data de Nascimento */

    if(dataNasc.value.trim() == ""){
        autDataNasc.style.display = "block";
        aux = false
    }
    else{
        autDataNasc.style.display = "none";
    }

    /* se os inputs estiverem preenchidos a aux sera verdadeira e o usuario sera enviado para a tela principal*/    

    if(aux){
        window.location.assign("menuBootstrap.html");
    }
    
}