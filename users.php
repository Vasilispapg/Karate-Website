<?php
session_name('temp_user');

session_start();
session_unset();
session_destroy();
//katastrefw tous temp afoy twra tha allajei pali
session_name('user');
session_start();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>JKA Karate</title>
        <link rel="stylesheet" href="styles/users.css">
        <meta charset="UTF8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='scripts/fetch.js'></script>
    </head>

    <body onload='seeTheUsers()'>
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

        <div class="row" id='row'>
            <h2 class='col-12'>Διαχειριση Μελων</h2>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src='scripts/darkmode.js'></script>


    </html>