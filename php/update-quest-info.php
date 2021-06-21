<?php

    session_name('user');
    session_start();

    $diff=$_POST['diff'];
    $quest=$_POST['quest'];
    $ans1=$_POST['ans1'];
    $ans2=$_POST['ans2'];
    $ans3=$_POST['ans3'];
    $ans4=$_POST['ans4'];
    $valid=$_POST['valid'];

    $con = mysqli_connect('localhost', 'root', '') or  die("Could not connect to the database");

    mysqli_select_db($con,"quiz");

    $prv_name_quest=$_SESSION['question'];

    $sql="UPDATE temp_questions SET question='".$quest."', ans1='".$ans1."',ans2='".$ans2."',ans3='".$ans3."',ans4='".$ans4."',diff='".$diff."',valid='".$valid."' WHERE question='".$prv_name_quest."'";

    echo $sql;
    mysqli_query($con,$sql);
    mysqli_close($con);
    header('location:../edit-quests.php');
//ayto einai gia to custom edit gia kathe xristi    
?>
