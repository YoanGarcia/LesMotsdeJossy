<?php 
	require_once 'controller.php';

	$theme = 'manif';

	$controller = new Controller();
	
	$news = $controller->getNews($theme);
	$numberNews = count($news);
	
	$activites = $controller->getActivites($theme)
?>