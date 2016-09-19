<?php 
	require_once 'controller/controller.php';

	$controller = new Controller();	

	$controller->auth();

	$imageFinale = 'aze';

	if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));
    }

	$folder = '../img/partenaire/';

	if(!empty($_FILES)){
		if(isset($_FILES['picture']) && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
			$fileName = $_FILES['picture']['name']; // Nom de mon image
			$fileTemp = $_FILES['picture']['tmp_name']; // Image temporaire

			$newFileName = explode('.', $fileName);
			$fileExtension = end($newFileName); // Récupère l'extension du fichier

			$finalFileName = $post['nom'].'.'.$fileExtension;

			if(move_uploaded_file($fileTemp, $folder.$finalFileName)) {
				// Ici je suis sur que mon image est au bon endroit
				$imageFinale = 'img/partenaire/'.$finalFileName;
			}
		}
	}

	if(!empty($_POST)){
		$controller->addPartenaire($post['nom'], $imageFinale);
	}
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
			<input type="text" name="nom" placeholder="Nom du partenaire"><br><br>
			<input type="file" name="picture" id="picture"><br>
			<input type="submit" name="ajouter">
		</form>

    </div>

	<div class="col-lg-3"></div>

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