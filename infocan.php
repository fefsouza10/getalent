<?php

include_once('conexao.php');

    $email = $_SESSION['emailCand'];

    $query = "SELECT * FROM candidatos WHERE email_cand='$email'";
    $res = mysqli_query($conexao, $query);
    $row = mysqli_fetch_array($res);

    $id = $row['id_cand'];
    $nome = $row['nome_cand'];
    $sobrenome = $row['sobrenome_cand'];
    $senha = $row['senha_cand'];
    $data = $row['data_cand'];
    $cpf = $row['cpf_cand'];
?>