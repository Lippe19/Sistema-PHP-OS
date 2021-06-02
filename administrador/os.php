<?php
//conexao
require_once 'database/bd_conexao.php';

//$query = "SELECT * FROM tbusuarios ORDER BY `iduser` ASC";
//$query_run = mysqli_query($connect, $query);

$query = "SELECT * FROM tbos ORDER BY `os` ASC";
$query_run = mysqli_query($connect, $query);

//mysqli_close($connect);
?>


<h4 class="page-title">Ordens de Serviços</h4>



<?php
if (isset($_POST['btn_pesquisar'])) {
    $pesquisar = $_POST['nome_pesquisa'];
    //Selecionar  os itens da p�gina
    $result_msg_contatos = "SELECT * FROM tbos WHERE tecnico LIKE '%$pesquisar%' LIMIT 30";
    $query_run = mysqli_query($connect, $result_msg_contatos);
}
?>
<div class="row">
    <div class="col-md-12 text-center">
        <form method="POST" action="">
            <div class="form-group row">
                <div class="col-sm-4 col-md-4 col-4">
                    <p class="h4">Nome</p>
                </div>
                <div class="col-sm-8 col-md-8 col-8">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Nome do Funcionário" name="nome_pesquisa">
                        <div class="input-group-append">
                            <button type="submit" name="btn_pesquisar" class="btn btn-info">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<hr>








<div class="row">
    <div class="col-md-12">
        <?php
        if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
            echo '<div class="alert alert-success" role="alert">' . $_SESSION['success'] . '</div>';
            unset($_SESSION['success']);
        }

        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
            echo '<div class="alert alert-danger" role="alert"> ' . $_SESSION['status'] . ' </div>';
            unset($_SESSION['status']);
        } /* */
        ?>
    </div>
</div>



<a href="os_adicionar.php"><button type="button" class="btn btn-primary my-3">
        Adicionar Ordem de Serviço<i class="fas fa-user-plus ml-3"></i>
    </button></a>











<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Lista de Ordens de Serviços</div>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <?php
//                    $query = "SELECT * FROM tbos ORDER BY `os` ASC";
//                    $query_run = mysqli_query($connect, $query);
//
//                    if (mysqli_num_rows($query_run) > 0) {
                    ?>

                    <table class="table table-hover"><!---->
                        <thead>
                            <tr class="text-center">
                                <!--<th scope="col"><h5 class="pt-3"><i class="fas fa-trash-alt"></i></h5></th>-->
                                <th scope="col">ID</th>
                                <th scope="col">Data</th>
                                <th scope="col">Tipo</th>
                                <!--<th scope="col">Servico</th>-->
                                <th scope="col">Situacao</th>
                                <!--<th scope="col">Observacao</th>-->
                                <th scope="col">Valor</th>
                                <th scope="col">Funcionario</th>
                                <th scope="col">ID Cli.</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Apagar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($query_run)) { ?>
                                <tr class="text-center">
    <!--                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php //echo $row['os'];  ?>"  <?php //echo $row['visible'] == 1 ? "checked" : ""  ?>>
                                        </div>
                                    </td>-->
                                    <td><?php echo $row['os']; ?></td>
                                    <td><?php echo $row['data_os']; ?></td>
                                    <td><?php echo $row['tipo']; ?></td>
                                    <!--<td><?php // echo $row['servico'];  ?></td>-->
                                    <td><?php echo $row['situacao']; ?></td>
                                    <!--<td><?php // echo $row['observacao'];  ?></td>-->
                                    <td><?php echo $row['valor']; ?></td>
                                    <td><?php echo $row['tecnico']; ?></td>
                                    <td><?php echo $row['idcli']; ?></td>
                                    <!--<td><?php // echo $row['sexo'];  ?></td>-->
                                    <td>
                                        <form action="os_editar.php" method="post"><!---->
                                            <input type="hidden" name="edit_os" value="<?php echo $row['os']; ?>">
                                            <input type="hidden" name="edit_data" value="<?php echo $row['data_os']; ?>">
                                            <input type="hidden" name="edit_tipo" value="<?php echo $row['tipo']; ?>">
                                            <input type="hidden" name="edit_servico" value="<?php echo $row['servico']; ?>">
                                            <input type="hidden" name="edit_situacao" value="<?php echo $row['situacao']; ?>">
                                            <input type="hidden" name="edit_observacao" value="<?php echo $row['observacao']; ?>">
                                            <input type="hidden" name="edit_valor" value="<?php echo $row['valor']; ?>">
                                            <input type="hidden" name="edit_tecnico" value="<?php echo $row['tecnico']; ?>">
                                            <input type="hidden" name="edit_idcli" value="<?php echo $row['idcli']; ?>">
                                            <button type="submit" name="edit_btn_os" class="btn btn-success">Editar<i class="fas fa-user-edit ml-3"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="os_apagar.php?os=<?php echo $row['os']; ?>" data-confirm="Tem certeza de que deseja excluir?" class="btn btn-danger">Apagar<i class="fas fa-user-times ml-3"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php
//                    } else {
//                        echo "Não deu certo";
//                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>