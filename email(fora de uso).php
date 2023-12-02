<?php
    $email = $dados['email'];
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $email;
    $to = "piteachhelp@gmail.com";
    $subject = "Contato";
    $message = "Gostaria de saber mais sobre as aulas";
    $headers = "De:" . $from;
    mail($to,$subject,$message, $headers);
    header('Location: ./perfilAluno.php');
?>