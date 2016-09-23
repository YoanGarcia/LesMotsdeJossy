<?php 
	require_once '../controller.php';

    $controller = new Controller();

    $controller->auth();

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
	<article class="new<?=$new['id']?> articleGetNews divGetNews inlineblock" data-theme="<?=$get['theme']?>">

		<img src="../<?=$new['img_link']?>?t=<?=time()?>" class="imgGetNews">
		<p class="contentnews"><?=$new['content']?></p>
		<?php if ($new['hide'] == 1): ?>
			<p class="phide" data-hide="1">News non Visible</p>
		<?php else: ?>
			<p class="phide" data-hide="0">News Visible</p>
		<?php endif ?>
		<button type="button" class="btn_modif" data-idNews="<?=$new['id']?>">Modifier</button>

	</article>
<?php endforeach; ?>