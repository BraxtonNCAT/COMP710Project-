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
?>
<html lang="en">

<head>
    <title>Covid Buddies - Register</title>
    <link rel="stylesheet" href="../style/style.css">

    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="body-block">
    <div class="container-fluid main-box">
        <div class="col">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 left-box">
                        <h1 style="text-align:center; padding-top: 1.8rem;">Create an Account</h1>
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col">
                                    <div class="" style="margin-top: 3.5rem">
                                        <form action="reg_add.php" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="regEmail" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="regPassword" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Username</label>
                                                <input type="text" class="form-control" id="username" placeholder="Username" name="regUname" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="regAddress" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="regAddress2">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" id="inputCity" name="regCity" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState">State</label>
                                                    <select id="inputState" class="form-control">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="inputZip">Zip</label>
                                                    <input type="text" class="form-control" id="inputZip" name="regZip" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">Adoptee or Shelter?</label>
                                                <select id="inputState" class="form-control" name="regType">
                                                    <option selected>Choose...</option>
                                                    <option>Adoptee</option>
                                                    <option>Shelter</option>
                                                </select>
                                            </div>
                                            <div class="form-row">

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-3">
                                                        </div>
                                                        <div class="col-6 text-center">
                                                            <button type="submit" class="btn btn-primary container-fluid" name="report-submit" style="display: table; margin: 0 auto;">Register</button> 
                                                        </div>
                                                        <div class="col-3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <hr>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 right-box login-img">
                        <h5 style=" color:darkgoldenrod; text-align:center; padding-top: 1rem; font-size: 3rem"><b>Let's Find Some Homes</b></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
