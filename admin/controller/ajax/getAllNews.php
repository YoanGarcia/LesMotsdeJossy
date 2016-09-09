<?php 
	require_once 'controller.php';

    $controller = new Controller();

	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
		if(!empty($_POST)){
			$post = array_map('trim', array_map('strip_tags', $_POST));

			if(isset($post['theme']) && !empty($post['theme'])){
				$news = $controller->getNews($post['theme']);

				foreach ($news as $new) {
					
				}
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


<?php foreach ($variable as $key => $value): ?>
	<article>
		<img src="">
		<p></p>
	</article>
<?php endforeach; ?>