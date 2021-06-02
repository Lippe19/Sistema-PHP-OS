<?php 

//conexao
require_once '../database/bd_conexao.php';

//sessão
session_start();


//botao entrar 
if (isset($_POST['btn-entrar'])):
    //echo "Clicou";
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    
    
    $senhaN = base64_encode($senha);
            

    $sql = "SELECT login FROM tbusuarios WHERE login = '$login'";
    $resultado = mysqli_query($connect, $sql);

    if (mysqli_num_rows($resultado) > 0):
            
            $sql = "SELECT * FROM tbusuarios WHERE login = '$login' AND senha = '$senhaN'";
            $resultado = mysqli_query($connect, $sql);
            
            if (mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                
                $_SESSION['logado'] = true;

                //            mysqli_close($connect);
                $_SESSION['id_usuario'] = $dados['iduser'];
                $_SESSION['login_usuario'] = $dados['login'];
                $_SESSION['senha_usuario'] = $dados['senha'];
                $_SESSION['perfil_usuario'] = $dados['perfil'];
                
                //controle de ACESSO 
                if ($dados['perfil'] == 'admin'){
                    header('Location: ../painel.php');
                }  else {
                    header('Location: ../painel.php?p=clientes');
                }
            else:
                $_SESSION['loginErro'] = "Usuário e Senha não conferem.";
                header('Location: login.php');
            endif;
            
    else:
        $_SESSION['loginErro'] = "Usuário inexistente.";
        header('Location: login.php');
    endif;


endif;
?>