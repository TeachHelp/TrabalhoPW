
/* funcao para alertar o usuario a se cadastrar*/

function alertCadastro(){
    alert("Você precisa se cadastrar primeiro!");
}

/* funcao usada para botoes que ainda nao possuem funcionalidade*/

function alerta(){
    alert("Função Indisponível no momento");
}

/* funcao usada para enviar o usuario para a tela de cadastro */

function telaCadastro(){
    window.location.assign("cadastro.html");
}

/* funcao que autentica se os inputs foram preenchidos e envia o usuario para a pagina principal */

function autentication(){
    let senha = document.getElementById("senha");
    let email = document.getElementById("email");

    let autSenha = document.getElementById("autSenha");
    let autEmail = document.getElementById("autEmail");
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
    }

    /* se os inputs estiverem preenchidos a aux sera verdadeira e o usuario sera enviado para a tela principal*/    

    if(aux){
        window.location.assign("menuBootstrap.html");
    }
    
}