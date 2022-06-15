<?php
if ( isset( $_POST[ 'submit' ] ) ) {
    $name = $_POST[ 'name' ];
    $subject = $_POST[ 'subject' ];
    $mailFrom = $_POST[ 'mail' ];
    $mess = $_POST[ 'message' ];

    $mailTo = "marekhovancak@mcu.studenthosting.sk";
    $headers = "From: " . $mailFrom;
    $txt =

        mail( $mailTo, $subject, $name, $headers );
    header( "sadfsadf" );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="MCU,Marvel,Iron Man,Thor,Thanos,Spider Man">
    <meta name="description" content="MCU">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto|Ubuntu|Gugi" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/custome.css">
    <link rel="stylesheet" type="text/css" href="css/movies.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="icon" href="img/icon/marvel-icon.png">
    <title>MCU</title>
</head>
<body>
<nav id="nav">
    <div class="menu-logo" id="logo">
        <a href="home.html" target="_self"><img src="img/icon/marvel-logo.png" alt="Marvel"></a>
    </div>
    <div class="menu-toggle">
        <span class="line1"></span>
        <span class="line2"></span>
        <span class="line3"></span>
    </div>
    <div class="menu-container">
        <ul class="menu">
            <li><a href="characters.html" class="menu-link" target="_self"><span>Characters</span></a></li>
            <li><a href="movies.html" class="menu-link" target="_self"><span>Movies</span></a></li>
            <li><a href="items.html" class="menu-link" target="_self"><span>Items</span></a></li>
            <li><a href="contact.html" class="menu-link" target="_self"><span>Contact</span></a></li>
            <li><a href="about.html" class="menu-link" target="_self"><span>About</span></a></li>
        </ul>
    </div>
</nav>
<main id="content">
    <div class="info-box" style="background-image :url('img/wallpaper/contact-back.jpg');">
        <div class="info-text">
            <h1 class="info-title">Contact us</h1>
        </div>
    </div>
    <div class="form">
        <form action="php/mail.php" method="post">
            <div class="indi">
                <label for="name">Name</label>
                <input class="inputClick" type="text" name="name" minlenght="5" maxlength="128" required autofocus>
            </div>
            <div class="indi">
                <label>Mail</label>
                <input class="inputClick" type="email" name="mail" maxlength="256" required>
            </div>
            <div class="indi">
                <label>Subject</label>
                <input class="inputClick" type="text" name="subject" minlenght="3" maxlength="128" required>
            </div>
            <div class="indi">
                <label>Phone number</label>
                <input class="inputClick" type="text" name="phNumber" minlenght="7">
            </div>
            <div class="indi">
                <label>Your questions</label>
                <textarea class="inputClick" name="message" rows="5" minlenght="5" required>

					</textarea>
            </div>
            <div class="indi">
                <input id="btn" type="submit" name="submitBtn" value="Submit">
            </div>
        </form>
    </div>
</main>
<footer>
    <div class="footer-links">
        <div class="footer-logo">
            <img src="img/icon/marvel-logo.png" alt="MCU">
        </div>
        <div class="social-nets">
            <a href="https://www.facebook.com/Marvel/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/marvel/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/marvel" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://twitter.com/marvel" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <p class="rights">2019 MCU</p>
</footer>
<script src="js/jQuery.js"></script>
<script src="js/custome.js"></script>
<script src="js/contact.js"></script>
</body>
</html>
