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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font axesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- CSS personnalisé -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll">

    <!-- Navbar -->
    <nav id="custom-nav" role="navigation">
        <div class="container-fluid backgroundNav">
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="index.php">
                <img id="logo" alt="Brand" src="img/logoAsso.png" width="100px"></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <br>
            <div class="inlineBlock textcenter containerTheme">
                <a class="inlineblock" href="vue/theatre.php">
                    <div class="divTheme">
                        <h2>Théatre<br>( a partir de 4 ans )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/as.php">
                    <div class="divTheme">
                        <h2>Accompagnement à la scolarité<br>( primaire et collège )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/manif.php">
                    <div class="divTheme">
                        <h2>Manifestations culturelles<br>( tout public )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/animretraite.php">
                    <div class="divTheme">
                        <h2>Animation en maison de retraite<br>( seniors )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/filkidi.php">
                    <div class="divTheme">
                        <h2>Filkidi<br>( 18 mois à 6 ans )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/reaap.php">
                    <div class="divTheme">
                        <h2>REAAP<br>( la famille )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/tap.php">
                    <div class="divTheme">
                        <h2>Temps d'activités périscolaires<br>( 3 à 11ans )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/francais.php">
                    <div class="divTheme">
                        <h2>Lire, écrire, parler le français<br>( enfants et adultes )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/animspe.php">
                    <div class="divTheme">
                        <h2>Animation en établissement spécialisés<br>( enfants et adultes )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/cocciabeille.php">
                    <div class="divTheme">
                        <h2>Coccinelles et abeilles<br>( mixer les enfants porteurs de handicaps et non porteurs de handicaps )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/pp.php">
                    <div class="divTheme">
                        <h2>Printemps des Poètes<br>( pour tous )</h2>
                    </div>
                </a>
                <a class="inlineblock" href="vue/etpuis.php">
                    <div class="divTheme">
                        <h2>Et puis<br>( pour tous )</h2>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <!-- Section News -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/photo/slide1.jpg">
                </div>

                <div class="item">
                    <img src="img/photo/slide2.png">
                </div>

                <div class="item">
                    <img src="img/photo/slide3.png">
                </div>

                <div class="item">
                    <img src="img/photo/slide4.jpg">
                </div>
            </div>
        </div>
        
    </section>

    <!-- Section Info -->
    <section>
        
    </section>

    <!-- Contact -->
    <section id="contact" class="contact">

        <div class="container">

            <div class="col-lg-2"></div>

            <form class="form-signin col-lg-8">
                <h2 class="form-signin-heading textcenter">Nous contacter</h2>
                
                <label for="lastname" class="sr-only">Nom</label>
                <input type="text" id="lastname" class="form-control" placeholder="Votre nom" required>
                
                <br>
                <label for="firstname" class="sr-only">Prénom</label>
                <input type="text" id="firstname" class="form-control" placeholder="Votre prénom" required>

                <br>
                <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Votre email" required>

                <br>
                <label for="phone" class="sr-only">Téléphone ( facultatif )</label>
                <input type="int" id="phone" class="form-control" placeholder="Votre téléphone ( facultatif )">

                <br>
                <label for="message" class="sr-only">Message</label>
                <textarea type="text" name="message" rows="4" cols="40" class="form-control" placeholder="Entrez votre message" required></textarea>

                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Envoyer</button>
            </form>

        <div class="col-lg-2"></div>

        </div>

    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Les Mots de Jossy</strong></h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>BP 12 - 33670 Sadirac</li>
                        <li><i class="fa fa-phone-square" aria-hidden="true"></i>06 30 76 20 13</li>
                        <li><i class="fa fa-envelope-square" aria-hidden="true"></i>lesmotsdejossy@orange.fr</li>
                        </li>
                    </ul>
                    <p>Copyright 2016 &copy; LesMotsdeJossy</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS personnalisé -->
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
