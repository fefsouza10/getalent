<?php session_start();

if (empty($_SESSION['idColab'])){
    header('Location: index.php');
}

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
    <link href="css/homecol.css" rel="stylesheet">
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
            <div class="col-md-6 mb-5 mt-md-0 mt-5  text-md-left">
                <!-- Card -->
                <div class="card">
                    <!-- Card content -->
                    <form method="POST" action="proc_cad_vaga.php" class="border border-light p-5">
                    <div class="card-body">
                        <input required type="text" name="tituloVaga" id="tituloVaga" class="form-control" placeholder="Título da Vaga"><br>
                        <div class="form-group">
                            <label for="descricaoVaga">Descrição da Vaga</label>
                            <textarea name="descricaoVaga" class="form-control" id="descricaoVaga" rows="4"></textarea>
                        </div>
                        <!-- Button -->
                        <button type="submit" class="btn btn-indigo float-right">Adicionar Vaga</button>

                    </div>
                    </form>
                </div>
            </div>
            <hr>

            <?php
                include_once('conexao.php');
                $query = 'SELECT * FROM vagas ORDER BY  id_vaga DESC';
                foreach($conexao->query($query) as $row){
            ?>
			
            <div class="col-md-6 mb-5 mt-md-0 mt-5 text-md-left"> 
                <!-- Card -->
                <div class="card">
                <img class="card-img-top" src="img/vagax.jpg" alt="Card image cap">
                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h6 class="card-title"><a>Vaga <?php printf("#%d", $row['id_vaga'])?> </a></h6>
                        <h3 class="card-title"><a><?php echo $row['titulo_vaga']?> </a></h3>
                        <!-- Text -->
                        <p class="card-text">Descrição da vaga: <br> <?php echo $row['descricao_vaga']?> </p>
                        <!-- Button -->
                        <form method="POST" action="proc_apaga_vaga.php">
                        <div style="display: none;">
                            <input type="text" name="idVaga" value="<?php echo $row['id_vaga']?>">
                        </div>
                        <button type="submit" class="btn btn-indigo float-right">Deletar</button>
                        </form>
						
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <!--Navbar inferior-->
        <div class="navbar-bt ">
            <nav class="navbar navbar-dark indigo fixed-bottom ">
                <a class="navbar-brand active" href="homecol.php">
                    <img src="img/ic-home-select.png" height="27 " class="d-inline-block align-top " alt="Home ">
                </a>
                <a class="navbar-brand " href="gerenciar_processo.php">
                    <img src="img/ic-search.png " height="27 " class="d-inline-block align-top " alt="Busca ">
                </a>
                <a class="navbar-brand " href="# ">
                    <img src="img/ic-notif.png " height="27 " class="d-inline-block align-top " alt="Notificações ">
                </a>
                <a class="navbar-brand " href="# ">
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
    <script type="text/javascript " src="js/homecol.js "></script>
</body>

</html>