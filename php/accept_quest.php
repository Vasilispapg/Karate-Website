<?php

    $name_quest=$_GET['name_quest'];

    $con = mysqli_connect("localhost","root","") or die("Could not connect to the database");

    mysqli_select_db($con,"quiz");

    $sql="SELECT * FROM temp_questions WHERE question='".$name_quest."'";
    $result=mysqli_query($con,$sql);

    if ($result=mysqli_query($con, $sql)){
        if(mysqli_num_rows($result)>0){
           $row= mysqli_fetch_array($result);

        $quest=$row['question'];
        $diff=$row['diff'];
        $type=$row['type'];
        
        if($type==1){
            $valid=$row['valid'];
            $ans1=$row['ans1'];
            $ans2=$row['ans2'];
            $ans3=$row['ans3'];
            $ans4=$row['ans4'];
            $sql_insert="INSERT INTO questions (name,ans1,ans2,ans3,ans4,right_quest,difficult,type)
            VALUES ('$quest','$ans1','$ans2','$ans3','$ans4','$valid','$diff','$type')"; //vale to sto quiz
        }
        else if($type==3){
            $valid=$row['valid'];
            $sql_insert="INSERT INTO questions (name,ans1,ans2,ans3,ans4,right_quest,difficult,type)
            VALUES ('$quest','True','False','','','$valid','$diff','$type')"; //vale to sto quiz
        }
        else{
            $ans1=$row['ans1'];
             $sql_insert="INSERT INTO questions (name,ans1,ans2,ans3,ans4,right_quest,difficult,type)
            VALUES ('$quest','$ans1','','','','1','$diff','$type')"; //vale to sto quiz
        }
           
           mysqli_query($con,$sql_insert);

           $sql_delete = mysqli_query($con,"DELETE FROM temp_questions WHERE question='$name_quest'"); //svise to apo to temp

            mysqli_query($con,$sql_delete);
        }
    }

    mysqli_close($con);
    header("location:../edit-quests.php")
?>