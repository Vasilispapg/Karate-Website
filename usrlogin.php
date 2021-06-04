<?php 
$user=$_POST['uname'];
$pass=$_POST['psw'];

$con = mysqli_connect("localhost","root","");
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
        echo "MPIKES";
        session_start();
        $_SESSION["username"] = $user;

    }
    else{
        echo "DEN";
    }
}

header("location:index.php");

mysqli_close($con);

?>