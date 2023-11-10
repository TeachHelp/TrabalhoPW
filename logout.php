<?php 
session_unset();
if(empty($_SESSION['usuario'])){
    header('Location: ./index.php');
}
?>