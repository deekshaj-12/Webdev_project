<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shows</title>
    <link rel="icon" type="image/png" href="android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="show.css">
</head>

<body>
    <!-- <script src="cinebuzz.js" type="text/javascript"></script> -->
    <div class="background">
        <div class="doodles">
    <div class="movietitle">
        <h1 class="title">
        <?php
// establish database connection
            $conn = mysqli_connect("localhost", "root", "", "cinebuzz1");

// execute query
            $result = mysqli_query($conn, "SELECT mname FROM temp_ticket");
// retrieve data
            $product = mysqli_fetch_assoc($result);
// display data
            echo "<h1>" . $product['mname'] . "</h1>";
        ?>
        </h1>
        
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['date'])) {
    
    $sdate=$_POST['date'];
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'cinebuzz1');
    // Check if the connection was successful
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Insert the movie name into the temp_ticket table
    $sql = "UPDATE temp_ticket SET s_date='$sdate' WHERE mname IS NOT NULL;";
    $result=mysqli_query($conn, $sql);
    mysqli_close($conn);
}
?>
    <div class="dates">
        <form method="post" action="show.php">
        <button class="buttonB button4" type="submit" value="31st March" name="date">
            <h3>FRI</h3>
            <p>
                <h1>31</h1>
            </p>
            <p>
                <h3>MAR</h3>
            </p>
        </button>
        <button class="buttonB button4" type="submit" value="1st April" name="date">
            <h3>SAT</h3>
            <p>
                <h1>1</h1>
            </p>
            <p>
                <h3>APR</h3>
            </p>
        </button>
        <button class="buttonB button4" type="submit" value="2nd April" name="date">
            <h3>SUN</h3>
            <p>
                <h1>2</h1>
            </p>
            <p>
                <h3>APR</h3>
            </p>
        </button>
        </form>
    </div>
    <div class="theatrelist">
        <div class="legend">
            
            <div class="theatres">
                <ul>
                    <li>
                      <div class="theatre">
                        <h3>MANTRI SQUARE, Malleshwaram</h3>
                        <div class="showtimes1">

                        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Get the movie name from the form
    $tname = 'Mantri Mall, Malleshwaram';
    $stime=$_POST['submit'];
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'cinebuzz1');

    // Check if the connection was successful
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Insert the movie name into the temp_ticket table
    $sql = "UPDATE temp_ticket SET tname='$tname', stime='$stime' WHERE mname IS NOT NULL and seat=null;";
    $result=mysqli_query($conn, $sql);
    header("Location: /cinebuzz/login/session/movie details/theatres/theatre.php");
    mysqli_close($conn);
    exit;
}
?>
<form method="POST" action="show.php">
<button class="green" name="submit" type="submit" value="10:00am">10:00am</button>
<button class="green" name="submit" type="submit" value="2:00pm">2:00pm</button>
</form>
                          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="theatre">
                      <?php ob_start(); ?>
<h3>CENTRAL, JP NAGAR</h3>
<div class="showtimes2">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit1'])) {
    // Get the movie name from the form
    $tname = 'CENTRAL, JP NAGAR';
    $stime=$_POST['submit1'];
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'cinebuzz1');

    // Check if the connection was successful
    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Insert the movie name into the temp_ticket table
    $sql = "UPDATE temp_ticket SET tname='$tname', stime='$stime' WHERE mname IS NOT NULL;";
    $result=mysqli_query($conn, $sql);
    mysqli_close($conn);

    // Redirect to the desired page using JavaScript
    echo '<script>window.location.href = "/cinebuzz/login/session/movie details/theatres/theatre.php";</script>';
    exit;
}
?>
<form method="POST">
<button class="green" name="submit1" type="submit" value="10:00am">10:00am</button>
<button class="green" name="submit1" type="submit" value="2:00pm">2:00pm</button>
</form>
</div>
</div>
</li>
<li>
<div class="theatre">
    <h3>LULU Mall</h3>
    <div class="showtimes3">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sub'])) {
        // Get the movie name from the form
        $tname = 'LULU Mall';
        $stime=$_POST['sub'];
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'cinebuzz1');

        // Check if the connection was successful
        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }

        // Insert the movie name into the temp_ticket table
        $sql = "UPDATE temp_ticket SET tname='$tname', stime='$stime' WHERE mname IS NOT NULL;";
        $result=mysqli_query($conn, $sql);
        mysqli_close($conn);

        // Redirect to the desired page using JavaScript
        echo '<script>window.location.href = "/cinebuzz/login/session/movie details/theatres/theatre.php";</script>';
        exit;
    }
    ?>
    <form method="POST">
    <button class="green" name="sub" type="submit" value="10:00am">10:00am</button>
<button class="green" name="sub" type="submit" value="2:00pm">2:00pm</button>



                        </div>
                      </div>
                    </li>
                  </ul>
            </div>   

        </div>

    </div>
    </div>
    </div>
</body>
</html>
