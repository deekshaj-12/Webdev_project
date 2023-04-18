<?php 

session_start();

session_unset();
session_destroy();

echo "logged out successfully";
header("Location: \cinebuzz\cinebuzz.php ");