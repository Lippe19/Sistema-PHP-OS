<?php
//conexao
require_once 'database/bd_conexao.php';

//sessão
session_start();

include_once 'login/seguranca.php';




$id = filter_input(INPUT_GET, 'idcli', FILTER_SANITIZE_NUMBER_INT);
if (!empty($id)) {
    $result_usuario = "DELETE FROM tbclientes WHERE idcli='$id'";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
    if (mysqli_affected_rows($connect)) {
        $_SESSION['success'] = "Cliente Apagado";
        header("Location: ./painel.php?p=clientes");
    } else {

        $_SESSION['status'] = "Cliente Não foi Apagado";
        header("Location: ./painel.php?p=clientes");
    }
} else {
        $_SESSION['status'] = "Necessário selecionar um Cliente";
        header("Location: ./painel.php?p=clientes");
}
?>					