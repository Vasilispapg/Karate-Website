<?php

    $user = $_GET['user'];

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo "problem";
    }
    else{
        // Check file size
        mysqli_select_db($con,"karate");
        $sql="SELECT username FROM users WHERE username= '".$user"'";
        $result=mysqli_query($con,$sql);
        num_results=mysqli_num_rows($result);
        if(num==0){
            $check=1;
        }
        else{
            $check=0;
        }

        
        //echo "{$user},{$psw},{$email},{$phone},{$bfull},{$sex}";
        mysqli_close($con);
    }


?>