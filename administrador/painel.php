<?php 
//conexao
require_once 'database/bd_conexao.php';

//sessÃ£o
session_start();

include_once 'login/seguranca.php';

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
 


<div class="main-panel">
    <div class="content">
        <div class="container-fluid">



            <!--AQUI--> 
            <?php
            $valor = @$_GET['p'];
            if ($valor == 'clientes') {
                require_once 'clientes.php';
            } elseif ($valor == 'usuarios') {
                require_once 'usuarios.php';
            } elseif ($valor == 'os') {
                require_once 'os.php';
            } elseif ($valor == 'perfil') {
                require_once 'perfil.php';
            }
            //elseif ($valor == 'pedidos') { require_once 'pedidos.php';}
            else {
                ?>

                <h4 class="page-title">Dashboard</h4>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-stats card-warning">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-user-friends"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Total de clientes:</p>
                                            <h4 class="card-title">
                                                <?php
                                                $consulta = "SELECT idcli FROM tbclientes ORDER BY idcli"; //ASC
                                                $con = mysqli_query($connect, $consulta);
                                                $qtdcli = mysqli_num_rows($con);

                                                echo $qtdcli;
                                                ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-success">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Total de funcionários:</p>
                                            <h4 class="card-title">
                                                <?php
                                                $consulta = "SELECT iduser FROM tbusuarios ORDER BY iduser"; //ASC
                                                $con = mysqli_query($connect, $consulta);
                                                $qtduser = mysqli_num_rows($con);

                                                echo $qtduser;
                                                ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-danger">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-dolly"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Total de O. S.:</p>
                                            <h4 class="card-title">
                                                <?php
                                                $consulta = "SELECT os FROM tbos ORDER BY os"; //ASC
                                                $con = mysqli_query($connect, $consulta);
                                                $qtdos = mysqli_num_rows($con);

                                                echo $qtdos;
                                                ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats card-primary">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-database"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Total de Registros:</p>
                                            <h4 class="card-title">
                                                <?php
                                                echo $qtduser + $qtdos + $qtdcli;
                                                ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>










                <div class="row row-card-no-pd align-items-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <p class="h5">Backup</p>
                            </div>
                            <div class="card-body">
                                <p class="fw-bold mt-1"></p>
                                <h4><b></b></h4>
                                <?php
                                if (isset($_SESSION['msg'])) {
                                    echo "<p>" . $_SESSION['msg'] . "</p>";
                                    unset($_SESSION['msg']);
                                }
                                ?>
                                <form method="POST" action="backup_database/processa.php" enctype="multipart/form-data">
                                    <input type="hidden" name="servidor" value="localhost"><br>
                                    <input type="hidden" name="usuario" value="root"><br>
                                    <input type="hidden" name="senha" value=""><br>
                                    <input type="hidden" name="dbname" value="inter"><br>
                                    <button type="submit" value="Exportar" class="btn btn-primary btn-full text-left mt-3 mb-3 text-center">Exportar Banco de Dados<i class="ml-3 fas fa-download"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <p class="h5">Probabilidades</p>
                            </div>
                            <div class="card-body">
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">Porcentagem de Servi&ccedilos Aprovados</span>
                                        <span class="text-muted fw-bold">
                                            <?php
                                            $consulta = "select * from tbos where situacao = 'Servico Aprovado'"; //ASC
                                            $con = mysqli_query($connect, $consulta);
                                            $qtdserv_aprovados = mysqli_num_rows($con);

                                            $consulta = "SELECT situacao FROM tbos"; //ASC
                                            $con = mysqli_query($connect, $consulta);
                                            $qtdos = mysqli_num_rows($con);

                                            $v1 = $qtdserv_aprovados * 100;
                                            $porcentagem = $v1 / $qtdos;
                                            $porcentagem_inteiro = round($porcentagem, 0);

                                            echo $porcentagem_inteiro . "%"; //12
                                            ?>
                                        </span>
                                    </div>
                                    <div class="progress mb-2" style="height: 7px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $porcentagem_inteiro . "%"; ?>" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="<?php echo $porcentagem_inteiro . "%"; ?>"></div>
                                    </div>
                                </div>
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">Porcentagem de valores maiores que R$ 90,00</span>
                                        <span class="text-muted fw-bold"> 
                                            <?php
                                            $consulta = "select * from tbos where valor >= 90"; //ASC
                                            $con = mysqli_query($connect, $consulta);
                                            $qtdserv_maior_noventa = mysqli_num_rows($con);

                                            $consulta = "SELECT valor FROM tbos"; //ASC
                                            $con = mysqli_query($connect, $consulta);
                                            $qtdvalor = mysqli_num_rows($con);

                                            $v1 = $qtdserv_maior_noventa * 100;
                                            $porcentagem = $v1 / $qtdvalor;
                                            $porcentagem_inteiro = round($porcentagem, 0);

                                            echo $porcentagem_inteiro . "%"; //12
                                            ?>
                                        </span>
                                    </div>
                                    <div class="progress mb-2" style="height: 7px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $porcentagem_inteiro . "%"; ?>" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="<?php echo $porcentagem_inteiro . "%"; ?>"></div>
                                    </div>
                                </div>
                                <div class="progress-card">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span class="text-muted">Porcentagem de clientes Masculinos</span>
                                        <span class="text-muted fw-bold">
                                            <?php
                                            $consulta = "select * from tbclientes where sexo = 'M'"; //ASC
                                            $con = mysqli_query($connect, $consulta);
                                            $qtdcliM = mysqli_num_rows($con);

                                            $consulta = "SELECT sexo FROM tbclientes"; //ASC
                                            $con = mysqli_query($connect, $consulta);
                                            $qtdsexo = mysqli_num_rows($con);

                                            $v1 = $qtdcliM * 100;
                                            $porcentagem = $v1 / $qtdsexo;
                                            $porcentagem_inteiro = round($porcentagem, 0);

                                            echo $porcentagem_inteiro . "%"; //12
                                            ?>
                                        </span>
                                    </div>
                                    <div class="progress mb-2" style="height: 7px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $porcentagem_inteiro . "%"; ?>" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="<?php echo $porcentagem_inteiro . "%"; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats">
                            <div class="card-body">
                                <p class="mt-1 h5">Estat&iacutesticas</p>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="fas fa-hand-holding-usd text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Lucro</p>
                                            <h4 class="card-title">
                                                <?php
                                                $consulta = "SELECT sum(valor) FROM tbos WHERE situacao = 'Servico Aprovado'"; //SUM - Soma
                                                $con = mysqli_query($connect, $consulta);
                                                $var = mysqli_num_rows($con);

                                                while ($var = mysqli_fetch_array($con)) {
                                                    echo "R$ " . $var['sum(valor)'] . '<br/>';
                                                }
                                                ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-check text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 d-flex align-items-center">
                                        <div class="numbers">
                                            <p class="card-category">Servi&ccedilos Aprovados</p>
                                            <h4 class="card-title">
                                                <?php
                                                $consulta = "select * from tbos where situacao = 'Servico Aprovado'"; //ASC
                                                $con = mysqli_query($connect, $consulta);
                                                $qtdserv_aprovados = mysqli_num_rows($con);

                                                echo $qtdserv_aprovados;
                                                ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="row row-card-no-pd align-items-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <div id="piechart" style="width: 400px; height: 400px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="curve_chart" style="width: 400px; height: 400px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
    






    




                <div class="row row-card-no-pd align-items-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <p class="h5">Árvore - Representação do Banco de Dados</p>
                            </div>
                            <div class="card-body">
                                <div class="container ml-5">
                                <div id="wordtree_basic" style="width: 900px; height: 500px;"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <?php
            }
            ?>
            <!--AQUI--> 




        </div>
    </div>
</div><!-- main-panel -->

<?php
include('includes/footer.php');
?>