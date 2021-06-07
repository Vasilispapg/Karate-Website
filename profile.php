<?php
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>JKA Karate</title>
    <link rel="stylesheet" href="styles/profile.css">
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>

<body>
    <div class="container">
        <div class="header">
            <div id="logo">
                <a href="index.php"><img class="logo" src="media\logo.png"></a>
            </div>
            <?php
            if(isset($_SESSION['role'])&&$_SESSION['role']==3){
               echo" <hr style=\"width:75%;\" >";
            }
            else{
               echo "<hr>";
            }
            ?>
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
                    if($_SESSION['role']==2){
                        echo "<a class=\"pages\" href=\"logout.php\">Edit</a>";
                    }
                    else if($_SESSION['role']==3){
                        echo "<a class=\"pages\" href=\"logout.php\">Users</a>";
                        echo "<a class=\"pages\" href=\"logout.php\">Edit</a>";
                    }
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
                        echo "<img src='images/"; echo $_SESSION['image']; echo"'";echo " alt='profile' class='col-6 profiles' id='profile' name='profile'>";
                    ?>
                </div>
                <span class="col-6 info">
                    <p class='infos' id='username' name='username'>User: <?php echo $_SESSION['username']?></p>
                    <p class='infos' id='bdate' name='bdate'>Bdate: <?php echo $_SESSION['bdate']?></p>
                    <p class='infos' id='email' name='email'>Email: <?php echo $_SESSION['email']?></p>
                    <p class='infos' id='phone' name='phone'>Phone: <?php echo $_SESSION['phone']?></p>
                    <p class='infos' id='sex' name='sex'>Gender: 
                        <?php 
                        if($_SESSION['sex']=='F') echo "Female";
                        else if($_SESSION['sex']=='M') echo "Male";
                        else echo "Not Specific";?></p>
                </span>
                <div class='col-12 edits'>
                <a href="edit_profile.php">
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