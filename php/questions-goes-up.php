<?php
session_name('user');
session_start();

    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");

    $diff=$_POST['diff'];
    $quest=$_POST['quest'];
    $ans1=$_POST['ans1'];
    $ans2=$_POST['ans2'];
    $ans3=$_POST['ans3'];
    $ans4=$_POST['ans4'];
    $valid=$_POST['valid'];

    mysqli_select_db($con,"quiz");

    $sql="INSERT INTO temp_questions (question,ans1,ans2,ans3,ans4,diff,valid)
    VALUES ('$quest','$ans1','$ans2','$ans3','$ans4','$diff','$valid')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    header("location:../index.php")
?>