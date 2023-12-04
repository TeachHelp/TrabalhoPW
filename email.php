<?php
    include_once 'header.php'; 
    $email = $dados['email'];
    // O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
    // O return-path deve ser ser o mesmo e-mail do remetente.
    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: $email\r\n"; // remetente
    $headers .= "Return-Path: $email\r\n"; // return-path
    $envio = mail("piteachhelp@gmail.com", "Contato", "Olá gostaria de saber mais sobre o TeachHelp", $headers);
    
    if($envio)
    echo "Mensagem enviada com sucesso";
    else
    echo "A mensagem não pode ser enviada";
?>