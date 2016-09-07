<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('francais');

	$agenda = $controller->getAgenda('francais');
?>