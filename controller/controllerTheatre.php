<?php 
	require_once 'controller.php';

	$theme = 'acceuil';

	$controller = new Controller();
	
	$news = $controller->getNews($theme);
	$numberNews = count($news);
	
	$activites = $controller->getActivites($theme)
?>