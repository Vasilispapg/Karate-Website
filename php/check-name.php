<?php

    $user = $_GET['user'];
   

    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");
    if (mysqli_connect_errno() || !$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        
        mysqli_select_db($con,"karate");
        
        $sql="SELECT username FROM users WHERE username='".$user."'";
        $result=mysqli_query($con,$sql);
        if($result)
            if(mysqli_num_rows($result)>0)
                echo "This name already exists";
                
        mysqli_close($con);
    }


?>