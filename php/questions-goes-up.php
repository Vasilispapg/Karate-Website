<?php
session_name('user');
session_start();

    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");

    $type=$_POST['type'];
    $diff=$_POST['diff'];
    $quest=$_POST['quest'];
 
    mysqli_select_db($con,"quiz");

    if($type==1){
        $ans1=$_POST['ans1'];
        $ans2=$_POST['ans2'];
        $ans3=$_POST['ans3'];
        $ans4=$_POST['ans4'];  
        $valid=$_POST['valid'];
        $sql="SELECT * FROM temp_questions WHERE ans1= '".$user."' ";
        $sql="INSERT INTO temp_questions (question,ans1,ans2,ans3,ans4,diff,valid,type)
        VALUES ('$quest','$ans1','$ans2','$ans3','$ans4','$diff','$valid','1')";
    }
    else if($type==2){
        $valid=$_POST['valid'];
        $sql="INSERT INTO temp_questions (question,ans1,ans2,ans3,ans4,diff,valid,type)
        VALUES ('$quest','True','False','','','$diff','$valid','3')"; //3 swsto lathos
    }
    else{
        $text=$_POST['textarea'];
        $sql="INSERT INTO temp_questions (question,ans1,ans2,ans3,ans4,diff,valid,type)
        VALUES ('$quest','$text','','','','$diff','','2')"; //2 pollaplis
    }

    mysqli_query($con,$sql);
    mysqli_close($con);
    header("location:../index.php")
?>