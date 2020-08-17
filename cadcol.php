<?php
session_start();
include('checksession.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GeTalent</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/cadcol.css" rel="stylesheet">
    <!-- Icon do GeT-->
    <link rel="icon" href="img/icon128sf.png" type="image/x-icon" />
</head>

<body>
    <header>
        <!-- Navbar superior-->
        <div class="navbar">
            <nav class="navbar navbar-dark indigo fixed-top">
                <a class="navbar-brand" href="index.php">
                    <img src="img/icon128sf.png" height="30" class="d-inline-block align-top" alt="GeTalent Logo"> GeTalent
                </a>
            </nav>
        </div>
        <!-- Full Page Intro -->
        <div class="bg">
            <div class="view">
                <!-- Mask & flexbox options-->
                <div class="mask rgba-gradient align-items-center">
                    <!-- Content -->
                    <div class="container">
                        <!--Grid row-->
                        <div class="row mt-5">
                            <!--Introdução-->
                            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Seja bem-vindo ao GeTalent! </h1>
                                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s">Insira as informações requisitadas.</h6>
                                <a onclick="location.href = 'index.php';" class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.3s">Voltar</a>
                            </div>
                        </div>
                        <!---->
                        <div class="col-md-6 col-xl-5 mb-4">
                            <!--Form-->
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                <div class="card-body">
                                    <!--Header-->
                                    <div class="text-center">
                                        <h3 class="white-text">
                                            <i class="fas fa-user white-text"></i> Colaborador</h3>
                                        <hr class="hr-light">
                                    </div>
                                    <form method="POST" action="proc_cad_col.php" class="border border-light p-5">

                                        <p class="h4 mb-4 white-text text-center">Cadastro</p>
                                       
                                        <input required type="number" id="idColab" name="idColab" class="form-control" placeholder="ID"><br>
                                        <input required pattern=".{8,}" type="password" name="senhaColab" title="Mínimo 8 caracteres" ype="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Senha" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text white-text text-muted mb-4">Mínimo 8 caracteres</small>
                                        <div class="col-md-6 mb-0 mt-md-0 mt-5 white-text text-center text-md-left">
                                            <button class="btn btn-info my-4 btn-indigo" name="register" type="submit">Cadastrar</button>
                                        </div>
                                     <p class="text-center red-text">
                                     <?php
                                            if(isset($_SESSION['erro'])) {
                                              echo $_SESSION['erro'];
                                                unset($_SESSION['erro']);
                                            }
                                        ?>
                                        </p>


                                    </form>
                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>
    <!-- Main navigation -->
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="js/cadcol.js"></script>
</body>

</html>