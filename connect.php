<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $conn= mysqli_connect("localhost", "root", "", "cinebuzz1") or die("Connection Failed:" .mysqli_connect_error()); 
        
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["password"]));
        {
        $name =$_POST["name"];
        $email =$_POST["email"];
        $phone =$_POST["phone"];
        $password =$_POST["password"];

        $sql = "INSERT INTO `users` (`user_name`,`email`,`phone`,`password`) VALUES('$name','$email','$phone','$password') ";

        $query = mysqli_query($conn,$sql);
        if($query){
            echo "entry successful";

            $query = "INSERT INTO temp_ticket (user_name) VALUES ('$name')";
            $result1=mysqli_query($conn,$query);

            header("Location: \cinebuzz\login\session\session.php");
        }

        else{
            echo "unsuccessful";
        }

        }
    }
    ?>


