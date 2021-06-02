<?php
//conexao
require_once 'database/bd_conexao.php';

//Recuperar o valor da palavra
$cursos = $_POST['palavra'];

//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
$cursos = "SELECT * FROM tbclientes WHERE nomecli LIKE '%$cursos%'";
$resultado_cursos = mysqli_query($connect, $cursos);

if (mysqli_num_rows($resultado_cursos) <= 0) {
    echo "Nenhum nome encontrado...";
} else {
    while ($rows = mysqli_fetch_assoc($resultado_cursos)) {
//        echo "<td>" . $rows['idcli'];
//        echo $rows['idcli']. $rows['nomecli'] .$rows['fonecli'];
//        echo "<tr><td>" . $rows['idcli'] . "</td><td>" . $rows['nomecli'] . "</td><td>" . $rows['fonecli'] . "</td></tr>";
//        echo "<li>" . $rows['idcli'] . "</li>";
        
//        for ($i = 1; $i < $rows ; $i++) {
//            echo "<td>" . $rows['idcli'] . "</td><td>" . $rows['nomecli'] . "</td><td>" . $rows['fonecli'] . "</td>";
//        }
    }
}
?>