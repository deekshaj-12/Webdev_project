<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hera Pheri</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="hp.css">
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
        <img class="idiots" src="https://wallpapercave.com/wp/wp6327987.jpg" alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=9Pfit4SC_jk">
                    <img class="trimg" src="https://m.media-amazon.com/images/M/MV5BNDExMTBlZTYtZWMzYi00NmEwLWEzZGYtOTA1MDhmNTc0ODZkXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg"
                        alt="Hera Pheri trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Hera Pheri
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
    $mname = 'Hera Pheri';

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
            <h4 class="desc">"Hera Pheri" is a Bollywood comedy film directed by Priyadarshan and released in 2000. It
                follows a trio of individuals who get involved in a scheme to get rich quick. They receive a wrong
                number phone call from a kidnapper and decide to impersonate the kidnapper in order to collect
                the ransom money.</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Akshay_Kumar" target="_blank">
                <img class="castimgprop1"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Akshay_Kumar.jpg/330px-Akshay_Kumar.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Suniel_Shetty" target="_blank">
                <img class="castimgprop" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/The_Minister_of_State_for_Youth_Affairs_%26_Sports_and_Information_%26_Broadcasting_%28IC%29%2C_Col._Rajyavardhan_Singh_Rathore_with_Suniel_Shetty%2C_Gul_Panag_and_Milind_Sonam%2C_at_the_Fit_India_Campaign%2C_in_New_Delhi_on_May_26%2C_2018_%28cropped%29.JPG/330px-thumbnail.jpg" alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Paresh_Rawal" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Paresh_Rawal_still4.jpg/330px-Paresh_Rawal_still4.jpg"
                    alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Akshay Kumar</h5>
        <h5 class="castnameprop">Suniel Shetty</h5>
        <h5 class="castnameprop">Paresh Rawal</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Priyadarshan" target="_blank">
            <img class="castimgprop1"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Priyadarshan_at_a_press_conference_for_%E2%80%98Kamaal_Dhamaal_Malamaal%E2%80%99_%28cropped%29.jpg/330px-Priyadarshan_at_a_press_conference_for_%E2%80%98Kamaal_Dhamaal_Malamaal%E2%80%99_%28cropped%29.jpg"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Priyadarshan</h5>
    </div>
   
</body>

</html>