<?php

//conexao
require_once 'database/bd_conexao.php';

//sessão
session_start();
//verificação
//if (!isset($_SESSION['logado'])):
    header('Location: painel.php');
//endif;




if (isset($_POST['search_data'])) { //analisa se chegou na página clicando no Submit //se chegou então
    $id = $_POST['idcli'];
    $visible = $_POST['visible'];
    
    $query4 = "UPDATE tbclientes SET visible='$visible' WHERE idcli='$id'";
    $query_run = mysqli_query($connect, $query4);
}

if (isset($_POST['delete_multiple_cli'])) { //analisa se chegou na página clicando no Submit //se chegou então
    $id = "1";
    
    $query4 = "DELETE FROM tbclientes WHERE visible='$id'";
    $query_run = mysqli_query($connect, $query4);
    
    if ($query_run) {
        $_SESSION['success'] = "Clientes Apagados";
        header("Location: ./painel.php?p=clienttes");
    } else {
        $_SESSION['status'] = "Clientes Não foram Apagados";
        header("Location: ./painel.php?p=clientes");
    }
}

























if (isset($_POST['btneditarperf'])) {
    $edit_id = $_POST['edit_id'];
    $edit_usua = $_POST['edit_usua']; 
    $edit_fone = $_POST['edit_fone'];
    $edit_logi = $_POST['edit_logi'];
    
    $edit_senh = $_POST['edit_senh'];
    $senhaCripto = base64_encode($edit_senh);
    
    $edit_perf = $_POST['edit_perf'];
    
    $edit_usu_image = $_FILES['usu_image']['name'];

    $query = "UPDATE tbusuarios SET "
            . "usuario='$edit_usua', fone='$edit_fone', login='$edit_logi', senha='$senhaCripto', perfil='$edit_perf', nomefoto='$edit_usu_image' "
            . "WHERE iduser='$edit_id'";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
        move_uploaded_file($_FILES['usu_image']['tmp_name'], "upload/" . $_FILES['usu_image']['name']);
        $_SESSION['success'] = "Usuário Atualizado";
        header("Location: ./painel.php?p=perfil");
    } else {
        $_SESSION['success'] = "Usuário Não Atualizado";
        header("Location: ./painel.php?p=perfil");
    }
}














//CLIENTES
//INSERT/**/
                            if (isset($_POST['btn_pesquisar_cli_os'])) {
                                $pesquisar = $_POST['nome_pesquisa_cli_os'];
                                $result_msg_contatos = "SELECT * FROM tbclientes WHERE nomecli LIKE '%$pesquisar%' LIMIT 5";
                                $query_run = mysqli_query($connect, $result_msg_contatos);
                                header("Location: ./os_adicionar.php");
                            }
if (isset($_POST['btnSalvarOs'])) { //analisa se chegou na página clicando no Submit //se chegou então
    $dataOs = $_POST['data'];
    $tipoOs = $_POST['tipo'];
    $servicoOs = $_POST['servico'];
    $situacaoOs = $_POST['situacao'];
    $observacaoOs = $_POST['observacao'];
    $valorOs = $_POST['valor'];
    $funcionarioOs = $_POST['funcionario'];
    $id_cli_osOs = $_POST['id_cli_os'];

    $sql1 = "INSERT INTO tbos (os, data_os, tipo, servico, situacao, observacao, valor, tecnico, idcli) VALUES "
            . "(null,'" . $dataOs . "','" . $tipoOs . "','" . $servicoOs . "','" . $situacaoOs . "','" . $observacaoOs . "','" . $valorOs . "','" . $funcionarioOs . "','" . $id_cli_osOs . "')";
    $query_run = /* */mysqli_query($connect, $sql1);
    //header("Location:clientes.php");
    if ($query_run) {
        $_SESSION['success'] = "Ordem de Servico Adicionada";
        header("Location: ./painel.php?p=os");
    } else {
        $_SESSION['status'] = "Ordem de Servico Não foi Adicionada";
        header("Location: ./painel.php?p=os");
    } /**/
}
if (isset($_POST['btnEditarOs'])) { //analisa se chegou na página clicando no Submit //se chegou então
    $idOsE = $_POST['edit_os'];
    $dataOsE = $_POST['edit_data'];
    $tipoOsE = $_POST['edit_tipo'];
    $servicoOsE = $_POST['edit_servico'];
    $situacaoOsE = $_POST['edit_situacao'];
    $observacaoOsE = $_POST['edit_observacao'];
    $valorOsE = $_POST['edit_valor'];
    $funcionarioOsE = $_POST['edit_funcionario'];
    $id_cli_osOsE = $_POST['edit_id_cli_os'];
    //echo $id;
    $query = "UPDATE tbos SET data_os='$dataOsE', tipo='$tipoOsE', servico='$servicoOsE', situacao='$situacaoOsE', observacao='$observacaoOsE', valor='$valorOsE', tecnico='$funcionarioOsE', idcli='$id_cli_osOsE' WHERE os = '$idOsE'";
    $query_run = /* */mysqli_query($connect, $query);
    //header("Location:clientes.php");
    if ($query_run) {
        $_SESSION['success'] = "Ordem de Servico Atualizada";
        header("Location: ./painel.php?p=os");
    } else {
        $_SESSION['status'] = "Ordem de Servico Não foi Atualizada";
        header("Location: ./painel.php?p=os");
    } /**/
}





















