<?php
//conexao
require_once 'database/bd_conexao.php';

//sessÃ£o
session_start();

include_once 'login/seguranca.php';

//verificaÃ§Ã£o
//if (!isset($_SESSION['logado'])):
//    header('Location: login/login.php');
//endif;
//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tbusuarios WHERE iduser = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
//mysqli_close($connect);
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>
<?php
include('includes/footer.php');
?>