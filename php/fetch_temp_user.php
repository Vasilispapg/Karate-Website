<?php

    session_name("temp_user");
    session_start();
    $username=$_GET['username'];

    $con = mysqli_connect('localhost', 'root', '') or  die("Could not connect to the database");

    mysqli_select_db($con,"karate");

    $sql="SELECT * FROM users WHERE username='".$username."'";

    if ($result=mysqli_query($con, $sql)){
        if(mysqli_num_rows($result)>0){
           $row= mysqli_fetch_array($result);

           $_SESSION["username"] = $username;
           $_SESSION['email']=$row['email'];
           $_SESSION['phone']=$row['phone'];
           $_SESSION['bdate']=$row['bdate'];
           $_SESSION['sex']=$row['sex'];
           $_SESSION['image']=$row['image'];
           $_SESSION['role']=$row['role'];
           $_SESSION['temp']=1; //an yparxei o temp tote jerw sto edit_profile_working_on oti einai user kai oxi o xristis poy einai syndemenos
        }
    }
    mysqli_close($con);
    header('location:../edit-users.php');
//ayto einai gia to custom edit gia kathe xristi    
?>
