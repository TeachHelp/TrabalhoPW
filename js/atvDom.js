function exibirCdAluno(){
    let display= document.getElementById("divAluno").style.display;
    if(display == "none"){
        document.getElementById("divAluno").style.display = 'block';
        document.getElementById("divProf").style.display = 'none';
    }
    else {
        document.getElementById("divAluno").style.display = 'none';
    }
    
}

function exibirCdProf(){
    let display= document.getElementById("divProf").style.display;
    if(display == "none"){
        document.getElementById("divProf").style.display = 'block';
        document.getElementById("divAluno").style.display = 'none';

    }
    else {
        document.getElementById("divProf").style.display = 'none';
    }
    
}

function btnCriarAluno(){
    let nome = prompt("Digite o nome do Aluno:" );
    let divA = document.createElement("div");
    divA.setAttribute('id', 'dvA');
    divA.style.background = '#7ef78e';
    divA.style.maxHeight = 'auto';
    divA.style.maxWidth = 'auto';
    divA.style.border = "solid 1px";
    divA.style.borderRadius = "10px";
    let textoLista = document.createTextNode("Aluno " + nome);
    divA.prepend(textoLista);
    document.getElementById("divAluno").prepend(divA);

}

function btnCriarProf(){
    let nome = prompt("Digite o nome do Professor:" );
    let divP = document.createElement("div");
    divP.setAttribute('id', 'dvP');
    divP.style.background = '#7ef78e';
    divP.style.maxHeight = 'auto';
    divP.style.maxWidth = 'auto';
    divP.style.border = "solid 1px";
    divP.style.borderRadius = "10px";
    let textoLista = document.createTextNode("Professor " + nome);
    divP.prepend(textoLista);
    document.getElementById("divProf").prepend(divP);
}