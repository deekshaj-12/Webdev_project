<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

</body>
<h1>Welcome To CINEBUZZ <?php echo $_SESSION['user_name']; ?></h1>
     <a href="session/session.php">Continue
     </a>
</body>

</html>

<?php 
}

else{
     header("Location: login.php");
     exit();
}
 ?>