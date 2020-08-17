<?php 
session_start();
include('conexao.php');

  $id = "";
  $senha = "";

  if (isset($_POST['register'])) {
  	$id = $_POST['idColab'];
  	$senha = $_POST['senhaColab'];

  	$sql_u = "SELECT * FROM colaboradores WHERE id_login_col='$id'";
  	$res_u = mysqli_query($conexao, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
        $_SESSION['erro'] = "Erro ao cadastrar, ID já está em uso.";
        header("Location: cadcol.php");

  	}else{
           $query = "INSERT INTO colaboradores(id_login_col, senha_col) 
      	    	  VALUES ('$id', '".md5($senha)."')";
           $results = mysqli_query($conexao, $query);
           $_SESSION['idColab'] = $id;
           header("Location: homecol.php");
  	}
  }





/*session_start();
require_once 'conexao.php';

$id = $_POST['idColab'];
$senha = $_POST['senhaColab'];

//$senhaCrip = md5($senha);

$hash = password_hash($senha, PASSWORD_DEFAULT);

$insert = "INSERT INTO colaboradores(id_login_col, senha_col) VALUES('$id','$hash')";
$query = $conexao->query($insert);
$_SESSION['cadsucess'] = "Cadastro realizado";
header("Location: homecol.php");
*/
?>


