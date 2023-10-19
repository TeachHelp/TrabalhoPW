<?php 
session_unset();
session_destroy();
session_write_close();
$_SESSION['usuario'] = [];
if(empty($_SESSION['usuario'])){
    header('Location: ./index.php');
}
?>