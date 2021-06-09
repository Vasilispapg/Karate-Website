<?php

$con = mysqli_connect("localhost","root","") or die("Doesnt connect with database");

$username=$_GET['username'];

mysqli_select_db($con,"karate");

$sql = mysqli_query($con,"DELETE FROM users WHERE username='$username'");

mysqli_query($con,$sql);

mysqli_close($con);
header('location:../users.php')
?>