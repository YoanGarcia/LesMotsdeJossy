<?php
    require_once 'controller/controller.php';

    $controller = new Controller();

    $controller->auth();

    if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));


    }
?>


<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modifier les Slides</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="fr">
    <meta name="author" content="Yoan Garcia, Alexis Meunier">
    <meta name="description" content="Site de l'association Les Mots de Jossy">
    <meta name="copyright" content="Yoan Garcia, Alexis Meunier">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- Font axesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- CSS personnalisé -->
    <link href="../css/styleAdmin.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- SweetAlert -->
    <script src="../js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../css/sweetalert.css">
</head>

<body id="page-top" class="backAdmin" data-spy="scroll">

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
            </div>
        </div>
    </nav>

    <div class="col-lg-12 textcenter">
        <h1 class="titreAdmin">Choix du Thème</h1>
        <br><br><br><br>
    </div>

    <div class="col-lg-12 textcenter">    
        <a href="#" class="divEditTheme" data-theme="acceuil">Accueil</a>
        <a href="#" class="divEditTheme" data-theme="test">Animation Retraite</a>
        <a href="#" class="divEditTheme" data-theme="spe">Animation S.P.E</a>
        <a href="#" class="divEditTheme" data-theme="as">A.S</a>
        <a href="#" class="divEditTheme" data-theme="cocci">Cocciabeille</a>
        <a href="#" class="divEditTheme" data-theme="etpuis">EtPuis</a>
        <a href="#" class="divEditTheme" data-theme="fikidi">Fikidi</a>
        <a href="#" class="divEditTheme" data-theme="francais">Francais</a>
        <a href="#" class="divEditTheme" data-theme="manif">Manif</a>
        <a href="#" class="divEditTheme" data-theme="pp">P.P</a>
        <a href="#" class="divEditTheme" data-theme="reaap">R.E.A.A.P</a>
        <a href="#" class="divEditTheme" data-theme="tap">T.A.P</a>
        <a href="#" class="divEditTheme" data-theme="theatre">Theatre</a>
    </div>

    <script>
        var lien = document.querySelectorAll('.divEditTheme');
        var xhr = new XMLHttpRequest();
        var xhr2 = new XMLHttpRequest();
        
        var btn = function(){
            var btn_modif = document.querySelectorAll('.btn_modif');
            var del_activite = document.querySelectorAll('.del_activite');

            btn_modif.forEach(function(value, index, array){
                value.addEventListener('click', function(){

                });
            });

            btn_modif.forEach(function(value, index, array){
                value.addEventListener('click', function(){
                    var newID = this.getAttribute('data-idNews');
                    var theme = document.querySelector('.new'+ newID).getAttribute('data-theme');                    
                    var content = document.querySelector('.new'+ newID +' .contentnews').textContent;
                    var hide = document.querySelector('.new'+ newID +' p.phide').getAttribute('data-hide');
                    var img_link = document.querySelector('.new'+ newID +' img').getAttribute('src');
                    var hide_checked = '';

                    if(hide == "1"){
                        hide_checked = 'checked';                        
                    }

                    document.querySelector('.new'+ newID).innerHTML = '' +
                    '<img id="preview" src="'+ img_link + '"><br>' +
                    '<form method="POST" enctype="multipart/form-data" class="form_modif">'+
                        '<label for="img_link">Image</label>' +
                        '<input type="hidden" name="ajax" value="ajax">' +
                        '<input type="hidden" name="id" value="'+ newID +'">' +
                        '<input type="hidden" name="theme" value="'+ theme +'">' +
                        '<input type="hidden" name="img" value="'+ img_link.replace("../", "") +'">' +
                        '<input type="file" name="picture" id="picture"><br>' +
                        '<label for="content">Contenu</label><br>' +
                        '<textarea id="content" name="content" rows="10" cols="50">' + content + '</textarea><br>' +
                        '<input type="checkbox" name="hide" value="1" '+ hide_checked +'>' +
                        '<input type="submit" value="Valider">' + 
                    '</form>';

                    var img_new = document.querySelector('.new'+ newID +' #picture');
                    var preview = document.querySelector('.new'+ newID +' #preview');

                    img_new.addEventListener('change', function(e){
                        preview.setAttribute('src', window.URL.createObjectURL(img_new.files[0]));
                    });

                    form_modif = document.querySelector('.new'+ newID +' .form_modif');

                    form_modif.addEventListener('submit', function(e){
                        e.preventDefault();

                        var request = new XMLHttpRequest();

                        request.open("POST", "controller/ajax/editNews.php");

                        request.onreadystatechange = function(){
                            if(request.readyState === XMLHttpRequest.DONE && request.status === 200) {
                                document.querySelector('.new'+ newID).innerHTML = request.response;
                                btn();
                            }
                        };

                        request.send(new FormData(form_modif));
                    });
                });
            });
        };

        lien.forEach(function(value, index, array){
            value.addEventListener('click', function(){
                document.querySelector('.input_theme').setAttribute('value', this.getAttribute('data-theme'));;

                var method = "GET",
                    url = "controller/ajax/getNews.php?theme=" + this.getAttribute('data-theme');

                xhr.open(method, url, true);
                xhr.onreadystatechange = function () {
                    if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        document.querySelector('.news').innerHTML = xhr.response;
                        btn();
                    }
                };
                xhr.send();

                var method = "GET",
                    url = "controller/ajax/getActivite.php?theme=" + this.getAttribute('data-theme');

                xhr2.open(method, url, true);
                xhr2.onreadystatechange = function () {
                    if(xhr2.readyState === XMLHttpRequest.DONE && xhr2.status === 200) {
                        document.querySelector('.activite').innerHTML = xhr2.response;
                        btn();
                    }
                };
                xhr2.send();
                
            });
        });
    </script>


    <div class="container-fluid textcenter divContenuTheme">

        <h2>Slide</h2>
        <br><br>
        <section class="news">
        </section>

        <h2>activités</h2>
        <br><br>
        <form method="post">
            <input type="hidden" name="theme" class="input_theme" value="">
            <input type="text" name="title" placeholder="Nom de l'activité">
            <input type="text" name="link" id="link_vid" style="display: none;">
            <input type="file" name="picture" id="picture_a"><br>
            <input type="checkbox" name="video" id="check_vid" value="1">
            <input type="submit" name="ajouter">
        </form>

    </div>

    <script type="text/javascript">
        var check_vid = document.querySelector('#check_vid');
        var vid =  document.querySelector('#link_vid');
        var pic = document.querySelector('#picture_a');


        check_vid.addEventListener('click', function(){
            if(check_vid.checked){
                pic.style.display = 'none';
                vid.style.display = 'inline';
            }
            else{
                pic.style.display = 'inline';
                vid.style.display = 'none';
            }
        });
    </script>

    <section class="activite">
    <div class="divArchive textcenter">
        <h4 class="titreDivArchive">AlloWin à Sadirac</h4>
        <img src="../img/theme/theatre/theatre1.jpg" class="imgArchive" width="300" height="150">
        <p class="dateArchive">12 novembre 2008</p>
    </div>

    <div class="divArchive textcenter">
        <h4 class="titreDivArchive">AlloWin à Sadirac</h4>
        <iframe class="imgArchive" src="https://www.youtube.com/embed/Jt98dlAnT-c" frameborder="0" allowfullscreen></iframe>
        <p class="dateArchive">12 novembre 2008</p>
    </div>
    </section>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- JS personnalisé -->
    <script src="../js/script.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>

</body>

</html>