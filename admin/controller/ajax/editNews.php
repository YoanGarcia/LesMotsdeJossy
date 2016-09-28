<?php 
	require_once '../controller.php';

	$controller = new Controller();	

	$controller->auth();
	$hide = '0';
	$imageFinale = '';

	if(!empty($_POST)){
		$post = array_map('trim', array_map('strip_tags', $_POST));

		if(isset($post['hide'])){
			$hide = $post['hide'];
		}

		if(isset($post['img'])){
			$imageFinale = $post['img'];
		}

		if(!isset($post['ajax']) || $post['ajax'] != 'ajax'){
			die();
		}
	}
	else{
		die();
	}

	$folder = '../../../img/theme/'.$post['theme'].'/';

	if(!empty($_FILES)){
		if(isset($_FILES['picture']) && $_FILES['picture']['error'] == UPLOAD_ERR_OK) {
			$fileName = $_FILES['picture']['name']; // Nom de mon image
			$fileTemp = $_FILES['picture']['tmp_name']; // Image temporaire

			$newFileName = explode('.', $fileName);
			$fileExtension = end($newFileName); // Récupère l'extension du fichier

			$finalFileName = $post['theme'].'-'.$post['id'].'.'.$fileExtension;

			if(move_uploaded_file($fileTemp, $folder.$finalFileName)) {
				// Ici je suis sur que mon image est au bon endroit
				$imageFinale = 'img/theme/'.$post['theme'].'/'.$finalFileName;
			}
		}
	}

	$controller->updateNews($imageFinale, $post['content'], $hide, $post['id']);
?>
<img src="../<?=$imageFinale?>?t=<?=time()?>" class="imgGetNews">
<p class="contentnews"><?=$post['content']?></p>
<?php if ($hide == 1): ?>
	<p class="phide" data-hide="1">News non Visible</p>
<?php else: ?>
	<p class="phide" data-hide="0">News Visible</p>
<?php endif ?>
<button type="button" class="btn_modif" data-idNews="<?=$post['id']?>">Modifier</button>
<?php 
	unset($_POST);
	unset($_FILES);
?>