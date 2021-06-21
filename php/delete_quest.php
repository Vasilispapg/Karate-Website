<?php

$con = mysqli_connect("localhost","root","") or die("Doesnt connect with database");

$quest=$_GET['name_quest'];

mysqli_select_db($con,"quiz");

$sql = mysqli_query($con,"DELETE FROM temp_questions WHERE question='$quest'");

mysqli_query($con,$sql);

mysqli_close($con);
header('location:../edit-quests.php')
?>