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
	<article class="activite<?=$activite['id']?> articleGetActivite" data-theme="<?=$get['theme']?>">

		<div class="divGetActivite inlineblock">

			<h4><?=$activite['title']?><h4>
			<?php if ($activite['type'] == 'video'): ?>
				<iframe class="imgArchive" src="<?=$activite['link']?>" frameborder="0" allowfullscreen></iframe>
			<?php else: ?>
				<img src="../<?=$activite['link'].'?t='.time()?>">
			<?php endif ?>
			<p><?=$activite['post_date']?></p>
			<button type="button" class="del_activite" data-theme="<?=$get['theme']?>" data-idActivite="<?=$activite['id']?>">Supprimer</button>

		</div>

	</article>
<?php endforeach; ?>