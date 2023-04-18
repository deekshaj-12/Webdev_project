<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uri:The Surgical Strike</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="uri.css">
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
        <img class="idiots" src="https://wallpapercave.com/wp/wp4569945.jpg" alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=VVY3do673Zc">
                    <img class="trimg"
                        src="https://content1.jdmagicbox.com/comp/jd_social/news/2019apr09/image-1554804146537768-o8pdblqp93.jpg?fit=around|210:308&crop=210:308;*,*"
                        alt="Uri: The Surgical Strike trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">Uri: The Surgical Strike
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
    $mname = 'URI';

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
            <h4 class="desc">Uri: The Surgical Strike is a 2019 Indian Hindi-language military action film written and
                directed by Aditya Dhar in his debut, and produced by Ronnie Screwvala under the banner of RSVP Movies.
                Divided over five chapters, the film chronicles the events of the surgical strike conducted by the
                Indian military against suspected militants in Pakistan occupied Kashmir</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Vicky_Kaushal">
                <img class="castimgprop1"
                    src="https://www.koimoi.com/wp-content/new-galleries/2022/12/vicky-kaushal-being-in-love-is-the-most-beautiful-feeling-in-the-world-01.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Yami_Gautam">
                <img class="castimgprop"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Yami_Gautam_launches_Max_Fashion%E2%80%99s_250th_store_%28cropped%29.jpg/220px-Yami_Gautam_launches_Max_Fashion%E2%80%99s_250th_store_%28cropped%29.jpg"
                    alt="">
            </a>
            <a href="https://hamariweb.com/profiles/images/profile/Mohit-Raina.jpg.jpg">
                <img class="castimgprop"
                    src="https://www.pinkvilla.com/files/styles/amp_metadata_content_image/public/mohit_raina_bday.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Kirti_Kulhari">
                <img class="castimgprop"
                    src="https://feeds.abplive.com/onecms/images/uploaded-images/2022/11/16/5553e7b040f6b58cefcd1c6d98ee0527de670.jpg?impolicy=abp_cdn&imwidth=650"
                    alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Vicly Kaushal</h5>
        <h5 class="castnameprop">Yami Gautam</h5>
        <h5 class="castnameprop">Mohit Raina</h5>
        <h5 class="castnameprop">Kriti Kulhari</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/Aditya_Dhar">
            <img class="castimgprop1"
                src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Aditya_Dhar_at_IFFI_2019_%28cropped%29.jpg"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/Shashwat_Sachdev">
            <img class="castimgprop"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtnRw-Y24kuozzx17yrMPkUYoQFcAW1to9hfMn4ihf3hLdTqRZITe9P0zh3soRHvdvp5g&usqp=CAU"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">Adithya Dhar</h5>
        <h5 class="crewnameprop">Shashwat Sachdev</h5>
    </div>
    
</body>

</html>