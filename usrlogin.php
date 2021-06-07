<?php 
$user=$_POST['uname'];
$pass=$_POST['psw'];

$con = mysqli_connect("localhost","root","");
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
else{
    mysqli_select_db($con,"karate");
    //einai case sensitive
    
    $user = stripslashes($user);
    $pass = stripslashes($pass);
    
    $user = mysqli_real_escape_string($con,$user);
    $pass = mysqli_real_escape_string($con,$pass);
    $sql="SELECT * FROM users WHERE username='".$user."' AND passwords='".$pass."'";
    $result = mysqli_query($con,$sql);
    
    if($result){
        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_array($result);
            session_start();
            $_SESSION["username"] = $user;
            $_SESSION['email']=$row['email'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['bdate']=$row['bdate'];
            $_SESSION['sex']=$row['sex'];
            $_SESSION['image']=$row['image'];
            $_SESSION['role']=$row['role'];
    
        }
    }
    
    header("location:index.php");
    
    mysqli_close($con);
}


?>