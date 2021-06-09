<?php
session_name('temp_user');
session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <title>JKA Karate</title>
    <link rel="stylesheet" href="styles/profile.css">
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>

<body>
    <div class="container">
        <div class="header">
            <div id="logo">
                <a href="index.php"><img class="logo" src="media\logo.png"></a>
            </div>
            <hr style="width:75%;">
            <nav id="pages">
                <a class="pages" href="basics.php">Basics</a>
                <a class="pages" href="more.php">More</a>
                <a class="pages" href="quiz_start.php">Quiz</a>
                <a class="pages"href="profile.php">Profile</a>
                <a class="pages" href="php/logout.php">Logout</a>
                <a class="pages" href="users.php">Users</a>
                <a class="pages" href="edit-quests.php">Edit</a>

            </nav>
        </div>
        <div class="row">
            
            <div class='col-6 profile'>
            <p class='col-1 role' id='role' name='role'><?php if($_SESSION['role']==1)echo"User";
                                                            else if($_SESSION['role']==2)echo"Moderator";
                                                            else echo "Admin";
                                                        ?>
            </p>
               
            <span class="col-6 info">
                <?php 
                    echo "<form action='php/edit_info_user.php' method='post' enctype=\"multipart/form-data\" >";
                    
                    echo "<div class='col-4 profile_picture_edit'> <img src='images/"; echo $_SESSION['image'];echo "' alt='profile' class='col-6 profiles' id='profile' name='profile'> ";  
                       
                    echo"<div class='image'>
                    <input type='file' name='image' class='file' id='file'></input>
                    <label for='file' onclick='uploadFile();' id='label_name'>Choose a file...</label>
                    </div></div>";
                    echo "<p class='infos' id='username' name='username'>User:";echo $_SESSION['username'];echo "</p>";
                    echo " <input type='password' class='infos' id='psw' name='psw' placeholder='Password:' value='";echo "'</input>"; 
                    echo " <input type='text' class='infos' id='bdate' name='bdate' placeholder='Bdate:' value='"; echo $_SESSION['bdate'];echo "'</input>";
                     echo " <input type='email' class='infos' id='email' onkeyup=\"changeEmail();\" name='email' placeholder='Email:' value='"; echo $_SESSION['email'];echo "'</input>";
                     echo " <input type='tel' class='infos' id='tel' pattern=\"69[0-9]{8}\" name='tel' placeholder='Phone:' value='"; echo $_SESSION['phone'];echo "'</input>";
                    //GIA NA YPARXOYN DEFAULT OI TIMES NA MIN ALLAZEI KATALATHOS  
                      if($_SESSION['sex']=='F'){
                        echo "<input type=\"radio\" class='infos' name=\"sex\" value=\"F\" checked><label>Γυναίκα</label>
                        <input type=\"radio\" class='infos' name=\"sex\" value=\"M\"><label>Άντρας</label>
                        <input type=\"radio\" class='infos' name=\"sex\" value=\"E\"><label>Κάτι άλλο</label><br>";
                      }
                      else if($_SESSION['sex']=='M'){
                        echo "<input type=\"radio\" class='infos' name=\"sex\" value=\"F\"><label>Γυναίκα</label>
                        <input type=\"radio\" class='infos' name=\"sex\" value=\"M\"checked ><label>Άντρας</label>
                        <input type=\"radio\" class='infos' name=\"sex\" value=\"E\"><label>Κάτι άλλο</label><br>";
                      }
                      else{
                        echo "<input type=\"radio\" class='infos' name=\"sex\" value=\"F\"><label>Γυναίκα</label>
                        <input type=\"radio\" class='infos' name=\"sex\" value=\"M\"><label>Άντρας</label>
                        <input type=\"radio\" class='infos' name=\"sex\" value=\"E\"checked ><label>Κάτι άλλο</label><br>";
                      }

                    if($_SESSION['role']==1){
                        echo "<input type=\"radio\" class='infos' name=\"role\" value=\"1\" checked><label>Member</label>
                        <input type=\"radio\" class='infos' name=\"role\" value=\"2\"><label>Moderator</label>
                        <input type=\"radio\" class='infos' name=\"role\" value=\"3\"><label>Admin</label>";
                    }
                    else if($_SESSION['role']==2){
                        echo "<input type=\"radio\" class='infos' name=\"role\" value=\"1\" checked><label>Member</label>
                        <input type=\"radio\" class='infos' name=\"role\" value=\"2\" checked><label>Moderator</label>
                        <input type=\"radio\" class='infos' name=\"role\" value=\"3\"><label>Admin</label>";
                    }
                    else{
                        echo "<input type=\"radio\" class='infos' name=\"role\" value=\"1\" checked><label>Member</label>
                        <input type=\"radio\" class='infos' name=\"role\" value=\"2\"><label>Moderator</label>
                        <input type=\"radio\" class='infos' name=\"role\" value=\"3\"checked><label>Admin</label> ";
                    }
                      //GIA NA YPARXOYN DEFAULT OI TIMES NA MIN ALLAZEI KATALATHOS  
                    echo "<input type='submit' class='infos'> </form>" ;
                ?>
            </span>
                <div class='col-12 edits'>
                <a href="profile.php">
                <img src='media/edit.png' alt='edit' class='edit-img' id='edit-img'>
                </a>
                <p id='erroremail' class='error'></p>
            </div> 
        </div> 
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src='scripts/darkmode.js'></script>
<script src='scripts/Checkers.js'></script>
<script src='scripts/upload_file.js'></script>

</html>
