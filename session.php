<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBuzz</title>
    <link rel="icon" type="image/png" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="session.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <script src="cinebuzz.js" type="text/javascript"></script>
    <div class="topnav">
    <button class = "logobutton" onclick="window.location.href = '/cinebuzz/login/session.php'">
        <img class="logo" src="images/logo.png">
    </button>
    <input type="text" id="search-box" placeholder="Search for movies...">
<div id="search-results"></div>

        <div class="tags">
            <a class="active" href="#home">Home</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <br><br>
    <br><br>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
$(document).ready(function() {
    $("#search-box").autocomplete({
        source: "process.php",
        minLength: 2,
        select: function(event, ui) {
            window.location.href = "http://localhost/cinebuzz/login/session/movie%20details/" + ui.item.value + "/" + ui.item.value + ".php";
        },
    });
});

</script>


    <div id="slideshow">
        <div class="slide-wrapper">
            <div class="slide">
                <img src="images/wide image 1.avif" height="310px" width="720px">
            </div>
            <div class="slide">
                <img src="images/wide image 2.jpg" height="310px" width="720px">
            </div>
            <div class="slide">
                <img src="images/wide image 3.jpg" height="310px" width="720px">
            </div>
            <div class="slide">
                <img src="images/wide image 4.jpeg" height="310px" width="720px">
            </div>
            <div class="slide">
                <img src="images/wide image 5.jpeg" height="310px" width="720px">
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
                        <img class="posters" src="images/3 idiots.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3 idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/bang bang.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/bang bang/bang bang.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/k3g.jpg" product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/kabhi khushi kabhie gham/kabhi khushi kabhie gham.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/rrr.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/rrr/rrr.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/hera pheri.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/hera pheri/hera pheri.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides3 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="images/hit.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/HIT/hit.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/main tera hero.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/main tera hero/main tera hero.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/mission majnu.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/mission majnu/mission majnu.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 8.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/rang de basanti/rang de basanti.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/rrr.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/rrr/rrr.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides3 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="images/hny.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/happy new year/happy new year.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/uri.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/uri/uri.php'" ;>BOOK
                            NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/gmn.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/govinda naam mera/govinda naam mera.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/chennai express.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/chennai express/chennai express.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/coolie no. 1.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/coolie no1/coolie no1.php'">BOOK NOW</button>
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

    <div class="see">
        <button class="seemore"><u>See More</u></button>
    </div>

    <h2 class="heading">Comedy</h2>
    <div class="slideshow-container">
        <div class="mySlides1 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                    <img class="posters" src="images/3 idiots.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3 idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                    <img class="posters" src="images/main tera hero.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/main tera hero/main tera hero.php'">BOOK NOW</button>
                     </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                    <img class="posters" src="images/hera pheri.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/hera pheri/hera pheri.php'">BOOK NOW</button>
                     </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                    <img class="posters" src="images/hny.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/happy new year/happy new year.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                    <img class="posters" src="images/coolie no. 1.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/coolie no1/coolie no1.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides1 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="images/poster 5.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 6.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 7.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 8.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 4.webp" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides1 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="images/poster 11.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 14.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/Yeh_jawani_hai_deewani.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 10.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 4.webp" class="product-thumb">
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

    <div class="see">
        <button class="seemore"><u>See More</u></button>
    </div>

    <h2 class="heading">Action</h2>
    <div class="slideshow-container">
        <div class="mySlides2 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                    <img class="posters" src="images/uri.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/uri/uri.php'" ;>BOOK
                            NOW</button>
                   </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                    <img class="posters" src="images/bang bang.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/bang bang/bang bang.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                    <img class="posters" src="images/rrr.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/rrr/rrr.php'">BOOK NOW</button>
                   </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                    <img class="posters" src="images/hit.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/HIT/hit.php'">BOOK NOW</button>
                       </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                    <img class="posters" src="images/mission majnu.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/mission majnu/mission majnu.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides2 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="images/poster 5.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 6.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 7.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 8.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 4.webp" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides2 fade">
            <div class="div_posters">
                <div class="product-card" style="margin-left: 1.87%;">
                    <div class="product-image">
                        <img class="posters" src="images/poster 11.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 14.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/Yeh_jawani_hai_deewani.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 10.jpg" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>

                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img class="posters" src="images/poster 4.webp" class="product-thumb">
                        <button class="card-btn" onclick="window.location.href = 'movie details/3 Idiots/3idiots.php'">BOOK NOW</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Next and previous buttons -->
        
    </div>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot2" onclick="currentSlide2(1)"></span>
        <span class="dot2" onclick="currentSlide2(2)"></span>
        <span class="dot2" onclick="currentSlide2(3)"></span>
    </div>

    <script>
        let slideIndex2 = 1;
        showSlides2(slideIndex2);

        // Next/previous controls
        function plusSlides2(n2) {
            showSlides2(slideIndex2 += n2);
        }

        // Thumbnail image controls
        function currentSlide2(n2) {
            showSlides2(slideIndex2 = n2);
        }

        function showSlides2(n2) {
            let j;
            let slides2 = document.getElementsByClassName("mySlides2");
            let dots2 = document.getElementsByClassName("dot2");
            if (n2 > 3) { slideIndex2 = 1 }
            if (n2 < 1) { slideIndex2 = 3 }
            for (j = 0; j < 3; j++) {
                slides2[j].style.display = "none";
            }
            for (j = 0; j < 2; j++) {
                dots2[j].className = dots2[j].className.replace(" active2", "");
            }
            slides2[slideIndex2 - 1].style.display = "block";
            dots2[slideIndex2 - 1].className += " active2";
        }

    </script>

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
        <script type="module" src="images/https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="images/https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>
    <script>
        var loader = document.getElementbyId("preloader");
        window.addEventListener("load", function(){
            loader.style.display = "none";
        })
    </script>
</body>

</html>

