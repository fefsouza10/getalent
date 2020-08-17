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
                <h1 class="h1-responsive text-center fadeInLeft" data-wow-delay="0.3s">Candidaturas de Vaga</h1>
            </div>
            <hr>
			
            <?php
                include_once('conexao.php');
					
				$query = "SELECT a.id_candidatura, c.id_vaga, c.titulo_vaga, b.nome_cand, b.sobrenome_cand, b.email_cand, b.cpf_cand FROM candidaturas a, candidatos b, vagas c where b.id_cand = a.id_cand and c.id_vaga = a.id_vaga";
                foreach($conexao->query($query) as $row){
            ?>
            <div class="col-md-6 mb-5 mt-md-0 mt-5 text-md-left"> 
			<h3 class="card-title"><a>Vaga: <?php echo($row['id_vaga'])?> - <?php echo($row['titulo_vaga'])?> </a></h3>
			<br>
                <!-- Card -->
                <div class="card">
                    <!-- Card content -->
                    <div class="card-body">
						
                        <!-- Title -->
						
                        <h6 class="card-title"><a>Candidatura: <?php echo($row['id_candidatura'])?></a></h6>
                        <h3 class="card-title"><a><?php echo $row['nome_cand']?> <?php echo $row['sobrenome_cand']?> 	</a></h3>
                        <!-- Text -->
                        <p class="card-text">Email: <?php echo $row['email_cand']?><br> <?php echo $row['cpf_cand']?>  </p>
		
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
                <a class="navbar-brand " href="homecol.php">
                    <img src="img/ic-home.png " height="27 " class="d-inline-block align-top " alt="Home ">
                </a>
                <a class="navbar-brand " href="# ">
                    <img src="img/ic-search-select.png" height="27 " class="d-inline-block align-top " alt="Busca ">
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