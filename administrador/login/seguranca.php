<?php 
ob_start();

if (($_SESSION['id_usuario'] == "") || ($_SESSION['login_usuario'] == "") || ($_SESSION['senha_usuario'] == "")){
    unset($_SESSION['id_usuario'],$_SESSION['login_usuario'],$_SESSION['senha_usuario']);
    $_SESSION['loginErro'] = "área restrita para usuários cadastrados";
    header('Location: login/login.php');
}
/*if(session_start() === PHP_SESSION_NONE){
    session_start();
}
if (empty($_SESSION['id_usuario']) || empty($_SESSION['login_usuario']) || empty($_SESSION['senha_usuario'])){
    //unset($_SESSION['id_usuario'],$_SESSION['login_usuario'],$_SESSION['senha_usuario']);
    $_SESSION['loginErro'] = "área restrita para usuários cadastrados";
    header('Location: login/login.php');
}*/

?>