function alerta(){
    alert("Função Indisponível no momento");
  }
  
  function mostraLogin(){
    document.getElementById("perfil_principal").classList.toggle("show");
  }
  
  function telaSubmateria(){
    window.location.assign("submaterias.php");
  }
  function sair(){
    var f = "<?php session_destroy(); ?>";
    f;
}