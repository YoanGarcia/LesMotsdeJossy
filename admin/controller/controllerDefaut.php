<?php
    require_once 'controller.php';

    $controller = new Controller();

    $newsAnimRetraite = $controller->getNews('retraite');
    $newsAnimSpe = $controller->getNews('spe');
    $newsAs = $controller->getNews('as');
    $newsCocciabeille = $controller->getNews('cocciabeille');
    $newsEtPuis = $controller->getNews('etpuis');
    $newsFikidi = $controller->getNews('fikidi');
    $newsFrancais = $controller->getNews('francais');
    $newsManif = $controller->getNews('manif');
    $newsPp = $controller->getNews('pp');
    $newsReaap = $controller->getNews('reaap');
    $newsTap = $controller->getNews('tap');
    $newsTheatre = $controller->getNews('theatre');

    $newsletterSub = $controller->getNewsletterSub();

    foreach ($newsletterSub as $sub) {
        echo $sub['email'] . ',<br>';
    }
?>
