            <div class="main-header">
                <div class="logo-header">
                    
                    <!--<a href="painel.php" class="logo">-->
                    <a href="<?php if ($dados['perfil'] == 'admin'){ echo 'painel.php'; } else { echo './painel.php?p=clientes'; }?>" class="logo">
                        Painel Administrativo
                    </a>
                    <!--icone menu responsivo-->
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                </div>
                <nav class="navbar navbar-header navbar-expand-lg justify-content-center mt-2">
                    <!--<div class="row justify-content-center">-->
                        <h5>Seja Bem-Vindo, <?php echo $dados['usuario']; ?>!</h5>
                    <!--</div>-->
                </nav>
            </div><!--main-header-->


			

            <div class="sidebar">
                <div class="sidebar-wrapper">

                    <div class="user">
                        <div class="photo">
                            <!--<img src="assets/img/profile.jpg">-->
                            <?php echo '<img src="upload/'.$dados['nomefoto'].'" alt="Imagem">' ?>
                            <!--<i class="fas fa-user-circle"></i>-->
                        </div>

                        <div class="info">

                            <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <?php echo $dados['usuario']; ?>
                                    <span class="user-level"><?php echo $dados['perfil']; ?></span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse" id="collapseExample" aria-expanded="true" style="">
                                <ul class="nav">
                                    <li>
                                        <a href="./painel.php?p=perfil">
                                            <span class="link-collapse"><p>Meu Perfil<i class="ml-2 fas fa-user-circle"></i></p></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <span class="link-collapse"><p>Ir ao Sites<i class="ml-2 fas fa-laptop"></i></p></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                                            <span class="link-collapse"><p>Sair<i class="ml-2 fas fa-sign-in-alt"></i></p></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div><!--info-->
                    </div><!--user-->


                    <ul class="nav">
                        <li class="nav-item <?php $valor = @$_GET['p']; if ($valor == 'clientes') { echo 'active'; } ?>">
                            <a href="./painel.php?p=clientes">
                                <i class="fas fa-user-friends"></i>
                                <p>Clientes</p>
                                <span class="badge badge-count">
                                    <?php
                                        $consulta = "SELECT idcli FROM tbclientes ORDER BY idcli"; //ASC
                                        $con = mysqli_query($connect, $consulta);
                                        $qtdcli = mysqli_num_rows($con);

                                        echo $qtdcli;
                                    ?>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php $valor = @$_GET['p']; if ($valor == 'usuarios') { echo 'active'; } ?>" style="display: <?php if ($dados['perfil'] == 'admin'){ echo 'block'; } else { echo 'none'; }?>;">
                            <a href="./painel.php?p=usuarios"><!-- usuarios.php -->
                                <i class="fas fa-user-tie"></i>
                                <p>Funcionários</p>
                                <span class="badge badge-count">
                                    <?php
                                        $consulta = "SELECT iduser FROM tbusuarios"; //ASC
                                        $con = mysqli_query($connect, $consulta);
                                        $qtdcli = mysqli_num_rows($con);

                                        echo $qtdcli;
                                    ?>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php $valor = @$_GET['p']; if ($valor == 'os') { echo 'active'; } ?>">
                            <a href="./painel.php?p=os">
                                <i class="fas fa-dolly"></i>
                                <p>O. S.</p>
                                <span class="badge badge-count">
                                    <?php
                                        $consulta = "SELECT os FROM tbos"; //ASC
                                        $con = mysqli_query($connect, $consulta);
                                        $qtdcli = mysqli_num_rows($con);

                                        echo $qtdcli;
                                    ?>
                                </span>
                            </a>
                        </li>
<!--                        <li class="nav-item">
                            <a href="typography.html">
                                <i class="la la-font"></i>
                                <p>Typography</p>
                            </a>
                        </li>-->
                    </ul><!--nav-->

                </div><!--sidebar-wrapper-->
            </div><!--sidebar-->

            

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sair</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Tem certeza que deseja sair do sistema?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">N&atildeo</button>
        <a href="login/logout.php" class="btn btn-primary">Sim</a>
      </div>
    </div>
  </div>
</div>