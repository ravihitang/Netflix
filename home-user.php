<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/netflix-icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/home-user.css">
    <link rel="stylesheet" href="./css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl/owl.theme.default.min.css">

    <title>Netflix-clone</title>
</head>

<body>
    <header>
       <a href="./index.php"><img src="./assets/img/logo.png"></a>
        <nav>
            <ul class="menu-nav">
                <li>
                    <a>Navebar <i class="fas fa-sort-down"></i></a>

                    <ul class="submenu">
                        <li><a href="#film">Start</a></li>
                        <li><a href="#series">Series</a></li>
                        <li><a href="">Films</a></li>
                        <!-- <li><a href="">pumping</a></li> -->
                        <li><a href=""> My list</a></li>
                        <!-- <li><a href="">watch again</a></li> -->
                    </ul> 

                </li>
                <li><a href="">Start</a></li>
                <li><a href="#series">Series</a></li>
                <li><a href="#film">Films</a></li>
                <!-- <li><a href="">pumping</a></li> -->
                <li><a href="">My lists</a></li>
                <!-- <li><a href="">watch again</a></li> -->
            </ul>
        </nav>

        <ul class="menu-icons">
            
            <input type="text" id="key">
            <button id="sb"><img src="./assets/img/lupa.png" class="icons" alt=""></button>
            <!-- <li><img src="./assets/img/lupa.png" class="icons"></li> -->
            <!-- <li type="button" onclick="localStorage"><a href="search.html">Search</a></li> -->
            <li><img src="./assets/img/presente.png" class="icons"></li>
            <li><img src="./assets/img/sino.png" class="icons"></li>
            <li><img src="./assets/img/perfil01.png" class="icons"></li>
        </ul>

    </header>

    <main>
        <div class="container">
            <div class="movie-main">
                <img src="./assets/img/movietime.jpg" alt="">
                
            </div>
            
            <div class="buttons">
                <button class="btn play">
                    <i class="fas fa-play"></i>
                    To attend
                </button>

                <button class="btn info">
                    <i class="fas fa-info-circle"></i>
                    More information
                </button>
            </div>
        </div>
    </main>

    <section>
        <div class="carousel-movies" id="film">
            <div class="container-movies">
                <h2>Continue watching</h2>
                <div class="owl-carousel owl-theme" id="continue"></div>
            </div>

            <div class="container-movies">
                <h2>in high</h2>
                <div class="owl-carousel owl-theme" id="emAlta"></div>
            </div>

            <div class="container-movies">
                <h2>Because you watched Fullmetal Alchemist</h2>
                <div class="owl-carousel owl-theme" id="pqAssistiu"></div>
            </div>

            <div class="container-movies" id="series">
                <h2>Netflix Originals</h2>
                <div class="owl-carousel owl-theme" id="original"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-footer">
            <div class="midias">
                <img src="./assets/img/fb.png" alt="">
                <img src="./assets/img/instagram.png" alt="">
                <img src="./assets/img/twitter.png" alt="">
                <img src="./assets/img/youtube.png" alt="">

            </div>

            <ul class="listas">
                <li>Language and Subtitles</li>
                <li>audio description</li>
                <li>help center</li>
                <li>Prepaid card</li>
                <li>Press</li>
                <li>relationship with investors</li>
                <li>careers</li>
                <li>Terms of use</li>
                <li>Privacy</li>
                <li>Legal Notices</li>
                <li>Cookie Preferences</li>
                <li>corporate information</li>
                <li>Contact</li>
            </ul>

            <a>service code</a>
        </div>
    </footer>



    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="./js/owl/jquery.min.js"></script>
    <script src="./js/owl/owl.carousel.min.js"></script>
     <script src="./js/home.js"></script>
    <!--<script src="./js/home1.js"></script>
    <script src="./js/search.js"></script> -->
</body>
</html>