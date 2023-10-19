function sair(){
    var f = "<?php session_unset(); session_destroy(); ?>";
    f;
    window.location.assign("index.php");
}