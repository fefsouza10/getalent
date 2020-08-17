<?php
session_start();
include_once('conexao.php');

$id_vaga = $_POST['idVaga'];

$query = "DELETE FROM vagas WHERE id_vaga = '$id_vaga'";
$conexao->query($query);

header('Location: homecol.php');


?>