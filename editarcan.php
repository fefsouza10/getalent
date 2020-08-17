<?php session_start();

if (empty($_SESSION['emailCand'])){
    header('Location: index.php');
}

include('proc_perfil_can.php');
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
    <link href="css/perfilcan.css" rel="stylesheet">
    <!-- Icon do GeT-->
    <link rel="icon" href="img/icon128sf.png" type="image/x-icon" />
</head>

<body>
    <header>
        <!-- Navbar superior-->
        <div class="navbar">
            <nav class="navbar navbar-dark indigo fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="img/icon128sf.png" height="30" class="d-inline-block align-top" alt="GeTalent Logo"> GeTalent
                </a>
                <a class="logout" href="logout.php">
                    <img src="img/ic-logout.png" height="30" class="d-inline-block align-top" alt="Logout">
                </a>
            </nav>
        </div>
        <!-- Full Page Intro -->
        <div class="bg">
            <!--Grid column-->
            <div class="col-md-6 mb-5 mt-md-0 mt-5 text-md-left">
                <!-- Card -->
                <div class="card testimonial-card">

                    <!-- Background color -->
                    <div class="card-up indigo lighten-1"></div>

                    <!-- Avatar -->
                    <div class="avatar mx-auto white">
                        <img src="img/perfil.jpg" class="rounded-circle" alt="avatar">
                    </div>

                    <!-- Content -->
                    <div class="card-body">
                        <!-- Name -->
                        <h3 class="card-title"><?php printf("#%d %s %s",$id,$nome,$sobrenome) ?></h3>
                        <hr>
                        <!-- Quotation -->
                        <form method="POST" action="proc_editar_can.php" class="border border-light p-5"> 
                            <input required type="text" value="<?php echo $nome?>" name="newNomeCand" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nome"><br>

                            <input required type="text" value="<?php echo $sobrenome?>" name="newSobrenomeCand" id="defaultRegisterFormLastName" class="form-control" placeholder="Sobrenome"><br>

                            <input required readonly="readonly" value="<?php echo $email?>" type="email" name="newEmailCand" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

                            <input pattern=".{8,}" readonly="readonly" type="password" name="newSenhaCand" title="Mínimo 8 caracteres" ype="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Senha" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text black-text text-muted mb-4">Mínimo 8 caracteres</small>

                            <label for="textInput" class=" ">Data de Nascimento</label>
                            <input required type="date" value="<?php echo $data?>" name="newDataCand" id="inputMDEx" class="form-control" placeholder="Data"><br>

                            <input required readonly="readonly" value="<?php echo $cpf?>" name="newCpfCand" oninput="mascara(this)" type="text" id="CPC" class="form-control mb-4" placeholder="CPF">
 
                            <div class="col-md-6 mb-0 mt-md-0 mt-5 white-text text-center text-md-left">
                                <button name="voltar" onclick="location.href = 'perfilcan.php';" class="btn btn-info my-4 btn-indigo" type="submit">Voltar</button>
                                <button name="editar" class="btn btn-info my-4 btn-indigo" type="submit">Salvar</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- Card -->
            </div>

            <!--Grid row-->

            <!-- Content -->
        </div>
        <!--Navbar inferior-->
        <div class="navbar-bt ">
            <nav class="navbar navbar-dark indigo fixed-bottom ">
                <a class="navbar-brand " href="homecan.php">
                    <img src="img/ic-home.png " height="27 " class="d-inline-block align-top " alt="Home ">
                </a>
                <a class="navbar-brand " href="# ">
                    <img src="img/ic-search.png " height="27 " class="d-inline-block align-top " alt="Busca ">
                </a>
                <a class="navbar-brand " href="# ">
                    <img src="img/ic-notif.png " height="27 " class="d-inline-block align-top " alt="Notificações ">
                </a>
                <a class="navbar-brand " href="perfilcan.php">
                    <img src="img/ic-profile-select.jpg" height="27 " class="d-inline-block align-top " alt="Perfil ">
                </a>
            </nav>
        </div>
        <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
        </div>
    </header>
    <!--Main Layout-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript " src="js/jquery-3.4.1.min.js "></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript " src="js/popper.min.js "></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript " src="js/bootstrap.min.js "></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript " src="js/mdb.min.js "></script>
    <!-- Custom JS-->
    <script type="text/javascript " src="js/perfilcan.js "></script>
</body>

</html>