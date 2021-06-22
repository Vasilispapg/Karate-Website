<?php
session_name('user');
session_start();?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>JKA Karate</title>
        <link rel="stylesheet" href="styles/addQuestions.css">
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

        <body onload="display()">
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
                <div class='background'>
                        <img src='media/background.jpg'>
                    </div>
                <div class="row">

                    <form class='col-6' action="php\questions-goes-up.php" id='form' method="post">
                        <div class='inside_form' id='inside_form'>
                        <div class='dyskolia col-12' >
                            Πολλαπλης<input type='radio' id='type1' name='type' value='1' checked>
                            Σωστό/λάθος<input type='radio' id='type2' value='2' name='type'>
                            Συμπλήρωσης<input type='radio' id='type3' value='3' name='type'>
                        </div>
            
                    </form>
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <script src='scripts/darkmode.js'></script>
        <script src='scripts/show_the_type.js'></script>

    </html>