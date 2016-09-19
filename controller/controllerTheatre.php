<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('acceuil');
	$numberNews = count($news);
?>