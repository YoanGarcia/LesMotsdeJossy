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
                <li><a href="#" class="theme" data-theme="retraite">Animation Retraite</a></li>
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

        lien.forEach(function(value, index, array){
            value.addEventListener('click', function(){
                console.log(this.getAttribute('data-theme'));
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

        </section>
    </main>
    </body>
</html>
