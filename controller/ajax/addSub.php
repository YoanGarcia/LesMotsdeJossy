<?php 
	require_once '../controller.php';

	$controller = new Controller();

	if(!empty($_POST)){
		$post = array_map('trim', array_map('strip_tags', $_POST));

		if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
			echo 'invalid';
			die();
		}

		$add = $controller->addNewsletterSub($post['email']);

		if($add['errors']){
			echo 'errors';
			die();
		}
		if($add['success']){
			echo 'success';
			die();
		}
	}
?>