<?php
    require_once 'controller/controller.php';

    $controller = new Controller();

    $controller->auth();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
    </head>
    <body>
    <header>
        
    </header>
    <aside>
        <nav>
            <ul>
                <li><a href="#" class="theme" data-theme="test">Animation Retraite</a></li>
                <li><a href="#" class="theme" data-theme="spe">Animation S.P.E</a></li>
                <li><a href="#" class="theme" data-theme="as">A.S</a></li>
                <li><a href="#" class="theme" data-theme="cocci">Cocciabeille</a></li>
                <li><a href="#" class="theme" data-theme="etpuis">EtPuis</a></li>
                <li><a href="#" class="theme" data-theme="fikidi">Fikidi</a></li>
                <li><a href="#" class="theme" data-theme="francais">Francais</a></li>
                <li><a href="#" class="theme" data-theme="manif">Manif</a></li>
                <li><a href="#" class="theme" data-theme="pp">P.P</a></li>
                <li><a href="#" class="theme" data-theme="reaap">R.E.A.A.P</a></li>
                <li><a href="#" class="theme" data-theme="tap">T.A.P</a></li>
                <li><a href="#" class="theme" data-theme="theatre">Theatre</a></li>
            </ul>
        </nav>
    </aside>
    <script>
        var lien = document.querySelectorAll('.theme');
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
                    var content = document.querySelector('.new'+ newID +' p').textContent;
                    var hide = document.querySelector('.new'+ newID +' p.phide').getAttribute('data-hide');
                    var img_link = document.querySelector('.new'+ newID +' img').getAttribute('src');
                    var theme = document.querySelector('.new'+ newID).getAttribute('data-theme');
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
    <main>
        <h1>News</h1>
        <section class="news">
        </section>
        <h1>activités</h1>
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
    </main>
    </body>
</html>
