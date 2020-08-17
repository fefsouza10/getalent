<?php
session_start();
include('conexao.php');

$email = "";
$senha = "";

    if (isset($_POST['login'])) {
        $email = $_POST['emailCand'];
        $senha = $_POST['senhaCand'];
        $senhamd5 = md5($senha);

        $validar = "SELECT email_cand, senha_cand FROM candidatos WHERE email_cand = '$email' and senha_cand = '$senhamd5'";
        $res = mysqli_query($conexao, $validar);

        if(mysqli_num_rows($res) == 1){
            $_SESSION['emailCand'] = $email;
            header('Location: homecan.php');
            exit();
        }else {
            $_SESSION['erro'] = "Informações de login incorretas.";
            header('Location: logincan.php');
	        exit();
        }
    }
?>