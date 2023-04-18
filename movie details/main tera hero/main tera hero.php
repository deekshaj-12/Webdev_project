<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Tera Hero</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="mth.css">
    <!-- <link rel="stylesheet" type="text/css" href="cinebuzz.css"> -->
</head>

<body>
    <script src="movie1.js" type="text/javascript"></script>
    <div class="topnav">
    <img  src="/cinebuzz/login/session/images/logo.png" height="60px" width="100px">
        <input class="search" type="text" placeholder="  Search any movie....">
        <div class="tags">
            <a class="active" href="#home">Home</a>
        </div>
    </div>
    <br><br>
    <div class="intro">
        <img class="idiots" src="https://wallpapercave.com/wp/wp7577631.jpg" alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=aOWB0yGTrNY">
                    <img class="trimg"
                        src="https://image.songsuno.com/movie-images/original/movie/main-tera-hero/main-tera-hero-poster.jpg"
                        alt="Main Tera Hero trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Main Tera Hero
                <div class="star">
                    <img class="starformat" src="Screenshot_2023-03-09_003054-removebg-preview.png" alt="">
                    <p class="rating">
                        7/10
                    </p>
                </div>
                </p>
                <div class="button">
                    <button class="button1">2D</button>
                    <button class="button2">Hindi</button>
                </div>
                <div>
                    <p class="details">2h | Comedy | Drama</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = 'Main Tera Hero';

    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'cinebuzz1');

    // Check if the connection was successful
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Insert the movie name into the temp_ticket table
    $sql = "UPDATE temp_ticket SET mname ='$mname' WHERE user_name IS NOT NULL";
    $result=mysqli_query($conn, $sql);
    header("Location: \cinebuzz\login\session\movie details\show\show.php");
    mysqli_close($conn);
}
?>
<form method="POST">
    <button type="submit" name="submit" value="Submit" class="cbtn">BOOK NOW</button>
</form>
                </div>
            </div>
        </div>
        <div>
            <h2 class="CCA">About</h2>
            <h4 class="desc">Main Tera Hero is a 2014 Hindi romantic comedy starring Varun Dhawan, Nargis Fakhri and
                Ileana D’Cruz. Seenu is in love with Sunaina but has to fend off corrupt officer Angad, who too loves
                her. When things finally seem hunky-dory, Sunaina gets kidnapped. To save her, Seenu must marry Ayesha,
                the daughter of her kidnapper. Will Seenu’s love for Sunaina help him save her?</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Varun_Dhawan">
                <img class="castimgprop1"
                    src="https://upload.wikimedia.org/wikipedia/commons/7/74/Varun_Dhawan_promoting_Badrinath_Ki_Dulhania.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Ileana_D%27Cruz">
                <img class="castimgprop"
                    src="https://im.idiva.com/content/2019/Sep/iDiva_Illeana_Trolls_Thumbnail_5d70e6807e69f.jpg?w=790&h=590&cc=1"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Nargis_Fakhri">
                <img class="castimgprop"
                    src="https://short-biography.com/wp-content/uploads/nargis-fakhri/Nargis-Mohammed-A.-Fakhri.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Arunoday_Singh">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/0/0f/Arunoday_at_J-2_promo.jpg" alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Varun Dhawan</h5>
        <h5 class="castnameprop">Ileana D’Cruz</h5>
        <h5 class="castnameprop">Nargis Fakhri</h5>
        <h5 class="castnameprop">Arunoday Singh</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/David_Dhawan">
            <img class="castimgprop1"
                src="https://m.media-amazon.com/images/M/MV5BZDEwMWZiZGMtNTdlYS00NTUyLTk2MzMtMDdhYWQ1NjgzMmUzXkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Milap_Zaveri">
            <img class="castimgprop"
                src="https://static.toiimg.com/thumb/msid-65366168,imgsize-67324,width-800,height-600,resizemode-75/65366168.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Tushar_Hiranandani">
            <img class="castimgprop"
                src="https://static.toiimg.com/thumb/msid-77933035,imgsize-194944,width-800,height-600,resizemode-75/77933035.jpg"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">David Dhawan</h5>
        <h5 class="crewnameprop">Milap Zaveri</h5>
        <h5 class="crewnameprop">Tushar Hiranandani</h5>
    </div>

</body>

</html>