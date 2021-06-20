<?php
session_name('user');
session_start();?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>JKA Karate</title>
        <link rel="stylesheet" href="styles/quiz.css">
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body onload='seeTheQuestions()'>
    <?php echo $_SESSION['diff'];?>
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
                    echo "<a class=\"pages\" href=\"login.php\">Login</a>";
                    echo "<a class=\"pages\" href=\"sign-up.html\">Sign Up</a>";
                }
                ?>
                <?php if (isset($_SESSION['username'])) {
                    echo "<a class=\"pages\"href=\"profile.php\">Profile</a>";
                    echo "<a class=\"pages\" href=\"php/logout.php\">Logout</a>";
                    if($_SESSION['role']==2){
                        echo "<a class=\"pages\" href=\"edit-quests.php\">Edit</a>";
                    }
                    else if($_SESSION['role']==3){
                        echo "<a class=\"pages\" href=\"users.php\">Users</a>";
                        echo "<a class=\"pages\" href=\"edit-quests.php\">Edit</a>";
                    }
                }
                ?>
            </nav>
            </div>

            <div class="row">
                <div class='background'>
                    <img src='media/background.jpg'>
                </div>
                <div class="qa_box col-4" id='qa_box'>
                    <div class="qa_header">
                        <span>Score: <span class='score' id='score'>0</span></span>
                        <span class="timer" id='timer'>20</span>
                    </div>
                    <div class='qa_body' id='qa_body'>
                    </div>
                    <div class="footer">
                        <span class='skip' id='skip'>Skip</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="scripts/quiz.js"></script>
    <script src="scripts/questions.js"></script>
    <script src="scripts/buttonsSelect.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src='scripts/darkmode.js'></script>

    </html>