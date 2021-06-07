<?php
  session_start();
?>

<?php
    $user = $_POST['username']; 
    $phone=$_POST['tel'];
    $email=$_POST['email'];
    $bdate=$_POST['bdate'];
    $sex=$_POST['sex'];
    $psw = $_POST['psw'];
    $username=$_SESSION['username'];

    $con = mysqli_connect('localhost', 'root', '');

    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        mysqli_select_db($con,"karate");

        if (empty($psw)) {
            $sql="UPDATE users SET username='".$user."',email='".$email."',phone='".$phone."',
            bdate='".$bdate."',sex='".$sex."' WHERE image='Photo.png'"; 
        }
        else{
            $sql="UPDATE users SET username='".$user."',passwords='".$psw."',email='".$email."',phone='".$phone."',
            bdate='".$bdate."',sex='".$sex."' WHERE username='".$username."'"; 
        }
        
        if (mysqli_query($con, $sql)) {
            echo "Record updated successfully";
            $_SESSION["username"] = $user;
            $_SESSION['email']=$email;
            $_SESSION['phone']=$phone;
            $_SESSION['bdate']=$bdate;
            $_SESSION['sex']=$sex;
            // $_SESSION['image']=$image;
            //akoma dn evala na allazei profile sto edit
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
    
        mysqli_close($con);
        header('location:profile.php');
    }
    
?>