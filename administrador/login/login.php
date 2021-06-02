<?php
//conexao
require_once '../database/bd_conexao.php';

//sessão
session_start();

 
//botao entrar 
//if (isset($_POST['btn-entrar'])):
//    //echo "Clicou";
//    $erros = array();
//    $login = mysqli_escape_string($connect, $_POST['login']);
//    $senha = mysqli_escape_string($connect, $_POST['senha']);
//
//    $sql = "SELECT login FROM tbusuarios WHERE login = '$login'";
//    $resultado = mysqli_query($connect, $sql);
//
//    if (mysqli_num_rows($resultado) > 0):
//        $sql = "SELECT * FROM tbusuarios WHERE login = '$login' AND senha = '$senha'";
//        $resultado = mysqli_query($connect, $sql);
//
//        if (mysqli_num_rows($resultado) == 1):
//            $dados = mysqli_fetch_array($resultado);
//            mysqli_close($connect);
//            $_SESSION['logado'] = true;
//            $_SESSION['id_usuario'] = $dados['iduser'];
//            header('Location: ../painel.php');
//        else:
//            $erros[] = "<li> Usuário e Senha não conferem </li>";
//        endif;
//
//    else:
//        $erros[] = "<li> Usuário inexistente </li>";
//        $_SESSION['loginErro'] = "Usuário inexistente";
//        header('Location: login.php');
//    endif;
//
//
//endif;
?>

<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../assets/img/logo-icone.png">
        <title>LIJW - Login</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../fontawesome/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    </head>

    <body>
        <?php
        unset($_SESSION['id_usuario'], $_SESSION['login_usuario'], $_SESSION['senha_usuario'], $_SESSION['perfil_usuario']);
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <!--<h5 class="card-title text-center mb-5">Entrar no Painel Administrativo</h5>-->

                            <img src="../assets/img/logo.png">
                            <?php
                            if (!empty($erros)):
                                foreach ($erros as $erro):
                                    echo $erro;
                                endforeach;
                            endif;
                            ?>

                            <form class="form-signin" action="valida_login.php<?php //echo $_SERVER['PHP_SELF'];  ?>" method="POST">
                                <div class="form-label-group mb-4">
                                    <label for="inputEmail">Login</label>
                                    <input type="text" name="login" id="inputEmail" class="form-control" placeholder="Login" required autofocus>
                                </div>

                                <div class="form-label-group mb-4">
                                    <label for="inputPassword">Senha</label>
                                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                                </div>

                                <div class="row">
                                    <div class="col-sm-9 col-md-9 col-lg-9">
                                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="btn-entrar">
                                            Entrar
                                        </button>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        <a class="btn" role="button" onclick="mostrarSenha()">
                                            <span class="text-primary">
                                                <h2><i class="fas fa-eye-slash"></i></h2>
                                            </span>
                                        </a>
                                        <script>
                                            function mostrarSenha() {
                                                var tipo = document.getElementById("senha");
                                                if (tipo.type == "password") {
                                                    tipo.type = "text";
                                                } else {
                                                    tipo.type = "password";
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <hr class="my-4">
                            </form>

                            <!--<div class="alert alert-danger" role="alert">--> 
                                <?php
                                if (isset($_SESSION['loginErro'])) {
//                                    echo $_SESSION['loginErro'];
                                    echo '<div class="alert alert-danger text-center" role="alert"> ' . $_SESSION['loginErro'] . ' </div>';
                                    unset($_SESSION['loginErro']);
                                }
                                ?>
                            <!--</div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>