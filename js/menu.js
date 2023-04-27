const btnMenu = document.getElementById('btnMenu');

function mostraLista(){
    const divOpcoes = document.getElementById('opcoes');
    if(divOpcoes.style.display == 'block'){
        divOpcoes.style.display = 'none';
    } else{
        divOpcoes.style.display = 'block';
    }
}