<?php
session_start();
$conn = mysqli_connect("localhost","root","","you");
$fname="";
$lname="";
$pwd="";
$email = "";



if(isset($_POST['register'])){
$fname= $_POST['fname'];
$lname=$_POST['lname'];
$pwd=$_POST['pwd'];
$email =$_POST['email'];


if(empty($fname) || empty($lname) || empty($pwd) || empty($email)){

    header("LOCATION: signup.php?err=1");

}
else{
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn,$sql);
$resultcheck= mysqli_num_rows($result);
if($resultcheck > 0){
    header("LOCATION: signup.php?err=2");

}
if($resultcheck == 0){
$sql = "INSERT INTO users(fname,lname,email,pwd) values ('$fname','$lname','$email','$pwd')";
$result = mysqli_query($conn,$sql);
if($result)
{
    header("LOCATION: dash.php"); //signup successfull
    $_SESSION['email'] = $email;
}
}

}



}


if(isset($_POST['login'])){
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($conn,$sql);
$check = mysqli_fetch_assoc($result);
if($check['pwd'] == $pwd){
    $_SESSION['email'] = $email;
    header("LOCATION: dash.php");
}
else{
    header("LOCATION: index.php?err=3");
}



}




?>