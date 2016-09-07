<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('as');

	$agenda = $controller->getAgenda('as');
?>