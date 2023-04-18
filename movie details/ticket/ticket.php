<!DOCTYPE html>
<html>
<head>
	<title>Movie Ticket</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-image: url('/cinebuzz/login/session/images/bg.jpg');
			margin: 0;
			padding: 0;
		}
		.container {
			margin: 20px auto;
			width: 500px;
			border: 1px solid #ccc;
			padding: 20px;
			background-image: linear-gradient(to top left, rgb(49, 75, 79), #56797a, rgba(0, 0, 0, 0.152));
		}
		h1 {
			text-align: center;
			font-size: 28px;
		}
		h2 {
			font-size: 24px;
			margin-top: 20px;
		}
		p {
			font-size: 18px;
			margin-top: 10px;
		}

		.space{
			margin: 60px;
		}
		.your-class-name {
  color: red;
}

.style-two {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}

.img{
	margin: 0px;
	height: 200px;
	width: 150px;
	float: right;
	margin-bottom: 0px;
	margin-right:60px ;
}

.qr{
	height: 150px;
	width: 150px;
	float: right;
	margin-top: 0px;
	margin-right: 57px;
}

.btn{
	padding:10px;
	color:white;
	background-color: #3f99a0;
	width: 100%;
	height: 10%;
	font-size: larger;
	border:0px;
	border-radius: 5px;
}

	</style>
</head>
<body>
	<div class="container">
		<h1>CINEBUZZ</h1>
		<div class=details>
		<?php
		// Connect to the database
		$conn = mysqli_connect('localhost', 'root', '', 'cinebuzz1');
		// Check if the connection was successful
		if (!$conn) {
			die('Connection failed: ' . mysqli_connect_error());
		}
		// Retrieve movie ticket information from the database
		$sql = "SELECT * FROM temp_ticket WHERE mname IS NOT NULL AND tname IS NOT NULL AND stime IS NOT NULL";
		$sql2="SELECT * FROM users u , temp_ticket t WHERE u.user_name = t.user_name";
		$result = mysqli_query($conn, $sql);
		$result2=mysqli_query($conn,$sql2);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			echo "<div>";
			echo "<div>";
			$sql3="SELECT movie_url FROM search_results s,temp_ticket t WHERE s.movie_name=t.mname ";
			$result3 = mysqli_query($conn, $sql3);
			if(mysqli_num_rows($result3) > 0) { // If a record is found
				$row3 = mysqli_fetch_assoc($result3); // Get the row as an associative array
				$movie_url = $row3['movie_url']; // Get the image URL from the row
				echo "<img class='img' src='$row3[movie_url]'>"; // Display the image
			} 
			
			echo "</div>";
			
			echo '<h3>'.$row['mname'].'</h3>';
			echo '<p>'.$row['tname'].'</p>';
			echo '<p>Date: '.$row['s_date'].'</p>';
			echo '<p>Show Time: '.$row['stime'].'</p>';
			echo '<p>Seat Selected: '.$row['seat'].'</p>';
			echo '<p>Total Amount: Rs. '.$row['total_price'].'</p>';
			echo "</div>";
			
			echo "</div>";
			
		} else {
			echo '<p>No movie ticket information found.</p>';
		}
		echo "<span class='space'></span>";

		if (mysqli_num_rows($result2) > 0) {
			$row1 = mysqli_fetch_assoc($result2);
			echo "<div>";
			echo "<div>";
			echo "<img class='qr' src='qr.webp'";
			echo "</div>";
			echo '<p>Name: '.$row1['user_name'].'</p>';
			echo '<p>Phone Number: '.$row1['phone'].'</p>';
			echo '<p>email id: '.$row1['email'].'</p>';
			echo "</div>";
			
			echo "</div>";
		} else {
			echo '<p>No movie ticket information found.</p>';
		}

		mysqli_close($conn);
	?>
	
		<button class="btn" onclick="window.location.href = 'payment/payment.php'">Proceed to Payment</button>
		</div>
	</div>
</body>
</html>
