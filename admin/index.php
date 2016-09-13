<?php
    
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
        
        var btn = function(){
            var btn_modif = document.querySelectorAll('.btn_modif');

            btn_modif.forEach(function(value, index, array){
                value.addEventListener('click', function(){
                    var newID = this.getAttribute('data-idNews');

                    var content = document.querySelector('.new'+ newID +' p').textContent;
                    var img_link = document.querySelector('.new'+ newID +' img').getAttribute('src');

                    var image_profil = document.querySelector('#image_profil');


                    document.querySelector('.new'+ newID).innerHTML = '' +
                    '<img id="preview">' +
                    '<form method="POST" enctype="multipart/form-data">'+
                        '<label for="img_link">Image</label>' +
                        '<input type="hidden" name="MAX_FILE_SIZE" value="50000">' +
                        '<input type="file" name="picture" id="picture">' +
                        '<label for="content">Contenu</label>' +
                        '<textarea id="content" name="textarea" rows="10" cols="50">' + content + '</textarea>' +
                        '<input type="submit" value="Valider">' + 
                    '</form>';

                    var img_new = document.querySelector('#picture');
                    var preview = document.querySelector('#preview');

                    img_new.addEventListener('change', function(e){
                        preview.setAttribute('src', window.URL.createObjectURL(img_new.files[0]));
                    });
                });
            });
        }

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
                
            });
        });
    </script>
    <main>
        <section class="form_connexion">
            <form method="post">
                <label for="connexion_email">Email</label>
                <input id="connexion_email" type="email" name="connexion_email">
                <br>
                <label for="connexion_password">Mots de passe</label>
                <input id="connexion_password" type="password" name="connexion_password">
                <br>
                <input type="submit" value="Connexion">
            </form>
        </section>

        <section class="news">
            <p>azeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeazeaze</p>
        </section>
    </main>
    </body>
</html>
