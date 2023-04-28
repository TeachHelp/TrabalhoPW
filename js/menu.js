const btnMenu = document.getElementById('btnMenu');
const materiasLista = document.getElementById('materiasLista')
perfil_principal = document.querySelector("#perfil_principal");
perfil_login = document.querySelector("#perfil_login");
perfil_cadastro = document.querySelector("#perfil_cadastro");

perfil_principal.addEventListener("click",mostraLogin);


/*

function mostraLista(){
    var toggler = document.getElementsByClassName("caret");
    var i;
    
    for (i = 0; i < toggler.length; i++) {
      toggler[i].addEventListener("click", function() {
        this.parentElement.querySelector(".nested").classList.toggle("active");
        this.classList.toggle("caret-down");
      });
    }
}

function mostraListaMaterias(){
    // let divOpcoesLista = document.getElementById('opcoesLista');
    // let divOpcoes = document.getElementById('opcoes');
    // divOpcoes.style.display = 'block';     
    // divOpcoesLista.style.visibility = "block";

    // alert(divOpcoesLista.style.display);


    // if(divOpcoesLista.style.display == 'block'){
    //     divOpcoesLista.style.display = 'none';
    //     alert("entrei");
    // } else{
    //     divOpcoes.style.display = 'block';     
        
    //     divOpcoesLista.style.display = 'block';
    //     alert(  divOpcoes.style.display );
    //     alert("entrei1");
    // }
     
    // alert(divOpcoesLista.style.display);

}

function mostraLogin(){
  if(perfil_login.style.display == 'none'){
    perfil_login.style.display = 'block';
}else{
  perfil_login.style.display = 'none';
}
*/

function mostraLogin(){
  document.getElementById("perfil_principal").classList.toggle("show");
}