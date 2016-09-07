<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('cocciabeille');

	$agenda = $controller->getAgenda('cocciabeille');
?>