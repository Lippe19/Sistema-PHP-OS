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

$consulta = "SELECT * FROM tbclientes";
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
                            if (isset($_POST['edit_btn'])) { //analisa se chegou na página clicando no Submit //se chegou então
                                $id = $_POST['edit_id'];
                                $nome = $_POST['edit_nome'];
                                $end = $_POST['edit_end'];
                                $cid = $_POST['edit_cid'];
                                $esta = $_POST['edit_esta'];
                                $cep = $_POST['edit_cep'];
                                $fone = $_POST['edit_fone'];
                                $email = $_POST['edit_email'];
//                                $sexo = $_POST['edit_sexo'];
                                echo $id;
                                $query = "SELECT * FROM tbclientes WHERE id = '$id'";
                                $query_run = mysqli_query($connect, $query);

//$infor = mysqli_fetch_array($query_run);
                                //foreach ($query as $row) {
                                ?>

                                <form action="codigo.php" method="post">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="edit_id" value="<?php echo $id ?>">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" name="edit_nome" placeholder="Nome" value="<?php echo $nome ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" name="edit_end" placeholder="Endereço" value="<?php echo $end ?>">
                                    </div>
                                    
                                    
                                    
                                    
<!--                                    
                                    <div class="form-group">
                        <label for="inputAddress">Endereco</label>
                        <input type="text" class="form-control" name="end" id="inputAddress" placeholder="Endereço" required>
                        <div class="invalid-feedback">Por favor, digite um endereço.</div>
                        <div class="valid-feedback">Perfeito!</div>
                      </div>-->
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">Cidade</label>
                          <input type="text" class="form-control" name="edit_cid" id="inputCity" value="<?php echo $cid ?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputState">Estado</label>
                          <select id="inputState" class="form-control" name="edit_est">
                                                            <option value="AC" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'AC') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>AC</option>
                                                            <option value="AL" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'AL') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>AL</option>
                                                            <option value="AP" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'AP') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>AP</option>
                                                            <option value="AM" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'AM') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>AM</option>
                                                            <option value="BA" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'BA') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>BA</option>
                                                            <option value="CE" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'CE') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>CE</option>
                                                            <option value="DF" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'DF') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>DF</option>
                                                            <option value="ES" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'ES') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>ES</option>
                                                            <option value="GO" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'GO') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>GO</option>
                                                            <option value="MA" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'MA') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>MA</option>
                                                            <option value="MT" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'MT') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>MT</option>
                                                            <option value="MS" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'MS') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>MS</option>
                                                            <option value="MG" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'MG') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>MG</option>
                                                            <option value="RJ" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'RJ') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>RJ</option>
                                                            <option value="SC" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'SC') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>SC</option>
                                                            <option value="SP" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'SP') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>SP</option>
                                                            <option value="SE" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'SE') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>SE</option>
                                                            <option value="TO" <?php
                                                            $combo = @$_POST['edit_esta'];
                                                            if ($combo == 'TO') {
                                                                echo 'selected="selected"';
                                                            }
                                                            ?>>TO</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip">CEP</label>
                          <input type="text" class="form-control" name="edit_cep" id="inputZip" value="<?php echo $cep ?>">
                        </div>
                      </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="text" class="form-control" name="edit_fone" placeholder="Telefone" value="<?php echo $fone ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Endereço de email</label>
                                        <input type="email" class="form-control" name="edit_email" value="<?php echo $email ?>"><!--sni@gmail.com-->
                                    </div>
                                    <div class="form-group">
                                        <label>Sexo</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation2" name="edit_sexo" value="F" <?php $valor = @$_POST['edit_sexo']; if ($valor == 'F') { echo 'checked'; } ?>>
                                            <label class="custom-control-label" for="customControlValidation2">Feminino</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="customControlValidation3" name="edit_sexo" value="M" <?php $valor = @$_POST['edit_sexo']; if ($valor == 'M') { echo 'checked'; } ?>>
                                            <label class="custom-control-label" for="customControlValidation3">Masculino</label>
                                        </div>
                                    </div>
                                    <a href="./painel.php?p=clientes" class="btn btn-danger">Cancelar </a>
                                    <button type="submit" name="btneditar" class="btn btn-primary">Atualizar </button>
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