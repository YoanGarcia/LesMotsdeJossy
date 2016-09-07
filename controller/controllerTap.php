<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('tap');

	$agenda = $controller->getAgenda('tap');
?>