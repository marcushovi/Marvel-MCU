<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="MCU,Marvel,Iron Man,Thor,Thanos,Spider Man">
    <meta name="description" content="MCU">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto|Ubuntu|Gugi|Roboto+Condensed:700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/custome.css">
    <link rel="stylesheet" type="text/css" href="css/movies.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="icon" href="img/icon/marvel-icon.png">
    <title>MCU</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141841212-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push( arguments );
        }

        gtag( 'js', new Date() );

        gtag( 'config', 'UA-141841212-1' );
    </script>

</head>
<body>
<!-- menu -->
<nav id="nav">
    <!-- brand logo -->
    <div class="menu-logo" id="logo">
        <a href="index.html" target="_self"><abbr title="Marvel Cinematic Universe"><img src="img/icon/marvel-logo.png"
                                                                                         alt="Marvel"></abbr></a>
    </div>
    <!--"hamburger"-->
    <div class="menu-toggle">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
    </div>
    <!-- navigation -->
    <div class="menu-container">
        <ul class="menu">
            <li><a href="characters.html" class="menu-link" target="_self"><span>Characters</span></a></li>
            <li><a href="movies.html" class="menu-link" target="_self"><span>Movies</span></a></li>
            <li><a href="contact.html" class="menu-link" target="_self"><span>Contact</span></a></li>
            <li><a href="about.html" class="menu-link" target="_self"><span>About</span></a></li>
        </ul>
    </div>
</nav>
<!-- main content -->
<main id="content">
    <!-- Title Contact US with poster -->
    <div class="info-box" style="background-image :url('img/wallpaper/contact-back.jpg');">
        <div class="info-text">
            <h1 class="info-title">Contact us</h1>
        </div>
    </div>
    <!-- Form-->
    <div class="form">
        <!-- PHP code-->
        <p>
            <?php
            $subject = $_POST[ "subject" ];
            $mess = "Name: " . $_POST[ "name" ] . "\nPhone number: " . $_POST[ "phNumber" ] . "\nFavorite hero: " . $_POST[ "hero" ] . "\nFavorite movie: " . $_POST[ "movie" ] . "\n\n" . trim( $_POST[ "message" ] );
            $to = "marekhovancak@mcu.studenthosting.sk";
            $from = $_POST[ "mail" ];
            $mailheaders = "Content-type:text/plain; charset=utf-8\r\n";
            $mailheaders .= "From: $from\r\n";
            mail( $to, $subject, $mess, $mailheaders );
            ?>
        </p>
        <!-- after send form-->
        <div class="after-back">
            <div class="after-mail">
                <h1>Thanks you for email!</h1>
            </div>
        </div>
    </div>
</main>
<footer>
    <!-- social nets links -->
    <div class="footer-links">
        <div class="footer-logo">
            <!-- logo marvel -->
            <abbr title="Marvel Cinematic Universe"><img src="img/icon/marvel-logo.png" alt="Marvel"></abbr>
        </div>
        <!-- sociel nets icon -->
        <div class="social-nets">
            <abbr title="Facebook Marvel"><a href="https://www.facebook.com/Marvel/" target="_blank"><i
                            class="fab fa-facebook-square"></i></a></abbr>
            <abbr title="Instagram Marvel"><a href="https://www.instagram.com/marvel/" target="_blank"><i
                            class="fab fa-instagram"></i></a></abbr>
            <abbr title="Youtube Marvel"><a href="https://www.youtube.com/marvel" target="_blank"><i
                            class="fab fa-youtube"></i></a></abbr>
            <abbr title="Twitter Marvel"><a href="https://twitter.com/marvel" target="_blank"><i
                            class="fab fa-twitter"></i></a></abbr>
        </div>
    </div>
    <!-- rights -->
    <p class="rights">2019 MCU</p>
</footer>
<script src="js/jQuery.js"></script>
<script src="js/custome.js"></script>
</body>
</html>