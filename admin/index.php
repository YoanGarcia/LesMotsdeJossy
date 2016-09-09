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
                <li><a href="http://www.google.fr" class="theme_1">1</a></li>
                <li><a href="http://www.google.fr" class="theme_2">2</a></li>
                <li><a href="http://www.google.fr" class="theme_3">3</a></li>
                <li><a href="http://www.google.fr" class="theme_4">4</a></li>
                <li><a href="http://www.google.fr" class="theme_5">5</a></li>
                <li><a href="http://www.google.fr" class="theme_6">6</a></li>
                <li><a href="http://www.google.fr" class="theme_7">7</a></li>
                <li><a href="http://www.google.fr" class="theme_8">8</a></li>
                <li><a href="http://www.google.fr" class="theme_9">9</a></li>
                <li><a href="http://www.google.fr" class="theme_10">10</a></li>
                <li><a href="http://www.google.fr" class="theme_11">11</a></li>
                <li><a href="http://www.google.fr" class="theme_12">12</a></li>
            </ul>
        </nav>
    </aside>
    <script>
        var theme_1 = document.querySelector('.theme_1');
        var theme_2 = document.querySelector('.theme_2');
        var theme_3 = document.querySelector('.theme_3');

        theme_1.addEventListener('click', function(e){
            e.preventDefault();
            console.log('click theme_1');
        });

        theme_2.addEventListener('click', function(e){
            e.preventDefault();
            console.log('click theme_2');
        });

        theme_3.addEventListener('click', function(e){
            e.preventDefault();
            console.log('click theme_3');
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

        </section>
    </main>
    </body>
</html>
