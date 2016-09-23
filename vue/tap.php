<?php 
    require_once '../controller/controllerTap.php';
?>
<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les Mots de Jossy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="fr">
    <meta name="author" content="Yoan Garcia, Alexis Meunier">
    <meta name="description" content="Site de l'association Les Mots de Jossy">
    <meta name="copyright" content="Yoan Garcia, Alexis Meunier">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Font axesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- CSS personnalisé -->
    <link href="../css/styleVue.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body id="page-top" class="backThemeTheatre" data-spy="scroll">

    <!-- Navbar -->
    <nav id="custom-nav" role="navigation">
        <div class="container-fluid backgroundNav">
            <div class="navbar-header page-scroll col-lg-12">
                <a class="navbar-brand page-scroll lienAccueil" href="../index.php">
                    <img id="logo" class="imgLogo" alt="Brand" src="../img/background/logoAsso.jpg" width="170px">
                    <div class="textcenter retourAccueil">
                        <p>Accueil</p>
                    </div>
                </a>
    
                <div class="textcenter">
                    <h1 class="titreTheme">Théâtre</h1>
                </div>

            </div>
        </div>
    </nav>

    <!-- div Global -->
    <div class="container-fluid col-lg-12">

        <!-- Div Description -->
        <div class="description container-fluid col-lg-3">
            <div class="textcenter">
                <h2 class="titreDescription">Description :</h2>
            </div>

            <br><br><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <!-- Section News -->
        <section id="news" class="news container-fluid col-lg-9">
            <div class="titreNews textcenter">
                <h2>Les rendez-vous à ne pas manquer</h2>
            </div>
            <div id="myCarousel" class="carouselVue slide col-lg-7" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php for ($i=0; $i < $numberNews; $i++): ?> 
                        <li data-target="#myCarousel" data-slide-to="<?=$i?>"></li>
                    <?php endfor; ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                   <?php $first = true;?>
                    <?php foreach ($news as $new): ?>
                        <?php if ($first): ?>
                            <div class="item active">
                                <img src="../<?=$new['img_link']?>" class="imgSlide">
                                <p><?=$new['content']?></p>
                            </div>
                            <?php $first = false;?>                    
                        <?php else: ?>
                            <div class="item">
                                <img src="../<?=$new['img_link']?>" class="imgSlide">
                                <p><?=$new['content']?></p>
                            </div>
                        <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </section>

        <!-- Div Contenu -->
        <div class="contenu container-fluid col-lg-3">
            <div class="textcenter">
                <h2 class="titreContenu">Contenu :</h2>
            </div>

            <br><br><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
            
        <!-- Section Archive -->
        <div class="col-lg-1"></div>
        <section id="archive" class="archive container-fluid col-lg-8 inlineblock">
            <div class="titreArchive textcenter">
                <h2>Les activités réalisées</h2>    
            </div>


            <?php foreach ($activites as $activite): ?>
                <?php if ($activite['type'] == 'video'): ?>
                    <div class="divArchive textcenter">
                        <h4 class="titreDivArchive"><?=$activite['title']?></h4>
                        <iframe class="imgArchive" src="<?=$activite['link']?>" frameborder="0" allowfullscreen></iframe>
                        <p class="dateArchive"><?=$activite['post_date']?></p>
                    </div>
                <?php elseif($activite['type'] == 'image'): ?>
                    <div class="divArchive textcenter">
                        <h4 class="titreDivArchive"><?=$activite['title']?></h4>
                        <img src="../<?=$activite['link']?>" class="imgArchive">
                        <p class="dateArchive"><?=$activite['post_date']?></p>
                    </div>
                <?php endif ?>
            <?php endforeach ?>


        </section>

    </div>

    <!-- Footer -->
    <footer>

        <div class="container-fluid textcenter">
            
            <div class="col-lg-2"></div>

            <div class="col-lg-4">
                <h4 class="titreFooter">Les Mots de Jossy</h4>
                
                <br><i class="fa fa-map-marker" aria-hidden="true"></i> BP 12 - 33670 Sadirac
                <br><i class="fa fa-phone-square" aria-hidden="true"></i> 06 30 76 20 13
                <br><i class="fa fa-envelope-square" aria-hidden="true"></i> lesmotsdejossy@orange.fr
                
                <br><br><p>Copyright 2016 &copy; LesMotsdeJossy</p>
            </div>

            <div class="col-lg-4">
                <h4>Tenez-vous au courant</h4>
                
                <br><a href="https://www.facebook.com/laurent.garcia.7967?fref=ts"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a>

            </div>

            <div class="col-lg-2"></div>

        </div>

    </footer>

    <!-- JS personnalisé -->
    <script src="../js/script.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>

</body>

</html>