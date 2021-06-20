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
                        <span class="timer" id='timer'>10</span>
                    </div>
                    <div class='qa_body'>
                        <div class='qa_quest active'>
                            <h4>1.Το Oi-Zuki ειναι:</h4>
                            <div class='qa_answer'>
                                <input type='radio' name='q1' valid='valid'>
                                <span>Επίθεση με το ίδιο πόδι χέρι</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q1'>
                                <span>Γυριστή Κλωτσιά</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q1'>
                                <span>Επίθεση με ανάποδο πόδι χέρι</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q1'>
                                <span>Τίποτα από τα παραπάνω</span>
                            </div>
                        </div>
                        <div class='qa_quest'>
                            <h4>2.Το Καράτε αναπτύχθηκε:</h4>
                            <div class='qa_answer'>
                                <input type='radio' name='q2'>
                                <span>Στο Τόκυο</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q2'>
                                <span>Στην Σπάρτη</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q2' valid='valid'>
                                <span>Στην Οκινάουα</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q2'>
                                <span>Στο Κιότο</span>
                            </div>
                        </div>
                        <div class='qa_quest'>
                            <h4>3.Το Te απο το (kara-te) σημαίνει</h4>
                            <div class='qa_answer'>
                                <input type='radio' name='q3'>
                                <span>Πόδι</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q3' valid='valid'>
                                <span>Χέρι</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q3'>
                                <span>Όπλο</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q3'>
                                <span>Ισορροπία</span>
                            </div>
                        </div>
                        <div class='qa_quest'>
                            <h4>4.Το Mawashi-Geri είναι</h4>
                            <div class='qa_answer'>
                                <input type='radio' name='q4'>
                                <span>Κλωτσιά στο κεφάλι</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q4'>
                                <span>Κλωτσιά στον αέρα</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q4' valid='valid'>
                                <span>Πλάγια κλωτσιά</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q4'>
                                <span>Κλωτσιά για άμυνα</span>
                            </div>
                        </div>
                        <div class='qa_quest'>
                            <h4>5.Το σύμβολο του Karate είναι:</h4>
                            <div class='qa_answer'>
                                <input type='radio' name='q5'>
                                <span>Ένας δράκος</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q5' valid='valid'>
                                <span>Μία τίγρης</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q5'>
                                <span>Η σημαία της Ιαπωνίας</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q5'>
                                <span>Ένας στρουθοκάμηλος</span>
                            </div>
                        </div>
                        <div class='qa_quest'>
                            <h4>6.Η Zengutsu-Dachi χρησιμοποιείται για:</h4>
                            <div class='qa_answer'>
                                <input type='radio' name='q6' valid='valid'>
                                <span>Ισορροπία &amp; εκγύμναση</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q6'>
                                <span>Να τρομάζουμε τον αντίπαλο</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q6'>
                                <span>Γιατί έτσι μας αρέσει</span>
                            </div>
                            <div class='qa_answer'>
                                <input type='radio' name='q6'>
                                <span>Τίποτα από τα παραπάνω</span>
                            </div>
                        </div>
                        <div class='qa_quest'>
                            <h4>Your total score <span id='totalscore'>0</span> out of 100</h4>
                        </div>
                    </div>
                    <div class="footer">
                        <span class='skip' id='skip'>Skip</span>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="scripts/quiz.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src='scripts/darkmode.js'></script>

    </html>