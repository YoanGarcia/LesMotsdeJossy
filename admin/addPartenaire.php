<?php 
    require_once 'controller/controllerPartenaire.php'; 
?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajouter un partenaire</title>
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
        <h1 class="titreAdmin">Ajouter un partenaire</h1>
        <br><br><br><br>
    </div>
    
    <div class="col-lg-3"></div>

    <div class="col-lg-6">
    	
	    <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="form" value="add">
			<input type="text" name="nom" placeholder="Nom du partenaire"><br><br>
			<input type="file" name="picture" id="picture"><br>
			<input type="submit" value="valider">
		</form>

    </div>

	<div class="col-lg-3">
        <?php $partenaires = $controller->getPartenaires(); ?>
        <?php foreach ($partenaires as $partenaire): ?>
            <div class="divPartenaire textcenter">
                <h4 class="titrePartenaire"><?=$partenaire['name']?></h4>
                <img src="../<?=$partenaire['img']?>" class="imgPartenaire">
                <form method="post">
                    <input type="hidden" name="form" value="delete">
                    <input type="hidden" name="id" value="<?=$partenaire['id']?>">
                    <input type="submit" value="Suprimmer">
                </form>
            </div>
        <?php endforeach ?>   
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