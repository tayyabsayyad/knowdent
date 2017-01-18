<?php
include("database.php");

$query="select * from register";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
$count++;

$f_name=$_POST['fname'];
$l_name=$_POST['lname'];
$gender=$_POST['radio1'];
$age=$_POST['option1'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO users VALUES('$count','$f_name','$l_name','$gender','$age','$email','$password')";
mysqli_query($con,$query);

header("location: login.php?r=1");

?>

