<?php 
	require_once '../controller.php';

    $controller = new Controller();

	if(!empty($_GET)){
		$get = array_map('trim', array_map('strip_tags', $_GET));

		if(isset($get['theme']) && !empty($get['theme'])){
			$news = $controller->getNews($get['theme']);
		}
		else{
			die('theme invalide');
		}
	}
	else{
		die();
	}	
?>
<?php foreach ($news as $new): ?>
	<article class="new<?=$new['id']?>">
		<img src="<?=$new['img_link']?>">
		<p><?=$new['content']?></p>
		<button type="button" class="btn_modif" data-idNews="<?=$new['id']?>">Modifier</button>
	</article>
<?php endforeach; ?>