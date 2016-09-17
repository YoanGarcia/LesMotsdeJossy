<?php
	require_once '../controller.php';

    $controller = new Controller();

    $controller->auth();

    if(!empty($_POST)){
    	$post = array_map('trim', array_map('strip_tags', $_POST));

    	delete($post['table'], $post['id']);
    }
?>