<?php 
	if(!empty($_POST)){
		$post = array_map('trim', array_map('strip_tags', $_POST));

		if(!isset($post['ajax']) || $post['ajax'] != 'ajax'){
			die();
		}
	}
	else{
		die();
	}

	$folder = '../img/theme/'.$post['theme'].'/';

	if(!empty($_FILES)){
		if(isset($_FILES['picture']) && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
			$fileName = $_FILES['picture']['name']; // Nom de mon image
			$fileTemp = $_FILES['picture']['tmp_name']; // Image temporaire

			$newFileName = explode('.', $fileName);
			$fileExtension = end($newFileName); // Récupère l'extension du fichier

			$finalFileName = $post['theme'].'-'.$post['id'].'.'.$fileExtension;

			if(move_uploaded_file($fileTemp, $folder.$finalFileName)) {
				// Ici je suis sur que mon image est au bon endroit
				$imageFinale = 'img/'.$finalFileName;
			}
			else{
				die('Erreur copie');
			}
		}
		else{
			var_dump($_FILES['picture']['error']);
			die('Erreur upload');
		}
	}
?>