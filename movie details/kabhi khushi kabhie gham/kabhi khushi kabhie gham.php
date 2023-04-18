<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabhi Khushi Kabhi Gham</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="k3g.css">
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
            src="https://www.yashrajfilms.com/images/default-source/Movies/K3G/kabhi-khushi-kabhie-gham_767x430.jpg?sfvrsn=1b3fcfcc_0"
            alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=7uY1JbWZKPA" target="_blank">
                    <img class="trimg"
                        src="https://m.media-amazon.com/images/M/MV5BOTQ5Nzc3NzAtMzZlMS00ZWJjLWIxMGMtNDU4ZTQ1NmNjMjc5XkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg"
                        alt="kabhi khushi kabhi gham trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Kabhi Khushi Kabhie Gham
                <div class="star">
                    <img class="starformat" src="Screenshot_2023-03-09_003054-removebg-preview.png" alt="">
                    <p class="rating">
                        9.5/10
                    </p>
                </div>
                </p>
                <div class="button">
                    <button class="button1">2D</button>
                    <button class="button2">Hindi</button>
                </div>
                <div>
                    <p class="details">2h | Drama</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = 'Kabhi Khushi Kabhie Gham';

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
            <h4 class="desc">Kabhi Khushi Kabhie Gham is a Bollywood family drama film directed by Karan Johar. The
                movie follows the story of a wealthy family, where the eldest son Rahul (played by Shah Rukh Khan) falls
                in love with a girl from a lower social class. Despite objections from his father, Rahul marries the
                girl, leading to a rift in the family. The film explores themes of love, family, and social class.
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Shah_Rukh_Khan" target="_blank">
                <img class="castimgprop1"
                    src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Shah_Rukh_Khan_graces_the_launch_of_the_new_Santro.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Kajol" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/2/29/Kajol_during_the_promotion_of_Tanhaji.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Hrithik_Roshan" target="_blank">
                <img class="castimgprop" src="https://images.mid-day.com/images/images/2022/dec/roshan-afp-sept_d_d.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Amitabh_Bachchan" target="_blank">
                <img class="castimgprop"
                    src="https://cdn.britannica.com/12/215912-050-02257657/Indian-actor-Amitabh-Bachchan-2013.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Jaya_Bachchan" target="_blank">
                <img class="castimgprop"
                    src="https://www.bollywoodhungama.com/wp-content/uploads/2020/04/7-Unknown-facts-about-Jaya-Bachchan.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Kareena_Kapoor" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/6/66/Kareena_Kapoor_at_TOIFA16.jpg" alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Shah Rukh Khan</h5>
        <h5 class="castnameprop2">Kajol</h5>
        <h5 class="castnameprop">Hrithik Roshan</h5>
        <h5 class="castnameprop">Amitabh Bachchan</h5>
        <h5 class="castnameprop">Jaya Bachchan</h5>
        <h5 class="castnameprop">Kareena Kapoor</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Karan_Johar" target="_blank">
            <img class="castimgprop1"
                src="https://static.toiimg.com/thumb/resizemode-4,width-1200,height-900,msid-96818962/96818962.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Yash_Johar" target="_blank">
            <img class="castimgprop" src="https://www.indianetzone.com/photos_gallery/111/01_Yash_Johar.jpg" alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Karan Johar</h5>
        <h5 class="crewnameprop">Yash Johar</h5>
    </div>
 
</body>

</html>