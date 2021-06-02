<?php
//conexao
require_once 'database/bd_conexao.php';

//sess√£o
//session_start();

//Dados
//$id = $_SESSION['id_usuario'];
//$sql = "SELECT * FROM tbusuarios WHERE iduser = '$id'";
//$resultado = mysqli_query($connect, $sql);
//$dados = mysqli_fetch_array($resultado);

$query = "SELECT * FROM tbusuarios ORDER BY `iduser` ASC";
$query_run = mysqli_query($connect, $query);

//mysqli_close($connect);



////Verificar se esta sendo passado na URL a p·gina atual, sen„o È atribuido a pagina
//$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
//
////Contar o total de itens
//$total_msg_contatos = mysqli_num_rows($query_run);
//
////Seta a quantidade de itens por p·gina
//$quantidade_pg = 3;
//
////calcular o n˙mero de p·ginas 
//$num_pagina = ceil($total_msg_contatos / $quantidade_pg);
//
////calcular o inicio da visualizao	
//$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
//
////Selecionar  os itens da p·gina
//$result_msg_contatos = "SELECT * FROM tbusuarios limit $inicio, $quantidade_pg";
//$resultado_msg_contatos = mysqli_query($connect, $result_msg_contatos);
//
//$query_run = mysqli_num_rows($resultado_msg_contatos);
//			//Receber o n˙mero da p·gina
//			$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
//			$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
//			
//			//Setar a quantidade de itens por pagina
//			$qnt_result_pg = 3;
//			
//			//calcular o inicio visualizaÁ„o
//			$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
//			
//			$result_usuarios = "SELECT * FROM tbusuarios LIMIT $inicio, $qnt_result_pg";
//			$resultado_usuarios = mysqli_query($connect, $result_usuarios);
?>

<?php
//paginacao
//    if (isset($_GET['pagina'])) {
//        include('painel.php');
//    }
?>


<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastro de Usu√°rio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="codigo.php" class="was-validated" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="validationCustom04">Usu√°rio</label>
                                <input type="text" name="usu_usuario" class="form-control" placeholder="Usu√°rio" required>
                                <div class="invalid-feedback">Por favor, digite um usu√°rio.</div>
                                <div class="valid-feedback">Perfeito!</div>
                            </div>
                        </div>  
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="validationCustom04">Telefone</label>
                                <input type="text" name="usu_telefone" class="form-control" placeholder="Telefone" required>
                                <div class="invalid-feedback">Por favor, digite um telefone.</div>
                                <div class="valid-feedback">Perfeito!</div>
                            </div>
                        </div>  
                    </div>

                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <div class="form-group">
                                <label for="validationCustom04">Login</label>
                                <input type="text" name="usu_login" class="form-control" placeholder="Login" required>
                                <div class="invalid-feedback">Por favor, digite um login.</div>
                                <div class="valid-feedback">Perfeito!</div>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <label>Perfil</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="perfil" value="admin" required>
                                <label class="custom-control-label" for="customControlValidation2">Admin</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="perfil" value="user" required>
                                <label class="custom-control-label" for="customControlValidation3">User</label>
                                <div class="invalid-feedback">Por favor, escolha um perfil</div>
                                <div class="valid-feedback">Perfeito!</div>
                            </div>
                        </div>  
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Senha</label>
                                <input type="text" name="usu_senha" class="form-control" placeholder="Senha" required>
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
                    </div>

                    <div class="form-group">
                        <label>Upload de Imagem</label>
                        <input type="file" name="usu_image" id="usu_image" class="form-control" required>
                        <div class="invalid-feedback">Por favor, escolha uma imagem.</div>
                        <div class="valid-feedback">Perfeito!</div>
                    </div>

                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>			

                </div><!---->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="btnSalvarUsu" class="btn btn-primary">Salvar</button>
                </div>
            </form><!---->

        </div>
    </div>
</div>


<h4 class="page-title">Painel de Controle</h4>



