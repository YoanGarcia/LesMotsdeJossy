<?php
    require_once 'controller/controller.php';

    $controller = new Controller();

    $connected = $controller->isConnect();


    if(!empty($_POST)){
        $post = array_map('trim', array_map('strip_tags', $_POST));

        $controller->connect($post['connexion_email'], $post['connexion_password']);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
    </head>
    <body>
    <main>
    <?php if (!$connected): ?>
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
    <?php else: ?>
        <nav>
            <ul>
                <li><a href="editNews.php">modifier un theme</a></li>
                <li><a href="editPart.php">Ajouter un partenaire</a></li>
            </ul>
        </nav>        
    <?php endif ?>
    </main>
    </body>
</html>
