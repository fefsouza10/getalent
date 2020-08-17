<?php
include_once('conexao.php');

    $new_nome = "";
    $new_sobrenome = "";
    $new_email = "";
    $new_senha = "";
    $new_data = "";
    $new_cpf = "";

    if (isset($_POST['editar'])) {
        $new_nome = $_POST['newNomeCand'];
        $new_sobrenome = $_POST['newSobrenomeCand'];
        $new_email = $_POST['newEmailCand'];
        $new_senha = $_POST['newSenhaCand'];
        $new_data = $_POST['newDataCand'];
        $new_cpf = $_POST['newCpfCand'];

        //$query = "UPDATE candidatos SET nome_cand = '$new_nome', sobrenome_cand = '$new_sobrenome', email_cand = '$new_email', data_cand = '$new_data', cpf_cand = '$new_cpf' WHERE email_cand = '$new_email'";
        $query = "UPDATE candidatos SET nome_cand = '$new_nome', sobrenome_cand = '$new_sobrenome', data_cand = '$new_data' WHERE email_cand = '$new_email'";
        $res = mysqli_query($conexao, $query);
    }

    header("Location: perfilcan.php");
?>

