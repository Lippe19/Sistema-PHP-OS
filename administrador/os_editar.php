<?php
//conexao
require_once 'database/bd_conexao.php';

//sessão
session_start();

include_once 'login/seguranca.php';

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tbusuarios WHERE iduser = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

$consulta = "SELECT * FROM tbos";
$con = mysqli_query($connect, $consulta);
$infor = mysqli_fetch_array($con);

$query = "SELECT * FROM tbclientes ORDER BY `idcli` ASC LIMIT 5";
$query_run = mysqli_query($connect, $query);
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>




<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Painel de Controle</h4>

            <div class="row">

                <div class="col-md-12">





                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edição de OS</div>
                        </div>
                        <?php
                        if (isset($_POST['edit_btn_os'])) { //analisa se chegou na página clicando no Submit //se chegou então
                            $id = $_POST['edit_os'];
                            $data = $_POST['edit_data'];
                            $tipo = $_POST['edit_tipo'];
                            $situacao = $_POST['edit_situacao'];

                            $idcli = $_POST['edit_idcli'];
                            $servico = $_POST['edit_servico'];

                            $observacao = $_POST['edit_observacao'];
                            $tecnico = $_POST['edit_tecnico'];
                            $valorOs = $_POST['edit_valor'];

                            echo $id;
                            $query = "SELECT * FROM tbos WHERE os = '$id'";
                            $query_run = mysqli_query($connect, $query);
                            ?>
                            <form method="POST" action="codigo.php" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-6 mb-3">

                                            <div class="card">

                                                <div class="card-body">

                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label class="">N° OS</label>
                                                            <input type="text" class="form-control" name="edit_os" value="<?php echo $id ?>" placeholder="0" readonly>
                                                        </div>




                                                        <div class="form-group col-md-8">
                                                            <label class="">Data</label>
                                                            <input type="text" name="edit_data" class="form-control" placeholder="Data" value="<?php echo $data ?>" readonly>
                                                        </div>



                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="edit_tipo" id="OS" value="OS" <?php
                                                        $valor = @$_POST['edit_tipo'];
                                                        if ($valor == 'OS') {
                                                            echo 'checked';
                                                        }
                                                        ?>>
                                                        <label class="form-check-label">Ordem de Serviço</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="edit_tipo" id="Orçamento" value="Orcamento" <?php
                                                        $valor = @$_POST['edit_tipo'];
                                                        if ($valor == 'Orcamento') {
                                                            echo 'checked';
                                                        }
                                                        ?>>
                                                        <label class="form-check-label">Orçamento</label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Situação</label>
                                                        <select class="form-control" name="edit_situacao" id="exampleFormControlSelect1">
                                                            <option value="">--</option>
                                                            <option value="Servico Aprovado" <?php
                                                            $combo = @$_POST['edit_situacao'];
                                                            if ($combo == 'Servico Aprovado') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>Serviço Aprovado</option>
                                                            <option value="Aguardando Aprovacao" <?php
                                                            $combo = @$_POST['edit_situacao'];
                                                            if ($combo == 'Aguardando Aprovacao') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>Aguardando Aprovação</option>
                                                        </select>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <?php
                                            if (isset($_POST['btn_pesquisar_cli_os'])) {
                                                $pesquisar = $_POST['nome_pesquisa_cli_os'];
                                                $result_msg_contatos = "SELECT * FROM tbclientes WHERE nomecli LIKE '%$pesquisar%' LIMIT 5";
                                                $query_run = mysqli_query($connect, $result_msg_contatos);
                                            }
                                            ?>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">

                                                            <!--<div class="card-title">Lista de Clientes</div>-->

                                                            <!--<form method="POST" action="">-->
                                                            <div class="form-row">
                                                                <div class="col-md-6">
                                                                    <div class="input-group">
                                                                        <label class="col-12 col-form-label">ID do Cliente</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group">
                                                                        <input class="form-control" value="<?php echo $idcli; ?>" type="text" placeholder="id" name="edit_id_cli_os" id="id_cli_os" readonly>
                                                                    </div>
                                                                </div>  
                                                            </div>  
                                                            <!--</form>-->
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Serviço</label>
                                                                <div class="col-sm-10">
                                                                    <textarea name="edit_servico" class="form-control" id="exampleFormControlTextarea1" rows="5"><?php echo $servico; ?></textarea>
                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--            <div class="card">
                                                    <div class="card-body">-->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Observação</label>
                                        <div class="col-sm-10">
                                            <textarea  name="edit_observacao" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $observacao; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Funcionário</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="edit_funcionario" id="exampleFormControlSelect1">
                                                        <?php
                                                            $consulta = "SELECT * FROM tbusuarios";
                                                            $con = mysqli_query($connect, $consulta);
                                                            
                                                            while ($row = mysqli_fetch_assoc($con)) {
                                                                ?>
                                                                <option value="<?php echo $row['usuario'] ?>" 
                                                                    <?php 
                                                                        if ($tecnico == $row['usuario']) {
                                                                            echo 'selected="selected"';
                                                                        } 
                                                                    ?>
                                                                > <?php echo $row['usuario']; ?> </option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Valor</label>
                                                <div class="col-sm-8">
                                                    <input type="text" value="<?php echo $valorOs; ?>" name="edit_valor" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" name="btnEditarOs" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>



                            <?php
                        }
                        ?>









                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
</div>



<?php
include('includes/footer.php');
?>					