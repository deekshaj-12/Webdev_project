<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolie No.1</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="c1.css">
    <!-- <link rel="stylesheet" type="text/css" href="cinebuzz.css"> -->
</head>

<body>
    <script src="movie1.js" type="text/javascript"></script>
    <div class="topnav">
    <img  src="/cinebuzz/login/session/images/logo.png" height="60px" width="100px">
        <input class="search" type="text" placeholder="  Search any movie....">
        <div class="tags">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
    </div>
    <br><br>
    <div class="intro">
        <img class="idiots" src="https://www.bollywoodhungama.com/wp-content/uploads/2019/04/Coolie-no1-banner.jpg"
            alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=XaZ7jAPdecc">
                    <img class="trimg"
                        src="https://filmfare.wwmindia.com/content/2020/dec/saraalikhancoolieno111607156927.jpg"
                        alt="Coolie No.1 trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Coolie No.1
                <div class="star">
                    <img class="starformat" src="Screenshot_2023-03-09_003054-removebg-preview.png" alt="">
                    <p class="rating">
                        8/10
                    </p>
                </div>
                </p>
                <div class="button">
                    <button class="button1">2D</button>
                    <button class="button2">Hindi</button>
                </div>
                <div>
                    <p class="details">2h | Drama | Comedy</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = 'Coolie No. 1';

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
            <h4 class="desc">"Coolie No. 1" is a 2020 Bollywood comedy film directed by David Dhawan and starring Varun
                Dhawan and Sara Ali Khan in the lead roles. The film is a remake of the 1995 film of the same name. It
                follows the story of a poor but charming coolie who falls in love with a wealthy girl, and pretends to
                be a rich businessman to win her heart. The film features colorful sets, lively music, and plenty of
                laughs.</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Varun_Dhawan" target="_blank">
                <img class="castimgprop1"
                    src="https://upload.wikimedia.org/wikipedia/commons/7/74/Varun_Dhawan_promoting_Badrinath_Ki_Dulhania.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Sara_Ali_Khan" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Sara_Ali_Khan_promoting_Kedarnath.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Paresh_Rawal" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/c/c0/Paresh_Rawal_still4.jpg" alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Varun Dhawan</h5>
        <h5 class="castnameprop">Sara Ali Khan</h5>
        <h5 class="castnameprop">Paresh Rawal</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/David_Dhawan" target="_blank">
            <img class="castimgprop1" src="https://upload.wikimedia.org/wikipedia/commons/c/c7/David_Dhawan.jpg" alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Vashu_Bhagnani" target="_blank">
            <img class="castimgprop" src="https://pbs.twimg.com/profile_images/821199987803652098/td2vcH_f_400x400.jpg"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">David Dhawan</h5>
        <h5 class="crewnameprop">Vashu Bhagnani</h5>
    </div>
   
</body>

</html>