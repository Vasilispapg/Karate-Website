<?php
    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");
    if (mysqli_connect_errno() || !$con){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{


        mysqli_select_db($con,"quiz");
        
        $sql="SELECT * FROM questions";
        $result=mysqli_query($con,$sql);
        if($result)
            for($i =0;$i<mysqli_num_rows($result);$i++){
                $row = mysqli_fetch_array($result);
                echo 'questions'.$row['name'] .'ans1' .$row['ans1'].'ans2' .$row['ans2'].'ans3' .$row['ans3'].'ans4' .$row['ans4'] ;  
            }
                   
        mysqli_close($con);
    }

?>