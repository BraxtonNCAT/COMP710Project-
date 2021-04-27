<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "COVID_BUDDY";


// Create Connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}



        $Uname = $_POST['Uname'];
        $Password = $_POST['Password'];
     
        

        $sql = mysqli_query("SELECT * FROM `CB_Users` WHERE `regUname` LIKE '%$Uname%' AND `regPassword` LIKE '%$Password%'");

if (mysqli_num_rows($sql) > 0){
    header("Location: ./login-reg.php?Success");
    echo"<script>alert('Registration Successful!');</script>";
} else {
     echo"<script>alert('Login Failed! Try Again!');</script>";
    header("Location: ./login-reg.php?Fail");

}
?>