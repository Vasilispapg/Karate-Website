<?php
session_name('user');
session_start();

    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");
    mysqli_select_db($con,"quiz");

    $sql="SELECT question FROM temp_questions";
    $result=mysqli_query($con,$sql);

    if ($result=mysqli_query($con, $sql)){
        if(mysqli_num_rows($result)>0){
            for($i =0;$i<mysqli_num_rows($result);$i++){
                $row= mysqli_fetch_array($result);
           echo $row['question'] .'#' ;  //gia na jexwrisw meta sto js
            }
        }
    }

    mysqli_close($con);
?>