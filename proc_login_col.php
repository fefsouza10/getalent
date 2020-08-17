<?php
session_start();
include('conexao.php');

$id = "";
$senha = "";

    if (isset($_POST['login'])) {
        $id = $_POST['idColab'];
        $senha = $_POST['senhaColab'];
        $senhamd5 = md5($senha);

        $validar = "SELECT id_login_col, senha_col FROM colaboradores WHERE id_login_col = '$id' and senha_col = '$senhamd5'";
        $res = mysqli_query($conexao, $validar);

        if(mysqli_num_rows($res) == 1){
	    	$_SESSION['idColab'] = $id;
            header('Location: homecol.php');
    		exit();
        }else {
            $_SESSION['erro'] = "Informações de login incorretas.";
            header('Location: logincol.php');
	        exit();
        }
    }
?>