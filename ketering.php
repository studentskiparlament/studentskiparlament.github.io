<?php
include('php-assets/user_session.php');
$categories_sql="SELECT * from kategorija";
$categories_result=mysqli_query($connection, $categories_sql);

?>
<!DOCTYPE html>
<html lang="en">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<link href="css/ketering.css" rel="stylesheet">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109808964-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109808964-1');
    </script>

    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Salate u tegli! Narucite ketering! Salate pogodne za sve tipove proslava!">
    <meta name="keywords" content="salate u tegli, salate, tegla, teglas, ketering, usluge, ketering usluge, ketering salate"/>
    <meta name="author" content="BPP team">
    <title>Salad in a jar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '536966099993520');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=536966099993520&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->


</head>
<body>
<nav class="navbar navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="index.php">YUMMY SALADS</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proizvodi <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        while ($c=mysqli_fetch_array($categories_result, MYSQLI_ASSOC)) {
                            ?>
                            <li><a href="salate.php?category_id=<?php echo $c['idkategorija']; ?>"><?php echo $c['naziv_kategorije']; ?></a></li>
                            <li role="separator" class="divider"></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a href="o_nama.php">O nama</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="ketering.php">Ketering</a></li>
                <li><p onmouseover="myNumber(this)" onmouseout="myNumberOut(this)">Naručite na: 069/1-528-560</p></li>
                <script>
                    function myNumber(x) {
                        x.style.color= "#46B778";
                    }

                    function myNumberOut(x) {
                        x.style.color= "white";
                    }
                </script>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="page-header" align="center">
    <div class="icons" align="left">
        <p>Pratite nas na:</p>
        <a href="https://www.facebook.com/yummysaladssu/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://twitter.com/teglasns?lang=en"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/teglans/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    <div id="header">
        <a href="index.php" target="_parent"><img src="images/logo.jpg" style="cursor: pointer"></a>
        <p>Samo u Yummy Salads objektima. Ako nam vratite 10 praznih teglica nazad, dobijate od nas dve PUNE po Vašem izboru za SAMO 1 RSD.</p>
    </div>
</div>


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" align="center">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/about.jpg" alt="picture">
            <div class="carousel-caption">
            </div>
        </div>

    </div>
</div>
<br/>

<div class="ketering-txt">
    <h3>Yummy Salads Ketering za zaposlene</h3><br/>
    <p>Da li ste vlasnik ili zaposleni u kompaniji? Razmišljate o tome sebi pa i svojim kolegama obezbedite zdrave
        dnevne obroke? Svakodnevno na svom poslu se nezdravo hranite, mislite da je tako brže i jednostavnije,
        nemate vremena da pripremite obrok koji ćete poneti na posao ali ste i Sami svesni da to nije dobro po Vašem zdravlju.<br/>
    U pravim ste rukama! Yummy Salads ima pravo rešenje za VAS!<br/><br/>
        Kako bismo Vam izašli u susret, napravili smo jedinstvenu ponudu u vidu saradnje sa kompanijama uz specijalne
        uslove i besplatnu dostavu. Uz ovo Vam nudimo opciju online poručivanja hrane za koju pristup imaju samo zaposleni Vaše firme.<br/>
        Naš meni sadrži ponude koje obuhvataju sve potrebne obroke na dnevnoj bazi. Imamo energy obroke koje možete da pojedete
        za užinu ili doručak, obrok salate koje su veoma izbalansirane da budete u potpunosti siti ali takođe i vitki.
        Za dezert smo Vam spremili neodoljive kolače koje ne smete propustiti. </p>
</div> <br/><br/>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<div class="picture" align="center">
    <img src="images/ketering.jpg" alt="picture" class="img-responsive" />
    <br/>
    <p>Članovi našeg tima:</p>
    <a href="http://www.organska-ishrana.me"><img src="images/sponzori.png" alt="picture" class="banner img-responsive"/></a>
    <a href="http://stanniel.github.io"><img src="images/sponzori2.png" alt="picture" class="banner img-responsive"/></a>

</div>

<br/>

<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <ul class="adress">
                    <span>Adresa</span>
                    <li>
                        <p>Narodnog Fronta 30, Novi Sad</p>
                    </li>

                    <li>
                        <p>069/1-528-560</p>
                    </li>

                    <li>
                        <p>yummysalads@gmail.com</p>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-4">
                <ul class="contact">
                    <span>Kontakt</span>
                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="o_nama.php">O nama</a>
                    </li>

                    <li>
                        <a href="ketering.php">Ketering</a>
                    </li>
                    <?php
                    if (isset($_SESSION['user'])){
                        ?>
                        <li><a href="user_profile.php">Moj Profil</a></li>
                        <li class="right"><a href="php-assets/logout.php">Odjavi se</a> </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <ul class="social">
                    <span>Pratite nas na:</span>
                    <li><a href="https://www.facebook.com/teglasns/?ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/yummysaladssu"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/teglans/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<p align="center" style="color: white; background-color:#004020">Copyright © salate.me 2017<br/>Ovaj sajt je namenjen isključivo u ŠKOLSKE svrhe</p>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
</body>
</html>