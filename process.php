<?php
// connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "cinebuzz1";
$con = mysqli_connect($host, $user, $password, $dbname);
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

// get the search term from the URL query string
$searchTerm = $_GET['term'];

// prepare SQL query
$sql = "SELECT movie_name FROM search_results WHERE movie_name LIKE '%".$searchTerm."%'";

// execute the query
$result = mysqli_query($con, $sql);

// format results as JSON
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
	$data[] = $row['movie_name'];
}
echo json_encode($data);

// close database connection
mysqli_close($con);
?>
