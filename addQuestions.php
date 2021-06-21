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
                        <div class='inside_form'>
                        <div class='question'>
                            <p>Ερώτηση</p><input class='ans' type='text' name='quest'>
                        </div>
                        <div class='apantisis'>
                        <p>απαντηση 1</p><input class='ans' type='text' name='ans1'>
                        <p>απαντηση 2</p><input class='ans' type='text' name='ans2'>
                        <p>απαντηση 3</p><input class='ans' type='text' name='ans3'>
                        <p>απαντηση 4</p><input class='ans' type='text' name='ans4'>
                        </div>
                        <p>Valid Question</p>
                        <select aria-label="valid" name="valid" class='valid' id="valid" title="valid">
                            <option class="option" value="1">1</option>
                            <option class="option" value="1">2</option>
                            <option class="option" value="1">3</option>
                            <option class="option" value="1">4</option>
                        </select>
                        <div class='dyskolia'>
                            Easy<input type='radio' name='diff' value='1' checked>
                            Medium<input type='radio'  value='2' name='diff'>
                            Hard<input type='radio'  value='3' name='diff'>
                        </div>
                        
                        <input type='submit'>

                        </div>

                    </form>
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <script src='scripts/darkmode.js'></script>

    </html>