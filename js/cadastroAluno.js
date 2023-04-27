function menu(){
    document.getElementById("menuDropdown").classList.toggle("show");
}

function alerta(){
    alert("Função Indisponível no momento");
}

function autentication(){
    let nome = document.getElementById("txtNome");
    let senha = document.getElementById("txtSenha");
    let tel = document.getElementById("txtTel");
    let email = document.getElementById("txtEmail");
    let DtNasc = document.getElementById("txtDtNasc");
    let endereco = document.getElementById("txtEndereco");

    let nomeAviso = document.getElementById("lblNomeAut");
    let senhaAviso = document.getElementById("lblSenhaAut");
    let telAviso = document.getElementById("lblTelAut");
    let emailAviso = document.getElementById("lblEmailAut");
    let enderecoAviso = document.getElementById("lblEndAut");
    let DtNascAviso = document.getElementById("lblDtNascAut");

    /* Nome */
    
    if (nome.value.trim() == ""){
        nome.style.border = "solid 2px";
        nome.style.borderBlockColor = "#ff0000";
        nomeAviso.style.display = "block";
    }
    else{
        nome.style.border = "solid 1px";
        nome.style.borderBlockColor = "#000000";
        nomeAviso.style.display = "none";
    }

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

    /* Telefone */

    if (tel.value.trim() == ""){
        tel.style.border = "solid 2px";
        tel.style.borderBlockColor = "#ff0000";
        telAviso.style.display = "block";
    }
    else{
        tel.style.border = "solid 1px";
        tel.style.borderBlockColor = "#000000";
        telAviso.style.display = "none";
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
    
    /* Endereco */

    if (endereco.value.trim() == ""){
        endereco.style.border = "solid 2px";
        endereco.style.borderBlockColor = "#ff0000";
        enderecoAviso.style.display = "block";
    }
    else{
        endereco.style.border = "solid 1px";
        endereco.style.borderBlockColor = "#000000";
        enderecoAviso.style.display = "none";
    }

    /* Data de Nascimento */
    
    if (DtNasc.value.trim() == ""){
        //DtNasc.style.border = "solid 2px";
        DtNasc.style.borderBlockColor = "#ff0000";
        DtNascAviso.style.display = "block";
    }
    else{
        //DtNasc.style.border = "solid 1px";
        DtNasc.style.borderBlockColor = "#000000";
        DtNascAviso.style.display = "none";
    }
    
}