<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('animretraite');

	$agenda = $controller->getAgenda('animretraite');
?>