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

    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'cinebuzz1');
		// Check if the connection was successful
		if (!$conn) {
			die('Connection failed: ' . mysqli_connect_error());
		}

        $sql = "SELECT * FROM temp_ticket WHERE mname IS NOT NULL AND tname IS NOT NULL AND stime IS NOT NULL";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
        }
        echo "<div class='intro'>";
        $sql3="SELECT movie_url FROM search_results s,temp_ticket t WHERE s.movie_name=t.mname ";
			$result3 = mysqli_query($conn, $sql3);
			if(mysqli_num_rows($result3) > 0) { // If a record is found
				$row3 = mysqli_fetch_assoc($result3); // Get the row as an associative array
				$movie_url = $row3['movie_url']; // Get the image URL from the row
				echo "<img class='img' src='$row3[movie_url]'>"; // Display the image
			} 
            echo "<div class='overlay'>";
                echo"<p><a href='https://www.youtube.com/watch?v=QHhnhqxB4E8' target='_blank'>";
                $sql3="SELECT movie_url FROM search_results s,temp_ticket t WHERE s.movie_name=t.mname ";
			$result3 = mysqli_query($conn, $sql3);
			if(mysqli_num_rows($result3) > 0) { // If a record is found
				$row3 = mysqli_fetch_assoc($result3); // Get the row as an associative array
				$movie_url = $row3['movie_url']; // Get the image URL from the row
				echo "<img class='img' src='$row3[movie_url]'>"; // Display the image
			} 
            echo"<button class='btn'>Trailer</button>";
                echo"</a></p>";

            echo "<div>"; 
                echo"<p class='movietitle'>";
                $sql3="SELECT mname FROM temp_ticket";
                echo "<p class='movietitle'>".$row['mname'].'</p>';
                echo "<p class='movietitle'>";
                echo"<div class='star'>";
                echo "<img class='starformat' src='Screenshot_2023-03-09_003054-removebg-preview.png' alt=''>";
                echo '<p class="rating">9.5/10</p>';
            echo"</div></p>";

            echo '<div class="button">';
                echo'<button class="button1">2D</button>';
                echo'<button class="button2">Hindi</button>';
            echo "</div>";

            echo'<div>';
                echo'<p class="details">2h | Comedy | Drama</p>';
            echo "</div>";
            echo "<div>";

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) 
            {
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
            }
            echo'<form method="POST"><button type="submit" name="submit" value="Submit" class="cbtn">BOOK NOW</button></form>';
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo"<div>";
                echo'<h2 class="CCA">About</h2>';
                echo'<h4 class="desc"'.$row["deets"].'</h4>';
            echo "</div>";
            echo'<h2 class="CCA">Cast</h2>';
            echo'<div class="castimg">';
            echo"<a src='$row[cast_link_1]'>";
            echo "<img src='$row[cast_1]'";
            echo "</a>";
            echo"<a src='$row[cast_link_2]'>";
            echo "<img src='$row[cast_2]'";
            echo "</a>";
            echo"<a src='$row[cast_link_3]'>";
            echo "<img src='$row[cast_3]'";
            echo "</a>";
            echo"<a src='$row[cast_link_4]'>";
            echo "<img src='$row[cast_4]'";
            echo "</a>";
            echo'</div>';
            echo'</div>';
            echo "<div class='castname'";
                echo "<h5>"; 
                    echo "$row[cast_name_1]";
                echo "</h5>";
                echo "<h5>"; 
                    echo "$row[cast_name_2]";
                echo "</h5>";
                echo "<h5>"; 
                    echo "$row[cast_name_3]";
                echo "</h5>";
                echo "<h5>"; 
                    echo "$row[cast_name_4]";
                echo "</h5>";
    ?>