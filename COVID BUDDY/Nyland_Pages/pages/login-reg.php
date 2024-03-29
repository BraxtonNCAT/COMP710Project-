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
?><html lang="en">

<head>
    <title>Covid Buddies - User Registration</title>
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
                        <h1 style="text-align:center; padding-top: 1.8rem;">Login</h1>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col">
                                    <div class="" style="margin-top: 3.5rem">
                                        <form action="login_verify.php" method="post">
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" placeholder="Enter Username" name="Uname" required>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="psw">Password</label>
                                                    <input type="password" class="form-control" placeholder="Enter Password" name="Password" required>
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                            </div>
                                            <br>
                                            <div class="form-row">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col">
                                                        </div>
                                                        <div class="col text-center">
                                                            <button type="submit" class="btn btn-primary" name="report-submit" style="display: table; margin: 0 auto;">Submit</button> 
                                                        </div>
                                                        <div class="col">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <h5 style="text-align:center; padding-top: 1.8rem;"> Don't have an account? Sign Up <a class="btn btn-link" href="registration.php" style="font-size: 1.3rem">Here</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <br>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 right-box login-img">
                        <h5 style=" color:antiquewhite; text-align:center; padding-top: 1rem; font-size: 3rem"><b>Welcome To Covid Buddy</b></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
