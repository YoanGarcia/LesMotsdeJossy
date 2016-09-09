<?php 
	require_once 'controller.php';

    $controller = new Controller();

	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		if(!empty($_POST)){
			$post = array_map('trim', array_map('strip_tags', $_POST));

			if(isset($post['theme']) && !empty($post['theme'])){
				$news = $controller->getNews($post['theme']);
			}
			else{
				die('Theme vide');
			}
		}
	}
	else{
		die();
	}
?>
<?php foreach ($news as $new): ?>
	<article>
		<img src="<?=$new['img_link']?>">
		<p><?=$new['content']?></p>
	</article>
<?php endforeach; ?>