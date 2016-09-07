<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('theatre');

	$agenda = $controller->getAgenda('theatre');
?>