<?php

//conexao
require_once 'database/bd_conexao.php';

//sessão
session_start();

include_once 'login/seguranca.php';


$id = filter_input(INPUT_GET, 'iduser', FILTER_SANITIZE_NUMBER_INT);
if (!empty($id)) {
    $result_usuario = "DELETE FROM tbusuarios WHERE iduser='$id'";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
    if (mysqli_affected_rows($connect)) {
        $_SESSION['success'] = "Usuário Apagado";
        header("Location: ./painel.php?p=usuarios");
    } else {

        $_SESSION['status'] = "Usuário Não foi Apagado";
        header("Location: ./painel.php?p=usuarios");
    }
} else {
        $_SESSION['status'] = "Necessário selecionar um usuário";
        header("Location: ./painel.php?p=usuarios");
}
?>					