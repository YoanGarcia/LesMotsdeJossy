<?php
    require_once 'controller/controllerDefaut.php';
    require_once 'inc/head.php'; 
?>

            <img class="titreLogo" alt="BrandTitle" src="img/background/titreAsso.jpg" width="550px">
        </div>

        <br>
        <div class="inlineBlock textcenter containerTheme">
            <a class="inlineblock" href="vue/theatre.php">
                <div class="divTheme">
                    <h3>Théâtre</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>A partir de 4 ans</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/as.php">
                <div class="divTheme themeAs">
                    <h3>Accompagnement à la scolarité</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>Primaire et collège</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/manif.php">
                <div class="divTheme themeManif">
                    <h3>Manifestations culturelles</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>Tout public</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/animretraite.php">
                <div class="divTheme themeAnimretraite">
                    <h3>Animation en maison de retraite</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>Seniors</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/filkidi.php">
                <div class="divTheme themeFilkidi">
                    <h3>Filkidi</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>18 mois à 6 ans</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/reaap.php">
                <div class="divTheme themeReaap">
                    <h3>REAAP</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>La famille</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/tap.php">
                <div class="divTheme themeTap">
                    <h3>Temps d'activités périscolaires</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>3 à 11 ans</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/francais.php">
                <div class="divTheme themeFrancais">
                    <h3>Lire, écrire, parler le français</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>Enfants et adultes</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/animspe.php">
                <div class="divTheme themeAnimspe">
                    <h3>Etablissements spécialisés</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>Enfants et adultes</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/cocciabeille.php">
                <div class="divTheme themeCocciabeille">
                    <h3>Coccinelles et abeilles</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>Enfants porteurs de handicap</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/pp.php">
                <div class="divTheme themePp">
                    <h3>Printemps des Poètes</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>Pour tous</p>
                </div>
            </a>
            <a class="inlineblock" href="vue/etpuis.php">
                <div class="divTheme themeEtpuis">
                    <h3>Et puis</h3>
                    <img src="img/theme/theatre/theatre1.jpg" class="themeTheatre">
                    <p>Pour tous</p>
                </div>
            </a>
        </div>
    </div>
</nav>

<!-- Section News -->
<section id="news" class="news">
    <div class="titreNews textcenter">
        <h2>Les rendez-vous à ne pas manquer</h2>
    </div>
	<div class="col-lg-1"></div>
    <div id="myCarousel" class="carousel slide col-lg-10" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/slide/accueil/slide1.jpg" class="imgSlide">
            </div>

            <div class="item">
                <img src="img/slide/accueil/slide2.png" class="imgSlide">
            </div>

            <div class="item">
                <img src="img/slide/accueil/slide3.png" class="imgSlide">
            </div>

            <div class="item">
                <img src="img/slide/accueil/slide4.jpg" class="imgSlide">
            </div>

            <div class="item">
                <img src="img/slide/accueil/slide5.jpg" class="imgSlide">
            </div>

            <div class="item">
                <img src="img/slide/accueil/slide6.jpg" class="imgSlide">
            </div>
        </div>
    </div>
    <div class="col-lg-1"></div>

    <div class="textcenter">
        <h2>
            <a class="newsletter">Notre newsletter</a>
        </h2>
    </div>
</section>

<!-- Section Info -->
<section id="info" class="info container-fluid">
    
    <div class="textcenter">
        <h2 class="titreInfo">Qui sommes nous et que faisons-nous ?</h2>
        <iframe width="700" height="394" class="videoYT" src="https://www.youtube.com/embed/-Q7wUbtT9gk" frameborder="0" allowfullscreen></iframe>
    </div>

</section>

<!-- Contact -->
<section id="contact" class="contact container-fluid">

    <div class="formContact container col-lg-6">
        <form method="POST" class="form-signin textcenter">
            <h2 class="form-signin-heading textcenter titreFormContact">Nous contacter</h2>
            
            <label for="lastname" class="sr-only">Nom</label>
            <input type="text" name="contact_lastname" id="lastname" class="form-control textFormContact" placeholder="Votre nom" required>
            
            <br>
            <label for="firstname" class="sr-only">Prénom</label>
            <input type="text" name="contact_firstname" id="firstname" class="form-control textFormContact" placeholder="Votre prénom" required>

            <br>
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="contact_email" id="email" class="form-control textFormContact" placeholder="Votre email" required>

            <br>
            <label for="phone" class="sr-only">Téléphone ( facultatif )</label>
            <input type="int" name="contact_phone" id="phone" class="form-control textFormContact" placeholder="Votre téléphone ( facultatif )">

            <br>
            <label for="message" class="sr-only">Message</label>
            <textarea type="text" name="contact_msg" rows="4" cols="40" class="form-control textFormContact" placeholder="Entrez votre message" required></textarea>

            <br>
            <button class="boutonFormContact" type="submit">Envoyer</button>
        </form>
    </div>

    <div class="container col-lg-6">
        <div class="divCarteContact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d90558.8426728483!2d-0.4865803908661007!3d44.82230143271088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf346fe4565aa7d48!2sMairie+de+Sadirac!5e0!3m2!1sfr!2sfr!4v1472818306674" width="645" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

</section>

<!-- Section Partenaire -->
<section id="partenaire" class="partenaire container-fluid inlineblock">
    
    <div class="titreSectionPartenaire textcenter">
        <h2>Nos Partenaires</h2>    
    </div>

    <?php foreach ($partenaires as $partenaire): ?>
        <div class="divPartenaire textcenter">
            <h4 class="titrePartenaire"><?=$partenaire['name']?></h4>
            <img src="<?=$partenaire['img']?>" class="imgPartenaire">
        </div>
    <?php endforeach ?>
    
</section>

<?php require_once 'inc/footer.php'; ?>