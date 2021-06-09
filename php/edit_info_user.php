<?php
    session_name('temp_user');
    session_start();
    //mpainw se ayto to session

    $con = mysqli_connect('localhost', 'root', '') or  die("Connection failed: " . mysqli_connect_error());
    mysqli_select_db($con,"karate");
    $username=$_SESSION['username'];
//pairnw tis time se periptwsi poy yparxei

    if(!isset($_SESSION['temp'])){
        session_unset();
        session_destroy();
        session_name('user');
        session_start();
        //an dn yparxei to temp ara dn yparxei to session to diagrafw ayto poy eftiaja panw kai mpainw sto user poy stin oysia einai to profile
    }
    else{
        //alliws allazw to role toy alloy
        $role= $_POST['role'];
        $sql="UPDATE users SET role=$role WHERE username='".$username."'";
        mysqli_query($con,$sql);
    }
    //vale na allazei kai to role

    $phone=$_POST['tel'];
    $email=$_POST['email'];
    $bdate=$_POST['bdate'];
    $sex=$_POST['sex'];
    $psw = $_POST['psw'];
    


    $img=$_FILES['image']['name'];
    $target = "../images/".basename($img);

        if ($_FILES["image"]["size"] > 50000000) {
          echo "Sorry, your file is too large.";
      }

        if(!empty($img)){
          $sql="UPDATE users SET image='".$img."' WHERE username='".$username."'";
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

        if(isset($_SESSION['temp']))
            header('location:..\users.php');
        else
            header('location:..\profile.php');
    
?>