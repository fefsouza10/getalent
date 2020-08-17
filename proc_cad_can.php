<?php 
session_start();
include('conexao.php');

  $nome = "";
  $sobrenome = "";
  $email = "";
  $senha = "";
  $data = "";
  $cpf = "";

  if (isset($_POST['register'])) {
    $nome = $_POST['nomeCand'];
    $sobrenome = $_POST['sobrenomeCand'];
    $email = $_POST['emailCand'];
    $senha = $_POST['senhaCand'];
    $data = $_POST['dataCand'];
    $cpf = $_POST['cpfCand'];

      $sql_e = "SELECT * FROM candidatos WHERE email_cand='$email'";
      $sql_cpf = "SELECT * FROM candidatos WHERE cpf_cand='$cpf'";
      $res_e = mysqli_query($conexao, $sql_e);
      $res_cpf = mysqli_query($conexao, $sql_cpf);

  	if (mysqli_num_rows($res_e) > 0) {
        $_SESSION['erro'] = "Erro ao cadastrar, e-mail já está em uso.";
        header("Location: cadcan.php");
        
      }else if(mysqli_num_rows($res_cpf) > 0){
          $_SESSION['erro'] = "Erro ao cadastrar, CPF já está em uso.";
          header("Location: cadcan.php");

  	}else{
           $query = "INSERT INTO candidatos(nome_cand, sobrenome_cand, email_cand, senha_cand, data_cand, cpf_cand) 
      	    	  VALUES ('$nome','$sobrenome','$email','".md5($senha)."', '$data', '$cpf')";
           $results = mysqli_query($conexao, $query);
           $_SESSION['emailCand'] = $email;
           header("Location: homecan.php");
  	}
  }


/*
session_start();
require 'conexao.php';

$nome = $_POST['nomeCand'];
$sobrenome = $_POST['sobrenomeCand'];
$email = $_POST['emailCand'];
$senha = $_POST['senhaCand'];
$data = $_POST['dataCand'];
$cpf = $_POST['cpfCand'];

$senhaCrip = md5($senha);

$insert = "INSERT INTO candidatos(nome_cand, sobrenome_cand, email_cand, senha_cand, data_cand, cpf_cand) VALUES('$nome','$sobrenome','$email','$senhaCrip','$data','$cpf')";
$query = $conexao->query($insert);
$_SESSION['cadsucess'] = "Cadastro realizado";
header("Location: homecan.php");
*/
?>