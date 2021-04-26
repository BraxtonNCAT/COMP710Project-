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



        $checkEmail = $_POST['checkEmail'];
        $checkPassword = $_POST['checkPassword'];
        $checkAddress = $_POST['checkAddress'];
        $checkAddress2 = $_POST['checkAddress2'];
        $checkCity = $_POST['checkCity'];
        $checkZip = $_POST['checkZip'];
        $checkCCH = $_POST['checkCCH'];
        $checkCCN = $_POST['checkCCN'];
        

        $sql = "INSERT INTO `Checkout` (`checkID`, `checkEmail`, `checkPassword`, `checkAddress`, `checkAddress2`, `checkCity`, `checkZip`, `checkCCH`, `checkCCN`) VALUES (NULL, '$checkEmail', '$checkPassword', '$checkAddress', '$checkAddress2', '$checkCity', '$checkZip', '$checkCCH', '$checkCCN')";

if ($conn->query($sql) === TRUE){
    header("Location: ./checkout_complete.html?Success");
    echo"<script>alert('Doggo Adopted!');</script>";
} else {
    echo"ERROR: " . $sql . "<br>" . $conn->error;
}
?>