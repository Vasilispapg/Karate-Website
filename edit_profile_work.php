<?php

    session_start();

    $phone=$_POST['tel'];
    $email=$_POST['email'];
    $bdate=$_POST['bdate'];
    $sex=$_POST['sex'];
    $psw = $_POST['psw'];
    $username=$_SESSION['username'];

    $img=$_FILES['image']['name'];
    $target = "images/".basename($img);

    $con = mysqli_connect('localhost', 'root', '');

    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        mysqli_select_db($con,"karate");

        if ($_FILES["image"]["size"] > 50000000) {
          echo "Sorry, your file is too large.";
      }

        if(!empty($img)){
          $sql="UPDATE users SET image='".$img."' ";
          if (mysqli_query($con, $sql))
            $_SESSION['image']=$img;
        }//image

        if (empty($psw)) {
            $sql="UPDATE users SET email='".$email."',phone='".$phone."',
            bdate='".$bdate."',sex='".$sex."' WHERE username='".$username."'"; 
        }
        else{
            $sql="UPDATE users SET passwords='".$psw."',email='".$email."',phone='".$phone."',
            bdate='".$bdate."',sex='".$sex."' WHERE username='".$username."'"; 
        }
        
        if (mysqli_query($con, $sql)) {
            echo "Record updated successfully";
            $_SESSION['email']=$email;
            $_SESSION['phone']=$phone;
            $_SESSION['bdate']=$bdate;
            $_SESSION['sex']=$sex;
            //akoma dn evala na allazei profile sto edit
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    
        mysqli_close($con);
        header('location:profile.php');
    }
    
?>