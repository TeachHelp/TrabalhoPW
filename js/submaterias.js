/*funcao que envia para outra tela*/
function telaProf(){
    window.location.assign("pgProf.php");
  }
  function sair(){
    var f = "<?php session_destroy(); ?>";
    f;
}