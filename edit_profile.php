<?php
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>JKA Karate</title>
    <link rel="stylesheet" href="styles/profile.css">
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" </head>

<body>
    <div class="container">
        <div class="header">
            <div id="logo">
                <a href="index.php"><img class="logo" src="media\logo.png"></a>
            </div>
            <hr>
            <nav id="pages">
                <a class="pages" href="basics.php">Basics</a>
                <a class="pages" href="more.php">More</a>
                <a class="pages" href="quiz_start.php">Quiz</a>
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a class=\"pages\" href=\"login.html\">Login</a>";
                    echo "<a class=\"pages\" href=\"sign-up.html\">Sign Up</a>";
                }
                ?>
                <?php if (isset($_SESSION['username'])) {
                    echo "<a class=\"pages\"href=\"profile.php\">Profile</a>";
                    echo "<a class=\"pages\" href=\"logout.php\">Logout</a>";
                }
                ?>
            </nav>
        </div>
        <div class="row">
            
            <div class='col-6 profile'>
            <p class='col-1 role' id='role' name='role'><?php if($_SESSION['role']==1)echo"User";
                                                            else if($_SESSION['role']==2)echo"Moderator";
                                                            else echo "Admin";
                                                            ?></p>
                <div class='col-4 profile_picture'>
                    <?php
                        echo "<img src='images/"; echo $_SESSION['image'];echo "' alt='profile' class='col-6 profiles' id='profile' name='profile'>";
                        echo "<p>Change your profile</p><input type='file' name='image' class='file' id='file'>
                        <label for='file' class='file' onclick='uploadFile();' id='label_name'>Choose a file...</label>";
                    ?>
                </div>
                <span class="col-6 info">
                <?php 
                    echo "<form action='edit.php' method='post'>";
                    echo "<p class='infos' id='username' name='username'>User:";echo $_SESSION['username'];echo "</p>";
                    echo " <input type='password' class='infos' id='psw' name='psw' placeholder='Password:' value='";echo "'</input>"; 
                    echo " <input type='text' class='infos' id='bdate' name='bdate' placeholder='Bdate:' value='"; echo $_SESSION['bdate'];echo "'</input>";
                     echo " <input type='email' class='infos' id='email' name='email' placeholder='Email:' value='"; echo $_SESSION['email'];echo "'</input>";
                     echo " <input type='tel' class='infos' id='tel' name='tel' placeholder='Phone:' value='"; echo $_SESSION['phone'];echo "'</input>";
                      echo  "<input type=\"radio\" class='infos' name=\"sex\" value=\"F\" checked><label>Γυναίκα</label>
                        <input type=\"radio\" class='infos' name=\"sex\" value=\"M\"><label>Άντρας</label>
                        <input type=\"radio\" class='infos' name=\"sex\" value=\"E\"><label>Κάτι άλλο</label>"
                        ;
                      echo "<input type='submit' class='infos'> </form>"  ?>
                </span>
                <div class='col-12 edits'>
                <a href="profile.php">
                <img src='media/edit.png' alt='edit' class='edit-img' id='edit-img'>
                </a>
            </div> 
        </div>
        <div class='profile_quiz'>
            <ul class="col-10 responsive-table">
                <li class="table-header">
                <div class="kati col_1">Date</div>
                <div class="kati col_2">&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;Time</div>
                <div class="kati col_3">Difficulty</div>
                <div class="kati col_4">Score</div>
                </li>
                <li class="table-row">
                <div class="kati col_1" data-label="Date: ">26-05-2019</div>
                <div class="kati col_2" data-label="Time: ">17:23</div>
                <div class="kati col_3" data-label="Difficulty: ">Medium</div>
                <div class="kati col_4" data-label="Score: ">90/100</div>
                </li>
                <li class="table-row">
                <div class="kati col_1" data-label="Date: ">26-05-2019</div>
                <div class="kati col_2" data-label="Time: ">17:23</div>
                <div class="kati col_3" data-label="Difficulty: ">Medium</div>
                <div class="kati col_4" data-label="Score: ">90/100</div>
                </li>
                <li class="table-row">
                <div class="kati col_1" data-label="Date: ">26-05-2019</div>
                <div class="kati col_2" data-label="Time: ">17:23</div>
                <div class="kati col_3" data-label="Difficulty: ">Medium</div>
                <div class="kati col_4" data-label="Score: ">90/100</div>
                </li>
                <li class="table-row">
                <div class="kati col_1" data-label="Date: ">26-05-2019</div>
                <div class="kati col_2" data-label="Time: ">17:23</div>
                <div class="kati col_3" data-label="Difficulty: ">Medium</div>
                <div class="kati col_4" data-label="Score: ">90/100</div>
                </li>
                <li class="table-row">
                <div class="kati col_1" data-label="Date: ">26-05-2019</div>
                <div class="kati col_2" data-label="Time: ">17:23</div>
                <div class="kati col_3" data-label="Difficulty: ">Medium</div>
                <div class="kati col_4" data-label="Score: ">90/100</div>
                </li>
                
            </ul>
        </div>
               
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src='scripts/darkmode.js'></script>

</html>
