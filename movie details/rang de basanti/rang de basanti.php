<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rang De Basanti</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="rdb.css">
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
            src="https://www.thenewsminute.com/sites/default/files/styles/slideshow_image_size/public/Rang-de-Basanti_1200.jpg?itok=yIQGjeTb"
            alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=QHhnhqxB4E8" target="_blank">
                    <img class="trimg"
                        src="https://m.media-amazon.com/images/M/MV5BYThmZDA0YmQtMWJhNy00MDQwLTk0Y2YtMDhmZTE5ZjhlNjliXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg"
                        alt="Bang Bang trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Rang De Basanti
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
                    <p class="details">2h | Comedy | Drama</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = 'Rang De Basanti';

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
            <h4 class="desc">DJ, Aslam, Sukhi and the spendthrift Karan, who is the son of political well-connected
                businessman Rajnath Singhania, are at once carefree and cynical about their futures. While they get
                along well with Sue, they remain uninterested in working on a film expressing patriotism towards India..
            </h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Aamir_Khan" target="_blank">
                <img class="castimgprop1" src="https://cdn.britannica.com/25/162425-050-B767198B/Aamir-Khan.jpg" alt="">
            </a>
            <a href="hhttps://en.wikipedia.org/wiki/Siddharth_(actor)" target="_blank">
                <img class="castimgprop"
                    src="data:image/jpeg;base64,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"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Sharman_Joshi" target="_blank">
                <img class="castimgprop"
                    src="https://assets-in.bmscdn.com/iedb/artist/images/website/poster/large/sharman-joshi-2113-13-09-2017-03-49-45.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Kunal_Kapoor_(actor,_born_1977)" target="_blank">
                <img class="castimgprop"
                    src="https://m.media-amazon.com/images/M/MV5BODU5N2FmZGUtN2E0NS00NjY0LWE1ZTQtMDlkMmM3OGYyY2Y5XkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/R._Madhavan" target="_blank">
                <img class="castimgprop" src="https://static.toiimg.com/photo/58944567.cms" alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Aamir Khan</h5>
        <h5 class="castnameprop">Siddharth</h5>
        <h5 class="castnameprop">Sharman Joshi</h5>
        <h5 class="castnameprop">Kunal Kapoor</h5>
        <h5 class="castnameprop">R Madhavan</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Rakeysh_Omprakash_Mehra">
            <img class="castimgprop1"
                src="https://images.hindustantimes.com/img/2022/11/21/550x309/_85a60708-ce11-11e8-9909-7a4552f8c093_1669002952067_1669002952067.JPG"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Ronnie_Screwvala">
            <img class="castimgprop"
                src="https://static01.nyt.com/images/2016/12/31/world/xxSCREWVALA/xxSCREWVALA-videoSixteenByNineJumbo1600.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/A._R._Rahman">
            <img class="castimgprop"
                src="https://static.toiimg.com/thumb/msid-96791556,imgsize-790707,width-400,resizemode-4/96791556.jpg"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Rakeysh Mehra</h5>
        <h5 class="crewnameprop">Ronnie Screwvala</h5>
        <h5 class="crewnameprop">A R Rahman</h5>
    </div>
   
</body>

</html>