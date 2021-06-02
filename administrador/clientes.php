<?php
//conexao
require_once 'database/bd_conexao.php';

//sessão
//session_start();

//Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tbusuarios WHERE iduser = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

$query = "SELECT * FROM tbclientes ORDER BY `idcli` ASC";
$query_run = mysqli_query($connect, $query);

//mysqli_close($connect);
?>

<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Cadastro de Clientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="POST" action="codigo.php" class="was-validated" enctype="multipart/form-data"><!--clientes-->
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                        <div class="invalid-feedback">Por favor, digite um nome.</div>
                        <div class="valid-feedback">Perfeito!</div>
                    </div>
<!--                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" name="end" placeholder="Endereço" required>
                        <div class="invalid-feedback">Por favor, digite um endereço.</div>
                        <div class="valid-feedback">Perfeito!</div>
                    </div>-->
                    
                 
                    
                    
                    
                      <div class="form-group">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" name="end" id="inputAddress" placeholder="Endereço" required>
                        <div class="invalid-feedback">Por favor, digite um endereço.</div>
                        <div class="valid-feedback">Perfeito!</div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">Cidade</label>
                          <input type="text" class="form-control" name="cid" id="inputCity" required>
                        <div class="invalid-feedback">Por favor, digite um endereço.</div>
                        <div class="valid-feedback">Perfeito!</div>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Estado</label>
                          <select id="inputState" class="form-control" name="est">
                            <option selected>Selecione...</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="RJ">RJ</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                          </select>
                        </div>
                      </div>
                    
                    
                    
                    
                    
                    
                        <div class="form-group col-md-12">
                          <label for="inputZip">CEP</label>
                          <input type="text" class="form-control" name="cep" id="inputZip" required>
                        <div class="invalid-feedback">Por favor, digite um endereço.</div>
                        <div class="valid-feedback">Perfeito!</div>
                        </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    


                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" class="form-control" name="fone" placeholder="Telefone" required>
                                <div class="invalid-feedback">Por favor, digite um telefone.</div>
                                <div class="valid-feedback">Perfeito!</div>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <label>Sexo</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="sexo" value="F" required>
                                <label class="custom-control-label" for="customControlValidation2">Feminino</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="sexo" value="M" required>
                                <label class="custom-control-label" for="customControlValidation3">Masculino</label>
                                <div class="invalid-feedback">Por favor, escolha uma opa&ccedil&atildeo.</div>
                                <div class="valid-feedback">Perfeito!</div>
                            </div>
                        </div>  
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço de email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Seu e-mail" required>
                        <div class="invalid-feedback">Por favor, digite um e-mail.</div>
                        <div class="valid-feedback">Perfeito!</div>
                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
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

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="btnSalvarCli" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<h4 class="page-title">Cadastro de Clientes</h4>




<?php
if (isset($_POST['btn_pesquisar'])) {
    $pesquisar = $_POST['nome_pesquisa'];
    //Selecionar  os itens da p�gina
    $result_msg_contatos = "SELECT * FROM tbclientes WHERE nomecli LIKE '%$pesquisar%' LIMIT 30";
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
                        <input class="form-control" type="text" placeholder="Nome do Cliente" name="nome_pesquisa">
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










<div class="row">
    <div class="col-auto mr-auto">
        <!-- Botão para acionar modal -->
        <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#ExemploModalCentralizado">
            Adicionar Cliente<i class="fas fa-user-plus ml-3"></i>
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
                <a class="dropdown-item" href="excel/gerar_planilha_usu.php">Gerar Excel</a>
                <a class="dropdown-item" href="pdf/gerar_pdf_usu.php" target="_blank">Gerar PDF</a>
                <form action="codigo.php" method="post" class="text-center">
                    <button type="submit" name="delete_multiple_cli" class="btn btn-danger">
                        M&uacuteltipla Remo&ccedil&atildeo
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>





<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Lista de Clientes</div>
            </div>

            <div class="card-body">
                <div class="table-responsive">

                    <?php
//                    $query = "SELECT * FROM tbclientes ORDER BY `idcli` ASC";
//                    $query_run = mysqli_query($connect, $query);
//
//                    if (mysqli_num_rows($query_run) > 0) {
                    ?>

                    <table class="table table-hover"><!---->
                        <thead>
                            <tr class="text-center">
                                <th scope="col"><h5 class="pt-3"><i class="fas fa-trash-alt"></i></h5></th>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Apagar</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($query_run)) { ?>
                                <tr class="text-center">
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row['idcli']; ?>"  <?php echo $row['visible'] == 1 ? "checked" : "" ?>>
                                        </div>
                                    </td>
                                    <td><?php echo $row['idcli']; ?></td>
                                    <td><?php echo $row['nomecli']; ?></td>
                                    <td><?php echo $row['endcli']; ?></td>
                                    <td><?php echo $row['fonecli']; ?></td>
                                    <td><?php echo $row['emailcli']; ?></td>
                                    <!--<td><?php // echo $row['sexo']; ?></td>-->
                                    <td><?php $valor = $row['sexo']; if ($valor == 'M') { echo 'Masculino'; } elseif ($valor == 'F') { echo 'Feminino'; } else { echo ''; }?></td>
                                    <td>
                                        <form action="cli_editar.php" method="post"><!---->
                                            <input type="hidden" name="edit_id" value="<?php echo $row['idcli']; ?>">
                                            <input type="hidden" name="edit_nome" value="<?php echo $row['nomecli']; ?>">
                                            <input type="hidden" name="edit_end" value="<?php echo $row['endcli']; ?>">
                                            <input type="hidden" name="edit_cid" value="<?php echo $row['cidcli']; ?>">
                                            <input type="hidden" name="edit_esta" value="<?php echo $row['estacli']; ?>">
                                            <input type="hidden" name="edit_cep" value="<?php echo $row['cepcli']; ?>">
                                            <input type="hidden" name="edit_fone" value="<?php echo $row['fonecli']; ?>">
                                            <input type="hidden" name="edit_email" value="<?php echo $row['emailcli']; ?>">
                                            <input type="hidden" name="edit_sexo" value="<?php echo $row['sexo']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success">Editar<i class="fas fa-user-edit ml-3"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="cli_apagar.php?idcli=<?php echo $row['idcli']; ?>" data-confirm="Tem certeza de que deseja excluir?" class="btn btn-danger">Apagar<i class="fas fa-user-times ml-3"></i></a>
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