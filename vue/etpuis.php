<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Les Mots de Jossy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="fr">
    <meta name="author" content="Yoan Garcia, Alexis Meunier">
    <meta name="description" content="Site de l'association LesMotsdeJossy">
    <meta name="copyright" content="Yoan Garcia, Alexis Meunier">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Font axesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- CSS personnalisé -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll">

    <!-- Section Info -->
    <section>
        
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="container-fluid">
            <div class="row text-center">
                <h2>Nous contacter</h2>

                <form method="POST">
                    <label for="lastname">Nom</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Entrez votre nom">

                    <br>
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Entrez votre prénom">                    

                    <br>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Entrez votre email">

                    <br>
                    <label for="phone">Téléphone ( facultatif )</label>
                    <input type="email" name="email" id="email" placeholder="Entrez votre email">

                    <br><br>
                    <label for="message" class="txtgrey">Message</label><br>
                    <textarea type="text" name="message" rows="4" cols="40" placeholder="Entrez votre message"></textarea>

                    <br><br>
                    <input type="submit" value="Envoyer">
            </form>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Les Mots de Jossy</strong></h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>adresse</li>
                        <li><i class="fa fa-phone-square" aria-hidden="true"></i>telephone</li>
                        <li><i class="fa fa-envelope-square" aria-hidden="true"></i>lesmotsdejossy@orange.fr</li>
                        </li>
                    </ul>
                    <p>Copyright 2016 &copy; LesMotsdeJossy</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS personnalisé -->
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.js"></script>

</body>

</html>