
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Idiots</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="3idiots.css">
</head>

<body>
    <script src="movie1.js" type="text/javascript"></script>
    <div class="topnav">
        <img class="logo" src="/cinebuzz/login/session/images/logo.png" height="60px" width="100px">
        <input class="search" type="text" placeholder="  Search any movie....">
        <div class="tags">
            <a class="active" href="#home">Home</a>

        </div>
    </div>
    <br><br>
    <div class="intro">
        <img class="idiots" src="3idiots.webp" alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=K0eDlFX9GMc">
                    <img class="trimg" src="3idiotstr.jpg" alt="3 idiots trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">3 idiots
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
                    <p class="details">2h | Comedy | Romance</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = '3 Idiots';

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
            <h4 class="desc">"3 Idiots" is an Indian coming-of-age comedy-drama film directed by Rajkumar Hirani.The
                movie follows the story of three friends, Rancho, Farhan, and Raju, as they navigate through their
                engineering studies at an elite Indian college, with a powerful message about pursuing one's passions
                and defying societal norms</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Aamir_Khan">
                <img class="castimgprop1"
                    src="https://images.hindustantimes.com/rf/image_size_640x362/HT/p1/2014/12/16/Incoming/Pictures/1296947_Wallpaper2.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/R._Madhavan">
                <img class="castimgprop" src="https://static.toiimg.com/photo/58944567.cms" alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Sharman_Joshi">
                <img class="castimgprop" src="https://images.news18.com/ibnlive/uploads/2022/11/sas-1.jpg" alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Kareena_Kapoor">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/6/66/Kareena_Kapoor_at_TOIFA16.jpg" alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Amir Khan</h5>
        <h5 class="castnameprop">R Madhavan</h5>
        <h5 class="castnameprop">Sharman Joshi</h5>
        <h5 class="castnameprop">Kareena Kapoor</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Rajkumar_hirani">
            <img class="castimgprop1"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Rajkumar_Hirani_2014.jpg/220px-Rajkumar_Hirani_2014.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Abhijat_joshi">
            <img class="castimgprop" src="https://starsunfolded.com/wp-content/uploads/2018/07/Abhijat-Joshi.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Vidhu_vinod_chopra">
            <img class="castimgprop"
                src="http://starsunfolded.com/wp-content/uploads/2017/02/Vidhu-Vinod-Chopra-profile.jpg" alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Ck_muraleedharan">
            <img class="castimgprop" src="https://i2.cinestaan.com/image-bank/1500-1500/64001-65000/64388.jpg" alt="">
        </a>


    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Rajkumar Hirani</h5>
        <h5 class="crewnameprop">Abhijat Joshi</h5>
        <h5 class="crewnameprop2">Vidhu Vinod</h5>
        <h5 class="crewnameprop">C K Muraleedharan</h5>
    </div>

</body>

</html>