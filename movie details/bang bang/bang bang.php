<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bang Bang</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="bb.css">
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
            src="https://mir-s3-cdn-cf.behance.net/project_modules/1400/08c8e419714343.562df2488a51a.jpg" alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=NhIFVlsHzwQ">
                    <img class="trimg" src="https://www.whoa.in/download/bang-bang---2014-bollywood-movie-hd-poster"
                        alt="Bang Bang trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Bang Bang
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
    $mname = 'Bang Bang';

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
            <h4 class="desc">Bang Bang is a 2014 Indian action drama directed by Siddharth Anand.
                It follows a mysterious thief on the run, whose encounter with an unassuming bank receptionist sets off
                a chain of events resulting in a series of escapadesr</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Hrithik_Roshan">
                <img class="castimgprop1"
                    src="https://assets.gqindia.com/photos/5fdc6eb81c519f6c10ba2d2f/3:2/w_1620,h_1080,c_limit/Hrithik-Roshan%20(2).jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Katrina_Kaif">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Katrina_Kaif_promoting_Bharat_in_2019.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Pavan_Malhotra">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Pawan_Malhotra_in_2017_%28cropped%29.jpg/220px-Pawan_Malhotra_in_2017_%28cropped%29.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Danny_Denzongpa">
                <img class="castimgprop"
                    src="https://static.toiimg.com/thumb/resizemode-4,width-1200,height-900,msid-64289760/64289760.jpg"
                    alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Hrithik Roshan</h5>
        <h5 class="castnameprop">Katrina Kaif</h5>
        <h5 class="castnameprop">Pavan Malhotra</h5>
        <h5 class="castnameprop">Danny Denzongpa</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Siddharth_Anand">
            <img class="castimgprop1"
                src="https://www.bollywoodhungama.com/wp-content/uploads/2016/03/Siddharth-Anand.jpg" alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Sujoy_Ghosh">
            <img class="castimgprop"
                src="https://static.toiimg.com/thumb/msid-88835610,width-400,resizemode-4/88835610.jpg" alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Prashant_Shah">
            <img class="castimgprop" src="https://tradersgurukul.com/res/img/44/thumbNail" alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Siddharth Anand</h5>
        <h5 class="crewnameprop">Sujoy Ghosh</h5>
        <h5 class="crewnameprop">Prashant Shah</h5>
    </div>
   
    </div>
</body>

</html>