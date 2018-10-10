<?php
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body><div class="container">

<div class="jumbotron">
<h2>Signup/Register</h2>
    <form action="signup.php" method="POST">
<div class="form-group">
<label for="fname">First Name:</label>
<input type="text" placeholder="Enter Your First Name" class="form-control" id="fname" name="fname">
</div>
<div class="form-group">
<label for="lname">Last Name:</label>
<input type="text" placeholder="Enter your Last Name" class="form-control" id="lname" name="lname">
</div>

<div class="form-group">
<label for="email">Email:</label>
<input type="email" placeholder="Enter Your Email" class="form-control" id="email" name="email">
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" placeholder="Enter Your Password" class="form-control" id="pwd" name="pwd">
<small>Sensitive.Type Carefully</small>
</div>
<div class="form-group">
<button type="submit" name="register" class="btn btn-success">Register</button><br><br>
<small>Already Member? <a href="index.php">Login</a></small>



    </form>
    </div>
    </div>
</body>
</html>