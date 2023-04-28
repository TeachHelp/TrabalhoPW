const btnMenu = document.getElementById('btnMenu');
const materiasLista = document.getElementById('materiasLista')

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