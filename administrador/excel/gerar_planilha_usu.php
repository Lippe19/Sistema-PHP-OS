<?php
session_start();
require_once '../database/bd_conexao.php';
include_once '../login/seguranca.php';
//header("Location: painel.php");

// Definimos o nome do arquivo que será exportado
$arquivo = 'planilha_usuarios.xls';

// Criamos uma tabela HTML com o formato da planilha
$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td colspan="7" style="text-align: center;">Planilha de Usuários</td>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td><b>ID</b></td>';
$html .= '<td><b>Usuário</b></td>';
$html .= '<td><b>Telefone</b></td>';
$html .= '<td><b>Login</b></td>';
$html .= '<td><b>Senha</b></td>';
$html .= '<td><b>Perfil</b></td>';
$html .= '<td><b>Foto</b></td>';
$html .= '</tr>';

//Selecionar todos os itens da tabela 
$sql = "SELECT * FROM tbusuarios";
$query = mysqli_query($connect, $sql);

while ($row = mysqli_fetch_assoc($query)) {
    $html .= '<tr>';
    $html .= '<td>' . $row["iduser"] . '</td>';
    $html .= '<td>' . $row["usuario"] . '</td>';
    $html .= '<td>' . $row["fone"] . '</td>';
    $html .= '<td>' . $row["login"] . '</td>';
    $html .= '<td>' . $row["senha"] . '</td>';
    $html .= '<td>' . $row["perfil"] . '</td>';
    $html .= '<td>' . $row["nomefoto"] . '</td>';
    $html .= '</tr>';
    ;
}
// Configurações header para forçar o download
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-type: application/x-msexcel");
header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
header("Content-Description: PHP Generated Data");
// Envia o conteúdo do arquivo
echo $html;
exit;
?>