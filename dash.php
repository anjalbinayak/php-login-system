<?php
include 'server.php'; //database connection
$userEmail = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email ='$userEmail'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['fname']; ?></title>
</head>
<body>
    <div class="container">
<div class="jumbotron">

<p>You are logged in <b><?php echo $row['fname']. " ". $row['lname']; ?> </b><a href="logout.php">Logout</a></p>

</div>


    </div>
</body>
</html>