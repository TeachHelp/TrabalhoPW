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
    window.location.assign("index.php");
}
function sair(){
    var f = "<?php session_destroy(); ?>";
    f;
}