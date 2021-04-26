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
    <title>Covid Buddies - Check Out</title>
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
                        <h1 style="text-align:center; padding-top: 1.8rem;">Adopt A Buddy Check Out</h1>
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="col">
                                    <div class="" style="margin-top: 3.5rem">
                                        <form action="checkout_add.php" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4" name="checkEmail" placeholder="Email" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword4" name="checkPassword" placeholder="Password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" class="form-control" id="inputAddress" name="checkAddress" placeholder="1234 Main St" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress2">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress2" name="checkAddress2" placeholder="Apartment, studio, or floor">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" name="checkCity" id="inputCity" required>
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
                                                    <input type="text" class="form-control" name="checkZip" id="inputZip" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="creditcardnum">Credit Card Holder Name</label>
                                                    <input type="text" class="form-control" id="creditcardnumber" name="checkCCH" placeholder="Credit Card Holder Name" required>
                                                </div>
                                                <label for="creditcardnum">Credit Card Number</label>
                                                <input type="text" class="form-control" id="creditcardnumber" name="checkCCN" placeholder="Credit Card Number" required>
                                            </div>
                                            <div class="form-row">

                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            <button type="submit" class="btn btn-primary" name="report-submit" style="display: table; margin: 0 auto;">Submit</button> 
                                                        </div>
                                                        <div class="col-sm-3">
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
                    <div class="col-8 right-box">
                        <h1 style="text-align:center; padding-top: 1.8rem; font-size: 5rem">Welcome</h1>
                        <div class="container">
                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-3"></div>
                                        <div class="col-6"><img src="../images/pup_bisky.jpg" class="mx-auto d-block" style="border-radius: 10rem; height: 18rem; width: 18rem;"></div>
                                        <div class="col-3"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align:center; font-weight: 700; color: #333; font-family: sans-serif; font-size: 3.5rem">Asopt Bisky</div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align:center; font-size: 2rem">Age: 1 - 2 Months</div>
                                    </div>
                                    <div class="row" style="text-align:center;">
                                        <div class="col" style="text-align:center; font-size: 2rem">Breed: Golden Retreiver</div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align:center; font-size: 2rem">Nature: Timid</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>