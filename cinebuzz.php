<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBuzz</title>
    <link rel="icon" type="image/png" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="cinebuzz.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <script src="login/session/cinebuzz.js" type="text/javascript"></script>
    <div class="topnav">
    <button class = "logobutton" onclick="window.location.href = 'movie details/raazi/movie1.php'">
        <img class="logo" src="login/session/images/logo.png">
    </button>
    <input type="text" id="search-box" placeholder="Search for movies...">
<div id="search-results"></div>

        <div class="tags">
            <a class="active" href="#home">Home</a>
            <a href="/cinebuzz/login/sign up.php">Sign Up</a>
            <a href="/cinebuzz/login/index.php">Sign-in</a>
        </div>
    </div>
    <br><br>
    <br><br>
    <div id="slideshow">

        <div class="slide-wrapper">
            <div class="slide">
                <img src="login/session/images/wide image 1.jpeg" height="310px" width="720px">
            </div>
            <div class="slide">
                <img src="login/session/images/wide image 2.jpg" height="310px" width="720px">
            </div>
            <div class="slide">
                <img src="login/session/images/wide image 3.jpg" height="310px" width="720px">
            </div>
            <div class="slide">
                <img src="login/session/images/wide image 4.jpeg" height="310px" width="720px">
            </div>
            <div class="slide">
                <img src="login/session/images/wide image 5.jpeg" height="310px" width="720px">
            </div>
        </div>
    </div>
    
    <br><br>
    <h2 class="heading">Recommended Movies</h2>
    <div class="see">
        <button class="seemore"><u>See More</u></button>
    </div>

    <div class="slideshow-container">
        <div class="mySlides3 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/3 idiots.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/bang bang.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/bang bang/bb.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/k3g.jpg" product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/k3g/k3g.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/rrr.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/rrr/rrr.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/hera pheri.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/hera pheri/hp.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides3 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/hit.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/HIT/hit.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/main tera hero.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/main tera hero/mth.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/mission majnu.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/mission majnu/mm.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 8.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/rang de basanti/rdb.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/rrr.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/rrr/rrr.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides3 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/hny.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/happy new year/hny.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/uri.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/uri/uri.php'" ;>BOOK
                            NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/gmn.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/govinda naam mera/gnm.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/chennai express.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/chennai express/ce.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/coolie no. 1.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/coolie no1/c1.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev3" onclick="plusSlides3(-1)">&#10094;</a>
        <a class="next3" onclick="plusSlides3(1)">&#10095;</a>
    </div>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot3" onclick="currentSlide3(1)"></span>
        <span class="dot3" onclick="currentSlide3(2)"></span>
        <span class="dot3" onclick="currentSlide3(3)"></span>
    </div>

    <script>
        let slideIndex3 = 1;
        showSlides3(slideIndex3);

        // Next/previous controls
        function plusSlides3(n3) {
            showSlides3(slideIndex3 += n3);
        }

        // Thumbnail image controls
        function currentSlide3(n3) {
            showSlides3(slideIndex3 = n3);
        }

        function showSlides3(n3) {
            let j;
            let slides3 = document.getElementsByClassName("mySlides3");
            let dots3 = document.getElementsByClassName("dot3");
            if (n3 > 3) { slideIndex3 = 1 }
            if (n3 < 1) { slideIndex3 = 3 }
            for (j = 0; j < 3; j++) {
                slides3[j].style.display = "none";
            }
            for (j = 0; j < 3; j++) {
                dots3[j].className = dots3[j].className.replace(" active3", "");
            }
            slides3[slideIndex3 - 1].style.display = "block";
            dots3[slideIndex3 - 1].className += " active3";
        }

    </script>


    <br><br>

    <h2 class="heading">Comedy</h2>
    <div class="slideshow-container">
        <div class="mySlides1 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/3 idiots.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/main tera hero.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 8.jpg" product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/coolie no. 1.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/hny.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides1 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 5.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 6.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 7.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 8.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 4.webp" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides1 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 11.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 14.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/Yeh_jawani_hai_deewani.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 10.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="login/session/images/poster 4.webp" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

    
    </div>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot1" onclick="currentSlide1(1)"></span>
        <span class="dot1" onclick="currentSlide1(2)"></span>
        <span class="dot1" onclick="currentSlide1(3)"></span>
    </div>

    <script>
        let slideIndex1 = 1;
        showSlides1(slideIndex1);

        // Next/previous controls
        function plusSlides1(n1) {
            showSlides1(slideIndex1 += n1);
        }

        // Thumbnail image controls
        function currentSlide1(n1) {
            showSlides1(slideIndex1 = n1);
        }

        function showSlides1(n1) {
            let j;
            let slides1 = document.getElementsByClassName("mySlides1");
            let dots1 = document.getElementsByClassName("dot1");
            if (n1 > 3) { slideIndex1 = 1 }
            if (n1 < 1) { slideIndex1 = 3 }
            for (j = 0; j < 3; j++) {
                slides1[j].style.display = "none";
            }
            for (j = 0; j < 3; j++) {
                dots1[j].className = dots1[j].className.replace(" active1", "");
            }
            slides1[slideIndex1 - 1].style.display = "block";
            dots1[slideIndex1 - 1].className += " active1";
        }

    </script>


    <br><br>


    <br>
    <br><br><br><br><br><br>
    <div>
        <footer class="footer">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icon">
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>
            </ul>
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="#">About</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

            </ul>
            <p>&copy;2023 Cinebuzz | All Rights Reserved</p>
        </footer>
        <script type="module" src="login/session/images/https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="login/session/images/https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
    <script>
        var loader = document.getElementbyId("preloader");
        window.addEventListener("load", function(){
            loader.style.display = "none";
        })
    </script>
</body>

</html>

