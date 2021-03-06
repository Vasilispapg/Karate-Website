<?php
session_name('user');
session_start();
?>

<!DOCTYPE html>
    <html>

    <head>
        <title>JKA Karate</title>
        <link rel="stylesheet" href="styles/index.css">
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
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
                        <?php 
                            if (isset($_SESSION['username'])) {
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
                    <div class="mainIntro">
                        <h1 class="col-12 mainTitle">JKA Karate</h1>
                        <h4 class="col-12 name" id='one'></h4>
                    </div>
                    <video class="videos" autoplay preload="auto" muted loop>
                    <source src="media\video\intro_vi.mp4" type="video/mp4">
                </video>
                    <a href="more.php" class="col-1 more_link button">Learn More</a>
                    <span class="introduction">
                    <p class="aboutme col-4">Καλώς ήρθατε στην σελίδα μου, ονομάζομαι Βασίλειος Σάββας Παπαγρηγορίου 1 Dan J.K.A., απο την σχολη Rhodes Shotokan Karate. Ξεκίνησα την πορία με το
                        JKA Karate από το 2012, ενώ παλιότερα εξασκούσα για 6 χρόνια την τέχνη Brazilian ju-jichu.<br>
                        Ακολουθόντας τα βήματα του sensei Νίκο Αφεντούλη, 6 Dan J.K.A./W.F. και του Ιάπωνα Shihan Kazuhiro Sawada 7o Dan J.K.A.<br>
                        Έχοντας συμμετάσχει σε πάνω απο 50 αγώνες kumite (αγώνα με αντίπαλο) &amp; katas (μορφές), και έχοντας αποκτήσει δεκάδες κύππελα και μετάλια αποφάσισα να αφιερώσω
                        την σελίδα, στον τρόπο όπου κάποιος θα μπορεί να γνωρίσει το JKA Karate και να ξεκινήσει την δική του πορία σε αυτό. 
                    </p>
                    <div class="col-6 sensei">
                        <img class="sensei" src="media\index\index_photo1.jpg">
                        <p>(Sensei Ν.Αφεντούλης 6 Dan JKA)</p>
                    </div>
                </span>
                    <div class="media">
                        <img class="col-4 photo1" src="media\index\mainPhoto.jpeg">
                        <img class="col-4 photo2" src="media\index\index_photo2.jpg">
                        <img class="col-4 photo3" src="media\index\index_photo3.jpg">
                    </div>
                </div>
            </div>
        </body>
        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <script src='scripts/darkmode.js'></script>
        <script src='scripts/index.js'></script>
        <script>
        ityped.init(document.getElementById('one'),{
            showCursor:true,
            strings:['Βασίλης Παπαγρηγορίου','Ξένια Μότση']
        })
        
        </script>

    </html>