<?php
    if (isset($_SESSION['idColab'])){
        header('Location: homecol.php');
    }else{ 
        if (isset($_SESSION['emailCand'])){
            header('Location: homecan.php');
            }
        }
?>