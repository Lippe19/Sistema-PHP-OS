<?php  
//encerrando a sessão 
session_start();
unset($_SESSION['id_usuario'],$_SESSION['login_usuario'],$_SESSION['senha_usuario']);
session_destroy();
header('Location: ../../index.php');