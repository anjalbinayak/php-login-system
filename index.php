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
<body>
<div class="container">
<div class="jumbotron">
<h2>Login </h2>

    <form action="index.php"  method="POST">
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
</div>
<div class="form-group">
<label for="pwd">Password</label>
<input type="password" placeholder="Enter Your Password" class="form-control" name="pwd" id="pwd">
</div>
<div class="form-group">
<button type="submit" name="login" class="btn btn-primary">Login</button>

    </form>
    <br><br>
    <small>Not yet Member <a href="signup.php">SignUp</a></small>
    </div>
    </div>
</body>
</html>