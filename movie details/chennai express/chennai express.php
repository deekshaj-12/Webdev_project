<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chennai Express</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="ce.css">
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
        <img class="idiots"
            src="https://indianfilmseveryday.files.wordpress.com/2013/10/chennai-express-2013-hd-720p-tamil-movie-watch-online-e1496851181775.jpg"
            alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=rARol7Dk2zo" target="_blank">
                    <img class="trimg"
                        src="https://m.media-amazon.com/images/M/MV5BMGI2ZDQ2MzgtNjk2Ny00MTU5LWE0ZWQtM2I5NjRlODY5MGM1XkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg"
                        alt="Chennai Express trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Chennai Express
                <div class="star">
                    <img class="starformat" src="Screenshot_2023-03-09_003054-removebg-preview.png" alt="">
                    <p class="rating">
                        8.5/10
                    </p>
                </div>
                </p>
                <div class="button">
                    <button class="button1">2D</button>
                    <button class="button2">Hindi</button>
                </div>
                <div>
                    <p class="details">2h | Action | Comedy</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = 'Chennai Express';

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
            <h4 class="desc">"Chennai Express" is a Bollywood romantic action-comedy film directed by Rohit Shetty. The
                story revolves around a man named Rahul, played by Shah Rukh Khan, who is tasked with bringing his late
                grandfather's ashes to Rameshwaram, but ends up on a wild adventure when he boards the wrong train and
                meets a girl named Meenamma, played by Deepika Padukone. Together they navigate a dangerous journey
                through the south of India, facing obstacles and falling in love along the way.</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Shah_Rukh_Khan" target="_blank">
                <img class="castimgprop1"
                    src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Shah_Rukh_Khan_graces_the_launch_of_the_new_Santro.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Deepika_Padukone" target="_blank">
                <img class="castimgprop"
                    src="https://m.economictimes.com/thumb/msid-99054899,width-1200,height-900,resizemode-4,imgsize-30724/deepika-padukone.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Nikitin_Dheer" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Nikitin_Dheer_C.E.jpg/220px-Nikitin_Dheer_C.E.jpg"
                    alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Shah Rukh Khan</h5>
        <h5 class="castnameprop">Deepika Padukone</h5>
        <h5 class="castnameprop">Nikitin Dheer</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Rohit_Shetty" target="_blank">
            <img class="castimgprop1"
                src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Rohit_Shetty_snapped_during_Simmba_interviews_at_JW_Marriott_in_Juhu.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Farhad_Samji" target="_blank">
            <img class="castimgprop" src="https://mumbaimirror.indiatimes.com/thumb/67532013.cms?resizemode=4&width=400"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Gauri_Khan" target="_blank">
            <img class="castimgprop"
                src="https://m.media-amazon.com/images/M/MV5BMTg1N2MwOTgtZTRkZi00MDc3LTllYjctZjNiYjg3NWU2YzM0XkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Rohit Shetty</h5>
        <h5 class="crewnameprop">Farhad Samji</h5>
        <h5 class="crewnameprop">Gauri Khan</h5>

    </div>

</body>

</html>