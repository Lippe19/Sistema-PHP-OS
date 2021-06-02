<?php
//conexao 
require_once 'database/bd_conexao.php';

//sessão
//session_start();
include_once 'login/seguranca.php'; 


//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tbusuarios WHERE iduser = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);



//    $s = "1";
//    $senhaC = base64_encode($s);
//    $senhaD = base64_decode($senhaC);
//    
//    echo "<br>".$dados['senha'];
//    echo "<br>".base64_decode($dados['senha'])."<hr>";
//     
//    echo "<br>".$s;
//    echo "<br>".$senhaC;
//    echo "<br>".$senhaD;
//mysqli_close($connect);
//    echo "<br>".$dados['nomefoto'];
?>

<h4 class="page-title">Meu Perfil</h4>





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






<div class="row">

    <div class="col-md-12">
        
        
        
        <div class="card mb-3">
          <div class="row no-gutters">
              
            <div class="col-md-4 text-center align-self-center">
                    <?php echo '<img src="upload/'.$dados['nomefoto'].'" alt="Imagem" width="300px;" height="300px;" class="rounded img-thumbnail img-fluid">' ?>
              <!--<img src="..." class="card-img" alt="...">-->
                <br><label></label>
            </div>
              
              <div class="col-md-8">
              <div class="card-body">
                <!--<h5 class="card-title">Card title</h5>-->
                
                
                    <form action="codigo.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="edit_id" value="<?php echo $id ?>">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="edit_usua" placeholder="Nome" value="<?php echo $dados['usuario']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" name="edit_fone" placeholder="Telefone" value="<?php echo $dados['fone']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Login</label>
                            <input type="text" class="form-control" name="edit_logi" placeholder="Endereço" value="<?php echo $dados['login']; ?>">
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="text" class="form-control" name="edit_senh" value="<?php echo base64_decode($dados['senha'])//$dados['senha']; ?>">
                        </div>
                        
<!--                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="text" name="edit_senh" class="form-control" value="<?php //echo base64_decode($dados['senha'])//$dados['senha']; ?>" placeholder="Senha" required>
                                <div class="invalid-feedback">Por favor, digite um senha.</div>
                                <div class="valid-feedback">Perfeito!</div>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Confirme a Senha</label>
                                <input type="text" name="usu_senha_confirma" class="form-control" placeholder="Senha de confirmacao" required>
                                <div class="invalid-feedback">Por favor, digite um senha.</div>
                                <div class="valid-feedback">Perfeito!</div>
                            </div>
                        </div>
                    </div>-->

                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group" style="display: <?php if ($dados['perfil'] == 'admin'){ echo 'block'; } else { echo 'none'; }?>;">
                            <label>Perfil</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="edit_perf" value="admin" <?php $valor = $dados['perfil']; if ($valor == 'admin') { echo 'checked'; } ?>>
                                <label class="custom-control-label" for="customControlValidation2">Admin</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="edit_perf" value="user" <?php $valor = $dados['perfil']; if ($valor == 'user') { echo 'checked'; } ?>>
                                <label class="custom-control-label" for="customControlValidation3">User</label>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="usu_image" id="usu_image" class="form-control">
                        </div>
                        <a href="./painel.php?p=perfil" class="btn btn-danger">Cancelar </a>
                        <button type="submit" name="btneditarperf" class="btn btn-primary">Atualizar </button>
                    </form>
                
              </div>
            </div>
              
          </div>
        </div>
        
        
        
        
        
        
        
        
<!--        <div class="card">

                <div class="col-md-6">
                </div>
            <div class="card-body">

                <div class="col-md-6">
                    
                </div>
                
            </div>
        </div>-->

    </div>

</div>

