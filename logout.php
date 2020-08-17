<?php
session_start();
unset($_SESSION['idColab']);
unset($_SESSION['emailCand']);

header('Location: index.php');

?>