<?php

    $con = mysqli_connect("localhost","root","") or die("Doesnt connect with database");

    $username=$_GET['username'];

    mysqli_select_db($con,"karate");

    $sql ="SELECT * FROM users_quest WHERE username='$username'";

    if($result=mysqli_query($con,$sql)){
        for($i =0;$i<mysqli_num_rows($result);$i++){
            $row = mysqli_fetch_array($result);
            echo $row['difficulty'] .'^' .$row['score'].'^' .$row['date'] .'#';  //gia na jexwrisw meta sto js
        }
                
    }

    mysqli_close($con);
?>