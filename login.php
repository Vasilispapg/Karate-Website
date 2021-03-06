<?php
session_name('user');
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>JKA Karate</title>
    <link rel="stylesheet" href="styles/login.css">
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

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
                <a class="pages" href="login.php">Login</a>
                <a class="pages" href="sign-up.html">Sign Up</a>
            </nav>
        </div>
        <div class="background">
            <img src='media/background.jpg' style="isolation:isolate;">
        </div>
        <div class="row col-12">
            <form class="form col-4" action="php\usrlogin.php" method="post">
                <div class="container_welcome col-8">
                    <p class="welcome_text">Welcome back!</p>
                    <p class="login_text">Login your account</p>
                </div>
                <div class="form_container col-12">
                    <span class="username ">
                            <input type="text" placeholder="Enter Username" name="uname" id='uname' required>
                        </span>
                    <span class="passw">
                            <input type="password" placeholder="Enter Password" name="psw" id='psw' required>
                        </span>
                    <span class='login col-12'>
                            <input type="submit">
                            <label>
                        </span>
                    <span class="cancel_forgot">
                            <span class="psw"><a class='psw' href="#">Ξεχάσατε τον κωδικό σας?</a></span>
                    </span>
                </div>
            </form>
            <?php 
                    if(isset($_SESSION['error']) && $_SESSION['error']==1)
                        echo"<p style='margin-top:-2%; color:red;'>Something wrong happen</p>";
                    ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src='scripts/darkmode.js'></script>

</html>