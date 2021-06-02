<?php
//conexao
require_once 'database/bd_conexao.php';

//sessão
session_start();

include_once 'login/seguranca.php';




$id = filter_input(INPUT_GET, 'os', FILTER_SANITIZE_NUMBER_INT);
if (!empty($id)) {
    $result_usuario = "DELETE FROM tbos WHERE os='$id'";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
    if (mysqli_affected_rows($connect)) {
        $_SESSION['success'] = "Ordem de Servico Apagada";
        header("Location: ./painel.php?p=os");
    } else {

        $_SESSION['status'] = "Ordem de Servico Não foi Apagada";
        header("Location: ./painel.php?p=os");
    }
} else {
        $_SESSION['status'] = "Necessário selecionar uma Ordem de Servico";
        header("Location: ./painel.php?p=os");
}
?>					