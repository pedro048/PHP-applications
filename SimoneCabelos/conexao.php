<?php

$hostname = "localhost";
$use = "root";
$password = "";
$database = "salao";
$conexao = mysqli_connect($hostname, $use, $password, $database);

if(!$conexao){
	echo "Falha na conexao com BD";
}

?>