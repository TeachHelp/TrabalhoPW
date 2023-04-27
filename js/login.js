function menu(){
    document.getElementById("menuDropdown").classList.toggle("show");
}

function telaProf(){
    window.location.assign("cadastroProf.html");
}

function telaAluno(){
    window.location.assign("cadastroAluno.html");
}

function alerta(){
    alert("Função Indisponível no momento");
}

function divEscolha(){
    alert("Você deseja se cadastrar como?");
}

function autentication(){
    let senha = document.getElementById("txtSenha");
    let email = document.getElementById("txtEmail");

    let senhaAviso = document.getElementById("lblSenhaAut");
    let emailAviso = document.getElementById("lblEmailAut");

    /* Senha */

    if (senha.value.trim() == ""){
        senha.style.border = "solid 2px";
        senha.style.borderBlockColor = "#ff0000";
        senhaAviso.style.display = "block";
    }
    else{
        senha.style.border = "solid 1px";
        senha.style.borderBlockColor = "#000000";
        senhaAviso.style.display = "none";
    }

    /* Email */

    if (email.value.trim() == ""){
        email.style.border = "solid 2px";
        email.style.borderBlockColor = "#ff0000";
        emailAviso.style.display = "block";
    }
    else{
        email.style.border = "solid 1px";
        email.style.borderBlockColor = "#000000";
        emailAviso.style.display = "none";
    }

    
}