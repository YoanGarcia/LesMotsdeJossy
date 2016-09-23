<?php
    require_once 'controller/controller.php';

    $controller = new Controller();


    if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));

        $controller->connect($post['connexion_email'], $post['connexion_password']);
    }

    $connected = $controller->isConnect();
?>
