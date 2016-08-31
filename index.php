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
                <a class="inlineblock" href="theme1.php">
                    <div class="divTheme">
                        <h2>Thème 1</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme2.php">
                    <div class="divTheme">
                        <h2>Thème 2</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 3</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 4</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 5</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 6</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 7</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 8</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 9</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 10</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 11</h2>
                    </div>
                </a>
                <a class="inlineblock" href="theme3.php">
                    <div class="divTheme">
                        <h2>Thème 12</h2>
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
                    <label for="phone">Téléphone</label>
                    <input type="email" name="email" id="email" placeholder="Entrez votre email">

                    <br><br>
                    <label for="message" class="txtgrey">Message</label><br>
                    <textarea type="text" name="message" rows="4" cols="40" placeholder="Entrez votre message"></textarea>

                    <br><br>
                    <input type="submit" value="Envoyer" class="bouton_inscription">
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
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
