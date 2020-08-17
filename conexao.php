<?php 
require_once 'config.php';
$conexao = new mysqli(GETALENT_HOST,GETALENT_USER,GETALENT_PASS,GETALENT_DB);

/*if($conexao->connect_error){
    echo "Erro ao conectar com o banco de dados". $conexao->connect_error;
}else{
    echo "Conexão com o banco de dados realizada";
}*/

?>