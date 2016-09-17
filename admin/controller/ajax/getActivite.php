<?php 
	require_once '../controller.php';

    $controller = new Controller();

    $controller->auth();

	if(!empty($_GET)){
		$get = array_map('trim', array_map('strip_tags', $_GET));

		if(isset($get['theme']) && !empty($get['theme'])){
			$activites = $controller->getActivites($get['theme']);
		}
		else{
			die('theme invalide');
		}
	}
	else{
		die();
	}
?>
<?php foreach ($activites as $activite): ?>
	<article class="activite<?=$activite['id']?>" data-theme="<?=$get['theme']?>">
		<h1><?=$activite['title']?><h1>
		<?php if ($activite['type'] == 'video'): ?>
			<iframe class="imgArchive" src="https://www.youtube.com/embed/<?=$activite['link']?>" frameborder="0" allowfullscreen></iframe>
		<?php else: ?>
			<img src="../<?=$activite['link']?>?t=<?=time()?>">
		<?php endif ?>
		<p><?=$activite['post_date']?></p>
		<button type="button" class="del_activite" data-idNews="<?=$activite['id']?>">Supprimer</button>
	</article>
<?php endforeach; ?>