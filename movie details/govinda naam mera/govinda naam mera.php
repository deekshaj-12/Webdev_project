<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Govinda Naam Mera</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="gnm.css">
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
        <img class="idiots" src="https://m.timesofindia.com/photo/96172501.cms" alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=VArgIuiwxig">
                    <img class="trimg" src="https://images.news18.com/ibnlive/uploads/2022/12/govinda-naam-mera.jpg"
                        alt="Govinda Naam Mera trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Govinda Naam Mera
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
                    <p class="details">2h | Drama | Comedy</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = 'Govinda Mera Naam';

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
            <h4 class="desc">Govinda Naam Mera is a Bollywood comedy-drama film directed by Hemen Gupta. The film
                follows the story of a man named Govinda, played by Shashi Kapoor, who is falsely accused of a crime he
                didn't commit. Govinda seeks to clear his name and restore his reputation while also trying to win the
                heart of his love interest, played by Sharmila Tagore.</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Vicky_Kaushal" target="_blank">
                <img class="castimgprop1"
                    src="https://images.hindustantimes.com/img/2021/12/08/1600x900/4614293a-5775-11ec-ba48-cf98c20b89f1_1638944726659.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Kiara_Advani" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/6/67/Kiara_Advani_walks_for_Shyamal-Bhumika_at_India_Couture_Week_2018_Day_4_%2803%29_%28cropped%29.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Bhumi_Pednekar" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/3/31/Bhumi_Pednekar_promoting_Sonchiriya.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Renuka_Shahane" target="_blank">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Renuka_Shahane_%28at_Premiere_of_Marathi_film_%27Mission_Possible%27%29.jpg"
                    alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Vicky Kaushal</h5>
        <h5 class="castnameprop">Kiara Advani</h5>
        <h5 class="castnameprop">Bhumi Pednekar</h5>
        <h5 class="castnameprop2">Renuka Shahane</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Shashank_Khaitan" target="_blank">
            <img class="castimgprop1"
                src="https://m.media-amazon.com/images/M/MV5BMjMxMjMyNTk3N15BMl5BanBnXkFtZTgwODI0MzA3MTI@._V1_.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Karan_Johar" target="_blank">
            <img class="castimgprop"
                src="https://static.toiimg.com/thumb/resizemode-4,width-1200,height-900,msid-96818962/96818962.jpg"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Shashank Khaitan</h5>
        <h5 class="crewnameprop">Karan Johar</h5>
    </div>
    
</body>

</html>