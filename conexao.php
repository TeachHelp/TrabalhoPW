<?php
//Conexão com banco de dados
$hostname = "sql303.infinityfree.com"; //endereço do servidor
$username="if0_35400743";
$password="46fZd3izCXd";
$db_name="if0_35400743_Teachhelp";

//pdo - somente orientado objeto
$connect =mysqli_connect($hostname,$username,$password,$db_name);

//codifica com o caracteres ao manipular dados do banco de dados
//mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Falha na conexão: ". mysqli_connect_error();
endif;
?>