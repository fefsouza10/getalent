<?php
session_start();
include_once('conexao.php');

$id_vaga = $_POST['idVaga'];
$id_cand = $_POST['id_cand'];

$sql_c = "SELECT * FROM candidaturas WHERE id_vaga='$id_vaga' and id_cand='$id_cand'";
$res_c = mysqli_query($conexao, $sql_c);

if (mysqli_num_rows($res_c) > 0) {
    $_SESSION['erro'] = "Você já está candidatado nessa vaga.";
    header("Location: homecan.php");

}else{
    $query = "INSERT INTO candidaturas(id_vaga, id_cand) VALUES ('$id_vaga','$id_cand')";
    $conexao->query($query);
    //$res = mysqli_query($conexao, $query);

    header('Location: homecol.php');
    }

?>