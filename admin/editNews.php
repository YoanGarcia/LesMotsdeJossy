<?php
    require_once 'controller/controllerEditNews.php';
?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier les Slides</title>
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
        <h1 class="titreAdmin">Choix du Thème</h1>
        <br><br><br><br>
    </div>

    <div class="col-lg-12 textcenter">    
        <a href="#" class="divEditTheme" data-theme="acceuil">Accueil</a>
        <a href="#" class="divEditTheme" data-theme="retraite">Animation Retraite</a>
        <a href="#" class="divEditTheme" data-theme="spe">Animation S.P.E</a>
        <a href="#" class="divEditTheme" data-theme="as">A.S</a>
        <a href="#" class="divEditTheme" data-theme="cocci">Cocciabeille</a>
        <a href="#" class="divEditTheme" data-theme="etpuis">EtPuis</a>
        <a href="#" class="divEditTheme" data-theme="fikidi">Fikidi</a>
        <a href="#" class="divEditTheme" data-theme="francais">Francais</a>
        <a href="#" class="divEditTheme" data-theme="manif">Manif</a>
        <a href="#" class="divEditTheme" data-theme="pp">P.P</a>
        <a href="#" class="divEditTheme" data-theme="reaap">R.E.A.A.P</a>
        <a href="#" class="divEditTheme" data-theme="tap">T.A.P</a>
        <a href="#" class="divEditTheme" data-theme="theatre">Theatre</a>
    </div>

    <div class="container-fluid textcenter divContenuTheme">

        <h2>Slide</h2>
        <br><br>
        <section class="news">
        </section>

        <h2>activités</h2>
        <br><br>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="form" value="addActivite">
            <input type="hidden" name="theme" class="input_theme" value="">
            <input type="text" name="title" placeholder="Nom de l'activité">
            <input type="text" name="link" id="link_vid" style="display: none;">
            <input type="file" name="picture" id="picture_a"><br>
            <input type="checkbox" name="video" id="check_vid" value="video">
            <input type="submit" name="ajouter">
        </form>

    </div>

    <section class="activite">
    </section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS personnalisé -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/script.js"></script>
    <script src="js/script.js"></script>

</body>

</html>