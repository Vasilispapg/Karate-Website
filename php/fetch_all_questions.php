<?php

    $diff=$_GET['diff'];
    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");
    if (mysqli_connect_errno() || !$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
        mysqli_select_db($con,"quiz");
        $sql="SELECT * FROM questions WHERE difficult='".$diff."'";
        $result=mysqli_query($con,$sql);
        if($result)
            for($i =0;$i<mysqli_num_rows($result);$i++){
                $row = mysqli_fetch_array($result);
                echo $row['name'] .'^' .$row['ans1'].'^' .$row['ans2'].'^' .$row['ans3'].'^' .$row['ans4'] .'^' .$row['right_quest'] .'^' .$row['difficult']  .'#' ;  //gia na jexwrisw meta sto js
            }
                   
        mysqli_close($con);
    }

?>
