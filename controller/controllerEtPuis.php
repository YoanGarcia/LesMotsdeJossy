<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('etpuis');

	$agenda = $controller->getAgenda('etpuis');
?>