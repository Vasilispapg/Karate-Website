<?php
    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");
    if (mysqli_connect_errno() || !$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else{
        
        mysqli_select_db($con,"karate");
        
        $sql="SELECT * FROM users";
        $result=mysqli_query($con,$sql);
        if($result)
            if(mysqli_num_rows($result)>0){
                for($i =0;$i<mysqli_num_rows($result);$i++){
                    $row = mysqli_fetch_array($result);
                    echo 'user'.$row['username'] .'role' .$row['role'];
                   
                }
            }        
        mysqli_close($con);
    }

//pairnw toys xristes gia na tous emfanisw sto edit-users
?>
