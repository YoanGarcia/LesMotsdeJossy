<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('manif');

	$agenda = $controller->getAgenda('manif');
?>