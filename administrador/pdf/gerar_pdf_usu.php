<?php
session_start();
require_once '../database/bd_conexao.php';
include_once '../login/seguranca.php';


$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td colspan="7" style="text-align: center;">Planilha de Usuários</td>';
$html .= '</tr>';

$html .= '<thead>';
$html .= '<tr>';
$html .= '<td><b>ID</b></td>';
$html .= '<td><b>Usuário</b></td>';
$html .= '<td><b>Telefone</b></td>';
$html .= '<td><b>Login</b></td>';
$html .= '<td><b>Senha</b></td>';
$html .= '<td><b>Perfil</b></td>';
$html .= '<td><b>Foto</b></td>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';

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

$html .= '</tbody>';
$html .= '</table';







//referenciar o DomPDF com namespace
use Dompdf\Dompdf;

// include autoloader
require_once("../dompdf/autoload.inc.php");

//Criando a Instancia
$dompdf = new DOMPDF();

// Carrega seu HTML
$dompdf->load_html('<h1 style="text-align: center;">Relatório de Usuários</h1>' . $html . '');

//Renderizar o html
$dompdf->render();

//Exibibir a p�gina
$dompdf->stream(
    "relatorio_usuarios.pdf", array(
        "Attachment" => false //Para realizar o download somente alterar para true
    )
);
?>