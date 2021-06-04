<?php

    $email = $_GET['email'];
   

    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");
    if (mysqli_connect_errno() || !$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        mysqli_select_db($con,"karate");
        $sql="SELECT email FROM users WHERE email='".$email."'";
        $result=mysqli_query($con,$sql);
        if($result){
            if(mysqli_num_rows($result)>0){
                echo "This email already exists";
            }
        }
        mysqli_close($con);
    }


?>