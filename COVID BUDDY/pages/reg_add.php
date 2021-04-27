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



        $regEmail = $_POST['regEmail'];
        $regPassword = $_POST['regPassword'];
        $regUname = $_POST['regUname'];
        $regAddress = $_POST['regAddress'];
        $regAddress2 = $_POST['regAddress2'];
        $regCity = $_POST['regCity'];
        $regZip = $_POST['regZip'];
        $regType = $_POST['regType'];
        

        $sql = "INSERT INTO `CB_Users` (`regEmail`, `regPassword`, `regUname`, `regAddress`, `regAddress2`, `regCity`, `regZip`, `regID`) VALUES ('$regEmail', '$regPassword', '$regUname', '$regAddress', '$regAddress2', '$regCity', '$regZip', NULL)";

if ($conn->query($sql) === TRUE){
    header("Location: ../index.html?Success");
    echo"<script>alert('Registration Successful!');</script>";
} else {
    echo"ERROR: " . $sql . "<br>" . $conn->error;
}
?>