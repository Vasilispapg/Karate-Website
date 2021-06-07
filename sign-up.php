<?php


    
    $user = $_POST['uname']; 
    $psw=$_POST['psw'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $bday=$_POST['birthday_day'];
    $bmonth=$_POST['birthday_month'];
    $byear=$_POST['birthday_year'];
    $sex=$_POST['sex'];

    $img=$_FILES['image']['name'];
    $target = "images/".basename($img);

    $con = mysqli_connect("localhost","root","");

    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
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
            $sql="INSERT INTO users (username,passwords,email,phone,bdate,sex,image,role)
            VALUES ('$user','$psw','$email','$phone','$bfull','$sex','$img','1')";
        
            mysqli_query($con,$sql);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
            }else{
                $msg = "Failed to upload image";
            }

            // echo "{$user},{$psw},{$email},{$phone},{$bfull},{$sex}";
            mysqli_close($con);
            include 'usrlogin.php'; //ektelei me tin mia to login
            header("location:index.php");
        }  
    }


?>