<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRR</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="rrr.css">
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
            src="https://i0.wp.com/www.eastmojo.com/wp-content/uploads/2022/03/Poster-for-RRR.png?fit=1920%2C1080&ssl=1"
            alt="">
        <div class="overlay">
            <p><a href="https://www.youtube.com/watch?v=f_vbAtFSEc0">
                    <img class="trimg"
                        src="https://www.telugubulletin.com/wp-content/uploads/2022/02/images-48-497x616.jpeg"
                        alt="Bang Bang trailer">
                    <button class="btn">Trailer</button>
                </a></p>
            <div>
                <p class="movietitle">RRR
                <div class="star">
                    <img class="starformat" src="Screenshot_2023-03-09_003054-removebg-preview.png" alt="">
                    <p class="rating">
                        9.5/10
                    </p>
                </div>
                </p>
                <div class="button">
                    <button class="button1">2D</button>
                    <button class="button2">Telugu</button>
                </div>
                <div>
                    <p class="details">2h | Action | Drama</p>
                </div>
                <div>
                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $mname = 'RRR';

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
            <h4 class="desc">RRR (which stands for Rise, Roar, Revolt) is an Indian Telugu-language period action
                drama movie. It is written and directed by S. S. Rajamouli. The film is a fictional story about two
                Indian revolutionaries, Alluri Sitarama Raju (Charan) and Komaram Bheem (Rama Rao), who fought against
                the British Raj and Nizam of Hyderabad respectively.</h4>
        </div>
        <h2 class="CCA">Cast</h2>
        <div class="castimg">
            <a href="https://en.wikipedia.org/wiki/Ram_Charan">
                <img class="castimgprop1"
                    src="data:image/jpeg;base64,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"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/N._T._Rama_Rao_Jr.">
                <img class="castimgprop"
                    src="https://m.media-amazon.com/images/M/MV5BMjI0NDQ2MTMzMF5BMl5BanBnXkFtZTgwMzc4MDA3NzE@._V1_FMjpg_UX1000_.jpg"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Alia_Bhatt">
                <img class="castimgprop"
                    src="data:image/jpeg;base64,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"
                    alt="">
            </a>
            <a href="https://en.wikipedia.org/wiki/Olivia_Morris">
                <img class="castimgprop"
                    src="https://fsb.zobj.net/crop.php?r=TggV5ygwSHEAqNcXPEnelXx-oXIv135UuyeL6jhI1cMSxvPwoTFvcYEZ7S_BgAdOFXs18Qz8CVK_PRGABZTgAKOUFMQtP0gsGm4OLZwFxh6cpysHStGiiy5Eunq0JPb62Z8Pxz1j_ULK26XCoFRBF2uSnfr_cT9Oqvj--5YCWvR97dbCeEphCbuDW1sQLLp1oZWWDfCIuI0uHiOh"
                    alt="">
            </a>
        </div>
    </div>
    </div>
    <div class="castname">
        <h5 class="castnameprop1">Ram Charan</h5>
        <h5 class="castnameprop">N T Rama Rao</h5>
        <h5 class="castnameprop">Alia Bhatt</h5>
        <h5 class="castnameprop">Olivia Morris</h5>
    </div>
    <h2 class="CCA">Crew</h2>
    <div class="castimg">
        <a href="https://en.wikipedia.org/wiki/S._S._Rajamouli">
            <img class="castimgprop1"
                src="https://gumlet.assettype.com/film-companion%2Fimport%2Fwp-content%2Fuploads%2F2022%2F03%2FFC-SS-rajamouli-lead-image-4-min.jpg?w=1200&auto=format%2Ccompress&ogImage=true&enlarge=true"
                alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/D._V._V._Danayya">
            <img class="castimgprop" src="https://upload.wikimedia.org/wikipedia/commons/b/b8/DVV_Danayya.jpg" alt="">
        </a>
        <a href="https://en.wikipedia.org/wiki/M._M._Keeravani">
            <img class="castimgprop"
                src="https://gumlet.assettype.com/swarajya%2F2023-01%2Ff2053977-9052-4c6c-80db-c58dbf3be235%2FCollage_Maker_11_Jan_2023_08_34_PM.jpg?q=75&auto=format%2Ccompress&w=1200"
                alt="">
        </a>
    </div>
    <div class="castname">
        <h5 class="crewnameprop1">S S Rajamouli</h5>
        <h5 class="crewnameprop">D V V Danayya</h5>
        <h5 class="crewnameprop">M M Keeravani</h5>
    </div>
   
</body>

</html>