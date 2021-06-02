<?php

//conexao com banco de dados 
$servername = "localhost"; //127.0.0.1
$username = "root";
$password = "";
$db_name = "inter";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()) :
    echo "Falha na conexão: " . mysqli_connect_error();
endif;