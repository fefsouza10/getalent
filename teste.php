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
           
            $query = "SELECT id_cand FROM candidatos WHERE email_cand = '$email'";
            $row = mysql_fetch_array($query);
            $id_cand = $row['idCand'];

            $query = "SELECT nome_cand FROM candidatos WHERE email_cand = '$email'";
            row = mysql_fetch_array($query);
            $nome = $row['nomeCand'];

            $sobrenome = "SELECT sobrenome_cand FROM candidatos WHERE email_cand = '$email'";
            $row = mysql_fetch_array($query);
            $sobrenome = $row['sobrenomeCand'];
            
            $data = "SELECT data_cand FROM candidatos WHERE email_cand = '$email'";
            $row = mysql_fetch_array($query);
            $data = $row['dataCand'];

            $cpf = "SELECT cpf_cand FROM candidatos WHERE email_cand = '$email'";
            $row = mysql_fetch_array($query);
            $cpf = $row['cpfCand'];


            $_SESSION['nomeCand'] = $r_nome;
            $_SESSION['sobrenomeCand'] = $r_sobrenome;
            $_SESSION['senhaCand'] = $senha;
            $_SESSION['dataCand'] = $r_data;
            $_SESSION['cpfCand'] = $r_cpf;

            $email = $_POST['email'];
            $query = "SELECT * FROM users WHERE email='$email'"
            $row = mysql_fetch_array($query);
            $username = $row['username'];
            
            echo $username;

            header('Location: homecan.php');

            exit();
        }else {
            $_SESSION['erro'] = "Informações de login incorretas.";
            header('Location: logincan.php');
	        exit();
        }
    }



    $email = $_POST['emailCand'];
    $senha = $_POST['senhaCand'];

    $query = "SELECT * FROM candidatos WHERE email_cand='$email'"
    $row = mysql_fetch_array($query);
    $username = $row['id_cand'];
    $nome = $row['nome_cand'];
    $sobrenome = $row['sobrenome_cand'];
    $data = $row['data_cand'];
    $cpf = $row['cpf_cand'];

    echo $nome;
    echo $sobrenome;
    echo $email;
    echo $senha;
    echo $data;
    echo $cpf;


?>