////USUARIOS
//INSERT/**/
if (isset($_POST['btnSalvarUsu'])) { //analisa se chegou na página clicando no Submit //se chegou então
    $usuariousu = $_POST['usu_usuario'];
    $telefoneusu = $_POST['usu_telefone'];
    $loginusu = $_POST['usu_login'];
    $perfilusu = $_POST['perfil'];
    
    $senhausu = $_POST['usu_senha'];
    $senhaCripto = base64_encode($senhausu);
    
    $senhausuconfirm = $_POST['usu_senha_confirma'];
    
    $imageusu = $_FILES['usu_image']['name'];

    if (file_exists("upload/" . $_FILES['usu_image']['name'])) {
        $store = $_FILES['usu_image']['name'];
        $_SESSION['status'] = "Imagem já existe. " . $store;
        header("Location: ./painel.php?p=usuarios");
    } else {
        if($senhausu === $senhausuconfirm){
            $sql1 = "INSERT INTO tbusuarios (iduser, usuario, fone, login, senha, perfil, nomefoto) "
                    . "VALUES "
                    . "(null,'" . $usuariousu . "','" . $telefoneusu . "','" . $loginusu . "','" 
                    . $senhaCripto . "','" . $perfilusu . "','" . $imageusu . "')";
            $query_run = mysqli_query($connect, $sql1);

            if ($query_run) {
                move_uploaded_file($_FILES['usu_image']['tmp_name'], "upload/" . $_FILES['usu_image']['name']);
                $_SESSION['success'] = "Usuário Adicionado";
                header("Location: ./painel.php?p=usuarios");
            } else {
                $_SESSION['success'] = "Usuário Não Adicionado";
                header("Location: ./painel.php?p=usuarios");
            }
        } else {
            $_SESSION['status'] = "As senhas não são válidas. ";
            header("Location: ./painel.php?p=usuarios");
        }
    }
}
if (isset($_POST['btneditarusu'])) {
    $edit_id = $_POST['edit_id'];
    $edit_usua = $_POST['edit_usua'];
    $edit_fone = $_POST['edit_fone'];
    $edit_logi = $_POST['edit_logi'];
    
    $edit_senh = $_POST['edit_senh'];
    $senhaCripto = base64_encode($edit_senh);
    
    $edit_perf = $_POST['edit_perf'];
//    $edit_usu_image = $_FILES['usu_image']['name'];

    $query = "UPDATE tbusuarios SET usuario='$edit_usua', fone='$edit_fone', login='$edit_logi', senha='$senhaCripto', perfil='$edit_perf' WHERE iduser='$edit_id'";
//    $query = "UPDATE tbusuarios SET usuario='$edit_usua', fone='$edit_fone', login='$edit_logi', senha='$edit_senh', perfil='$edit_perf', nomefoto='$edit_usu_image' WHERE iduser='$edit_id'";
    $query_run = mysqli_query($connect, $query);

    if ($query_run) {
//        move_uploaded_file($_FILES['usu_image']['tmp_name'], "upload/" . $_FILES['usu_image']['name']);
        $_SESSION['success'] = "Usuário Atualizado";
        header("Location: ./painel.php?p=usuarios");
    } else {
        $_SESSION['success'] = "Usuário Não Atualizado";
        header("Location: ./painel.php?p=usuarios");
    }
}



































//CLIENTES
//INSERT/**/
if (isset($_POST['btnSalvarCli'])) { //analisa se chegou na página clicando no Submit //se chegou então
    $nomecli = $_POST['nome'];
    $endcli = $_POST['end'];
    $cidcli = $_POST['cid'];
    $estcli = $_POST['est'];
    $cepcli = $_POST['cep'];
    $fonecli = $_POST['fone'];
    $emailcli = $_POST['email'];
    $sexocli = $_POST['sexo'];

    
    $sql1 = "INSERT INTO tbclientes (idcli, nomecli, endcli, cidcli, estacli, cepcli, fonecli, emailcli, sexo, visible) VALUES "
            . "(null,'" . $nomecli . "','" . $endcli . "','" . $cidcli . "','" . $estcli . "','" . $cepcli . "','" . $fonecli . "','" . $emailcli . "','" . $sexocli . "',0)";
    $query_run = /* */mysqli_query($connect, $sql1);
    
    if ($query_run) {
        $_SESSION['success'] = "Cliente Adicionado";
        header("Location: ./painel.php?p=clientes");
    } else {
        $_SESSION['status'] = "Cliente Não foi Adicionado";
        header("Location: ./painel.php?p=clientes");
    } /**/
}
if (isset($_POST['btneditar'])) { //analisa se chegou na página clicando no Submit //se chegou então
    $idE = $_POST['edit_id'];
    $nomeE = $_POST['edit_nome'];
    $endE = $_POST['edit_end'];
    $cidcliE = $_POST['edit_cid'];
    $estcliE = $_POST['edit_est'];
    $cepcliE = $_POST['edit_cep'];
    $foneE = $_POST['edit_fone'];
    $Email = $_POST['edit_email'];
    $sexoE = $_POST['edit_sexo'];
    //echo $id;
    $query = "UPDATE tbclientes SET nomecli='$nomeE', endcli='$endE', cidcli='$cidcliE', estacli='$estcliE', cepcli='$cepcliE', fonecli='$foneE', emailcli='$Email', sexo='$sexoE' WHERE idcli = '$idE'";
    $query_run = /* */mysqli_query($connect, $query);
    //header("Location:clientes.php");
    if ($query_run) {
        $_SESSION['success'] = "Cliente Atualizado";
        header("Location: ./painel.php?p=clientes");
    } else {
        $_SESSION['status'] = "Cliente Não foi Atualizado";
        header("Location: ./painel.php?p=clientes");
    } /**/
}






//mysqli_close($connect);
?>