<?php

    $user = $_POST['uname']; 
    $psw=$_POST['psw'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $bday=$_POST['birthday_day'];
    $bmonth=$_POST['birthday_month'];
    $byear=$_POST['birthday_year'];
    $sex=$_POST['sex'];
    // $img=$_FILES['image'];

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        echo "problem";
    }
    else{
        // Check file size
        if ($_FILES["image"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
        }
        if($bday==0 || $bmonth==0 || $byear==0){
            header("location:sign-up-error.html");
            mysqli_close($con);
        }
        else{
            $bfull="{$bday}-{$bmonth}-{$byear}";

            mysqli_select_db($con,"karate");
            $sql="INSERT INTO users (username,passwords,email,phone,bdate,sex)
            VALUES ('$user','$psw','$email','$phone','$bfull','$sex')";
            //VALUES ('$user','$psw','$email','$phone','$bfull','$sex','$img')");
        
            mysqli_query($con,$sql);
            
            // echo "{$user},{$psw},{$email},{$phone},{$bfull},{$sex}";
            mysqli_close($con);
            header("location:index.html");
        }  
    }


?>