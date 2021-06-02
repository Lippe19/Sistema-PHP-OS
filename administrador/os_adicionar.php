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

$query = "SELECT * FROM tbos ORDER BY `os` ASC";
$query_run = mysqli_query($connect, $query);

$query = "SELECT * FROM tbclientes ORDER BY `idcli` ASC"; // LIMIT 5
$query_run = mysqli_query($connect, $query);

//
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>




<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Painel de Controle</h4>




            <div class="card">
                <form method="POST" action="codigo.php" class="was-validated" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6 mb-3">

                                <div class="card">

                                    <div class="card-body">

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label class="">N° OS</label>
                                                <input type="text" class="form-control" placeholder="0" readonly>
                                            </div>




                                            <div class="form-group col-md-8">
                                                <label class="">Data</label>
                                                <input type="text" name="data" class="form-control" placeholder="Data" value="<?php echo date('Y-m-d H:i:s') ?>" readonly>
                                            </div>



                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipo" id="OS" value="OS">
                                            <label class="form-check-label">Ordem de Serviço</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tipo" id="Orçamento" value="Orcamento">
                                            <label class="form-check-label">Orçamento</label>
                                        </div>

                                        <div class="form-group">
                                            <label>Situação</label>
                                            <select class="form-control" name="situacao" id="exampleFormControlSelect1">
                                                <option>--</option>
                                                <option value="Servico Aprovado">Serviço Aprovado</option>
                                                <option value="Aguardando Aprovacao">Aguardando Aprovação</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <?php
//                            if (isset($_POST['btn_pesquisar_cli_os'])) {
//                                $pesquisar = $_POST['nome_pesquisa_cli_os'];
//                                $result_msg_contatos = "SELECT * FROM tbclientes WHERE nomecli LIKE '%$pesquisar%' LIMIT 5";
//                                $query_run = mysqli_query($connect, $result_msg_contatos);
//                            }
                                ?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">


                                            <!--<form method="POST" action="codigo.php<?php // echo $_SERVER['PHP_SELF'];   ?>">-->
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="card-title mb-3">Lista de Clientes</div>
                                                        <!--                                                        <div class="input-group">
                                                                                                                    <input class="form-control" type="text" placeholder="Nome do cliente" name="nome_pesquisa_cli_os">
                                                                                                                    <div class="input-group-append">
                                                                                                                        <button type="submit" name="btn_pesquisar_cli_os" class="btn btn-info">
                                                                                                                            <i class="fas fa-search"></i>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                </div>-->
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <input class="form-control" type="text" placeholder="id do cliente" name="id_cli_os" id="id_cli_os" readonly>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <!--</form>-->

                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover" id="table">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th scope="col">id</th>
                                                                <th scope="col">Nome</th>
                                                                <th scope="col">Telefone</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php while ($row = mysqli_fetch_assoc($query_run)) { ?>
                                                                <tr class="text-center">
                                                                    <?php $id = $row["idcli"]; ?>

                                                                    <td><?php echo $row['idcli']; ?></td>
                                                                    <td><?php echo $row['nomecli']; ?></td>
                                                                    <td><?php echo $row['fonecli']; ?></td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    var table = document.getElementById('table');
                                    for (var i = 1; i < table.rows.length; i++) {
                                        table.rows[i].onclick = function () {
                                            document.getElementById("id_cli_os").value = this.cells[0].innerHTML;
                                        };
                                    }
                                </script>
                            </div>
                        </div>

                        <!--            <div class="card">
                                        <div class="card-body">-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Serviço</label>
                            <div class="col-sm-10">
                                <input type="text" name="servico" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Observação</label>
                            <div class="col-sm-10">
                                <textarea  name="observacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Funcionário</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="funcionario" id="exampleFormControlSelect1">
                                            <option>Selecione</option>
                                            <?php
                                            $consulta = "SELECT * FROM tbusuarios";
                                            $con = mysqli_query($connect, $consulta);
                                            //$infor = mysqli_fetch_array($con);
                                            while ($row = mysqli_fetch_assoc($con)) {
                                                ?>
                                                <option value="<?php echo $row['usuario'] ?>"><?php echo $row['usuario'] ?></option>
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
                                        <input type="text" name="valor" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" name="btnSalvarOs" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>





        </div>
    </div>
</div>




<?php
include('includes/footer.php');
?>					