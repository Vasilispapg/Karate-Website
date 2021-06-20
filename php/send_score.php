<?php
session_name('user');
session_start();

    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");

    $user = $_SESSION['username']; 
    $diff=$_GET['diff'];
    $score=$_GET['score'];
    $date=$_GET['date'];

    mysqli_select_db($con,"karate");

    $sql="INSERT INTO users_quest (username,difficulty,score,date)
    VALUES ('$user','$diff','$score','$date')";
    mysqli_query($con,$sql);
    mysqli_close($con);
?>