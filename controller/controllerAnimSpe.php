<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('animspe');

	$agenda = $controller->getAgenda('animspe');
?>