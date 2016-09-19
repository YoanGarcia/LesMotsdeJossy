<?php
    require_once 'controller/controller.php';

    $controller = new Controller();


    if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));

        $controller->connect($post['connexion_email'], $post['connexion_password']);
    }

    $connected = $controller->isConnect();
?>

<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN MDJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="fr">
    <meta name="author" content="Yoan Garcia, Alexis Meunier">
    <meta name="description" content="Site de l'association Les Mots de Jossy">
    <meta name="copyright" content="Yoan Garcia, Alexis Meunier">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- Font axesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- CSS personnalisé -->
    <link href="../css/styleAdmin.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- SweetAlert -->
    <script src="../js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../css/sweetalert.css">
</head>

<body id="page-top" class="backAdmin" data-spy="scroll">

    <!-- Navbar -->
    <nav id="custom-nav" role="navigation">
        <div class="container-fluid backgroundNav">
            <div class="navbar-header page-scroll col-lg-12">
                <a class="navbar-brand page-scroll lienAccueil" href="../index.php">
                    <img id="logo" class="imgLogo" alt="Brand" src="../img/background/logoAsso.jpg" width="170px">
                    <div class="textcenter retourAccueil">
                        <p>Accueil</p>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <div class="col-lg-12 textcenter">
        <h1 class="titreAdmin">Administration Les Mots de Jossy</h1>
        <br><br><br><br>
    </div>
    
    <div class="container-fluid">

        <?php if ($connected): ?>

        <div class="col-lg-2"></div>

        <a href="editNews.php">
            <div class="col-lg-3 divChoix textcenter">
                <h2>Modifier un thème</h2>
            </div>
        </a>

        <div class="col-lg-2"></div>

        <a href="addPartenaire.php">
            <div class="col-lg-3 divChoix textcenter">
                <h2>Ajouter un partenaire</h2>
            </div>
        </a>

        <div class="col-lg-2"></div>

        <?php else: ?>

    </div>

    <div class="col-lg-5"></div>

    <div class="container col-lg-2">
        <form method="post" class="form-signin textcenter">
            <h2 class="form-signin-heading">Connexion requise</h2>

            <br><br>
            <label for="connexion_email" class="sr-only">Email</label>
            <input type="text" id="connexion_email" class="form-control" name="connexion_email" placeholder="Email" required autofocus>
            
            <label for="connexion_password" class="sr-only">Password</label>
            <input type="password" id="connexion_password" class="form-control" name="connexion_password" placeholder="Mots de passe" required>

            <br><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
        </form>
        <?php endif ?>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS personnalisé -->
    <script src="../js/script.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>

</body>

</html>