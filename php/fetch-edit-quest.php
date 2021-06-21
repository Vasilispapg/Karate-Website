<?php
session_name('user');
session_start();

    $name_quest=$_GET['quest'];
    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");
    mysqli_select_db($con,"quiz");

    $sql="SELECT * FROM temp_questions WHERE question='".$name_quest."'";
    $result=mysqli_query($con,$sql);

    if ($result=mysqli_query($con, $sql)){

        if(mysqli_num_rows($result)>0){
           $row= mysqli_fetch_array($result);
          
           $_SESSION['question']=$row['question'];
           $_SESSION['ans1']=$row['ans1'];
           $_SESSION['ans2']=$row['ans2'];
           $_SESSION['ans3']=$row['ans3'];
           $_SESSION['ans4']=$row['ans4'];
           $_SESSION['diff']=$row['diff'];
           $_SESSION['valid']=$row['valid'];

        }
    }

    mysqli_close($con);
    header("location:../editing-quests.php")
?>