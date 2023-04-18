<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy New Year</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="hny.css">
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
            src="https://c4.wallpaperflare.com/wallpaper/194/620/840/movies-bollywood-movies-wallpaper-preview.jpg"
            alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=JGHwANkQFrg">
                    <img class="trimg"
                        src="https://files.prokerala.com/movies/pics/800/happy-new-year-movie-poster-30132.jpg"
                        alt="Bang Bang trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Happy New Year
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
    $mname = 'Happy New Year';

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
            <h4 class="desc">"Happy New Year" is a Bollywood heist film directed by Farah Khan. This film follows a
                group of amateur dancers who plan to rob a diamond vault in Dubai. The group participates in a dance
                competition to gain access to the vault, but they face obstacles along the way.</h4>
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
            <a href="https://en.wikipedia.org/wiki/Vivaan_Shah" target="_blank">
                <img class="castimgprop"
                    src="https://images.hindustantimes.com/img/2022/04/05/1600x900/64a0b3ec-aa6c-11ec-9297-ed70bb26c8ff_1649145325581.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Abhishek_Bachchan" target="_blank">
                <img class="castimgprop" src="https://upload.wikimedia.org/wikipedia/commons/7/79/Abhishek_Bachchan.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Sonu_Sood" target="_blank">
                <img class="castimgprop" src="https://upload.wikimedia.org/wikipedia/commons/4/43/SonuSood.jpg" alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Shah Rukh Khan</h5>
        <h5 class="castnameprop">Deepika Padukone</h5>
        <h5 class="castnameprop">Abhishek Bachchan</h5>
        <h5 class="castnameprop2">Vivaan Shah</h5>
        <h5 class="castnameprop">Sonu Sood</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Farah_Khan" target="_blank">
            <img class="castimgprop1"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Farah_YOUWECAN.jpg/220px-Farah_YOUWECAN.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Gauri_Khan" target="_blank">
            <img class="castimgprop"
                src="https://image.khaleejtimes.com/?uuid=da1cceca-7824-5caf-8d8d-1026f046a75e&function=cropresize&type=preview&source=false&q=75&crop_w=0.99999&crop_h=0.375&width=1200&height=675&x=1.0E-5&y=0.00917"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Farah Khan</h5>
        <h5 class="crewnameprop">Gauri Khan</h5>
    </div>
   
</body>

</html>