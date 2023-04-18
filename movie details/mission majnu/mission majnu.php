<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission Majnu</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="mm.css">
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
        <img class="idiots" src="https://images.indianexpress.com/2020/12/Sidharth-1.jpeg" alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=nh_GTEpOyzk">
                    <img class="trimg"
                        src="https://cdn.bollywoodmdb.com/fit-in/movies/largethumb/2021/mission-majnu/poster.jpg"
                        alt="Uri: The Surgical Strike trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Mission Majnu
                <div class="star">
                    <img class="starformat" src="Screenshot_2023-03-09_003054-removebg-preview.png" alt="">
                    <p class="rating">
                        9/10
                    </p>
                </div>
                </p>
                <div class="button">
                    <button class="button1">2D</button>
                    <button class="button2">Hindi</button>
                </div>
                <div>
                    <p class="details">2h | Action | Drama</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = 'Mission Majnu';

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
            <h4 class="desc">Mission Majnu is an Indian Hindi-language spy thriller film directed by Shantanu Bagchi and
                produced by Ronnie Screwvala, Amar Butala and Garima Mehta. Starring Sidharth Malhotra, the film takes
                place before and during the Indo-Pakistani War of 1971.r</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Sidharth_Malhotra">
                <img class="castimgprop1"
                    src="https://imgnew.outlookindia.com/public/uploads/articles/2019/9/19/12_(15).jpg" alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Rashmika_Mandanna">
                <img class="castimgprop"
                    src="https://www.indiaherald.com/Assets/ArticleUpload/20221111122357613_FhQ5aX0UYAEIilx.jpg" alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Parmeet_Sethi">
                <img class="castimgprop"
                    src="https://m.media-amazon.com/images/M/MV5BYjkxYWU0NTgtYzdkZi00OWE1LWE0ZmQtOGQxODZjYzYyNGMwXkEyXkFqcGdeQXVyNjY1MTg4Mzc@._V1_.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Zakir_Hussain_(actor)">
                <img class="castimgprop"
                    src="https://www.koimoi.com/wp-content/new-galleries/2022/02/zakir-hussain-is-fond-of-working-with-young-directors-who-break-the-rules-001.jpg"
                    alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Siddharth Malhotra</h5>
        <h5 class="castnameprop">Rashmika Mandanna</h5>
        <h5 class="castnameprop">Parmeet Sethi</h5>
        <h5 class="castnameprop">Zakir Hussain</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://www.imdb.com/name/nm7424077/">
            <img class="castimgprop1" src="https://static.toiimg.com/thumb/79915459.cms?width=170&height=240" alt="">
        </a>
        <a href="https://www.imdb.com/name/nm5151578/?ref_=tt_cl_wr_1">
            <img class="castimgprop" src="https://www.liveclefs.com/wp-content/uploads/2022/04/Parveez-Sheikh.jpg"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Shantanu Bagchi</h5>
        <h5 class="crewnameprop">Parveez Sheikh</h5>
    </div>
    
    </div>
</body>

</html>