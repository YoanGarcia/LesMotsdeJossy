<?php
    require_once 'controller/controller.php';

    $controller = new Controller();


    if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));

        $controller->connect($post['connexion_email'], $post['connexion_password']);
    }

    $connected = $controller->isConnect();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
    </head>
    <body>
    <main>
    <?php if ($connected): ?>
        <nav>
            <ul>
                <li><a href="editNews.php">modifier un theme</a></li>
                <li><a href="addPartenaire.php">Ajouter un partenaire</a></li>
            </ul>
        </nav>        
    <?php else: ?>
        <section class="form_connexion">
            <form method="post">
                <label for="connexion_email">Email</label>
                <input id="connexion_email" type="text" name="connexion_email">
                <br>
                <label for="connexion_password">Mots de passe</label>
                <input id="connexion_password" type="password" name="connexion_password">
                <br>
                <input type="submit" value="Connexion">
            </form>
        </section>
    <?php endif ?>
    </main>
    </body>
</html>
