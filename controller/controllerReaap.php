<?php 
	require_once 'controller.php';

	$controller = new Controller();

	$news = $controller->getNews('reaap');

	$agenda = $controller->getAgenda('reaap');
?>