<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('fikidi');

	$agenda = $controller->getAgenda('fikidi');
?>