<?php
if (isset($_POST['btn_pesquisar'])) {
    $pesquisar = $_POST['nome_pesquisa'];
    //Selecionar  os itens da p·gina
    $result_msg_contatos = "SELECT * FROM tbusuarios WHERE usuario LIKE '%$pesquisar%' LIMIT 30";
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
                        <input class="form-control" type="text" placeholder="Nome do Usu√°rios" name="nome_pesquisa">
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





<form method="POST" action="excel/gerar_planilha_especifica_usu.php" enctype="multipart/form-data">

    <div class="row">
        <div class="col-auto mr-auto">
            <!-- Bot√£o para acionar modal -->
            <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#ExemploModalCentralizado">
                Adicionar Usu√°rio<i class="fas fa-user-plus ml-3"></i>
            </button>
        </div>
        <div class="col-auto">
                <div class="dropdown">
                    <a class="btn" role="button" data-toggle="dropdown">
                        <span class="text-primary">
                            <h2><i class="fas fa-file-export"></i><!--<i class="fas fa-cogs"></i>--></h2>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <input type="submit" value="Excel Especifico" class="dropdown-item">
                        <a class="dropdown-item" href="excel/gerar_planilha_usu.php">Gerar Excel</a>
                        <a class="dropdown-item" href="pdf/gerar_pdf_usu.php" target="_blank">Gerar PDF</a>
                    </div>
                </div>
        </div>
    </div>


    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Lista de Usu√°rios</div>
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <?php //if (mysqli_num_rows($query_run) > 0) {   ?>
                        <?php //if ($total_msg_contatos($query_run) > 0) {   ?>

                        <table class="table table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col"><h5 class="pt-3"><i class="far fa-file-excel"></i></h5></th>
                                    <th scope="col">id</th>
                                    <th scope="col">Usu√°rio</th>
                                    <th scope="col">Telefone </th>
                                    <th scope="col">Login</th>
                                    <th scope="col">Perfil</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Apagar</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($query_run)) { //$resultado_msg_contatos //$resultado_usuarios ?>
                                    <tr class="text-center">
                                        <?php $id = $row["iduser"]; ?>
                                        <td>
                                            <div class="form-check">
                                                <?php echo "<input type='checkbox' class='form-check-input position-static' name='msg_contato[$id]' value='1'>" ?>
                                            </div>
                                        </td>
                                        <td><?php echo $row['iduser']; ?></td>
                                        <td><?php echo $row['usuario']; ?></td>
                                        <td><?php echo $row['fone']; ?></td>
                                        <td><?php echo $row['login']; ?></td>
                                        <td><?php echo $row['perfil']; ?></td>
                                        <td><?php echo '<img class="rounded" src="upload/' . $row['nomefoto'] . '" width="80px;" height="80px;" alt="Imagem">' ?></td>
                                        <td>
                                            <form action="usu_editar.php" method="post" enctype="multipart/form-data"><!---->
                                                <input type="hidden" name="edit_iduser" value="<?php echo $row['iduser']; ?>">
                                                <input type="hidden" name="edit_usuario" value="<?php echo $row['usuario']; ?>">
                                                <input type="hidden" name="edit_fone" value="<?php echo $row['fone']; ?>">
                                                <input type="hidden" name="edit_login" value="<?php echo $row['login']; ?>">
                                                <input type="hidden" name="edit_perfil" value="<?php echo $row['perfil']; ?>">
                                                <input type="hidden" name="edit_senha" value="<?php echo $row['senha']; ?>">
                                                <input type="hidden" name="edit_nomefoto" value="<?php echo $row['nomefoto']; ?>">
                                                <button type="submit" name="edit_btn_usu" class="btn btn-success">Editar<i class="fas fa-user-edit ml-3"></i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="usu_apagar.php?iduser=<?php echo $row['iduser']; ?>" data-confirm="Tem certeza de que deseja excluir?" class="btn btn-danger">Apagar<i class="fas fa-user-times ml-3"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php
//                        } else {
//                            echo "N√£o deu certo";
//                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>



    </div>

</form>













<?php
//			//PaginÁ„o - Somar a quantidade de usu·rios
//			$result_pg = "SELECT COUNT(iduser) AS num_result FROM tbusuarios";
//			$resultado_pg = mysqli_query($connect, $result_pg);
//			$row_pg = mysqli_fetch_assoc($resultado_pg);
//			//echo $row_pg['num_result'];
//			//Quantidade de pagina 
//			$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
//			
//			//Limitar os link antes depois
//			$max_links = 2;
//			echo "<a href='usuarios.php?pagina=1'>Primeira</a> ";
//			
//			for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
//				if($pag_ant >= 1){
//					echo "<a href='usuarios.php?p=usuarios?pagina=$pag_ant'>$pag_ant</a> ";
//				}
//			}
//				
//			echo "$pagina ";
//			
//			for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
//				if($pag_dep <= $quantidade_pg){
//					echo "<a href='usuarios.php?pagina=$pag_dep'>$pag_dep</a> ";
//				}
//			}
//			
//			echo "<a href='usuarios.php?pagina=$quantidade_pg'>Ultima</a>";
?>
