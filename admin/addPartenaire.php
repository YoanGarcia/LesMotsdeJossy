<?php 
	require_once 'controller/controller.php';

	$controller = new Controller();	

	$controller->auth();

	$imageFinale = '';

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

	$controller->addPartenaire($post['nom'], $imageFinale);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ajouter un partenaire</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="text" name="nom"><br>
		<input type="file" name="picture" id="picture"><br>
		<input type="submit" name="ajouter">
	</form>
</body>
</html>