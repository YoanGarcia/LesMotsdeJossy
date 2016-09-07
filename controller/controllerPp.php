<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('pp');

	$agenda = $controller->getAgenda('pp');
?>