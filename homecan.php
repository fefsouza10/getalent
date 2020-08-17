<?php session_start();

if (empty($_SESSION['emailCand'])){
    header('Location: index.php');
}

include_once('conexao.php');
$email = $_SESSION['emailCand'];

    $query = "SELECT * FROM candidatos WHERE email_cand='$email'";
    $res = mysqli_query($conexao, $query);
    $row = mysqli_fetch_array($res);

    $id_cand = $row['id_cand'];
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
    <link href="css/homecan.css" rel="stylesheet">
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
                <h1 class="h1-responsive text-center fadeInLeft" data-wow-delay="0.3s">Vagas disponíveis </h1>
                <p class="text-center red-text">
                                        <?php
                                            if(isset($_SESSION['erro'])) {
                                              echo $_SESSION['erro'];
                                                unset($_SESSION['erro']);
                                            }
                                        ?>
                                        </p>
            </div>
            <?php
                include_once('conexao.php');
                $query = 'SELECT * FROM vagas ORDER BY  id_vaga DESC';
                foreach($conexao->query($query) as $row){
            ?>
            <div class="col-md-6 mb-5 mt-md-0 mt-5 text-md-left"> 
                <!-- Card -->
                <div class="card">

                    <!-- Card image -->
                    <img class="card-img-top" src="img/vagax.jpg" alt="Card image cap">

                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h6 class="card-title"><a>Vaga <?php printf("#%d", $row['id_vaga'])?> </a></h6>
                        <h3 class="card-title"><a><?php echo $row['titulo_vaga']?> </a></h6>
                        <!-- Text -->
                        <p class="card-text">Descrição da vaga: <br> <?php echo $row['descricao_vaga']?> </p>
                        <!-- Button -->
                        <form method="POST" action="proc_candidatura_vaga.php">
                        <div style="display: none;">
                            <input type="number" name="idVaga" value="<?php echo $row['id_vaga']?>">
                            <input type="number" name="id_cand" value="<?php echo $id_cand?>">
                        </div>
                        <button type="submit" class="btn btn-indigo float-right">Candidatar</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            <?php
                }
            ?>


            <!--Grid column-->
        </div>
        <!--Grid row-->

        <!-- Content -->
        </div>
        <!--Navbar inferior-->
        <div class="navbar-bt ">
            <nav class="navbar navbar-dark indigo fixed-bottom ">
                <a class="navbar-brand " href="homecan.php ">
                    <img src="img/ic-home-select.png" height="27 " class="d-inline-block align-top " alt="Home ">
                </a>
                <a class="navbar-brand " href="# ">
                    <img src="img/ic-search.png " height="27 " class="d-inline-block align-top " alt="Busca ">
                </a>
                <a class="navbar-brand " href="# ">
                    <img src="img/ic-notif.png " height="27 " class="d-inline-block align-top " alt="Notificações ">
                </a>
                <a class="navbar-brand " href="perfilcan.php">
                    <img src="img/ic-profile.png " height="27 " class="d-inline-block align-top " alt="Perfil ">
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
    <script type="text/javascript " src="js/homecan.js "></script>
</body>

</html>