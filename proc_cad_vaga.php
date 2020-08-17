<?php 
session_start();
require 'conexao.php';

$titulo = $_POST['tituloVaga'];
$descricao = $_POST['descricaoVaga'];

$insert = "INSERT INTO vagas(titulo_vaga, descricao_vaga) VALUES('$titulo','$descricao')";
$query = $conexao->query($insert);
$_SESSION['cadsucess'] = "Cadastro realizado";
header("Location: homecol.php");

?>