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

$consulta = "SELECT * FROM tbusuarios";
$con = mysqli_query($connect, $consulta);
$infor = mysqli_fetch_array($con);
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
                            <div class="card-title">Edição de Clientes</div>
                        </div>

                        <div class="card-body">
                            <?php
                            if (isset($_POST['edit_btn_usu'])) { //analisa se chegou na página clicando no Submit //se chegou então
                                $id = $_POST['edit_iduser'];
                                $usua = $_POST['edit_usuario'];
                                $fone = $_POST['edit_fone'];
                                $logi = $_POST['edit_login'];
                                $perf = $_POST['edit_perfil'];
                                $senh = $_POST['edit_senha'];
                                $foto = $_POST['edit_nomefoto'];
                                //echo $id;
                                $query = "SELECT * FROM tbusuarios WHERE iduser = '$id'";
                                $query_run = mysqli_query($connect, $query);
                                
                                
//$infor = mysqli_fetch_array($query_run);
                                //foreach ($query as $row) {
                                ?>

                            <form action="codigo.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="edit_id" value="<?php echo $id ?>">
                                        <input type="hidden" class="form-control" name="edit_senh" value="<?php echo $senh ?>">
                                        <label>Usuário</label>
                                        <input type="text" class="form-control" name="edit_usua" placeholder="Nome" value="<?php echo $usua ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="text" class="form-control" name="edit_fone" placeholder="Telefone" value="<?php echo $fone ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Login</label>
                                        <input type="text" class="form-control" name="edit_logi" placeholder="Endereço" value="<?php echo $logi ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Perfil</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="edit_perf" value="admin" <?php $valor = @$_POST['edit_perfil']; if ($valor == 'admin') { echo 'checked'; } ?>>
                                            <label class="custom-control-label" for="customControlValidation2">Admin</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="edit_perf" value="user" <?php $valor = @$_POST['edit_perfil']; if ($valor == 'user') { echo 'checked'; } ?>>
                                            <label class="custom-control-label" for="customControlValidation3">User</label>
                                        </div>
                                    </div>
                                    <!--<div class="form-group">
                                        <label>Foto</label>
                                        <input type="file" name="usu_image" id="usu_image" class="form-control">
                                    </div>-->
                                    
                                    <a href="./painel.php?p=usuarios" class="btn btn-danger">Cancelar </a>
                                    <button type="submit" name="btneditarusu" class="btn btn-primary">Atualizar </button>
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
</div>



<?php
include('includes/footer.php');
?>					