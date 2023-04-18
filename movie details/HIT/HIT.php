<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIT</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="HIT.css">
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
        <img class="idiots" src="https://thepopcornuniverse.in/wp-content/uploads/2022/07/HIT_Poster_Landscape.jpg"
            alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=JtdCIn47v5g" target="_blank">
                    <img class="trimg"
                        src="https://cdn.bollywoodmdb.com/fit-in/movies/largethumb/2022/hit-the-first-case/poster.jpg"
                        alt="Bang Bang trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">HIT
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
    $mname = 'HIT';

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
            <h4 class="desc">HIT: The First Case is an Indian Hindi-language action suspense-thriller film written and
                directed by Sailesh Kolanu.It is the story of Vikram, a
                32-year-old cop. While he is battling with his own traumatic past, the stakes get high when a girl
                called Preethi mysteriously disappears in Hyderabad and Vikram has to solve the case at any cost..</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Rajkummar_Rao" target="_blank">
                <img class="castimgprop1" src="https://images.indianexpress.com/2022/01/rajkummar-rao-1.jpg" alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Sanya_Malhotra" target="_blank">
                <img class="castimgprop"
                    src="https://m.media-amazon.com/images/M/MV5BMzUzNjQ4MTE2OF5BMl5BanBnXkFtZTgwNTk0NjcyNzM@._V1_.jpg"
                    alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Rajkummar Rao</h5>
        <h5 class="castnameprop">Sanya Malhotra</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Sailesh_Kolanu" target="_blank">
            <img class="castimgprop1"
                src="https://szcdn.ragalahari.com/mar2020/hd/sailesh-kolanu-hit-interview/sailesh-kolanu-hit-interviewthumb.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Girish_Kohli" target="_blank">
            <img class="castimgprop" src="https://nettv4u.com/imagine/11-06-2022/girish-kohli.png" alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Sailesh Kolanu</h5>
        <h5 class="crewnameprop">Girish Kohli</h5>
    </div>
    
</body>

</html>